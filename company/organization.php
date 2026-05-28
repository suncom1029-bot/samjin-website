<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>조직도 - 삼진엘앤디</title>
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
          <a href="#" class="hover:text-emerald-400 transition">회사소개</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">조직도</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        투명하고 효율적인<br>조직 구조
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        신뢰와 역량 중심의 수평적 조직 문화
      </p>
    </div>
  </section>

  <!-- 조직도 -->
  <section class="section-lg bg-white">
    <div class="max-w-6xl mx-auto px-6 lg:px-12">
      <div class="mb-12 text-center">
        <h2 class="text-4xl font-bold mb-4">조직 구조</h2>
        <p class="text-gray-500 text-lg">투명하고 효율적인 조직으로 글로벌 시장을 선도합니다</p>
      </div>

      <!-- 조직도 이미지 -->
      <div class="rounded-lg overflow-hidden shadow-lg">
        <img src="/assets/img/organization-chart.png" alt="삼진엘앤디 조직도" class="w-full h-auto">
      </div>
    </div>
  </section>

  <!-- 조직 문화 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">우리의 조직 문화</h2>
        <p class="text-gray-500 text-lg">삼진엘앤디만의 특별한 가치</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- 수평적 소통 -->
        <div class="bg-white p-8 rounded-lg border-2 border-emerald-200 shadow-md hover:shadow-lg transition">
          <p class="text-4xl mb-4">🤝</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">수평적 소통</h3>
          <p class="text-slate-700 leading-relaxed">
            직급보다는 신뢰와 역량을 중시합니다. 모든 직원의 의견은 소중하며, 열린 커뮤니케이션을 장려합니다.
          </p>
        </div>

        <!-- 도전과 혁신 -->
        <div class="bg-white p-8 rounded-lg border-2 border-blue-200 shadow-md hover:shadow-lg transition">
          <p class="text-4xl mb-4">🚀</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">도전과 혁신</h3>
          <p class="text-slate-700 leading-relaxed">
            실패를 두려워하지 않습니다. 새로운 아이디어와 도전을 적극 장려하며, 지속적인 혁신을 추구합니다.
          </p>
        </div>

        <!-- 지속적 성장 -->
        <div class="bg-white p-8 rounded-lg border-2 border-purple-200 shadow-md hover:shadow-lg transition">
          <p class="text-4xl mb-4">📈</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">지속적 성장</h3>
          <p class="text-slate-700 leading-relaxed">
            개인의 역량 개발과 경력 발전을 적극 지원합니다. 함께 성장하는 것이 우리의 목표입니다.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 채용 CTA -->
  <section class="section-lg bg-gradient-to-r from-emerald-500 to-emerald-600 text-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12 text-center">
      <h2 class="text-3xl lg:text-4xl font-bold mb-4">함께 성장할 인재를 찾습니다</h2>
      <p class="text-lg text-emerald-50 mb-8">
        삼진엘앤디의 일원이 되어 글로벌 시장에서 함께 성장해보세요
      </p>
      <a href="/recruit/jobs.php" class="inline-block bg-white text-emerald-600 font-bold py-3 px-8 rounded-lg hover:bg-slate-100 transition shadow-lg">
        채용공고 보기 →
      </a>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
