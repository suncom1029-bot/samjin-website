<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>사이버신문고 - 삼진엘앤디</title>
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
          <a href="#" class="hover:text-emerald-400 transition">고객지원</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">사이버신문고</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        사이버신문고
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        삼진엘앤디에 대한 제안과 신고를 접수합니다
      </p>
    </div>
  </section>

  <!-- Introduction Section -->
  <section class="section-lg bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
      <div class="bg-gradient-to-br from-emerald-50 to-blue-50 p-8 rounded-lg border border-emerald-200 mb-12">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">사이버신문고란?</h2>
        <p class="text-gray-700 leading-relaxed text-lg">
          사이버신문고는 삼진엘앤디의 경영, 제품, 서비스에 대한 건의사항, 신고, 제안을 접수하는 온라인 창구입니다.
          모든 신고와 제안은 철저하게 검토되며, 개인정보는 보호됩니다.
        </p>
      </div>
    </div>
  </section>

  <!-- Report Types Section -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
      <h2 class="text-3xl font-bold text-slate-900 mb-12">신고 유형</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <h3 class="text-xl font-bold text-slate-900 mb-3">제안</h3>
          <p class="text-gray-600 leading-relaxed">
            경영, 제품, 서비스, 고객지원 등 회사 운영 전반에 대한 건설적인 제안을 접수합니다.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <h3 class="text-xl font-bold text-slate-900 mb-3">부정·비리 신고</h3>
          <p class="text-gray-600 leading-relaxed">
            회사 내 부정행위, 비리, 규정 위반 행위 등을 신고할 수 있습니다.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <h3 class="text-xl font-bold text-slate-900 mb-3">품질·안전 신고</h3>
          <p class="text-gray-600 leading-relaxed">
            제품 품질 문제, 안전 관련 이슈, 환경 관련 우려사항을 신고합니다.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <h3 class="text-xl font-bold text-slate-900 mb-3">기타 의견</h3>
          <p class="text-gray-600 leading-relaxed">
            위 분류에 해당하지 않는 모든 의견과 건의를 접수합니다.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- How to Report Section -->
  <section class="section-lg bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
      <h2 class="text-3xl font-bold text-slate-900 mb-12">신고 방법</h2>
      <div class="space-y-6">
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center">
            <span class="text-emerald-600 font-bold text-lg">1</span>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900 mb-2">신고 유형 선택</h3>
            <p class="text-gray-600 leading-relaxed">
              신고하실 내용의 유형을 선택합니다 (제안, 부정·비리, 품질·안전, 기타).
            </p>
          </div>
        </div>
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center">
            <span class="text-emerald-600 font-bold text-lg">2</span>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900 mb-2">상세 내용 입력</h3>
            <p class="text-gray-600 leading-relaxed">
              신고 제목, 상세 내용, 관련 부서 등을 작성합니다. 구체적인 정보일수록 검토에 도움이 됩니다.
            </p>
          </div>
        </div>
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center">
            <span class="text-emerald-600 font-bold text-lg">3</span>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900 mb-2">제출 및 추적</h3>
            <p class="text-gray-600 leading-relaxed">
              신고 내용을 제출하면 접수번호를 부여받습니다. 이 번호로 신고 진행 상황을 추적할 수 있습니다.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Confidentiality Section -->
  <section class="section-lg bg-blue-50">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
      <h2 class="text-2xl font-bold text-slate-900 mb-4">신고자 보호</h2>
      <ul class="space-y-3 text-gray-700 leading-relaxed text-lg">
        <li class="flex gap-3">
          <span class="text-emerald-600 font-bold">✓</span>
          <span>신고자의 신원은 철저하게 보호됩니다.</span>
        </li>
        <li class="flex gap-3">
          <span class="text-emerald-600 font-bold">✓</span>
          <span>신고로 인한 불이익은 법적으로 금지되어 있습니다.</span>
        </li>
        <li class="flex gap-3">
          <span class="text-emerald-600 font-bold">✓</span>
          <span>제출하신 개인정보는 신고 처리 목적으로만 사용됩니다.</span>
        </li>
        <li class="flex gap-3">
          <span class="text-emerald-600 font-bold">✓</span>
          <span>신고 내용과 결과는 기밀로 취급됩니다.</span>
        </li>
      </ul>
    </div>
  </section>

  <!-- Report Form Section -->
  <section class="section-lg bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
      <h2 class="text-3xl font-bold text-slate-900 mb-12">신고하기</h2>
      <form class="bg-white border border-slate-200 rounded-lg p-8 space-y-6">
        <div>
          <label class="block text-sm font-semibold text-slate-900 mb-2">신고 유형 *</label>
          <select class="w-full px-4 py-3 border border-slate-300 rounded-lg text-slate-900 placeholder-gray-500 focus:outline-none focus:border-emerald-500 bg-white">
            <option value="">선택해주세요</option>
            <option value="suggestion">제안</option>
            <option value="misconduct">부정·비리 신고</option>
            <option value="quality">품질·안전 신고</option>
            <option value="other">기타 의견</option>
          </select>
        </div>

        <div>
          <label class="block text-sm font-semibold text-slate-900 mb-2">신고 제목 *</label>
          <input type="text" placeholder="신고 제목을 입력해주세요" class="w-full px-4 py-3 border border-slate-300 rounded-lg text-slate-900 placeholder-gray-500 focus:outline-none focus:border-emerald-500">
        </div>

        <div>
          <label class="block text-sm font-semibold text-slate-900 mb-2">상세 내용 *</label>
          <textarea rows="6" placeholder="신고 내용을 상세하게 입력해주세요" class="w-full px-4 py-3 border border-slate-300 rounded-lg text-slate-900 placeholder-gray-500 focus:outline-none focus:border-emerald-500 resize-none"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label class="block text-sm font-semibold text-slate-900 mb-2">관련 부서</label>
            <input type="text" placeholder="관련 부서를 입력해주세요" class="w-full px-4 py-3 border border-slate-300 rounded-lg text-slate-900 placeholder-gray-500 focus:outline-none focus:border-emerald-500">
          </div>
          <div>
            <label class="block text-sm font-semibold text-slate-900 mb-2">발생 시기</label>
            <input type="text" placeholder="예: 2026년 6월" class="w-full px-4 py-3 border border-slate-300 rounded-lg text-slate-900 placeholder-gray-500 focus:outline-none focus:border-emerald-500">
          </div>
        </div>

        <div>
          <label class="block text-sm font-semibold text-slate-900 mb-2">신고자 이름</label>
          <input type="text" placeholder="이름을 입력해주세요" class="w-full px-4 py-3 border border-slate-300 rounded-lg text-slate-900 placeholder-gray-500 focus:outline-none focus:border-emerald-500">
        </div>

        <div>
          <label class="block text-sm font-semibold text-slate-900 mb-2">연락처 (비공개)</label>
          <input type="tel" placeholder="010-0000-0000" class="w-full px-4 py-3 border border-slate-300 rounded-lg text-slate-900 placeholder-gray-500 focus:outline-none focus:border-emerald-500">
        </div>

        <div>
          <label class="block text-sm font-semibold text-slate-900 mb-2">이메일 (비공개)</label>
          <input type="email" placeholder="example@example.com" class="w-full px-4 py-3 border border-slate-300 rounded-lg text-slate-900 placeholder-gray-500 focus:outline-none focus:border-emerald-500">
        </div>

        <div class="flex items-start gap-3 pt-4">
          <input type="checkbox" id="agree" class="mt-1">
          <label for="agree" class="text-sm text-gray-600">
            개인정보 수집·이용에 동의하며, 신고 내용이 사실임을 확인합니다.
          </label>
        </div>

        <div class="flex gap-4 pt-4">
          <button type="submit" class="flex-1 px-6 py-3 bg-emerald-500 text-white font-semibold rounded-lg hover:bg-emerald-600 transition">
            신고 제출
          </button>
          <button type="reset" class="flex-1 px-6 py-3 border-2 border-emerald-500 text-emerald-600 font-semibold rounded-lg hover:bg-emerald-50 transition">
            초기화
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
      <h2 class="text-3xl font-bold text-slate-900 mb-12">자주 묻는 질문</h2>
      <div class="space-y-4">
        <div class="bg-white border border-slate-200 rounded-lg overflow-hidden">
          <button class="w-full px-6 py-4 text-left font-semibold text-slate-900 hover:bg-slate-50 transition flex justify-between items-center" onclick="this.parentElement.querySelector('.faq-content').classList.toggle('hidden')">
            <span>신고하면 어떻게 처리되나요?</span>
            <span class="text-emerald-600">+</span>
          </button>
          <div class="faq-content hidden px-6 py-4 bg-slate-50 border-t border-slate-200 text-gray-600 leading-relaxed">
            신고 접수 후 담당부서에서 내용을 검토합니다. 중대한 내용은 관리자에게 보고되며, 필요한 경우 조사가 진행됩니다. 조사 결과는 신고자에게 통보됩니다.
          </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-lg overflow-hidden">
          <button class="w-full px-6 py-4 text-left font-semibold text-slate-900 hover:bg-slate-50 transition flex justify-between items-center" onclick="this.parentElement.querySelector('.faq-content').classList.toggle('hidden')">
            <span>신고자의 신원이 공개되나요?</span>
            <span class="text-emerald-600">+</span>
          </button>
          <div class="faq-content hidden px-6 py-4 bg-slate-50 border-t border-slate-200 text-gray-600 leading-relaxed">
            절대 공개되지 않습니다. 신고자의 신원은 철저하게 보호되며, 신원 공개로 인한 불이익을 받지 않도록 법적으로 보호됩니다.
          </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-lg overflow-hidden">
          <button class="w-full px-6 py-4 text-left font-semibold text-slate-900 hover:bg-slate-50 transition flex justify-between items-center" onclick="this.parentElement.querySelector('.faq-content').classList.toggle('hidden')">
            <span>신고 후 추적이 가능한가요?</span>
            <span class="text-emerald-600">+</span>
          </button>
          <div class="faq-content hidden px-6 py-4 bg-slate-50 border-t border-slate-200 text-gray-600 leading-relaxed">
            네, 신고 제출 후 부여받는 접수번호를 통해 신고 진행 상황을 조회할 수 있습니다.
          </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-lg overflow-hidden">
          <button class="w-full px-6 py-4 text-left font-semibold text-slate-900 hover:bg-slate-50 transition flex justify-between items-center" onclick="this.parentElement.querySelector('.faq-content').classList.toggle('hidden')">
            <span>익명으로 신고할 수 있나요?</span>
            <span class="text-emerald-600">+</span>
          </button>
          <div class="faq-content hidden px-6 py-4 bg-slate-50 border-t border-slate-200 text-gray-600 leading-relaxed">
            네, 신고자 정보는 선택사항입니다. 연락처를 남기지 않아도 신고할 수 있지만, 추후 확인이 필요한 경우를 위해 연락처 제공을 권장합니다.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section-lg bg-gradient-to-r from-slate-900 to-slate-800 text-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-12 text-center">
      <h2 class="text-3xl lg:text-4xl font-bold mb-6">신고 또는 제안이 있으신가요?</h2>
      <p class="text-gray-300 text-lg mb-8">
        위의 신고 양식을 통해 신고해주시거나, 고객문의 채널로 연락해주세요.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="/support/inquiry.php" class="px-8 py-3 bg-emerald-500 text-white font-semibold rounded-lg hover:bg-emerald-600 transition">
          고객문의
        </a>
        <a href="/" class="px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-slate-900 transition">
          홈으로
        </a>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
