<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AI 지능화 - 삼진엘앤디</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/custom.css">

  <!-- Paperlogy 폰트 preload (성능 최적화) -->
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
          <a href="#" class="hover:text-emerald-400 transition">제품소개</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">AI 지능화</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        AI로 불량이 생기지 않는<br>환경을 설계합니다
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        초정밀 부품의 Zero Defect를 실현하는 스마트 팩토리
      </p>
    </div>
  </section>

  <!-- 핵심 개념 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- 이미지 -->
        <div class="rounded-lg overflow-hidden bg-gradient-to-br from-slate-100 to-slate-50 h-96 flex items-center justify-center">
          <div class="text-center">
            <div class="text-6xl mb-3">🤖🔬</div>
            <p class="text-slate-500 font-semibold">AI 비전 검사</p>
          </div>
        </div>

        <!-- 설명 -->
        <div class="space-y-8">
          <div>
            <h2 class="text-4xl font-bold mb-4">Zero Defect 스마트팩토리</h2>
            <p class="text-slate-700 text-lg leading-relaxed">
              ±0.01mm 초정밀 부품 생산 과정의 모든 단계를 AI가 감시합니다.
              불량이 발생하는 것을 사후에 감지하는 것이 아니라,
              불량이 생기지 않도록 사전에 설계하는 것입니다.
            </p>
          </div>

          <div class="space-y-4">
            <h3 class="text-2xl font-bold text-slate-900">포지셔닝 차이</h3>
            <ul class="space-y-2 text-slate-700">
              <li class="flex items-start gap-3">
                <span class="text-slate-400 line-through">불량 잡는 회사</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold">→</span>
                <span><strong>불량이 생기지 않는 환경을 설계하는 회사</strong></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 기술 사양 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">AI 품질 감시 시스템</h2>
        <p class="text-gray-500 text-lg">전체 생산 프로세스의 실시간 모니터링</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <!-- 사양 1 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg">
          <div class="mb-4">
            <div class="inline-block bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-sm font-semibold mb-3">
              정밀도
            </div>
            <h3 class="text-2xl font-bold text-slate-900">±0.01mm 검사</h3>
          </div>
          <p class="text-slate-700 mb-4">
            초정밀 부품의 미세한 편차까지 감지합니다.
            머리카락 굵기의 1/10 수준의 오차도 포착합니다.
          </p>
          <div class="text-sm text-slate-600">
            <p><strong>카메라:</strong> 고속 고해상도 비전 센서</p>
            <p><strong>처리:</strong> AI 딥러닝 기반 분석</p>
          </div>
        </div>

        <!-- 사양 2 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg">
          <div class="mb-4">
            <div class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-semibold mb-3">
              검사 항목
            </div>
            <h3 class="text-2xl font-bold text-slate-900">240+ 항목 자동 검사</h3>
          </div>
          <p class="text-slate-700 mb-4">
            복합 공정의 모든 검사 항목을 자동으로 수행합니다.
            사람이 놓칠 수 있는 결함을 100% 포착합니다.
          </p>
          <div class="text-sm text-slate-600">
            <p><strong>검사 항목:</strong> 외관, 치수, 색상, 표면, 조립 등</p>
            <p><strong>실시간 피드백:</strong> 즉시 생산 중단 및 조정</p>
          </div>
        </div>

        <!-- 사양 3 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg">
          <div class="mb-4">
            <div class="inline-block bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold mb-3">
              개발 역량
            </div>
            <h3 class="text-2xl font-bold text-slate-900">100% 자체 개발</h3>
          </div>
          <p class="text-slate-700 mb-4">
            AI 비전 검사 시스템을 완전히 독자적으로 개발했습니다.
            외부 솔루션이 아닌 우리의 노하우가 녹아있습니다.
          </p>
          <div class="text-sm text-slate-600">
            <p><strong>소유권:</strong> 자체 개발, 독점 기술</p>
            <p><strong>맞춤 설정:</strong> 제품별 검사 알고리즘 커스터마이징</p>
          </div>
        </div>

        <!-- 사양 4 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg">
          <div class="mb-4">
            <div class="inline-block bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold mb-3">
              학습
            </div>
            <h3 class="text-2xl font-bold text-slate-900">지속적 학습</h3>
          </div>
          <p class="text-slate-700 mb-4">
            매일 수집되는 검사 데이터로 AI가 더욱 똑똑해집니다.
            제품 변경 시 자동으로 재학습됩니다.
          </p>
          <div class="text-sm text-slate-600">
            <p><strong>학습 방식:</strong> 머신러닝 + 강화학습</p>
            <p><strong>정확도 향상:</strong> 분기마다 개선 스프린트</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 적용 사례 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">구현 현황</h2>
        <p class="text-gray-500 text-lg">실제 제조 현장의 AI 지능화</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- 사례 1 -->
        <div class="relative overflow-hidden rounded-lg border border-slate-200 shadow-lg">
          <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-emerald-400 to-emerald-600"></div>
          <div class="p-8">
            <h3 class="text-2xl font-bold text-slate-900 mb-3">배터리 ESS 부품</h3>
            <p class="text-slate-700 mb-6">
              ESS Holder, Busbar Cover, Module Outer 등 고정밀 배터리 부품을
              AI 비전 검사로 100% 품질 보증합니다.
            </p>
            <div class="space-y-3">
              <div class="flex justify-between">
                <span class="text-slate-700">불량율 감소</span>
                <span class="font-bold text-emerald-600">0.1% → 0.02%</span>
              </div>
              <div class="flex justify-between">
                <span class="text-slate-700">검사 속도</span>
                <span class="font-bold text-emerald-600">100% 자동화</span>
              </div>
              <div class="flex justify-between">
                <span class="text-slate-700">비용 절감</span>
                <span class="font-bold text-emerald-600">검사원 90% 감소</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 사례 2 -->
        <div class="relative overflow-hidden rounded-lg border border-slate-200 shadow-lg">
          <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 to-blue-600"></div>
          <div class="p-8">
            <h3 class="text-2xl font-bold text-slate-900 mb-3">자동차 부품</h3>
            <p class="text-slate-700 mb-6">
              자동차 핵심 부품(Busbar Cover, Electrical Connector 등)의
              초정밀 치수 검사를 AI가 담당합니다.
            </p>
            <div class="space-y-3">
              <div class="flex justify-between">
                <span class="text-slate-700">허용 오차</span>
                <span class="font-bold text-blue-600">±0.01mm</span>
              </div>
              <div class="flex justify-between">
                <span class="text-slate-700">고객 승인</span>
                <span class="font-bold text-blue-600">현대·GM 인증</span>
              </div>
              <div class="flex justify-between">
                <span class="text-slate-700">검사 신뢰도</span>
                <span class="font-bold text-blue-600">99.8%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 기술 구성 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">기술 아키텍처</h2>
        <p class="text-gray-500 text-lg">AI 기반 스마트팩토리의 핵심 요소</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- 기술 1 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-emerald-100 text-emerald-600 mb-4">
            <span class="text-2xl">📷</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">고속 카메라</h3>
          <p class="text-slate-700 text-sm">
            마이크로 단위 결함을 포착하는 고해상도 비전 센서.
            초당 240프레임 이상 고속 처리.
          </p>
        </div>

        <!-- 기술 2 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-emerald-100 text-emerald-600 mb-4">
            <span class="text-2xl">🧠</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">AI 분석 엔진</h3>
          <p class="text-slate-700 text-sm">
            딥러닝 기반 이미지 분석으로 결함을 자동 분류.
            오류율 0.1% 이하의 초고정확도.
          </p>
        </div>

        <!-- 기술 3 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-emerald-100 text-emerald-600 mb-4">
            <span class="text-2xl">⚙️</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">자동 제어</h3>
          <p class="text-slate-700 text-sm">
            AI 판정 결과에 따라 자동으로 생산 라인을 제어.
            불량품 즉시 분류, 정상품만 진행.
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
          <h2 class="text-4xl font-bold mb-6">경쟁 우위</h2>
          <p class="text-lg text-slate-700 mb-6 leading-relaxed">
            배터리, 자동차 산업은 <strong>0.01% 불량율 차이</strong>가 수억 원대 계약을 좌우합니다.
            우리의 AI 검사 시스템은 이 차이를 결정하는 '품질 경쟁력'입니다.
          </p>
          <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg border-l-4 border-emerald-600">
              <p class="font-semibold text-slate-900 mb-1">1️⃣ 글로벌 기준 충족</p>
              <p class="text-sm text-slate-700">GM, 현대차, 삼성SDI 등 Tier 1 고객의 까다로운 기준 충족</p>
            </div>
            <div class="bg-white p-4 rounded-lg border-l-4 border-emerald-600">
              <p class="font-semibold text-slate-900 mb-1">2️⃣ 비용 최적화</p>
              <p class="text-sm text-slate-700">검사원 비용 90% 절감하고 정확도는 99.8% 달성</p>
            </div>
            <div class="bg-white p-4 rounded-lg border-l-4 border-emerald-600">
              <p class="font-semibold text-slate-900 mb-1">3️⃣ 지속적 개선</p>
              <p class="text-sm text-slate-700">AI 학습으로 매달 정확도가 향상됨</p>
            </div>
          </div>
        </div>
        <div class="rounded-lg overflow-hidden bg-gradient-to-br from-slate-100 to-slate-50 h-96 flex items-center justify-center">
          <div class="text-center">
            <div class="text-6xl mb-3">🏆</div>
            <p class="text-slate-500 font-semibold">글로벌 품질 경쟁력</p>
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
