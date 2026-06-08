<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>수소 탱크 - 삼진엘앤디</title>
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
          <span class="text-emerald-400 font-semibold">수소 탱크</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        수소 모빌리티의 미래를<br>설계하다
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        초경량 플라스틱 라이너 기술로 수소 에너지의 가능성을 확대합니다
      </p>
    </div>
  </section>

  <!-- 제품 개요 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- 이미지 -->
        <div class="rounded-lg overflow-hidden bg-gradient-to-br from-slate-100 to-slate-50 h-96 flex items-center justify-center">
          <div class="text-center">
            <div class="text-6xl mb-3">🧪</div>
            <p class="text-slate-500 font-semibold">수소 탱크 시각화</p>
          </div>
        </div>

        <!-- 설명 -->
        <div class="space-y-8">
          <div>
            <h2 class="text-4xl font-bold mb-4">핵심 기술</h2>
            <p class="text-slate-700 text-lg leading-relaxed">
              초경량 플라스틱 라이너(Plastic Liner) 자체 설계·개발로 수소 탱크의 경량화를 실현합니다.
              기존 금속 탱크 대비 60% 이상 경량화로 수소 모빌리티의 주행거리를 혁신적으로 연장합니다.
            </p>
          </div>

          <div class="space-y-4">
            <h3 class="text-2xl font-bold text-slate-900">적용 분야</h3>
            <ul class="space-y-2 text-slate-700">
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>수소충전소용 이동형 저장용기 — 고속 충전 네트워크 확충</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>그린수소 저장 탱크 — 재생에너지 연계 저장</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>드론·UAV 에너지 저장 모듈 — 비행 시간 대폭 증대</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>연료전지 발전 시스템 — 고효율 수소 공급</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 개발 현황 & 로드맵 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">개발 현황</h2>
        <p class="text-gray-500 text-lg">2026년 6월 TPED/ADR 국제 인증 목표</p>
      </div>

      <!-- 타임라인 -->
      <div class="relative max-w-4xl mx-auto">
        <div class="absolute left-0 md:left-1/2 md:transform md:-translate-x-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-emerald-400 to-emerald-600"></div>

        <div class="space-y-12 relative">
          <!-- 2023 -->
          <div class="md:grid md:grid-cols-2 md:gap-12">
            <div class="md:text-right md:pr-12">
              <div class="bg-white p-6 rounded-lg border-2 border-emerald-400 shadow-lg">
                <p class="text-sm font-semibold text-emerald-600 mb-2">2023년</p>
                <h3 class="text-xl font-bold text-slate-900 mb-2">기초 설계 착수</h3>
                <p class="text-slate-700">플라스틱 라이너 소재 선정 및 초기 설계 검증</p>
              </div>
            </div>
            <div class="hidden md:block"></div>
          </div>

          <!-- 2024 -->
          <div class="md:grid md:grid-cols-2 md:gap-12">
            <div class="hidden md:block"></div>
            <div class="md:pl-12">
              <div class="bg-white p-6 rounded-lg border-2 border-emerald-400 shadow-lg">
                <p class="text-sm font-semibold text-emerald-600 mb-2">2024년 9월</p>
                <h3 class="text-xl font-bold text-slate-900 mb-2">설계 검증 완료</h3>
                <p class="text-slate-700">압력 시뮬레이션, 구조 안전성 검증</p>
              </div>
            </div>
          </div>

          <!-- 2026 -->
          <div class="md:grid md:grid-cols-2 md:gap-12">
            <div class="md:text-right md:pr-12">
              <div class="bg-white p-6 rounded-lg border-2 border-emerald-500 shadow-lg ring-2 ring-emerald-200">
                <p class="text-sm font-semibold text-emerald-600 mb-2">2026년 6월 (목표)</p>
                <h3 class="text-xl font-bold text-slate-900 mb-2">TPED/ADR 인증</h3>
                <p class="text-slate-700">국제 운송 규격 인증 획득 및 양산 시작</p>
              </div>
            </div>
            <div class="hidden md:block"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 핵심 기술 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">혁신 기술</h2>
        <p class="text-gray-500 text-lg">수소 에너지의 미래를 만드는 기술</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- 기술 1 -->
        <div class="bg-gradient-to-br from-slate-50 to-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-emerald-100 text-emerald-600 mb-4">
            <span class="text-2xl">⚡</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">경량 복합재 설계</h3>
          <p class="text-slate-700">
            첨단 플라스틱 라이너로 무게를 극도로 절감하면서도 극한의 고압(70MPa) 조건에서 안전성 보증
          </p>
        </div>

        <!-- 기술 2 -->
        <div class="bg-gradient-to-br from-slate-50 to-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-emerald-100 text-emerald-600 mb-4">
            <span class="text-2xl">🔬</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">자체 설계·개발</h3>
          <p class="text-slate-700">
            소재 선정부터 구조 설계, 충격/피로 해석까지 모든 기술을 독자적으로 보유
          </p>
        </div>

        <!-- 기술 3 -->
        <div class="bg-gradient-to-br from-slate-50 to-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-emerald-100 text-emerald-600 mb-4">
            <span class="text-2xl">✓</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">국제 인증 기준</h3>
          <p class="text-slate-700">
            TPED(수소 튜브 트레일러), ADR(국제 운송 규격) 등 글로벌 표준 준수
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why It Matters -->
  <section class="section-lg bg-emerald-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-4xl font-bold mb-6">왜 중요한가?</h2>
          <p class="text-lg text-slate-700 mb-6 leading-relaxed">
            수소 모빌리티(수소자동차, 수소충전소)의 확산을 가로막는 가장 큰 과제는 <strong>탱크의 무게</strong>입니다.
            무거운 탱크는 주행거리를 단축시키고, 충전 인프라 구축 비용을 증가시킵니다.
          </p>
          <p class="text-lg text-slate-700 mb-6 leading-relaxed">
            초경량 플라스틱 라이너 기술로 이 난제를 해결하면, 수소 에너지가 정말 실용적인 선택지가 됩니다.
          </p>
          <ul class="space-y-3">
            <li class="flex gap-3">
              <span class="text-emerald-600 font-bold">→</span>
              <span class="text-slate-700">자동차 주행거리 40% 이상 연장</span>
            </li>
            <li class="flex gap-3">
              <span class="text-emerald-600 font-bold">→</span>
              <span class="text-slate-700">충전소 저장 용량 증대</span>
            </li>
            <li class="flex gap-3">
              <span class="text-emerald-600 font-bold">→</span>
              <span class="text-slate-700">드론/UAV 비행 시간 획기적 증대</span>
            </li>
          </ul>
        </div>
        <div class="rounded-lg overflow-hidden bg-gradient-to-br from-slate-100 to-slate-50 h-96 flex items-center justify-center">
          <div class="text-center">
            <div class="text-6xl mb-3">🚗</div>
            <p class="text-slate-500 font-semibold">수소 모빌리티</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
