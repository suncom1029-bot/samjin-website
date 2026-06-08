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
    include '../includes/api-helpers.php';

    // 실시간 주가 데이터 조회 (API 또는 Mock)
    $live_stock = get_merged_stock_data('SAMJIN.KS', $stock_info);

    // 타임스탬프 포맷
    $timestamp = isset($live_stock['timestamp']) ? $live_stock['timestamp'] : date('Y-m-d H:i:s');
    $data_source = isset($live_stock['source']) ? $live_stock['source'] : 'mock_data';
  ?>

  <!-- 실시간 주가 섹션 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-2">실시간 주가 정보</h2>
        <p class="text-gray-500 text-lg">
          기준시간: <?php echo $timestamp; ?>
          <span class="text-xs ml-2 px-2 py-1 bg-<?php echo $data_source === 'finnhub_api' ? 'emerald' : 'slate'; ?>-100 text-<?php echo $data_source === 'finnhub_api' ? 'emerald' : 'slate'; ?>-700 rounded">
            <?php echo $data_source === 'finnhub_api' ? '실시간 API' : 'Mock 데이터'; ?>
          </span>
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- 주가 카드 -->
        <div class="lg:col-span-1 bg-gradient-to-br from-emerald-50 to-emerald-100 p-8 rounded-lg border-2 border-emerald-500 shadow-lg">
          <p class="text-sm text-emerald-700 font-semibold uppercase mb-4">현재가</p>
          <p class="text-5xl lg:text-6xl font-black text-slate-900 mb-6"><?php echo number_format($live_stock['stock_price']); ?><span class="text-3xl">원</span></p>
          <div class="space-y-4">
            <div class="flex justify-between items-center pb-4 border-b border-emerald-300">
              <span class="text-slate-700 font-semibold">전일대비</span>
              <span class="<?php echo ($live_stock['price_change'] < 0 ? 'text-blue-500' : 'text-red-500'); ?> font-bold text-xl"><?php echo ($live_stock['price_change'] < 0 ? '▼' : '▲'); ?> <?php echo number_format(abs($live_stock['price_change'])); ?></span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-slate-700 font-semibold">등락률</span>
              <span class="<?php echo ($live_stock['change_percent'] < 0 ? 'text-blue-500' : 'text-red-500'); ?> font-bold text-xl"><?php echo $live_stock['change_percent']; ?>%</span>
            </div>
          </div>
        </div>

        <!-- 거래량/고저가 -->
        <div class="lg:col-span-2 space-y-6">
          <!-- 거래량 카드 -->
          <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg">
            <h3 class="text-xl font-bold text-slate-900 mb-6">거래 정보</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
              <!-- 거래량 -->
              <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-4 rounded-lg text-center">
                <p class="text-3xl mb-2">📊</p>
                <p class="text-sm text-slate-600 font-semibold mb-2">거래량</p>
                <p class="text-2xl font-bold text-blue-600"><?php echo number_format($stock_info['trading_volume']); ?></p>
                <p class="text-xs text-gray-500 mt-1">주</p>
              </div>

              <!-- 거래대금 -->
              <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-4 rounded-lg text-center">
                <p class="text-3xl mb-2">💰</p>
                <p class="text-sm text-slate-600 font-semibold mb-2">거래대금</p>
                <p class="text-2xl font-bold text-emerald-600"><?php echo number_format(intval($stock_info['trading_amount'] / 1000000)); ?></p>
                <p class="text-xs text-gray-500 mt-1">백만원</p>
              </div>

              <!-- 52주 고가 -->
              <div class="bg-gradient-to-br from-red-50 to-red-100 p-4 rounded-lg text-center">
                <p class="text-3xl mb-2">📈</p>
                <p class="text-sm text-slate-600 font-semibold mb-2">52주 고가</p>
                <p class="text-2xl font-bold text-red-600"><?php echo number_format($stock_info['high_52w']); ?></p>
                <p class="text-xs text-gray-500 mt-1">원</p>
              </div>

              <!-- 52주 저가 -->
              <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-4 rounded-lg text-center">
                <p class="text-3xl mb-2">📉</p>
                <p class="text-sm text-slate-600 font-semibold mb-2">52주 저가</p>
                <p class="text-2xl font-bold text-purple-600"><?php echo number_format($stock_info['low_52w']); ?></p>
                <p class="text-xs text-gray-500 mt-1">원</p>
              </div>
            </div>

            <!-- 52주 가격대 표시 -->
            <div class="mt-8 pt-8 border-t border-slate-200">
              <p class="text-sm font-semibold text-slate-700 mb-4">52주 가격 범위</p>
              <div class="flex items-center gap-4">
                <span class="text-sm text-slate-600 font-semibold"><?php echo number_format($stock_info['low_52w']); ?></span>
                <div class="flex-1 bg-slate-200 rounded-full h-3 overflow-hidden">
                  <div class="bg-gradient-to-r from-emerald-400 to-emerald-600 h-full" style="width: <?php echo (($stock_info['current_price'] - $stock_info['low_52w']) / ($stock_info['high_52w'] - $stock_info['low_52w']) * 100); ?>%"></div>
                </div>
                <span class="text-sm text-slate-600 font-semibold"><?php echo number_format($stock_info['high_52w']); ?></span>
              </div>
              <p class="text-center text-sm text-emerald-600 font-semibold mt-3">현재가: <?php echo number_format($stock_info['current_price']); ?>원</p>
            </div>
          </div>

          <!-- 시가총액 & 주주구성 카드 -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- 시가총액 -->
            <div class="bg-gradient-to-br from-blue-600 to-blue-700 text-white p-8 rounded-lg shadow-lg">
              <div class="flex items-center justify-between mb-4">
                <h4 class="text-lg font-bold">시가총액</h4>
                <span class="text-3xl">💹</span>
              </div>
              <p class="text-4xl font-black mb-2"><?php echo number_format($stock_info['market_cap']); ?></p>
              <p class="text-blue-100 text-sm">백만원</p>
              <div class="mt-6 pt-6 border-t border-blue-400">
                <p class="text-sm text-blue-100 mb-1">상장일</p>
                <p class="text-2xl font-bold"><?php echo $stock_info['listed_date']; ?></p>
                <p class="text-sm text-blue-100 mt-1">코스닥</p>
              </div>
            </div>

            <!-- 주주구성 -->
            <div class="bg-gradient-to-br from-slate-100 to-slate-50 p-8 rounded-lg border-2 border-slate-200 shadow-lg">
              <h4 class="text-lg font-bold text-slate-900 mb-6">주주구성</h4>
              <div class="space-y-4">
                <div>
                  <div class="flex justify-between mb-2">
                    <span class="text-sm font-semibold text-slate-700">개인주주</span>
                    <span class="text-sm font-bold text-emerald-600"><?php echo $stock_info['individual_ownership']; ?>%</span>
                  </div>
                  <div class="w-full bg-slate-300 rounded-full h-2 overflow-hidden">
                    <div class="bg-emerald-500 h-full" style="width: <?php echo $stock_info['individual_ownership']; ?>%"></div>
                  </div>
                </div>

                <div>
                  <div class="flex justify-between mb-2">
                    <span class="text-sm font-semibold text-slate-700">기관투자자</span>
                    <span class="text-sm font-bold text-blue-600"><?php echo $stock_info['institutional_ownership']; ?>%</span>
                  </div>
                  <div class="w-full bg-slate-300 rounded-full h-2 overflow-hidden">
                    <div class="bg-blue-500 h-full" style="width: <?php echo $stock_info['institutional_ownership']; ?>%"></div>
                  </div>
                </div>

                <div>
                  <div class="flex justify-between mb-2">
                    <span class="text-sm font-semibold text-slate-700">외국인</span>
                    <span class="text-sm font-bold text-purple-600"><?php echo $stock_info['foreign_ownership']; ?>%</span>
                  </div>
                  <div class="w-full bg-slate-300 rounded-full h-2 overflow-hidden">
                    <div class="bg-purple-500 h-full" style="width: <?php echo $stock_info['foreign_ownership']; ?>%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 투자 지표 섹션 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-2">투자 지표</h2>
        <p class="text-gray-500 text-lg">주요 밸류에이션 지표</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- EPS -->
        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-8 rounded-lg border-2 border-emerald-400 shadow-lg hover:shadow-2xl transition-all hover:-translate-y-1">
          <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-slate-900">EPS</h3>
            <span class="text-4xl">📊</span>
          </div>
          <p class="text-5xl font-black text-emerald-600 mb-3"><?php echo number_format($stock_info['eps'], 0); ?></p>
          <p class="text-sm font-semibold text-slate-700 mb-2">주당순이익</p>
          <p class="text-xs text-slate-600 bg-white bg-opacity-60 px-3 py-1 rounded inline-block">최근 4분기 누적</p>
        </div>

        <!-- PER -->
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-lg border-2 border-blue-400 shadow-lg hover:shadow-2xl transition-all hover:-translate-y-1">
          <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-slate-900">PER</h3>
            <span class="text-4xl">📈</span>
          </div>
          <p class="text-5xl font-black text-blue-600 mb-3"><?php echo number_format($stock_info['per'], 2); ?><span class="text-2xl">배</span></p>
          <p class="text-sm font-semibold text-slate-700 mb-2">주가수익비율</p>
          <div class="flex items-center gap-2">
            <div class="flex-1 bg-white rounded-full h-2">
              <div class="bg-blue-500 rounded-full h-2" style="width: <?php echo min(($stock_info['per'] / 15 * 100), 100); ?>%"></div>
            </div>
            <p class="text-xs text-slate-600 font-semibold">저평가</p>
          </div>
        </div>

        <!-- PBR -->
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-lg border-2 border-purple-400 shadow-lg hover:shadow-2xl transition-all hover:-translate-y-1">
          <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-slate-900">PBR</h3>
            <span class="text-4xl">💰</span>
          </div>
          <p class="text-5xl font-black text-purple-600 mb-3"><?php echo number_format($stock_info['pbr'], 2); ?><span class="text-2xl">배</span></p>
          <p class="text-sm font-semibold text-slate-700 mb-2">주가순자산비율</p>
          <div class="inline-block bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full">
            <?php echo $stock_info['pbr'] < 1 ? '✓ 저평가' : '가치평가'; ?>
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
  <section class="section-lg bg-emerald-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-12 text-center">
        <h2 class="text-4xl font-bold mb-2">배당금 정보</h2>
        <p class="text-gray-600 text-lg">주주 가치 창출을 위한 배당 정책</p>
        <a href="/ir/financial.php" class="inline-block mt-4 px-6 py-2 bg-emerald-600 text-white font-semibold rounded-lg hover:bg-emerald-700 transition">
          배당 상세정보 보기 →
        </a>
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
