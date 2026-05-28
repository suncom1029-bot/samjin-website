<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>채용공고 - 삼진엘앤디</title>
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
          <a href="#" class="hover:text-emerald-400 transition">채용정보</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">채용공고</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        함께할 인재를<br>찾습니다
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        삼진엘앤디와 함께 성장할 수 있는 기회입니다
      </p>
    </div>
  </section>

  <!-- 채용 공고 목록 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">현재 채용공고</h2>
        <p class="text-gray-500 text-lg">열려있는 직무를 확인하세요</p>
      </div>

      <div class="space-y-6">
        <!-- 공고 1 -->
        <div class="bg-white border border-slate-200 rounded-lg overflow-hidden hover:shadow-lg transition">
          <div class="p-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-4">
              <div>
                <h3 class="text-2xl font-bold text-slate-900">기술영업</h3>
                <p class="text-emerald-600 font-semibold mt-1">경기도 화성</p>
              </div>
              <div class="flex items-center gap-2">
                <span class="bg-emerald-100 text-emerald-700 px-4 py-2 rounded-full text-sm font-semibold">신입·경력</span>
              </div>
            </div>
            <p class="text-slate-700 mb-4">
              B2B 고객사와의 기술 영업 담당. 제품 설명, 샘플 공급, 기술 지원 업무
            </p>
            <button class="text-emerald-600 font-semibold hover:text-emerald-700 transition">상세 보기 →</button>
          </div>
        </div>

        <!-- 공고 2 -->
        <div class="bg-white border border-slate-200 rounded-lg overflow-hidden hover:shadow-lg transition">
          <div class="p-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-4">
              <div>
                <h3 class="text-2xl font-bold text-slate-900">연구개발(R&D) 엔지니어</h3>
                <p class="text-emerald-600 font-semibold mt-1">경기도 화성</p>
              </div>
              <div class="flex items-center gap-2">
                <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold">경력</span>
              </div>
            </div>
            <p class="text-slate-700 mb-4">
              신제품 개발, 공정 개선, 기술 혁신. 금형, 광학, AI 비전 분야 연구
            </p>
            <button class="text-emerald-600 font-semibold hover:text-emerald-700 transition">상세 보기 →</button>
          </div>
        </div>

        <!-- 공고 3 -->
        <div class="bg-white border border-slate-200 rounded-lg overflow-hidden hover:shadow-lg transition">
          <div class="p-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-4">
              <div>
                <h3 class="text-2xl font-bold text-slate-900">생산관리(PM)</h3>
                <p class="text-emerald-600 font-semibold mt-1">경기도 화성</p>
              </div>
              <div class="flex items-center gap-2">
                <span class="bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-semibold">신입·경력</span>
              </div>
            </div>
            <p class="text-slate-700 mb-4">
              생산 계획, 품질 관리, 공정 최적화 및 생산성 향상 업무
            </p>
            <button class="text-emerald-600 font-semibold hover:text-emerald-700 transition">상세 보기 →</button>
          </div>
        </div>

        <!-- 공고 4 -->
        <div class="bg-white border border-slate-200 rounded-lg overflow-hidden hover:shadow-lg transition">
          <div class="p-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-4">
              <div>
                <h3 class="text-2xl font-bold text-slate-900">품질관리(QA)</h3>
                <p class="text-emerald-600 font-semibold mt-1">경기도 화성</p>
              </div>
              <div class="flex items-center gap-2">
                <span class="bg-amber-100 text-amber-700 px-4 py-2 rounded-full text-sm font-semibold">신입·경력</span>
              </div>
            </div>
            <p class="text-slate-700 mb-4">
              제품 검사, 품질 기준 관리, IATF16949 준수 및 개선 업무
            </p>
            <button class="text-emerald-600 font-semibold hover:text-emerald-700 transition">상세 보기 →</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 복리후생 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">복리후생</h2>
        <p class="text-gray-500 text-lg">직원 행복이 우리의 우선입니다</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- 복지 1 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">🏠</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">기숙사 지원</h3>
          <p class="text-slate-700">
            편안한 숙면과 업무 복귀를 위한 쾌적한 기숙사 제공
          </p>
        </div>

        <!-- 복지 2 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">💪</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">스포츠센터</h3>
          <p class="text-slate-700">
            헬스, 배드민턴, 탁구 등 다양한 운동 시설 이용 가능
          </p>
        </div>

        <!-- 복지 3 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">💝</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">경조금 지원</h3>
          <p class="text-slate-700">
            결혼, 출산, 경조사 등 인생의 중요한 순간 함께합니다
          </p>
        </div>

        <!-- 복지 4 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">🎓</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">교육 지원</h3>
          <p class="text-slate-700">
            기술 교육, 자격증 취득, 해외 연수 등 성장 지원
          </p>
        </div>

        <!-- 복지 5 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">🏥</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">건강검진</h3>
          <p class="text-slate-700">
            정기 건강검진 및 건강 관리 프로그램 제공
          </p>
        </div>

        <!-- 복지 6 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">🎉</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">회식 & 야유회</h3>
          <p class="text-slate-700">
            팀 빌딩, 정기 회식, 체육대회 등 단합 활동
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 기업 문화 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">기업 문화</h2>
        <p class="text-gray-500 text-lg">삼진엘앤디가 추구하는 가치</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-lg border border-blue-200">
          <p class="text-3xl mb-4">🤝</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">수평적 소통</h3>
          <p class="text-slate-700">
            직급보다는 신뢰와 역량을 중시하는 열린 커뮤니케이션 문화
          </p>
        </div>

        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-8 rounded-lg border border-emerald-200">
          <p class="text-3xl mb-4">🚀</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">도전과 혁신</h3>
          <p class="text-slate-700">
            실패를 두려워하지 않고 새로운 도전을 장려하는 환경
          </p>
        </div>

        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-lg border border-purple-200">
          <p class="text-3xl mb-4">📈</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">지속적 성장</h3>
          <p class="text-slate-700">
            개인의 역량 개발과 경력 발전을 적극 지원합니다
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
