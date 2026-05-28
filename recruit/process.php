<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>채용절차 - 삼진엘앤디</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/custom.css">
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
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">채용 프로세스</h2>
        <p class="text-gray-500 text-lg">5단계의 공정한 평가 과정</p>
      </div>

      <!-- 프로세스 플로우 -->
      <div class="relative">
        <!-- 모바일 버전 -->
        <div class="lg:hidden space-y-8">
          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-16 w-16 rounded-full bg-emerald-500 text-white font-bold text-2xl">1</div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-900 mb-2">서류접수</h3>
              <p class="text-slate-700">이력서, 자기소개서 제출</p>
            </div>
          </div>

          <div class="h-8 border-l-2 border-emerald-500 ml-8"></div>

          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-16 w-16 rounded-full bg-emerald-500 text-white font-bold text-2xl">2</div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-900 mb-2">서류심사</h3>
              <p class="text-slate-700">3~5일 내 결과 발표</p>
            </div>
          </div>

          <div class="h-8 border-l-2 border-emerald-500 ml-8"></div>

          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-16 w-16 rounded-full bg-emerald-500 text-white font-bold text-2xl">3</div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-900 mb-2">면접</h3>
              <p class="text-slate-700">1차, 2차 면접 진행</p>
            </div>
          </div>

          <div class="h-8 border-l-2 border-emerald-500 ml-8"></div>

          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-16 w-16 rounded-full bg-emerald-500 text-white font-bold text-2xl">4</div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-900 mb-2">최종합격</h3>
              <p class="text-slate-700">합격 통보</p>
            </div>
          </div>

          <div class="h-8 border-l-2 border-emerald-500 ml-8"></div>

          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-16 w-16 rounded-full bg-emerald-500 text-white font-bold text-2xl">5</div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-900 mb-2">입사</h3>
              <p class="text-slate-700">정해진 입사일에 입사</p>
            </div>
          </div>
        </div>

        <!-- 데스크탑 버전 -->
        <div class="hidden lg:grid grid-cols-5 gap-4">
          <!-- 단계 1 -->
          <div class="text-center">
            <div class="flex items-center justify-center h-24 w-24 rounded-full bg-emerald-500 text-white font-bold text-4xl mx-auto mb-4">1</div>
            <h3 class="text-lg font-bold text-slate-900 mb-2">서류접수</h3>
            <p class="text-sm text-slate-700">이력서, 자기소개서 제출</p>
          </div>

          <!-- 화살표 -->
          <div class="flex items-center justify-center">
            <div class="text-3xl text-emerald-500">→</div>
          </div>

          <!-- 단계 2 -->
          <div class="text-center">
            <div class="flex items-center justify-center h-24 w-24 rounded-full bg-emerald-500 text-white font-bold text-4xl mx-auto mb-4">2</div>
            <h3 class="text-lg font-bold text-slate-900 mb-2">서류심사</h3>
            <p class="text-sm text-slate-700">3~5일 내 결과 발표</p>
          </div>

          <!-- 화살표 -->
          <div class="flex items-center justify-center">
            <div class="text-3xl text-emerald-500">→</div>
          </div>

          <!-- 단계 3 -->
          <div class="text-center">
            <div class="flex items-center justify-center h-24 w-24 rounded-full bg-emerald-500 text-white font-bold text-4xl mx-auto mb-4">3</div>
            <h3 class="text-lg font-bold text-slate-900 mb-2">면접</h3>
            <p class="text-sm text-slate-700">1차, 2차 면접</p>
          </div>

          <!-- 화살표 -->
          <div class="flex items-center justify-center col-span-1 -ml-2">
            <div class="text-3xl text-emerald-500">→</div>
          </div>
        </div>

        <div class="hidden lg:grid grid-cols-5 gap-4 mt-4">
          <!-- 단계 4 -->
          <div class="col-start-2 text-center">
            <div class="flex items-center justify-center h-24 w-24 rounded-full bg-emerald-500 text-white font-bold text-4xl mx-auto mb-4">4</div>
            <h3 class="text-lg font-bold text-slate-900 mb-2">최종합격</h3>
            <p class="text-sm text-slate-700">합격 통보</p>
          </div>

          <!-- 화살표 -->
          <div class="flex items-center justify-center">
            <div class="text-3xl text-emerald-500">→</div>
          </div>

          <!-- 단계 5 -->
          <div class="text-center">
            <div class="flex items-center justify-center h-24 w-24 rounded-full bg-emerald-500 text-white font-bold text-4xl mx-auto mb-4">5</div>
            <h3 class="text-lg font-bold text-slate-900 mb-2">입사</h3>
            <p class="text-sm text-slate-700">입사일에 입사</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 상세 정보 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">단계별 안내</h2>
        <p class="text-gray-500 text-lg">각 단계에 대해 알아보세요</p>
      </div>

      <div class="space-y-8">
        <div class="bg-white p-8 rounded-lg border border-slate-200">
          <h3 class="text-2xl font-bold text-slate-900 mb-4">1단계: 서류접수</h3>
          <p class="text-slate-700 mb-4">채용 공고를 확인한 후 이력서와 자기소개서를 제출합니다. 온라인 및 이메일 접수가 가능합니다.</p>
          <div class="bg-emerald-50 p-4 rounded border border-emerald-200">
            <p class="text-sm text-slate-700"><span class="font-semibold">기간:</span> 공고 기간 내</p>
          </div>
        </div>

        <div class="bg-white p-8 rounded-lg border border-slate-200">
          <h3 class="text-2xl font-bold text-slate-900 mb-4">2단계: 서류심사</h3>
          <p class="text-slate-700 mb-4">전형 팀에서 제출된 서류를 정량적, 정성적으로 평가합니다. 합격자에게는 면접 일정을 통보합니다.</p>
          <div class="bg-emerald-50 p-4 rounded border border-emerald-200">
            <p class="text-sm text-slate-700"><span class="font-semibold">기간:</span> 3~5일 (공휴일 제외)</p>
          </div>
        </div>

        <div class="bg-white p-8 rounded-lg border border-slate-200">
          <h3 class="text-2xl font-bold text-slate-900 mb-4">3단계: 면접</h3>
          <p class="text-slate-700 mb-4">1차 기술면접에서는 직무 역량을, 2차 인성면접에서는 회사 문화 적응도를 평가합니다.</p>
          <div class="bg-emerald-50 p-4 rounded border border-emerald-200">
            <p class="text-sm text-slate-700"><span class="font-semibold">방식:</span> 대면 및 화상 면접 병행</p>
          </div>
        </div>

        <div class="bg-white p-8 rounded-lg border border-slate-200">
          <h3 class="text-2xl font-bold text-slate-900 mb-4">4단계: 최종합격</h3>
          <p class="text-slate-700 mb-4">전형 위원회의 최종 검토를 거쳐 합격 여부를 결정합니다. 합격 통보 후 입사일을 협의합니다.</p>
          <div class="bg-emerald-50 p-4 rounded border border-emerald-200">
            <p class="text-sm text-slate-700"><span class="font-semibold">공지:</span> 이메일 및 전화로 통보</p>
          </div>
        </div>

        <div class="bg-white p-8 rounded-lg border border-slate-200">
          <h3 class="text-2xl font-bold text-slate-900 mb-4">5단계: 입사</h3>
          <p class="text-slate-700 mb-4">정해진 입사일에 신입사원 교육을 받고 배치 부서에 배정됩니다. 선배들의 멘토링을 통해 빠르게 적응할 수 있습니다.</p>
          <div class="bg-emerald-50 p-4 rounded border border-emerald-200">
            <p class="text-sm text-slate-700"><span class="font-semibold">교육:</span> 신입사원 안내 & 부서별 교육</p>
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
