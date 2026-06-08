<?php
/**
 * API 헬퍼 함수 모음
 * 실시간 금융 데이터 조회
 */

// ======================== 설정 ========================
define('FINNHUB_API_KEY', getenv('FINNHUB_API_KEY') ?: 'demo'); // 환경변수 또는 'demo'
define('FINNHUB_BASE_URL', 'https://finnhub.io/api/v1');
define('DART_API_KEY', getenv('DART_API_KEY') ?: null);
define('DART_BASE_URL', 'https://opendart.fss.or.kr/api');
define('KRX_STOCK_SYMBOL', 'SAMJIN.KS'); // 삼진엘앤디 KRX 심볼
define('DART_COMPANY_CODE', '00413682'); // 삼진엘앤디 고유번호
define('API_CACHE_DIR', __DIR__ . '/../.cache');
define('API_CACHE_TTL', 300); // 5분 (주가)
define('DART_CACHE_TTL', 86400); // 24시간 (재무정보)

// 캐시 디렉토리 생성
if (!is_dir(API_CACHE_DIR)) {
    @mkdir(API_CACHE_DIR, 0755, true);
}

// ======================== 캐싱 함수 ========================
/**
 * 캐시에서 데이터 가져오기
 */
function get_cached_data($cache_key) {
    $cache_file = API_CACHE_DIR . '/' . md5($cache_key) . '.cache';

    if (file_exists($cache_file)) {
        $data = unserialize(file_get_contents($cache_file));
        $timestamp = $data['timestamp'] ?? 0;

        // TTL 확인
        if (time() - $timestamp < API_CACHE_TTL) {
            return $data['value'];
        }
    }

    return null;
}

/**
 * 데이터를 캐시에 저장
 */
function set_cached_data($cache_key, $value) {
    $cache_file = API_CACHE_DIR . '/' . md5($cache_key) . '.cache';
    $data = [
        'timestamp' => time(),
        'value' => $value
    ];

    @file_put_contents($cache_file, serialize($data));
}

// ======================== Finnhub API 함수 ========================
/**
 * Finnhub에서 실시간 주가 정보 조회
 * @param string $symbol 주식 심볼 (예: SAMJIN.KS)
 * @return array 주가 데이터
 */
function get_stock_quote($symbol = KRX_STOCK_SYMBOL) {
    $cache_key = "stock_quote_{$symbol}";

    // 캐시 확인
    $cached = get_cached_data($cache_key);
    if ($cached !== null) {
        return $cached;
    }

    try {
        $url = FINNHUB_BASE_URL . "/quote?symbol={$symbol}&token=" . FINNHUB_API_KEY;
        $response = file_get_contents($url, false, stream_context_create([
            'http' => [
                'timeout' => 5,
                'method' => 'GET'
            ]
        ]));

        if ($response === false) {
            return null;
        }

        $data = json_decode($response, true);

        if (!empty($data)) {
            set_cached_data($cache_key, $data);
            return $data;
        }
    } catch (Exception $e) {
        error_log("Stock API error: " . $e->getMessage());
    }

    return null;
}

/**
 * Finnhub에서 회사 프로필 조회
 * @param string $symbol 주식 심볼
 * @return array 회사 정보
 */
function get_company_profile($symbol = KRX_STOCK_SYMBOL) {
    $cache_key = "company_profile_{$symbol}";

    // 캐시 확인 (24시간)
    $cached = get_cached_data($cache_key);
    if ($cached !== null) {
        return $cached;
    }

    try {
        $url = FINNHUB_BASE_URL . "/stock/profile2?symbol={$symbol}&token=" . FINNHUB_API_KEY;
        $response = file_get_contents($url, false, stream_context_create([
            'http' => [
                'timeout' => 5,
                'method' => 'GET'
            ]
        ]));

        if ($response === false) {
            return null;
        }

        $data = json_decode($response, true);

        if (!empty($data)) {
            set_cached_data($cache_key, $data);
            return $data;
        }
    } catch (Exception $e) {
        error_log("Company profile API error: " . $e->getMessage());
    }

    return null;
}

