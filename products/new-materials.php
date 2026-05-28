<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>신소재 사업 - 삼진엘앤디</title>
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
          <a href="#" class="hover:text-emerald-400 transition">제품소개</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">신소재 사업</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        미래를 바꾸는<br>신소재 기술
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        경량화 복합소재부터 친환경 고기능성 소재까지, AI 시대의 신소재 솔루션 제공
      </p>
    </div>
  </section>

  <!-- 제품 개요 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- 이미지 -->
        <div class="rounded-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=600&h=400&fit=crop" alt="신소재 사업" class="w-full h-auto object-cover rounded-lg">
        </div>

        <!-- 설명 -->
        <div class="space-y-8">
          <div>
            <h2 class="text-4xl font-bold mb-4">무엇이 다른가?</h2>
            <p class="text-slate-700 text-lg leading-relaxed">
              탄소복합재, 고성능 엔지니어링 플라스틱, 친환경 바이오 소재 등으로
              전자, 자동차, 에너지 산업의 차세대 요구에 대응합니다.
              38년의 정밀 제조 노하우를 바탕으로 신소재 개발·양산화를 주도합니다.
            </p>
          </div>

          <div class="space-y-4">
            <h3 class="text-2xl font-bold text-slate-900">주요 소재</h3>
            <ul class="space-y-2 text-slate-700">
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>탄소복합재(CFRP) — 경량화, 고강도, 자동차·항공 부품용</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>고기능성 엔지니어링 플라스틱 — 내열성, 절연성 극대화</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>바이오 친환경 소재 — 지속가능한 생산, ESG 대응</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 기술 특징 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">기술 특징</h2>
        <p class="text-gray-500 text-lg">신소재로 미래를 선도</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- 특징 1: 소재 개발 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-blue-100 text-blue-600 mb-4">
            <span class="text-xl font-bold">1</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">맞춤형 소재 개발</h3>
          <p class="text-slate-700">
            고객 요구 사양에 맞춘 신소재 설계 및 개발, 빠른 프로토타이핑
          </p>
        </div>

        <!-- 특징 2: 양산 기술 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-emerald-100 text-emerald-600 mb-4">
            <span class="text-xl font-bold">2</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">신뢰성 있는 양산</h3>
          <p class="text-slate-700">
            대량생산 공정 확보, 품질 일관성 보증, 글로벌 기준 준수
          </p>
        </div>

        <!-- 특징 3: 지속가능성 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-purple-100 text-purple-600 mb-4">
            <span class="text-xl font-bold">3</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">친환경 솔루션</h3>
          <p class="text-slate-700">
            저탄소·재활용 가능한 소재 개발, ESG 경영 실현
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 적용 분야 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">적용 분야</h2>
        <p class="text-gray-500 text-lg">신소재로 혁신하는 산업</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg border border-blue-200">
          <p class="text-3xl mb-3">🚗</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">자동차·EV</h3>
          <p class="text-sm text-slate-700">경량화 부품·배터리 케이스</p>
        </div>
        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-6 rounded-lg border border-emerald-200">
          <p class="text-3xl mb-3">⚡</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">에너지·배터리</h3>
          <p class="text-sm text-slate-700">ESS·UPS 케이스</p>
        </div>
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg border border-purple-200">
          <p class="text-3xl mb-3">📱</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">전자기기</h3>
          <p class="text-sm text-slate-700">AI 디바이스 부품</p>
        </div>
        <div class="bg-gradient-to-br from-amber-50 to-amber-100 p-6 rounded-lg border border-amber-200">
          <p class="text-3xl mb-3">✈️</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">항공·우주</h3>
          <p class="text-sm text-slate-700">고강도 복합재</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 주요 고객사 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">주요 고객사</h2>
        <p class="text-gray-500 text-lg">글로벌 혁신 기업들의 신뢰</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">현대·기아차</p>
          <p class="text-sm text-gray-600">EV·수소차 부품</p>
        </div>
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">삼성SDI·LG에너지</p>
          <p class="text-sm text-gray-600">배터리 소재</p>
        </div>
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">글로벌 OEM</p>
          <p class="text-sm text-gray-600">AI·5G 부품</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section-lg bg-gradient-to-r from-emerald-500 to-emerald-600 text-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12 text-center">
      <h2 class="text-3xl lg:text-4xl font-bold mb-4">신소재 솔루션이 필요하신가요?</h2>
      <p class="text-lg text-emerald-50 mb-8">
        삼진엘앤디와 함께 미래를 여는 신소재를 개발해보세요.
      </p>
      <a href="/support/inquiry.php" class="inline-block bg-white text-emerald-600 font-bold py-3 px-8 rounded-lg hover:bg-slate-100 transition shadow-lg">
        제품 문의 →
      </a>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
