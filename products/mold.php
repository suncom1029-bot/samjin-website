<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>금형 & 핫런너 - 삼진엘앤디</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/custom.css">

  <!-- Paperlogy 폰트 preload (성능 최적화) -->
  <link rel="preload" as="font" type="font/ttf" href="/assets/fonts/Paperlogy-4Regular.ttf" crossorigin="anonymous">
  <link rel="preload" as="font" type="font/ttf" href="/assets/fonts/Paperlogy-7Bold.ttf" crossorigin="anonymous">
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
          <span class="text-emerald-400 font-semibold">금형 & 핫런너</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        정밀함과 혁신의<br>결합
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        Hot Runner 핵심 기술로 글로벌 금형 시장을 선도합니다
      </p>
    </div>
  </section>

  <!-- 제품 개요 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- 이미지 -->
        <div class="rounded-lg overflow-hidden">
          <img src="/assets/img/runner.jpg" alt="금형 및 핫런너" class="w-full h-auto object-cover rounded-lg">
        </div>

        <!-- 설명 -->
        <div class="space-y-8">
          <div>
            <h2 class="text-4xl font-bold mb-4">기술 리더십</h2>
            <p class="text-slate-700 text-lg leading-relaxed">
              금형 설계 및 제조의 전문가로서, Hot Runner 기술에 대한 특허 5건을 보유하고 있습니다.
              초정밀 금형 기술로 글로벌 완성차, 가전사에 고부가가치 부품을 공급합니다.
            </p>
          </div>

          <div class="space-y-4">
            <h3 class="text-2xl font-bold text-slate-900">주요 제품</h3>
            <ul class="space-y-2 text-slate-700">
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>Hot Runner 시스템 — 온열 유지식 게이트 시스템</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>정밀 금형 — 자동차·가전 부품용 금형</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>고급 금형 — 다층·복합 금형</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Hot Runner 기술 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">Hot Runner 기술</h2>
        <p class="text-gray-500 text-lg">5건의 특허로 입증된 핵심 기술</p>
      </div>

      <div class="space-y-8">
        <!-- 기술 1 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-start gap-6">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-14 w-14 rounded-full bg-emerald-100 text-emerald-600">
                <span class="text-xl font-bold">1</span>
              </div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-900 mb-2">온도 제어 시스템</h3>
              <p class="text-slate-700">
                가열 채널의 최적 온도 유지로 사출 품질 극대화
              </p>
            </div>
          </div>
        </div>

        <!-- 기술 2 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-start gap-6">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-14 w-14 rounded-full bg-blue-100 text-blue-600">
                <span class="text-xl font-bold">2</span>
              </div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-900 mb-2">에너지 효율성</h3>
              <p class="text-slate-700">
                불필요한 열 손실을 최소화하여 생산 원가 절감
              </p>
            </div>
          </div>
        </div>

        <!-- 기술 3 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-start gap-6">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-14 w-14 rounded-full bg-purple-100 text-purple-600">
                <span class="text-xl font-bold">3</span>
              </div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-900 mb-2">사이클 타임 단축</h3>
              <p class="text-slate-700">
                고속 냉각으로 생산 효율성 향상 및 생산량 증대
              </p>
            </div>
          </div>
        </div>

        <!-- 기술 4 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-start gap-6">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-14 w-14 rounded-full bg-amber-100 text-amber-600">
                <span class="text-xl font-bold">4</span>
              </div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-900 mb-2">초정밀 설계</h3>
              <p class="text-slate-700">
                0.01mm 수준의 정밀도로 복잡한 형상 구현 가능
              </p>
            </div>
          </div>
        </div>

        <!-- 기술 5 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-start gap-6">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-14 w-14 rounded-full bg-teal-100 text-teal-600">
                <span class="text-xl font-bold">5</span>
              </div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-900 mb-2">다중 게이트 시스템</h3>
              <p class="text-slate-700">
                대형·복잡 부품의 균일한 충전 및 품질 보증
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 적용 분야 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">적용 분야</h2>
        <p class="text-gray-500 text-lg">다양한 산업의 정밀 부품</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg border border-blue-200">
          <p class="text-3xl mb-3">🚗</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">자동차</h3>
          <p class="text-sm text-slate-700">내외부 부품</p>
        </div>
        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-6 rounded-lg border border-emerald-200">
          <p class="text-3xl mb-3">🍳</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">가전제품</h3>
          <p class="text-sm text-slate-700">주방용품·세제통</p>
        </div>
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg border border-purple-200">
          <p class="text-3xl mb-3">📱</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">전자제품</h3>
          <p class="text-sm text-slate-700">케이싱·부품</p>
        </div>
        <div class="bg-gradient-to-br from-amber-50 to-amber-100 p-6 rounded-lg border border-amber-200">
          <p class="text-3xl mb-3">🏭</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">산업용</h3>
          <p class="text-sm text-slate-700">특수 부품</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 주요 고객사 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">주요 고객사</h2>
        <p class="text-gray-500 text-lg">글로벌 완성차 & 가전사</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">삼성전자</p>
          <p class="text-sm text-gray-600">가전 부품</p>
        </div>
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">현대자동차</p>
          <p class="text-sm text-gray-600">자동차 부품</p>
        </div>
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">글로벌사</p>
          <p class="text-sm text-gray-600">정밀 금형 공급</p>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