/**
 * Finnhub에서 기본 재무 정보 조회
 * @param string $symbol 주식 심볼
 * @return array 재무 지표
 */
function get_stock_metrics($symbol = KRX_STOCK_SYMBOL) {
    $cache_key = "stock_metrics_{$symbol}";

    // 캐시 확인
    $cached = get_cached_data($cache_key);
    if ($cached !== null) {
        return $cached;
    }

    try {
        $url = FINNHUB_BASE_URL . "/stock/metric?symbol={$symbol}&metric=all&token=" . FINNHUB_API_KEY;
        $response = file_get_contents($url, false, stream_context_create([
            'http' => [
                'timeout' => 5,
                'method' => 'GET'
            ]
        ]));

        if ($response === false) {
            return null;
        }

        $data = json_decode($response, true);

        if (!empty($data)) {
            set_cached_data($cache_key, $data);
            return $data;
        }
    } catch (Exception $e) {
        error_log("Stock metrics API error: " . $e->getMessage());
    }

    return null;
}

// ======================== 데이터 병합 함수 ========================
/**
 * 실시간 API + Mock 데이터 병합
 * @param string $symbol 주식 심볼
 * @param array $mock_data 기본 목업 데이터
 * @return array 병합된 데이터
 */
function get_merged_stock_data($symbol = KRX_STOCK_SYMBOL, $mock_data = []) {
    $api_quote = get_stock_quote($symbol);
    $api_metrics = get_stock_metrics($symbol);

    // API 데이터가 있으면 사용, 없으면 mock 데이터 반환
    if ($api_quote && !empty($api_quote)) {
        $current_price = $api_quote['c'] ?? $mock_data['stock_price'] ?? 1041;
        $previous_close = $api_quote['pc'] ?? $mock_data['previous_price'] ?? 1063;
        $change = $current_price - $previous_close;
        $change_percent = $previous_close > 0 ? ($change / $previous_close * 100) : 0;

        return [
            'stock_price' => (int)$current_price,
            'price_change' => (int)$change,
            'change_percent' => round($change_percent, 2),
            'high' => $api_quote['h'] ?? null,
            'low' => $api_quote['l'] ?? null,
            'open' => $api_quote['o'] ?? null,
            'volume' => $api_quote['v'] ?? null,
            'timestamp' => date('Y-m-d H:i:s'),
            'source' => 'finnhub_api',
            'api_data' => $api_quote
        ];
    }

    // API 실패 시 mock 데이터 반환
    return array_merge([
        'timestamp' => date('Y-m-d H:i:s'),
        'source' => 'mock_data'
    ], $mock_data);
}

// ======================== DART API 함수 ========================
/**
 * DART에서 재무정보 조회 (최근 5년)
 * @param string $company_code 회사 고유번호
 * @return array 재무정보
 */
function get_dart_financial_statements($company_code = DART_COMPANY_CODE) {
    if (!DART_API_KEY) {
        return null;
    }

    $cache_key = "dart_financial_{$company_code}";
    $cached = get_cached_data($cache_key);
    if ($cached !== null) {
        return $cached;
    }

    try {
        // DART 재무정보 API
        $url = DART_BASE_URL . "/fnlttMultiAcnt.json?" . http_build_query([
            'crtfc_key' => DART_API_KEY,
            'corp_code' => $company_code,
            'reprt_code' => '11012', // 연간보고서
            'fs_div' => 'OFS' // 개별재무제표
        ]);

        $response = file_get_contents($url, false, stream_context_create([
            'http' => ['timeout' => 5, 'method' => 'GET']
        ]));

        if ($response === false) {
            return null;
        }

        $data = json_decode($response, true);

        if (!empty($data) && $data['status'] === '000') {
            set_cached_data($cache_key, $data, DART_CACHE_TTL);
            return $data['list'];
        }
    } catch (Exception $e) {
        error_log("DART API error: " . $e->getMessage());
    }

    return null;
}

/**
 * DART에서 배당정보 조회
 * @param string $company_code 회사 고유번호
 * @return array 배당정보
 */
