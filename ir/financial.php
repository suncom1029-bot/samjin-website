<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>재무 정보 - 삼진엘앤디</title>
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
  <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900 text-white py-12 lg:py-16 mt-20">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-6">
        <nav class="text-sm text-gray-300">
          <a href="/" class="hover:text-emerald-400 transition">홈</a>
          <span class="mx-2">/</span>
          <a href="#" class="hover:text-emerald-400 transition">투자정보</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">재무 정보</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        재무 정보
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        신뢰할 수 있는 재무성과와 배당 정보
      </p>
    </div>
  </section>

  <?php include '../includes/mock-data.php'; ?>

  <!-- 재무 요약 섹션 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-2">재무 요약</h2>
        <p class="text-gray-500 text-lg">최근 3년 주요 재무지표 (단위: 백만원)</p>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-slate-100 border-b-2 border-slate-300">
              <th class="p-4 text-left font-bold text-slate-900">재무지표</th>
              <th class="p-4 text-right font-bold text-slate-900">2024년</th>
              <th class="p-4 text-right font-bold text-slate-900">2025년</th>
              <th class="p-4 text-right font-bold text-slate-900">2026년(E)</th>
              <th class="p-4 text-right font-bold text-emerald-600">YoY 증감</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="p-4 font-semibold text-slate-900">매출액</td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2024']['revenue']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2025']['revenue']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2026_estimate']['revenue']); ?></td>
              <td class="p-4 text-right text-red-600 font-semibold">+9.9%</td>
            </tr>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="p-4 font-semibold text-slate-900">영업이익</td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2024']['operating_profit']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2025']['operating_profit']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2026_estimate']['operating_profit']); ?></td>
              <td class="p-4 text-right text-red-600 font-semibold">+18.0%</td>
            </tr>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="p-4 font-semibold text-slate-900">순이익</td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2024']['net_income']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2025']['net_income']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2026_estimate']['net_income']); ?></td>
              <td class="p-4 text-right text-red-600 font-semibold">+17.8%</td>
            </tr>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="p-4 font-semibold text-slate-900">총자산</td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2024']['assets']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2025']['assets']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2026_estimate']['assets']); ?></td>
              <td class="p-4 text-right text-red-600 font-semibold">+8.3%</td>
            </tr>
            <tr class="hover:bg-slate-50 transition">
              <td class="p-4 font-semibold text-slate-900">자본금</td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2024']['equity']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2025']['equity']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($financial_data['2026_estimate']['equity']); ?></td>
              <td class="p-4 text-right text-red-600 font-semibold">+9.5%</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 재무 차트 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-12">
        <h2 class="text-3xl font-bold mb-2">매출액 & 순이익 추이</h2>
        <p class="text-gray-600 text-lg">지속적인 성장 추이</p>
      </div>

      <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg">
        <canvas id="financialChart" style="max-height: 400px;"></canvas>
      </div>
    </div>
  </section>

  <!-- 배당금 정보 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-2">배당금 정보</h2>
        <p class="text-gray-500 text-lg">주주 환원 정책 및 배당 내역</p>
      </div>

      <!-- 최근 배당 하이라이트 -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-8 rounded-lg border-2 border-emerald-500 shadow-lg">
          <p class="text-sm text-emerald-700 font-semibold uppercase mb-2">2025년 배당금</p>
          <p class="text-4xl font-bold text-slate-900 mb-4">120원</p>
          <div class="space-y-2 text-sm text-slate-700">
            <p><span class="font-semibold">배당률:</span> 39.5%</p>
            <p><span class="font-semibold">수익률:</span> 11.53%</p>
          </div>
        </div>

        <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg">
          <p class="text-sm text-slate-600 font-semibold uppercase mb-2">배당락일</p>
          <p class="text-3xl font-bold text-slate-900 mb-4">2026.03.15</p>
          <p class="text-sm text-slate-600">기준일 기준 주주에게 배당금 지급</p>
        </div>

        <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg">
          <p class="text-sm text-slate-600 font-semibold uppercase mb-2">지급일</p>
          <p class="text-3xl font-bold text-slate-900 mb-4">2026.04.10</p>
          <p class="text-sm text-slate-600">배당금 입금 예정 날짜</p>
        </div>
      </div>

      <!-- 배당 이력 테이블 -->
      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-slate-100 border-b-2 border-slate-300">
              <th class="p-4 text-left font-bold text-slate-900">연도</th>
              <th class="p-4 text-right font-bold text-slate-900">배당금<br>(원/주)</th>
              <th class="p-4 text-right font-bold text-slate-900">배당률<br>(%)</th>
              <th class="p-4 text-right font-bold text-slate-900">배당수익률<br>(%)</th>
              <th class="p-4 text-right font-bold text-slate-900">배당락일</th>
              <th class="p-4 text-right font-bold text-slate-900">지급일</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($dividend_history as $div): ?>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="p-4 font-semibold text-slate-900"><?php echo $div['year']; ?>년</td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($div['per_share']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo $div['payout_ratio']; ?>%</td>
              <td class="p-4 text-right text-slate-700"><?php echo $div['dividend_yield']; ?>%</td>
              <td class="p-4 text-right text-slate-700"><?php echo $div['ex_date']; ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo $div['payment_date']; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 분기별 실적 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-2">분기별 실적</h2>
        <p class="text-gray-600 text-lg">최근 4분기 경영 성과</p>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-slate-100 border-b-2 border-slate-300">
              <th class="p-4 text-left font-bold text-slate-900">분기</th>
              <th class="p-4 text-right font-bold text-slate-900">매출액<br>(백만원)</th>
              <th class="p-4 text-right font-bold text-slate-900">영업이익<br>(백만원)</th>
              <th class="p-4 text-right font-bold text-slate-900">순이익<br>(백만원)</th>
              <th class="p-4 text-right font-bold text-slate-900">영업이익률<br>(%)</th>
              <th class="p-4 text-right font-bold text-slate-900">공시일</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($quarterly_results as $quarter): ?>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="p-4 font-semibold text-slate-900"><?php echo $quarter['quarter']; ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($quarter['revenue']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($quarter['operating_profit']); ?></td>
              <td class="p-4 text-right text-slate-700"><?php echo number_format($quarter['net_income']); ?></td>
              <td class="p-4 text-right text-emerald-600 font-semibold"><?php echo $quarter['margin']; ?>%</td>
              <td class="p-4 text-right text-gray-500"><?php echo $quarter['released_date']; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 주요 재무 지표 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-3xl font-bold mb-2">주요 재무 지표</h2>
        <p class="text-gray-600 text-lg">2025년 기준</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
        <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-lg text-center">
          <p class="text-sm text-slate-600 font-semibold mb-2 uppercase">ROA</p>
          <p class="text-3xl font-bold text-emerald-600"><?php echo $key_metrics['roa']; ?>%</p>
          <p class="text-xs text-gray-500 mt-2">자산수익률</p>
        </div>

        <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-lg text-center">
          <p class="text-sm text-slate-600 font-semibold mb-2 uppercase">ROE</p>
          <p class="text-3xl font-bold text-blue-600"><?php echo $key_metrics['roe']; ?>%</p>
          <p class="text-xs text-gray-500 mt-2">자기자본수익률</p>
        </div>

        <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-lg text-center">
          <p class="text-sm text-slate-600 font-semibold mb-2 uppercase">부채비율</p>
          <p class="text-3xl font-bold text-purple-600"><?php echo $key_metrics['debt_ratio']; ?>%</p>
          <p class="text-xs text-gray-500 mt-2">안정성 지표</p>
        </div>

        <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-lg text-center">
          <p class="text-sm text-slate-600 font-semibold mb-2 uppercase">유동비율</p>
          <p class="text-3xl font-bold text-orange-600"><?php echo $key_metrics['current_ratio']; ?>배</p>
          <p class="text-xs text-gray-500 mt-2">유동성 지표</p>
        </div>

        <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-lg text-center">
          <p class="text-sm text-slate-600 font-semibold mb-2 uppercase">당좌비율</p>
          <p class="text-3xl font-bold text-pink-600"><?php echo $key_metrics['quick_ratio']; ?>배</p>
          <p class="text-xs text-gray-500 mt-2">긴급유동성</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 영업이익률 추이 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-12">
        <h2 class="text-3xl font-bold mb-2">영업이익률 추이</h2>
        <p class="text-gray-600 text-lg">수익성 개선 추이</p>
      </div>

      <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg">
        <canvas id="profitMarginChart" style="max-height: 300px;"></canvas>
      </div>
    </div>
  </section>

  <!-- 공시 정보 링크 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-12 text-center">
        <h2 class="text-4xl font-bold mb-4">공식 공시 정보</h2>
        <p class="text-gray-600 text-lg mb-8">더 자세한 정보는 공식 채널을 통해 확인하세요</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <a href="https://dart.fss.or.kr/" target="_blank" class="p-8 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg border border-blue-200 hover:shadow-lg transition">
            <p class="text-3xl mb-3">📄</p>
            <h3 class="text-2xl font-bold text-slate-900 mb-2">전자공시시스템</h3>
            <p class="text-slate-600">DART 공식 공시 정보</p>
          </a>

          <a href="/ir/info.php" class="p-8 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-lg border border-emerald-200 hover:shadow-lg transition">
            <p class="text-3xl mb-3">📊</p>
            <h3 class="text-2xl font-bold text-slate-900 mb-2">IR 정보</h3>
            <p class="text-slate-600">회사 소개 및 공지사항</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>

  <script src="/assets/js/main.js"></script>
  <script>
    // 매출액 & 순이익 차트
    const ctx1 = document.getElementById('financialChart').getContext('2d');
    new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['2024년', '2025년', '2026년(E)'],
        datasets: [
          {
            label: '매출액',
            data: [847200, 923500, 1015600],
            backgroundColor: '#00b96b',
            borderColor: '#00b96b',
            borderWidth: 1
          },
          {
            label: '순이익',
            data: [54180, 68970, 81250],
            backgroundColor: '#0891df',
            borderColor: '#0891df',
            borderWidth: 1
          }
        ]
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
            beginAtZero: true,
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

    // 영업이익률 차트
    const ctx2 = document.getElementById('profitMarginChart').getContext('2d');
    new Chart(ctx2, {
      type: 'line',
      data: {
        labels: ['2024년', '2025년', '2026년(E)'],
        datasets: [{
          label: '영업이익률 (%)',
          data: [8.07, 8.92, 9.58],
          borderColor: '#00b96b',
          backgroundColor: 'rgba(0, 185, 107, 0.1)',
          borderWidth: 3,
          tension: 0.4,
          fill: true,
          pointRadius: 8,
          pointBackgroundColor: '#00b96b',
          pointBorderColor: '#fff',
          pointBorderWidth: 2
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
            beginAtZero: true,
            max: 12,
            ticks: { color: '#64748b', font: { size: 12 }, callback: function(value) { return value + '%'; } },
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
