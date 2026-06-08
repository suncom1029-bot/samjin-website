<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>주식 정보 - 삼진엘앤디</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/custom.css">

  <!-- Chart.js for graphs -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Paperlogy 폰트 preload -->
  <link rel="preload" as="font" type="font/woff2" href="/assets/fonts/Paperlogy-4Regular.woff2" crossorigin="anonymous">
  <link rel="preload" as="font" type="font/woff2" href="/assets/fonts/Paperlogy-7Bold.woff2" crossorigin="anonymous">
</head>
<body class="bg-white text-slate-900">
  <?php include '../includes/header.php'; ?>

  <!-- Hero Banner -->
  <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900 text-white py-20 lg:py-28 mt-20">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-6">
        <nav class="text-sm text-gray-300">
          <a href="/" class="hover:text-emerald-400 transition">홈</a>
          <span class="mx-2">/</span>
          <a href="#" class="hover:text-emerald-400 transition">투자정보</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">주식 정보</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        주식 정보
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        실시간 주가 정보 및 투자 지표
      </p>
    </div>
  </section>

  <?php
    include '../includes/mock-data.php';

    // Mock 데이터 사용 (API 연동은 향후)
    $live_stock = array_merge([
        'timestamp' => date('Y-m-d H:i:s'),
        'source' => 'mock_data'
    ], $stock_info);

    // 타임스탬프 포맷
    $timestamp = $live_stock['timestamp'];
    $data_source = 'mock_data';
  ?>

  <!-- 실시간 주가 섹션 (네이버 금융 스타일) -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <!-- 상단 상태 표시 -->
      <div class="mb-8 flex items-center justify-between">
        <div>
          <p class="text-sm text-gray-500 mb-2">
            기준시간: <?php echo $timestamp; ?>
            <span class="text-xs ml-2 px-2 py-1 bg-<?php echo $data_source === 'finnhub_api' ? 'emerald' : 'slate'; ?>-100 text-<?php echo $data_source === 'finnhub_api' ? 'emerald' : 'slate'; ?>-700 rounded">
              <?php echo $data_source === 'finnhub_api' ? '실시간 API' : 'Mock 데이터'; ?>
            </span>
          </p>
        </div>
      </div>

      <!-- 좌측 핵심정보 + 우측 상세정보 레이아웃 -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
        <!-- 좌측: 현재가 큰표시 + 기본정보 -->
        <div class="lg:col-span-1">
          <!-- 현재가 -->
          <div class="bg-white border border-slate-200 rounded-lg p-6 mb-6">
            <h3 class="text-sm font-semibold text-gray-500 mb-2">현재가</h3>
            <div class="mb-4">
              <p class="text-5xl font-black text-slate-900"><?php echo number_format($live_stock['stock_price']); ?></p>
              <p class="text-base text-gray-600">원</p>
            </div>
            <div class="space-y-2 pt-4 border-t border-slate-200">
              <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">전일대비</span>
                <span class="<?php echo ($live_stock['price_change'] < 0 ? 'text-blue-500' : 'text-red-500'); ?> font-bold"><?php echo ($live_stock['price_change'] < 0 ? '▼' : '▲'); ?> <?php echo number_format(abs($live_stock['price_change'])); ?></span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">등락률</span>
                <span class="<?php echo ($live_stock['change_percent'] < 0 ? 'text-blue-500' : 'text-red-500'); ?> font-bold"><?php echo $live_stock['change_percent']; ?>%</span>
              </div>
            </div>
          </div>

          <!-- 기본정보 박스들 -->
          <div class="space-y-4">
            <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
              <p class="text-xs text-gray-500 font-semibold mb-1">시가총액</p>
              <p class="text-lg font-bold text-slate-900"><?php echo number_format($stock_info['market_cap']); ?></p>
              <p class="text-xs text-gray-500">백만원</p>
            </div>

            <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
              <p class="text-xs text-gray-500 font-semibold mb-1">상장일</p>
              <p class="text-lg font-bold text-slate-900"><?php echo $stock_info['listed_date']; ?></p>
              <p class="text-xs text-gray-500">코스닥</p>
            </div>

            <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
              <p class="text-xs text-gray-500 font-semibold mb-1">평균 거래량</p>
              <p class="text-lg font-bold text-slate-900"><?php echo number_format($stock_info['avg_trading_volume']); ?></p>
              <p class="text-xs text-gray-500">주</p>
            </div>
          </div>
        </div>

        <!-- 우측: 상세정보 -->
        <div class="lg:col-span-2 space-y-6">
          <!-- 거래정보 박스 -->
          <div class="bg-white border border-slate-200 rounded-lg p-6">
            <h3 class="text-lg font-bold text-slate-900 mb-6">거래 정보</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
              <div class="bg-slate-50 rounded-lg p-4 text-center border border-slate-200">
                <p class="text-sm text-gray-600 font-semibold mb-2">거래량</p>
                <p class="text-2xl font-bold text-slate-900"><?php echo number_format($stock_info['trading_volume']); ?></p>
                <p class="text-xs text-gray-500 mt-1">주</p>
              </div>

              <div class="bg-slate-50 rounded-lg p-4 text-center border border-slate-200">
                <p class="text-sm text-gray-600 font-semibold mb-2">거래대금</p>
                <p class="text-2xl font-bold text-slate-900"><?php echo number_format(intval($stock_info['trading_amount'] / 1000000)); ?></p>
                <p class="text-xs text-gray-500 mt-1">백만원</p>
              </div>

              <div class="bg-slate-50 rounded-lg p-4 text-center border border-slate-200">
                <p class="text-sm text-gray-600 font-semibold mb-2">52주 고가</p>
                <p class="text-2xl font-bold text-red-600"><?php echo number_format($stock_info['high_52w']); ?></p>
                <p class="text-xs text-gray-500 mt-1">원</p>
              </div>

              <div class="bg-slate-50 rounded-lg p-4 text-center border border-slate-200">
                <p class="text-sm text-gray-600 font-semibold mb-2">52주 저가</p>
                <p class="text-2xl font-bold text-blue-600"><?php echo number_format($stock_info['low_52w']); ?></p>
                <p class="text-xs text-gray-500 mt-1">원</p>
              </div>
            </div>

            <!-- 52주 가격대 표시 -->
            <div class="mt-6 pt-6 border-t border-slate-200">
              <p class="text-sm font-semibold text-slate-700 mb-4">52주 가격 범위</p>
              <div class="flex items-center gap-3">
                <span class="text-sm text-gray-600 font-semibold w-16"><?php echo number_format($stock_info['low_52w']); ?>원</span>
                <div class="flex-1 bg-gray-200 rounded-full h-2 overflow-hidden">
                  <div class="bg-gradient-to-r from-blue-400 to-red-400 h-full" style="width: <?php echo (($stock_info['current_price'] - $stock_info['low_52w']) / ($stock_info['high_52w'] - $stock_info['low_52w']) * 100); ?>%"></div>
                </div>
                <span class="text-sm text-gray-600 font-semibold w-16 text-right"><?php echo number_format($stock_info['high_52w']); ?>원</span>
              </div>
            </div>
          </div>

          <!-- 주주구성 -->
          <div class="bg-white border border-slate-200 rounded-lg p-6">
            <h3 class="text-lg font-bold text-slate-900 mb-6">주주구성</h3>
            <div class="space-y-4">
              <div>
                <div class="flex justify-between items-center mb-2">
                  <span class="text-sm font-semibold text-slate-700">개인주주</span>
                  <span class="text-sm font-bold text-emerald-600"><?php echo $stock_info['individual_ownership']; ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                  <div class="bg-emerald-500 h-full" style="width: <?php echo $stock_info['individual_ownership']; ?>%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between items-center mb-2">
                  <span class="text-sm font-semibold text-slate-700">기관투자자</span>
                  <span class="text-sm font-bold text-blue-600"><?php echo $stock_info['institutional_ownership']; ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                  <div class="bg-blue-500 h-full" style="width: <?php echo $stock_info['institutional_ownership']; ?>%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between items-center mb-2">
                  <span class="text-sm font-semibold text-slate-700">외국인</span>
                  <span class="text-sm font-bold text-purple-600"><?php echo $stock_info['foreign_ownership']; ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                  <div class="bg-purple-500 h-full" style="width: <?php echo $stock_info['foreign_ownership']; ?>%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 투자 지표 섹션 (네이버 스타일) -->
  <section class="section-lg bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-12">
        <h2 class="text-4xl font-bold mb-2">투자 지표</h2>
        <p class="text-gray-500 text-lg">주요 밸류에이션 지표</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- EPS -->
        <div class="bg-white border border-slate-200 rounded-lg p-6 hover:shadow-lg transition-all">
          <div class="mb-4">
            <p class="text-sm text-gray-500 font-semibold mb-2">EPS (주당순이익)</p>
            <p class="text-4xl font-black text-emerald-600"><?php echo number_format($stock_info['eps'], 0); ?></p>
            <p class="text-xs text-gray-500 mt-1">원 (최근 4분기 누적)</p>
          </div>
          <div class="pt-4 border-t border-slate-200">
            <p class="text-xs text-gray-600">주당순이익은 기업의 수익성을 나타내는 지표입니다.</p>
          </div>
        </div>

        <!-- PER -->
        <div class="bg-white border border-slate-200 rounded-lg p-6 hover:shadow-lg transition-all">
          <div class="mb-4">
            <p class="text-sm text-gray-500 font-semibold mb-2">PER (주가수익비율)</p>
            <div class="flex items-baseline gap-2">
              <p class="text-4xl font-black text-blue-600"><?php echo number_format($stock_info['per'], 2); ?></p>
              <p class="text-base text-gray-600">배</p>
            </div>
            <p class="text-xs text-gray-500 mt-1">업종평균 대비 저평가 상태</p>
          </div>
          <div class="pt-4 border-t border-slate-200">
            <div class="w-full bg-gray-200 rounded-full h-2">
              <div class="bg-blue-500 rounded-full h-2" style="width: <?php echo min(($stock_info['per'] / 15 * 100), 100); ?>%"></div>
            </div>
          </div>
        </div>

        <!-- PBR -->
        <div class="bg-white border border-slate-200 rounded-lg p-6 hover:shadow-lg transition-all">
          <div class="mb-4">
            <p class="text-sm text-gray-500 font-semibold mb-2">PBR (주가순자산비율)</p>
            <div class="flex items-baseline gap-2">
              <p class="text-4xl font-black <?php echo $stock_info['pbr'] < 1 ? 'text-emerald-600' : 'text-orange-600'; ?>"><?php echo number_format($stock_info['pbr'], 2); ?></p>
              <p class="text-base text-gray-600">배</p>
            </div>
            <div class="mt-2">
              <?php if($stock_info['pbr'] < 1): ?>
                <span class="inline-block bg-emerald-100 text-emerald-700 text-xs font-bold px-2 py-1 rounded">저평가</span>
              <?php else: ?>
                <span class="inline-block bg-orange-100 text-orange-700 text-xs font-bold px-2 py-1 rounded">적정평가</span>
              <?php endif; ?>
            </div>
          </div>
          <div class="pt-4 border-t border-slate-200">
            <p class="text-xs text-gray-600">PBR 1.0 미만은 순자산가치 대비 저평가된 상태</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 주가 추이 차트 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-12">
        <h2 class="text-4xl font-bold mb-2">주가 추이</h2>
        <p class="text-gray-500 text-lg">최근 12개월 주가 변동</p>
      </div>

      <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg">
        <canvas id="stockChart" style="max-height: 400px;"></canvas>
      </div>
    </div>
  </section>

  <!-- 배당금 요약 -->
  <section class="section-lg bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-12">
        <h2 class="text-4xl font-bold mb-8">배당금 정보</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- 배당금 -->
          <div class="bg-white border border-slate-200 rounded-lg p-6">
            <p class="text-sm text-gray-500 font-semibold mb-2">1주당 배당금</p>
            <p class="text-3xl font-black text-emerald-600"><?php echo number_format($stock_info['dividend_per_share']); ?></p>
            <p class="text-xs text-gray-500 mt-1">원</p>
          </div>

          <!-- 배당수익률 -->
          <div class="bg-white border border-slate-200 rounded-lg p-6">
            <p class="text-sm text-gray-500 font-semibold mb-2">배당수익률</p>
            <p class="text-3xl font-black text-blue-600"><?php echo number_format($stock_info['dividend_yield'], 2); ?></p>
            <p class="text-xs text-gray-500 mt-1">% (당해연도 배당)</p>
          </div>

          <!-- 상세정보 버튼 -->
          <div class="bg-white border border-slate-200 rounded-lg p-6 flex flex-col justify-center">
            <a href="/ir/financial.php" class="inline-block px-6 py-3 bg-emerald-600 text-white font-semibold rounded-lg hover:bg-emerald-700 transition text-center">
              배당 상세정보 보기 →
            </a>
            <p class="text-xs text-gray-500 mt-3 text-center">3년 배당 내역 및 지급일정</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>

  <script src="/assets/js/main.js"></script>
  <script>
    // 주가 추이 차트
    const ctx = document.getElementById('stockChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['7월', '8월', '9월', '10월', '11월', '12월', '1월', '2월', '3월', '4월', '5월', '6월'],
        datasets: [{
          label: '삼진엘앤디 주가',
          data: [950, 980, 1020, 1085, 1150, 1220, 1350, 1380, 1420, 1400, 1280, 1041],
          borderColor: '#00b96b',
          backgroundColor: 'rgba(0, 185, 107, 0.1)',
          borderWidth: 3,
          tension: 0.4,
          fill: true,
          pointRadius: 5,
          pointBackgroundColor: '#00b96b',
          pointBorderColor: '#fff',
          pointBorderWidth: 2,
          pointHoverRadius: 7
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
          legend: {
            display: true,
            labels: { font: { size: 14 }, color: '#475569' }
          }
        },
        scales: {
          y: {
            beginAtZero: false,
            min: 900,
            max: 1450,
            ticks: { color: '#64748b', font: { size: 12 } },
            grid: { color: 'rgba(203, 213, 225, 0.2)' }
          },
          x: {
            ticks: { color: '#64748b', font: { size: 12 } },
            grid: { color: 'rgba(203, 213, 225, 0.2)' }
          }
        }
      }
    });
  </script>
</body>
</html>
