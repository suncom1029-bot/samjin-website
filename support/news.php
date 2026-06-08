<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>뉴스센터 - 삼진엘앤디</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/custom.css">

  <!-- Paperlogy 폰트 preload (성능 최적화) -->
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
          <a href="#" class="hover:text-emerald-400 transition">고객지원</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">뉴스센터</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        뉴스센터
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        삼진엘앤디의 최신 소식과 활동을 전해드립니다
      </p>
    </div>
  </section>

  <!-- News List -->
  <section class="section-lg bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
      <div class="space-y-8">
        <?php
          $news_items = [
            [
              'date' => '2025.05.20',
              'title' => '삼진엘앤디, 글로벌 시장 진출 가속화',
              'summary' => '신규 해외 사업장 개설 및 글로벌 파트너십 강화로 세계 시장 진출을 가속화하고 있습니다. 한국, 미국, 멕시코, 베트남에 이어 추가 거점을 구축하며 글로벌 경쟁력을 강화해나가고 있습니다.',
              'category' => '경영소식'
            ],
            [
              'date' => '2025.04.15',
              'title' => '2024 품질경영 우수기업 인증 획득',
              'summary' => '국제 표준 품질경영 시스템 인증으로 제품 품질 우수성을 입증하였습니다. ISO 9001, IATF 16949 등 주요 국제 인증을 취득하여 세계 수준의 품질관리 체계를 구축했습니다.',
              'category' => '인증/수상'
            ],
            [
              'date' => '2025.03.10',
              'title' => 'Display 부품 글로벌 공급 계약 체결',
              'summary' => '주요 글로벌 완성차업체와 장기 공급 계약을 체결하여 사업 기반을 확대하였습니다. 이번 계약을 통해 북미 지역 시장 진출을 가속화할 예정입니다.',
              'category' => '비즈니스'
            ],
            [
              'date' => '2025.02.28',
              'title' => '2026년 신기술 개발 로드맵 발표',
              'summary' => 'AI 기반 스마트팩토리, 초정밀 금형 기술, 고기능성 신소재 등 3대 핵심 사업 분야의 기술 혁신 계획을 수립했습니다. 미래 먹거리 확보를 위한 전략적 투자를 지속할 예정입니다.',
              'category' => '기술뉴스'
            ],
            [
              'date' => '2025.01.20',
              'title' => '수소 탱크 개발 프로젝트 성공',
              'summary' => '초경량 플라스틱 라이너를 적용한 수소 탱크 개발에 성공했습니다. 2026년 상반기 TPED/ADR 인증 획득을 목표로 상용화 준비 중입니다.',
              'category' => '제품개발'
            ],
            [
              'date' => '2024.12.15',
              'title' => 'ESS·UPS 배터리 부품 수요 급증',
              'summary' => '신재생 에너지 확대에 따른 에너지 저장 장치(ESS) 수요 증가로 배터리 부품 생산이 급증하고 있습니다. 생산 시설 확충 및 인력 채용을 계획 중입니다.',
              'category' => '경영소식'
            ]
          ];
        ?>
        <?php foreach ($news_items as $item): ?>
          <article class="pb-8 border-b border-slate-200 hover:bg-slate-50 p-6 rounded-lg transition">
            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4 mb-4">
              <div>
                <div class="flex items-center gap-3 mb-3">
                  <span class="text-sm px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full font-semibold"><?php echo $item['category']; ?></span>
                  <span class="text-sm text-gray-500"><?php echo $item['date']; ?></span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3"><?php echo $item['title']; ?></h3>
                <p class="text-gray-600 leading-relaxed text-lg"><?php echo $item['summary']; ?></p>
              </div>
            </div>
            <div class="text-right">
              <a href="#" class="inline-block text-emerald-500 font-semibold hover:text-emerald-600 transition">
                자세히 보기 →
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Pagination -->
  <section class="section-lg bg-white border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
      <div class="flex justify-center items-center gap-2">
        <button class="px-4 py-2 text-slate-600 hover:text-emerald-500 transition">← 이전</button>
        <button class="px-4 py-2 bg-emerald-500 text-white rounded font-semibold">1</button>
        <button class="px-4 py-2 text-slate-600 hover:text-emerald-500 transition">2</button>
        <button class="px-4 py-2 text-slate-600 hover:text-emerald-500 transition">3</button>
        <button class="px-4 py-2 text-slate-600 hover:text-emerald-500 transition">다음 →</button>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section-lg bg-gradient-to-r from-slate-900 to-slate-800 text-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12 text-center">
      <h2 class="text-3xl lg:text-4xl font-bold mb-6">더 궁금한 점이 있으신가요?</h2>
      <p class="text-gray-300 text-lg mb-8">삼진엘앤디에 대한 모든 문의사항을 고객 상담팀에 접수해주세요.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="/support/inquiry.php" class="px-8 py-3 bg-emerald-500 text-white font-semibold rounded-lg hover:bg-emerald-600 transition">
          고객문의
        </a>
        <a href="/" class="px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-slate-900 transition">
          홈으로
        </a>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
