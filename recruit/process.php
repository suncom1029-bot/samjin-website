<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>채용절차 - 삼진엘앤디</title>
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
          <a href="#" class="hover:text-emerald-400 transition">채용정보</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">채용절차</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        함께 성장하는<br>채용 과정
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        투명하고 공정한 채용절차로 최고의 인재를 찾습니다
      </p>
    </div>
  </section>

  <!-- 채용 프로세스 -->
  <section class="section-lg bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-20 text-center">
        <h2 class="text-4xl font-bold mb-4">채용 프로세스</h2>
        <p class="text-gray-300 text-lg">투명하고 공정한 5단계 선발 과정</p>
      </div>

      <!-- 데스크탑 버전: 가로 배치 -->
      <div class="hidden lg:block">
        <div class="relative">
          <!-- 연결선 배경 -->
          <div class="absolute top-7 left-0 right-0 h-0.5 bg-emerald-500 opacity-30 z-0"></div>

          <!-- 5개 열 -->
          <div class="grid grid-cols-5 gap-6">
            <!-- STEP 1 -->
            <div class="relative z-10">
              <div class="flex justify-center mb-8">
                <div class="w-14 h-14 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-xl">1</div>
              </div>
              <div class="bg-white text-slate-900 p-6 rounded-lg border-t-2 border-emerald-500 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <p class="text-xs font-semibold text-emerald-400 tracking-widest uppercase mb-3">STEP 01</p>
                <h3 class="text-lg font-bold mb-3">서류접수</h3>
                <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                  채용 공고 확인 후 이력서와 자기소개서를 제출합니다. 온라인 접수 가능합니다.
                </p>
                <div class="pt-3 border-t border-slate-200">
                  <span class="inline-block bg-emerald-900 text-emerald-300 text-xs font-semibold rounded-full px-3 py-1">공고기간 내</span>
                </div>
              </div>
            </div>

            <!-- STEP 2 -->
            <div class="relative z-10">
              <div class="flex justify-center mb-8">
                <div class="w-14 h-14 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-xl">2</div>
              </div>
              <div class="bg-white text-slate-900 p-6 rounded-lg border-t-2 border-emerald-500 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <p class="text-xs font-semibold text-emerald-400 tracking-widest uppercase mb-3">STEP 02</p>
                <h3 class="text-lg font-bold mb-3">서류심사</h3>
                <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                  지원 서류를 정량·정성 평가합니다. 합격자에게 면접 일정을 개별 통보합니다.
                </p>
                <div class="pt-3 border-t border-slate-200">
                  <span class="inline-block bg-emerald-900 text-emerald-300 text-xs font-semibold rounded-full px-3 py-1">영업일 3~5일</span>
                </div>
              </div>
            </div>

            <!-- STEP 3 -->
            <div class="relative z-10">
              <div class="flex justify-center mb-8">
                <div class="w-14 h-14 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-xl">3</div>
              </div>
              <div class="bg-white text-slate-900 p-6 rounded-lg border-t-2 border-emerald-500 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <p class="text-xs font-semibold text-emerald-400 tracking-widest uppercase mb-3">STEP 03</p>
                <h3 class="text-lg font-bold mb-3">면접</h3>
                <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                  1차 직무역량 면접, 2차 임원 인성 면접을 진행합니다. 대면·화상 병행.
                </p>
                <div class="pt-3 border-t border-slate-200">
                  <span class="inline-block bg-emerald-900 text-emerald-300 text-xs font-semibold rounded-full px-3 py-1">대면 / 화상</span>
                </div>
              </div>
            </div>

            <!-- STEP 4 -->
            <div class="relative z-10">
              <div class="flex justify-center mb-8">
                <div class="w-14 h-14 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-xl">4</div>
              </div>
              <div class="bg-white text-slate-900 p-6 rounded-lg border-t-2 border-emerald-500 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <p class="text-xs font-semibold text-emerald-400 tracking-widest uppercase mb-3">STEP 04</p>
                <h3 class="text-lg font-bold mb-3">최종합격</h3>
                <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                  전형위원회 최종 검토 후 합격 여부를 결정합니다. 이메일·전화로 개별 통보.
                </p>
                <div class="pt-3 border-t border-slate-200">
                  <span class="inline-block bg-emerald-900 text-emerald-300 text-xs font-semibold rounded-full px-3 py-1">이메일 / 전화</span>
                </div>
              </div>
            </div>

            <!-- STEP 5 -->
            <div class="relative z-10">
              <div class="flex justify-center mb-8">
                <div class="w-14 h-14 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-xl">5</div>
              </div>
              <div class="bg-white text-slate-900 p-6 rounded-lg border-t-2 border-emerald-500 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <p class="text-xs font-semibold text-emerald-400 tracking-widest uppercase mb-3">STEP 05</p>
                <h3 class="text-lg font-bold mb-3">입사</h3>
                <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                  정해진 입사일에 신입사원 교육 후 배치 부서에 배정됩니다. 선배 멘토링 제공.
                </p>
                <div class="pt-3 border-t border-slate-200">
                  <span class="inline-block bg-emerald-900 text-emerald-300 text-xs font-semibold rounded-full px-3 py-1">멘토링 지원</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 모바일 버전: 세로 타임라인 -->
      <div class="lg:hidden space-y-6">
        <div class="relative pl-8">
          <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center font-bold text-white text-sm">1</div>
          <div class="bg-white text-slate-900 p-5 rounded-lg border-t-2 border-emerald-500">
            <p class="text-xs font-semibold text-emerald-500 tracking-widest uppercase mb-2">STEP 01</p>
            <h3 class="text-base font-bold mb-2">서류접수</h3>
            <p class="text-sm text-slate-600 mb-3">채용 공고 확인 후 이력서와 자기소개서를 제출합니다. 온라인 접수 가능합니다.</p>
            <span class="inline-block bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full px-2 py-0.5">공고기간 내</span>
          </div>
        </div>

        <div class="relative pl-8">
          <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center font-bold text-white text-sm">2</div>
          <div class="bg-white text-slate-900 p-5 rounded-lg border-t-2 border-emerald-500">
            <p class="text-xs font-semibold text-emerald-500 tracking-widest uppercase mb-2">STEP 02</p>
            <h3 class="text-base font-bold mb-2">서류심사</h3>
            <p class="text-sm text-slate-600 mb-3">지원 서류를 정량·정성 평가합니다. 합격자에게 면접 일정을 개별 통보합니다.</p>
            <span class="inline-block bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full px-2 py-0.5">영업일 3~5일</span>
          </div>
        </div>

        <div class="relative pl-8">
          <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center font-bold text-white text-sm">3</div>
          <div class="bg-white text-slate-900 p-5 rounded-lg border-t-2 border-emerald-500">
            <p class="text-xs font-semibold text-emerald-500 tracking-widest uppercase mb-2">STEP 03</p>
            <h3 class="text-base font-bold mb-2">면접</h3>
            <p class="text-sm text-slate-600 mb-3">1차 직무역량 면접, 2차 임원 인성 면접을 진행합니다. 대면·화상 병행.</p>
            <span class="inline-block bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full px-2 py-0.5">대면 / 화상</span>
          </div>
        </div>

        <div class="relative pl-8">
          <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center font-bold text-white text-sm">4</div>
          <div class="bg-white text-slate-900 p-5 rounded-lg border-t-2 border-emerald-500">
            <p class="text-xs font-semibold text-emerald-500 tracking-widest uppercase mb-2">STEP 04</p>
            <h3 class="text-base font-bold mb-2">최종합격</h3>
            <p class="text-sm text-slate-600 mb-3">전형위원회 최종 검토 후 합격 여부를 결정합니다. 이메일·전화로 개별 통보.</p>
            <span class="inline-block bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full px-2 py-0.5">이메일 / 전화</span>
          </div>
        </div>

        <div class="relative pl-8">
          <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center font-bold text-white text-sm">5</div>
          <div class="bg-white text-slate-900 p-5 rounded-lg border-t-2 border-emerald-500">
            <p class="text-xs font-semibold text-emerald-500 tracking-widest uppercase mb-2">STEP 05</p>
            <h3 class="text-base font-bold mb-2">입사</h3>
            <p class="text-sm text-slate-600 mb-3">정해진 입사일에 신입사원 교육 후 배치 부서에 배정됩니다. 선배 멘토링 제공.</p>
            <span class="inline-block bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full px-2 py-0.5">멘토링 지원</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 자주 묻는 질문 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">자주 묻는 질문</h2>
        <p class="text-gray-500 text-lg">채용 관련 Q&A</p>
      </div>

      <div class="space-y-4 max-w-3xl mx-auto">
        <details class="bg-slate-50 p-6 rounded-lg border border-slate-200 cursor-pointer">
          <summary class="font-bold text-slate-900">신입/경력 구분 기준은?</summary>
          <p class="text-slate-700 mt-4">일반적으로 신입은 학사 이상 학위를 취득한 경우, 경력은 동종 업계 3년 이상의 경험을 기준으로 합니다.</p>
        </details>

        <details class="bg-slate-50 p-6 rounded-lg border border-slate-200 cursor-pointer">
          <summary class="font-bold text-slate-900">해외 거점에 입사할 수 있나요?</summary>
          <p class="text-slate-700 mt-4">미국, 멕시코, 베트남 거점 채용도 진행됩니다. 공고를 통해 확인 후 지원 가능합니다.</p>
        </details>

        <details class="bg-slate-50 p-6 rounded-lg border border-slate-200 cursor-pointer">
          <summary class="font-bold text-slate-900">면접 준비는 어떻게?</summary>
          <p class="text-slate-700 mt-4">회사, 제품, 기술에 대해 충분히 학습한 후 자신의 경험과 역량을 명확하게 설명하세요.</p>
        </details>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
