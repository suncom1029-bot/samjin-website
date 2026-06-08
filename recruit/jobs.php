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
        채용공고
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        삼진엘앤디와 함께할 인재를 찾습니다
      </p>
    </div>
  </section>

  <!-- Job Postings List -->
  <section class="section-lg bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
      <div class="space-y-8">
        <?php
          $job_postings = [
            [
              'date' => '2025.06.01',
              'title' => '연구개발(R&D) 엔지니어',
              'category' => '기술직',
              'location' => '경기도 화성',
              'experience' => '경력',
              'deadline' => '2025.07.15',
              'summary' => '신제품 개발, 공정 개선, 기술 혁신 업무를 담당하실 분을 모집합니다. 금형, 광학, AI 비전 분야의 연구 경험이 있으신 분을 우대합니다.'
            ],
            [
              'date' => '2025.05.28',
              'title' => '기술영업',
              'category' => '영업직',
              'location' => '경기도 화성',
              'experience' => '신입·경력',
              'deadline' => '2025.07.10',
              'summary' => 'B2B 고객사와의 기술 영업 담당. 제품 설명, 샘플 공급, 기술 지원 업무를 수행하실 분을 찾고 있습니다.'
            ],
            [
              'date' => '2025.05.25',
              'title' => '생산관리(PM)',
              'category' => '관리직',
              'location' => '경기도 화성',
              'experience' => '신입·경력',
              'deadline' => '2025.07.05',
              'summary' => '생산 계획 수립, 품질 관리, 공정 최적화 및 생산성 향상 업무를 담당하실 분을 모집합니다. ERP 시스템 경험자 우대합니다.'
            ],
            [
              'date' => '2025.05.20',
              'title' => '품질관리(QA)',
              'category' => '관리직',
              'location' => '경기도 화성',
              'experience' => '신입·경력',
              'deadline' => '2025.06.30',
              'summary' => '제품 검사, 품질 기준 관리, IATF16949 준수 및 개선 업무를 수행할 분을 찾습니다. 자동차 부품 경험자 우대합니다.'
            ],
            [
              'date' => '2025.05.15',
              'title' => '해외영업(해외 거점)',
              'category' => '영업직',
              'location' => '미국/멕시코/베트남',
              'experience' => '경력',
              'deadline' => '2025.06.30',
              'summary' => '해외 거점(미국, 멕시코, 베트남)에서 현지 고객사 개발 및 기술 지원 업무를 담당할 분을 모집합니다. 국제업무 경험자 필수입니다.'
            ],
            [
              'date' => '2025.05.10',
              'title' => '생산기술(공정개선)',
              'category' => '기술직',
              'location' => '경기도 화성',
              'experience' => '경력',
              'deadline' => '2025.06.25',
              'summary' => '금형, 광학, 배터리 부품 생산 공정 개선 및 자동화 시스템 구축 업무를 담당하실 분을 찾고 있습니다.'
            ]
          ];
        ?>
        <?php foreach ($job_postings as $job): ?>
          <article class="pb-8 border-b border-slate-200 hover:bg-slate-50 p-6 rounded-lg transition">
            <div class="mb-4">
              <div class="flex flex-wrap items-center gap-3 mb-3">
                <span class="text-sm px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full font-semibold"><?php echo $job['category']; ?></span>
                <span class="text-sm px-3 py-1 bg-slate-100 text-slate-700 rounded-full font-semibold"><?php echo $job['experience']; ?></span>
                <span class="text-sm text-gray-500">공고일: <?php echo $job['date']; ?></span>
                <span class="text-sm text-gray-500">마감: <?php echo $job['deadline']; ?></span>
              </div>
              <h3 class="text-2xl font-bold text-slate-900 mb-2"><?php echo $job['title']; ?></h3>
              <p class="text-emerald-600 font-semibold"><?php echo $job['location']; ?></p>
            </div>
            <p class="text-gray-600 leading-relaxed text-lg mb-4"><?php echo $job['summary']; ?></p>
            <div class="text-right">
              <a href="#" class="inline-block text-emerald-500 font-semibold hover:text-emerald-600 transition">
                세부내역 →
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
        <button class="px-4 py-2 text-slate-600 hover:text-emerald-500 transition">다음 →</button>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="section-lg bg-gradient-to-r from-slate-900 to-slate-800 text-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
      <h2 class="text-4xl font-bold mb-12 text-center">삼진엘앤디의 복리후생</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-slate-700 bg-opacity-50 p-6 rounded-lg border border-slate-600">
          <h3 class="text-xl font-bold mb-3">기숙사 지원</h3>
          <p class="text-gray-300">
            편안한 숙면과 업무 복귀를 위한 쾌적한 기숙사 제공
          </p>
        </div>
        <div class="bg-slate-700 bg-opacity-50 p-6 rounded-lg border border-slate-600">
          <h3 class="text-xl font-bold mb-3">건강검진</h3>
          <p class="text-gray-300">
            정기적인 건강검진 및 종합검진 지원
          </p>
        </div>
        <div class="bg-slate-700 bg-opacity-50 p-6 rounded-lg border border-slate-600">
          <h3 class="text-xl font-bold mb-3">스포츠센터</h3>
          <p class="text-gray-300">
            헬스, 배드민턴, 탁구 등 다양한 운동 시설 이용 가능
          </p>
        </div>
        <div class="bg-slate-700 bg-opacity-50 p-6 rounded-lg border border-slate-600">
          <h3 class="text-xl font-bold mb-3">교육지원</h3>
          <p class="text-gray-300">
            직무 능력 향상을 위한 다양한 교육 프로그램 지원
          </p>
        </div>
        <div class="bg-slate-700 bg-opacity-50 p-6 rounded-lg border border-slate-600">
          <h3 class="text-xl font-bold mb-3">휴가제도</h3>
          <p class="text-gray-300">
            충분한 연차 및 휴가 제도로 일과 삶의 균형 추구
          </p>
        </div>
        <div class="bg-slate-700 bg-opacity-50 p-6 rounded-lg border border-slate-600">
          <h3 class="text-xl font-bold mb-3">경력개발</h3>
          <p class="text-gray-300">
            명확한 경력 경로 및 승진 기회 제공
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section-lg bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12 text-center">
      <h2 class="text-3xl lg:text-4xl font-bold mb-6">채용 관련 문의</h2>
      <p class="text-gray-600 text-lg mb-8">더 궁금한 사항이 있으신가요? 언제든지 연락해주세요.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="/support/inquiry.php" class="px-8 py-3 bg-emerald-500 text-white font-semibold rounded-lg hover:bg-emerald-600 transition">
          채용 문의
        </a>
        <a href="/" class="px-8 py-3 border-2 border-emerald-500 text-emerald-600 font-semibold rounded-lg hover:bg-emerald-50 transition">
          홈으로
        </a>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
