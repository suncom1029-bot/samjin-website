<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OA 제품 - 삼진엘앤디</title>
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
          <span class="text-emerald-400 font-semibold">OA 제품</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        업무 효율의<br>최적화
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        사무 자동화 장비의 핵심 부품으로 생산성을 높입니다
      </p>
    </div>
  </section>

  <!-- 제품 개요 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- 이미지 -->
        <div class="rounded-lg overflow-hidden">
          <img src="/assets/img/sub_oa_img.jpg" alt="OA 제품" class="w-full h-auto object-cover rounded-lg">
        </div>

        <!-- 설명 -->
        <div class="space-y-8">
          <div>
            <h2 class="text-4xl font-bold mb-4">핵심 솔루션</h2>
            <p class="text-slate-700 text-lg leading-relaxed">
              복합기, 프린터 등 사무자동화 기기의 핵심 부품인 Finisher 및 정렬 시스템을 공급합니다.
              정밀한 기계 부품과 제어 기술로 문서 처리의 자동화와 효율성을 극대화합니다.
            </p>
          </div>

          <div class="space-y-4">
            <h3 class="text-2xl font-bold text-slate-900">주요 제품</h3>
            <ul class="space-y-2 text-slate-700">
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>Finisher — 자동 정렬 및 스테이플링</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>정렬 시스템 — 고속 문서 분류</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>구동 부품 — 정밀 전기기계 조립품</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 제품 특징 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">제품 특징</h2>
        <p class="text-gray-500 text-lg">신뢰할 수 있는 업무 파트너</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- 특징 1: 고속 처리 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-blue-100 text-blue-600 mb-4">
            <span class="text-xl font-bold">1</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">고속 처리 능력</h3>
          <p class="text-slate-700">
            분당 최대 600매 이상의 고속 문서 처리로 업무 효율성 극대화
          </p>
        </div>

        <!-- 특징 2: 정확한 정렬 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-emerald-100 text-emerald-600 mb-4">
            <span class="text-xl font-bold">2</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">정밀한 정렬</h3>
          <p class="text-slate-700">
            오류 없는 자동 정렬로 문서 품질과 신뢰성 보장
          </p>
        </div>

        <!-- 특징 3: 장기 내구성 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-purple-100 text-purple-600 mb-4">
            <span class="text-xl font-bold">3</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">우수한 내구성</h3>
          <p class="text-slate-700">
            고강도 부품과 최적화된 설계로 장기간 안정적인 운영 가능
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
        <p class="text-gray-500 text-lg">사무 자동화의 중심</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg border border-blue-200">
          <p class="text-3xl mb-3">🖨️</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">복합기</h3>
          <p class="text-sm text-slate-700">프린터·스캔·복사기</p>
        </div>
        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-6 rounded-lg border border-emerald-200">
          <p class="text-3xl mb-3">🖥️</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">고속 프린터</h3>
          <p class="text-sm text-slate-700">고용량 출력기</p>
        </div>
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg border border-purple-200">
          <p class="text-3xl mb-3">📄</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">문서정렬기</h3>
          <p class="text-sm text-slate-700">자동 분류 시스템</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 주요 고객사 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">주요 고객사</h2>
        <p class="text-gray-500 text-lg">글로벌 사무기기 제조사</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">삼성전자</p>
          <p class="text-sm text-gray-600">복합기·프린터</p>
        </div>
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">LG계열사</p>
          <p class="text-sm text-gray-600">OA 기기</p>
        </div>
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">해외 브랜드</p>
          <p class="text-sm text-gray-600">OEM 공급</p>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
