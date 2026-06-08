<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>주식 정보 - 삼진엘앤디</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/custom.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="preload" as="font" type="font/woff2" href="/assets/fonts/Paperlogy-4Regular.woff2" crossorigin="anonymous">
  <link rel="preload" as="font" type="font/woff2" href="/assets/fonts/Paperlogy-7Bold.woff2" crossorigin="anonymous">
</head>
<body class="bg-white text-slate-900">
  <?php include '../includes/header.php'; ?>

  <!-- Hero Banner -->
  <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900 text-white py-12 lg:py-16 mt-20">
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
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">주식 정보</h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">실시간 주가 정보 및 투자 지표</p>
    </div>
  </section>

  <?php
    include '../includes/mock-data.php';
    $live_stock = array_merge(['timestamp' => date('Y-m-d H:i:s'), 'source' => 'mock_data'], $stock_info);
  ?>

  <!-- 섹션 1: 현재가 + 당일 거래 정보 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-8 text-sm text-gray-500">
        기준시간: <?php echo $live_stock['timestamp']; ?>
        <span class="ml-3 inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs">Mock 데이터</span>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
        <!-- 좌측: 현재가 블록 -->
        <div class="lg:col-span-1">
          <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 border-2 border-emerald-300 rounded-lg p-8">
            <div class="mb-6">
              <p class="text-sm text-emerald-700 font-semibold mb-1">(주)삼진엘앤디</p>
              <p class="text-xs text-slate-600">코스닥</p>
            </div>
            <div class="mb-6 pb-6 border-b border-emerald-200">
              <p class="text-5xl font-black text-slate-900"><?php echo number_format($live_stock['stock_price']); ?></p>
              <p class="text-base text-slate-600 mt-1">원</p>
            </div>
            <div class="space-y-3">
              <div class="flex justify-between items-center">
                <span class="text-sm text-slate-700">전일대비</span>
                <span class="<?php echo ($live_stock['price_change'] < 0 ? 'text-blue-600' : 'text-red-600'); ?> font-bold">
                  <?php echo ($live_stock['price_change'] < 0 ? '▼' : '▲'); ?>
                  <?php echo number_format(abs($live_stock['price_change'])); ?>
                </span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-sm text-slate-700">등락률</span>
                <span class="<?php echo ($live_stock['change_percent'] < 0 ? 'text-blue-600' : 'text-red-600'); ?> font-bold">
                  <?php echo $live_stock['change_percent']; ?>%
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- 우측: 당일 거래 6칸 그리드 -->
        <div class="lg:col-span-2">
          <div class="bg-white border border-slate-200 rounded-lg p-6">
            <h3 class="text-lg font-bold text-slate-900 mb-6">당일 거래 정보</h3>
            <div class="grid grid-cols-3 gap-4">
              <div class="bg-slate-50 rounded-lg p-4 text-center border border-slate-200">
                <p class="text-xs text-slate-600 font-semibold mb-2">시가</p>
                <p class="text-lg font-bold text-slate-900"><?php echo number_format($live_stock['open_price']); ?></p>
                <p class="text-xs text-slate-500 mt-1">원</p>
              </div>
              <div class="bg-slate-50 rounded-lg p-4 text-center border border-slate-200">
                <p class="text-xs text-slate-600 font-semibold mb-2">고가</p>
                <p class="text-lg font-bold text-red-600"><?php echo number_format($live_stock['high_price']); ?></p>
                <p class="text-xs text-slate-500 mt-1">원</p>
              </div>
              <div class="bg-slate-50 rounded-lg p-4 text-center border border-slate-200">
                <p class="text-xs text-slate-600 font-semibold mb-2">52주 고가</p>
                <p class="text-lg font-bold text-red-600"><?php echo number_format($live_stock['high_52w']); ?></p>
                <p class="text-xs text-slate-500 mt-1">원</p>
              </div>
              <div class="bg-slate-50 rounded-lg p-4 text-center border border-slate-200">
                <p class="text-xs text-slate-600 font-semibold mb-2">전일종가</p>
                <p class="text-lg font-bold text-slate-900"><?php echo number_format($live_stock['prev_close']); ?></p>
                <p class="text-xs text-slate-500 mt-1">원</p>
              </div>
              <div class="bg-slate-50 rounded-lg p-4 text-center border border-slate-200">
                <p class="text-xs text-slate-600 font-semibold mb-2">저가</p>
                <p class="text-lg font-bold text-blue-600"><?php echo number_format($live_stock['low_price']); ?></p>
                <p class="text-xs text-slate-500 mt-1">원</p>
              </div>
              <div class="bg-slate-50 rounded-lg p-4 text-center border border-slate-200">
                <p class="text-xs text-slate-600 font-semibold mb-2">52주 저가</p>
                <p class="text-lg font-bold text-blue-600"><?php echo number_format($live_stock['low_52w']); ?></p>
                <p class="text-xs text-slate-500 mt-1">원</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 섹션 2: 종목 기본정보 테이블 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <h2 class="text-3xl font-bold mb-8 text-slate-900">종목 기본정보</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white border border-slate-200 rounded-lg p-6">
          <div class="space-y-4">
            <div class="flex justify-between pb-3 border-b border-slate-200">
              <span class="text-sm text-slate-700 font-semibold">시가총액</span>
              <span class="text-base font-bold text-slate-900"><?php echo number_format($live_stock['market_cap']); ?>백만원</span>
            </div>
            <div class="flex justify-between pb-3 border-b border-slate-200">
              <span class="text-sm text-slate-700 font-semibold">액면가</span>
              <span class="text-base font-bold text-slate-900"><?php echo number_format($live_stock['par_value']); ?>원</span>
            </div>
            <div class="flex justify-between pb-3 border-b border-slate-200">
              <span class="text-sm text-slate-700 font-semibold">외국인 보유한도</span>
              <span class="text-base font-bold text-slate-900"><?php echo $live_stock['foreign_limit']; ?>%</span>
            </div>
            <div class="flex justify-between">
              <span class="text-sm text-slate-700 font-semibold">상장일</span>
              <span class="text-base font-bold text-slate-900"><?php echo $live_stock['listed_date']; ?></span>
            </div>
          </div>
        </div>
        <div class="bg-white border border-slate-200 rounded-lg p-6">
          <div class="space-y-4">
            <div class="flex justify-between pb-3 border-b border-slate-200">
              <span class="text-sm text-slate-700 font-semibold">상장주식수</span>
              <span class="text-base font-bold text-slate-900"><?php echo number_format($live_stock['listed_shares']); ?>주</span>
            </div>
            <div class="flex justify-between pb-3 border-b border-slate-200">
              <span class="text-sm text-slate-700 font-semibold">거래량</span>
              <span class="text-base font-bold text-slate-900"><?php echo number_format($live_stock['trading_volume']); ?>주</span>
            </div>
            <div class="flex justify-between pb-3 border-b border-slate-200">
              <span class="text-sm text-slate-700 font-semibold">평균거래량</span>
              <span class="text-base font-bold text-slate-900"><?php echo number_format($live_stock['avg_trading_volume']); ?>주</span>
            </div>
            <div class="flex justify-between">
              <span class="text-sm text-slate-700 font-semibold">거래대금</span>
              <span class="text-base font-bold text-slate-900"><?php echo number_format(intval($live_stock['trading_amount'] / 1000000)); ?>백만원</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 섹션 3: 52주 범위 + 주주구성 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- 52주 범위 -->
        <div class="bg-white border border-slate-200 rounded-lg p-6">
          <h3 class="text-lg font-bold text-slate-900 mb-6">52주 가격 범위</h3>
          <div class="flex items-center gap-3 mb-4">
            <span class="text-sm font-semibold text-slate-700 w-14"><?php echo number_format($live_stock['low_52w']); ?>원</span>
            <div class="flex-1 bg-gray-200 rounded-full h-3 overflow-hidden">
              <div class="bg-gradient-to-r from-blue-400 to-red-400 h-full"
                   style="width: <?php echo (($live_stock['current_price'] - $live_stock['low_52w']) / ($live_stock['high_52w'] - $live_stock['low_52w']) * 100); ?>%"></div>
            </div>
            <span class="text-sm font-semibold text-slate-700 w-14 text-right"><?php echo number_format($live_stock['high_52w']); ?>원</span>
          </div>
          <p class="text-xs text-slate-600 text-center">현재가: <?php echo number_format($live_stock['current_price']); ?>원</p>
        </div>

        <!-- 주주구성 -->
        <div class="bg-white border border-slate-200 rounded-lg p-6">
          <h3 class="text-lg font-bold text-slate-900 mb-6">주주구성</h3>
          <div class="space-y-4">
            <div>
              <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-semibold text-slate-700">대주주 (<?php echo $live_stock['major_shareholder']; ?>)</span>
                <span class="text-sm font-bold text-slate-900"><?php echo $live_stock['major_share_ratio']; ?>%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2"><div class="bg-slate-700 h-full" style="width: <?php echo $live_stock['major_share_ratio']; ?>%"></div></div>
            </div>
            <div>
              <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-semibold text-slate-700">기관투자자</span>
                <span class="text-sm font-bold text-blue-600"><?php echo $live_stock['institutional_ownership']; ?>%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2"><div class="bg-blue-500 h-full" style="width: <?php echo $live_stock['institutional_ownership']; ?>%"></div></div>
            </div>
            <div>
              <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-semibold text-slate-700">외국인</span>
                <span class="text-sm font-bold text-purple-600"><?php echo $live_stock['foreign_ownership']; ?>%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2"><div class="bg-purple-500 h-full" style="width: <?php echo $live_stock['foreign_ownership']; ?>%"></div></div>
            </div>
            <div>
              <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-semibold text-slate-700">개인</span>
                <span class="text-sm font-bold text-emerald-600"><?php echo $live_stock['individual_ownership']; ?>%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2"><div class="bg-emerald-500 h-full" style="width: <?php echo $live_stock['individual_ownership']; ?>%"></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 섹션 4: 투자지표 (6개 카드) -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <h2 class="text-3xl font-bold mb-8 text-slate-900">투자지표</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- EPS -->
        <div class="bg-white border border-slate-200 rounded-lg p-6">
          <p class="text-sm text-slate-600 font-semibold mb-2">EPS (주당순이익)</p>
          <p class="text-3xl font-black text-emerald-600"><?php echo number_format($live_stock['eps'], 0); ?></p>
          <p class="text-xs text-slate-500 mt-2">원</p>
        </div>

        <!-- PER -->
        <div class="bg-white border border-slate-200 rounded-lg p-6">
          <p class="text-sm text-slate-600 font-semibold mb-2">PER (주가수익비율)</p>
          <p class="text-3xl font-black text-blue-600"><?php echo number_format($live_stock['per'], 2); ?></p>
          <p class="text-xs text-slate-500 mt-2">배</p>
        </div>

        <!-- PBR -->
        <div class="bg-white border border-slate-200 rounded-lg p-6">
          <p class="text-sm text-slate-600 font-semibold mb-2">PBR (주가순자산비율)</p>
          <p class="text-3xl font-black <?php echo $live_stock['pbr'] < 1 ? 'text-emerald-600' : 'text-orange-600'; ?>">
            <?php echo number_format($live_stock['pbr'], 2); ?>
          </p>
          <p class="text-xs text-slate-500 mt-2">배</p>
        </div>

        <!-- BPS -->
        <div class="bg-white border border-slate-200 rounded-lg p-6">
          <p class="text-sm text-slate-600 font-semibold mb-2">BPS (주당순자산)</p>
          <p class="text-3xl font-black text-slate-900"><?php echo number_format($live_stock['bps']); ?></p>
          <p class="text-xs text-slate-500 mt-2">원</p>
        </div>

        <!-- ROE -->
        <div class="bg-white border border-slate-200 rounded-lg p-6">
          <p class="text-sm text-slate-600 font-semibold mb-2">ROE (자기자본이익률)</p>
          <p class="text-3xl font-black text-blue-600"><?php echo number_format($live_stock['roe'], 1); ?></p>
          <p class="text-xs text-slate-500 mt-2">%</p>
        </div>

        <!-- ROA -->
        <div class="bg-white border border-slate-200 rounded-lg p-6">
          <p class="text-sm text-slate-600 font-semibold mb-2">ROA (총자산이익률)</p>
          <p class="text-3xl font-black text-blue-600"><?php echo number_format($live_stock['roa'], 1); ?></p>
          <p class="text-xs text-slate-500 mt-2">%</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 섹션 5: 주가 추이 차트 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <h2 class="text-3xl font-bold mb-8 text-slate-900">주가 추이</h2>
      <div class="bg-white p-8 rounded-lg border border-slate-200">
        <canvas id="stockChart" style="max-height: 400px;"></canvas>
      </div>
    </div>
  </section>

  <!-- 섹션 6: 수익률 비교 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <h2 class="text-3xl font-bold mb-8 text-slate-900">수익률 비교</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white border border-slate-200 rounded-lg p-6 text-center">
          <p class="text-sm text-slate-600 font-semibold mb-3">1개월 수익률</p>
          <p class="text-4xl font-black <?php echo $live_stock['return_1m'] < 0 ? 'text-blue-600' : 'text-red-600'; ?>">
            <?php echo ($live_stock['return_1m'] < 0 ? '▼' : '▲'); ?> <?php echo abs($live_stock['return_1m']); ?>%
          </p>
        </div>
        <div class="bg-white border border-slate-200 rounded-lg p-6 text-center">
          <p class="text-sm text-slate-600 font-semibold mb-3">3개월 수익률</p>
          <p class="text-4xl font-black <?php echo $live_stock['return_3m'] < 0 ? 'text-blue-600' : 'text-red-600'; ?>">
            <?php echo ($live_stock['return_3m'] < 0 ? '▼' : '▲'); ?> <?php echo abs($live_stock['return_3m']); ?>%
          </p>
        </div>
        <div class="bg-white border border-slate-200 rounded-lg p-6 text-center">
          <p class="text-sm text-slate-600 font-semibold mb-3">연초대비 (코스닥: <?php echo $live_stock['kosdaq_return_ytd']; ?>%)</p>
          <p class="text-4xl font-black <?php echo $live_stock['return_ytd'] < 0 ? 'text-blue-600' : 'text-red-600'; ?>">
            <?php echo ($live_stock['return_ytd'] < 0 ? '▼' : '▲'); ?> <?php echo abs($live_stock['return_ytd']); ?>%
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 섹션 7: 배당 정보 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <h2 class="text-3xl font-bold mb-8 text-slate-900">배당 정보</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-slate-50 border border-slate-200 rounded-lg p-6">
          <p class="text-sm text-slate-600 font-semibold mb-2">1주당 배당금</p>
          <p class="text-3xl font-black text-emerald-600"><?php echo number_format($live_stock['dividend_per_share']); ?></p>
          <p class="text-xs text-slate-500 mt-2">원</p>
        </div>
        <div class="bg-slate-50 border border-slate-200 rounded-lg p-6">
          <p class="text-sm text-slate-600 font-semibold mb-2">배당수익률</p>
          <p class="text-3xl font-black text-blue-600"><?php echo number_format($live_stock['dividend_yield'], 2); ?></p>
          <p class="text-xs text-slate-500 mt-2">%</p>
        </div>
        <div class="bg-emerald-600 text-white rounded-lg p-6 flex flex-col justify-center">
          <a href="/ir/financial.php" class="inline-block font-semibold text-center hover:bg-emerald-700 transition py-2">
            배당 상세정보 보기 →
          </a>
          <p class="text-xs text-emerald-100 mt-3 text-center">3년 배당 내역 및 지급일정</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 섹션 8: 최근 공시 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <h2 class="text-3xl font-bold mb-8 text-slate-900">최근 공시</h2>
      <div class="bg-white border border-slate-200 rounded-lg overflow-hidden">
        <table class="w-full">
          <thead class="bg-slate-100 border-b border-slate-200">
            <tr>
              <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900">날짜</th>
              <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900">제목</th>
              <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900">유형</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($live_stock['disclosures'] as $disclosure): ?>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="px-6 py-4 text-sm text-slate-700"><?php echo $disclosure['date']; ?></td>
              <td class="px-6 py-4 text-sm text-slate-900 font-medium"><?php echo $disclosure['title']; ?></td>
              <td class="px-6 py-4 text-sm">
                <span class="inline-block px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-xs font-semibold">
                  <?php echo $disclosure['type']; ?>
                </span>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="mt-6 text-center">
        <a href="https://dart.fss.or.kr" target="_blank" class="inline-block px-6 py-3 bg-slate-900 text-white font-semibold rounded-lg hover:bg-slate-800 transition">
          전자공시 시스템(DART) 바로가기 →
        </a>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>

  <script src="/assets/js/main.js"></script>
  <script>
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
          legend: { display: true, labels: { font: { size: 14 }, color: '#475569' } }
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
