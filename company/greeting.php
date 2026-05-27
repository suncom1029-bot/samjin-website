<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEO 인사말 - 삼진엘앤디</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/custom.css">
</head>
<body class="bg-white text-slate-900">
  <?php include '../includes/header.php'; ?>

  <!-- Page Banner -->
  <section class="sticky top-20 z-40 relative bg-slate-900 text-white py-6">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-3">
        <nav class="text-xs text-gray-300 mb-2">
          <a href="/" class="hover:text-emerald-400">홈</a>
          <span class="mx-2">/</span>
          <a href="#" class="hover:text-emerald-400">회사소개</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400">CEO 인사말</span>
        </nav>
      </div>
      <h1 class="text-3xl font-bold">CEO 인사말</h1>
      <p class="text-sm text-gray-300 mt-2">삼진엘앤디의 미래를 향한 약속</p>
    </div>
  </section>

  <!-- CEO Message Section -->
  <section class="section-lg bg-white text-slate-900 relative py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="space-y-6 fade-in-up">
        <p class="text-xl leading-relaxed font-light">
          안녕하세요. 삼진엘앤디 대표입니다.
        </p>

        <p class="text-lg leading-relaxed font-light">
          우리는 1987년부터 정밀금형이라는 작은 손길로 시작했습니다.
          그 손길이 모이고 모여 오늘날 수백만 가정의 일상을 만드는
          가전, 디스플레이, 전지 같은 제품들을 함께 만들고 있습니다.
        </p>

        <p class="text-lg leading-relaxed font-light">
          37년의 경험과 기술. 그것만으로는 충분하지 않습니다.
        </p>

        <p class="text-lg leading-relaxed font-light">
          우리는 신소재에 관심을 가지고, 인공지능을 배우며,
          전 세계 여러나라에서 더 나은 기술을 찾고 있습니다.
        </p>

        <p class="text-lg leading-relaxed font-light">
          우리가 하는 일은 단순합니다.
          고객을 위해, 더 나은 내일을 위해,
          품질과 기술로 신뢰를 쌓는 것.
        </p>

        <!-- Highlight -->
        <div class="my-10 p-8 bg-gradient-to-r from-emerald-50 to-blue-50 rounded-lg border-l-4 border-emerald-500">
          <p class="text-center text-3xl font-bold gradient-text">
            'Pride in Quality & Technology'
          </p>
          <p class="text-center text-slate-600 mt-4 text-lg">
            이 다섯 글자 안에 우리의 모든 노력이 담겨 있습니다.
          </p>
        </div>

        <p class="text-lg leading-relaxed font-light">
          여러분의 신뢰가 우리의 가장 큰 자산이 되겠습니다.
        </p>

        <!-- Signature -->
        <div class="mt-16 pt-8 border-t border-slate-200">
          <p class="text-base font-semibold">삼진엘앤디</p>
          <p class="text-base font-semibold">대표이사</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Vision Cards Section -->
  <section class="section-lg bg-slate-50 border-t border-slate-200">
    <style>
      .feature-title { font-size: 1.4rem; }
      .feature-description { font-size: 1.05rem; color: #374151; line-height: 1.8; }
    </style>
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">우리의 약속</h2>
        <p class="text-gray-500 text-lg">고객과 함께 나아가는 삼진엘앤디</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1: Trust -->
        <div class="feature-card fade-in-up">
          <h3 class="feature-title mb-3">고객 신뢰</h3>
          <p class="feature-description">
            고객의 신뢰는 우리의 가장 큰 자산입니다.
            믿음과 책임감으로 항상 최고의 품질을 추구합니다.
          </p>
        </div>

        <!-- Card 2: Innovation -->
        <div class="feature-card fade-in-up">
          <h3 class="feature-title mb-3">기술 혁신</h3>
          <p class="feature-description">
            신소재, 첨단부품, 인공지능으로 미래를 준비합니다.
            끊임없는 기술 개발로 업계를 선도합니다.
          </p>
        </div>

        <!-- Card 3: Global -->
        <div class="feature-card fade-in-up">
          <h3 class="feature-title mb-3">글로벌 확장</h3>
          <p class="feature-description">
            4개국 해외 법인을 거점으로 세계 시장을 개척합니다.
            국제 경쟁력을 갖춘 진정한 글로벌 기업으로 성장합니다.
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="../assets/js/main.js"></script>
</body>
</html>
