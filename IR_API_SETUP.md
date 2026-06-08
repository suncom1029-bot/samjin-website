# 투자정보(IR) API 설정 가이드

## 📋 개요

삼진엘앤디 홈페이지의 투자정보 페이지는 다음 3가지 API를 지원합니다:
- **Finnhub API**: 실시간 주가정보 (주식 정보 페이지)
- **DART API**: 공식 공시정보 (재무 정보 페이지)
- **Mock 데이터**: 테스트용 목업데이터

---

## 🔧 Phase 1: Finnhub API 설정 (주가정보)

### 1단계: API KEY 발급

1. https://finnhub.io/ 접속
2. 무료 계정 가입 (Sign Up)
3. 대시보드에서 API KEY 복사
4. `.env` 파일에 다음 추가:

```bash
FINNHUB_API_KEY=your_api_key_here
```

### 2단계: 로컬 테스트

```bash
# Docker 재시작하면 자동 반영
docker compose restart

# 또는 수동으로 환경변수 설정
export FINNHUB_API_KEY=your_api_key_here
```

### 3단계: 동작 확인

브라우저에서 http://localhost:8080/ir/stock.php 접속하면:
- ✅ "실시간 API" 배지 표시 (API 데이터 로드 성공)
- ✅ 실시간 주가, 거래량, 투자지표 표시

**문제 발생 시:**
- API KEY 확인 (공백, 특수문자)
- 네트워크 연결 확인
- Docker 로그 확인: `docker logs samjin_dev`

---

## 📊 Phase 2: DART API 설정 (재무정보)

### 1단계: API KEY 발급

1. https://open.dart.fss.or.kr/ 접속
2. 무료 API KEY 발급 신청
3. 승인 후 API KEY 수령
4. `.env` 파일에 추가:

```bash
DART_API_KEY=your_dart_api_key_here
```

### 2단계: DART API 엔드포인트

```
재무정보: /openapi/fnlttMultiAcnt.json
공시정보: /openapi/list.json
배당정보: /openapi/dividendPerShare.json
```

### 3단계: PHP 헬퍼 구현

**`includes/api-helpers.php`** 에 다음 함수 추가:

```php
function get_dart_financial($company_code = '00413682') {
    // 삼진엘앤디 공시 정보 조회
}

function get_dart_dividend_history($company_code = '00413682') {
    // 배당금 이력 조회
}
```

---

## 💡 캐싱 전략

### 현재 캐싱 구조

- **주가정보**: 5분 캐싱 (1시간당 12회 요청 → API 호출 12회)
- **재무정보**: 24시간 캐싱 (분기별 변경이므로 일일 1회 충분)
- **배당정보**: 24시간 캐싱

### 캐시 정리

```php
// 캐시 수동 제거
clear_api_cache('stock_quote');

// 전체 캐시 제거
clear_api_cache();

// 캐시 상태 확인
$status = get_cache_status();
print_r($status);
```

---

## 🚀 프로덕션 배포

### Railway.app 환경변수 설정

1. Railway 대시보드 접속
2. 프로젝트 → Variables 탭
3. 환경변수 추가:
   - `FINNHUB_API_KEY`: 실제 API KEY
   - `DART_API_KEY`: 실제 API KEY (선택)

```bash
# 또는 CLI로 설정
railway variables set FINNHUB_API_KEY=your_key
```

### 주의사항

⚠️ **절대 하지 말 것:**
- API KEY를 코드에 하드코딩
- `.env` 파일을 Git에 커밋
- API KEY를 GitHub에 노출

✅ **권장사항:**
- 환경변수 사용 (`.env.example`은 Git 추적)
- 프로덕션과 로컬 분리
- API KEY 정기 변경

---

## 📈 현재 상태

| 기능 | 상태 | 날짜 |
|------|------|------|
| Mock 데이터 | ✅ 완료 | 2026-06-08 |
| Finnhub API 구조 | ✅ 완료 | 2026-06-08 |
| API 헬퍼 함수 | ✅ 완료 | 2026-06-08 |
| 주가 페이지 통합 | ✅ 완료 | 2026-06-08 |
| **DART API 구조** | ⏳ 진행중 | 2026-06-08 |
| DART 재무정보 연동 | ⏹️ 대기 | - |
| 배당 자동 업데이트 | ⏹️ 대기 | - |

---

## 🔗 유용한 링크

- **Finnhub**: https://finnhub.io/docs/api (RESTful API)
- **DART**: https://open.dart.fss.or.kr/dis/searchTotalAnnouncement.do (공식 공시)
- **KRX**: https://www.krx.co.kr/ (한국거래소)

---

## 💬 문제 해결

### 캐시 문제
```bash
# 캐시 디렉토리 권한 확인
ls -la /Users/suncom/Project/samjin-new/.cache/

# 캐시 제거 후 재테스트
rm -rf /Users/suncom/Project/samjin-new/.cache/*
```

### API 응답 시간초과
- Finnhub 네트워크 상태 확인
- 방화벽 설정 확인 (Docker 포트 매핑)
- API 할당량 확인 (무료: 1분당 60요청)

### 데이터 불일치
- 시장 개장/폐장 시간 확인 (KRX: 09:00-15:30)
- 캐시 만료 시간 확인
- Mock 데이터 vs 실제 데이터 구분 (화면 배지 표시)