function get_dart_dividend_info($company_code = DART_COMPANY_CODE) {
    if (!DART_API_KEY) {
        return null;
    }

    $cache_key = "dart_dividend_{$company_code}";
    $cached = get_cached_data($cache_key);
    if ($cached !== null) {
        return $cached;
    }

    try {
        // DART 배당정보 API
        $url = DART_BASE_URL . "/dividendPerShare.json?" . http_build_query([
            'crtfc_key' => DART_API_KEY,
            'corp_code' => $company_code
        ]);

        $response = file_get_contents($url, false, stream_context_create([
            'http' => ['timeout' => 5, 'method' => 'GET']
        ]));

        if ($response === false) {
            return null;
        }

        $data = json_decode($response, true);

        if (!empty($data) && $data['status'] === '000') {
            set_cached_data($cache_key, $data, DART_CACHE_TTL);
            return $data['list'];
        }
    } catch (Exception $e) {
        error_log("DART Dividend API error: " . $e->getMessage());
    }

    return null;
}

/**
 * DART 최신 공시 조회
 * @param string $company_code 회사 고유번호
 * @param int $limit 조회 건수
 * @return array 공시정보
 */
function get_dart_disclosures($company_code = DART_COMPANY_CODE, $limit = 5) {
    if (!DART_API_KEY) {
        return null;
    }

    $cache_key = "dart_disclosures_{$company_code}";
    $cached = get_cached_data($cache_key);
    if ($cached !== null) {
        return $cached;
    }

    try {
        $url = DART_BASE_URL . "/list.json?" . http_build_query([
            'crtfc_key' => DART_API_KEY,
            'corp_code' => $company_code,
            'page_count' => $limit
        ]);

        $response = file_get_contents($url, false, stream_context_create([
            'http' => ['timeout' => 5, 'method' => 'GET']
        ]));

        if ($response === false) {
            return null;
        }

        $data = json_decode($response, true);

        if (!empty($data) && $data['status'] === '000') {
            set_cached_data($cache_key, $data, DART_CACHE_TTL);
            return $data['list'];
        }
    } catch (Exception $e) {
        error_log("DART Disclosure API error: " . $e->getMessage());
    }

    return null;
}

// ======================== 유틸리티 함수 ========================
/**
 * 캐시에서 데이터 가져오기 (TTL 지정 가능)
 */
function get_cached_data($cache_key, $custom_ttl = null) {
    $cache_file = API_CACHE_DIR . '/' . md5($cache_key) . '.cache';

    if (file_exists($cache_file)) {
        $data = unserialize(file_get_contents($cache_file));
        $timestamp = $data['timestamp'] ?? 0;
        $ttl = $data['ttl'] ?? API_CACHE_TTL;

        // TTL 확인
        if (time() - $timestamp < $ttl) {
            return $data['value'];
        }
    }

    return null;
}

/**
 * 데이터를 캐시에 저장 (TTL 지정 가능)
 */
function set_cached_data($cache_key, $value, $ttl = null) {
    $cache_file = API_CACHE_DIR . '/' . md5($cache_key) . '.cache';
    $data = [
        'timestamp' => time(),
        'ttl' => $ttl ?? API_CACHE_TTL,
        'value' => $value
    ];

    @file_put_contents($cache_file, serialize($data));
}

/**
 * 캐시 클리어
 */
function clear_api_cache($pattern = null) {
    $files = glob(API_CACHE_DIR . '/*.cache');

    foreach ($files as $file) {
        if ($pattern === null || strpos($file, $pattern) !== false) {
            @unlink($file);
        }
    }
}

/**
 * 캐시 상태 조회
 */
function get_cache_status() {
    return [
        'cache_dir' => API_CACHE_DIR,
        'exists' => is_dir(API_CACHE_DIR),
        'writable' => is_writable(API_CACHE_DIR),
        'finnhub_api_key' => FINNHUB_API_KEY !== 'demo' ? 'Set' : 'Demo Mode',
        'dart_api_key' => DART_API_KEY ? 'Set' : 'Not Set',
        'cache_ttl_stock' => API_CACHE_TTL . 's',
        'cache_ttl_dart' => DART_CACHE_TTL . 's'
    ];
}
?>
