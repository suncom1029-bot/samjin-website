<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>고객문의 - 삼진엘앤디</title>
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
          <a href="#" class="hover:text-emerald-400 transition">고객지원</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">고객문의</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        함께하는<br>고객지원
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        언제든지 문의주세요. 성실한 답변으로 최고의 고객 서비스를 제공합니다
      </p>
    </div>
  </section>

  <!-- 연락처 정보 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">연락처</h2>
        <p class="text-gray-500 text-lg">편하신 방법으로 언제든 연락주세요</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- 전화 -->
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-lg border border-blue-200 text-center">
          <p class="text-4xl mb-4">☎️</p>
          <h3 class="text-lg font-bold text-slate-900 mb-3">전화</h3>
          <p class="text-slate-700 font-semibold">031-379-2000</p>
          <p class="text-sm text-gray-600 mt-2">평일 09:00~18:00</p>
        </div>

        <!-- 팩스 -->
        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-8 rounded-lg border border-emerald-200 text-center">
          <p class="text-4xl mb-4">📠</p>
          <h3 class="text-lg font-bold text-slate-900 mb-3">팩스</h3>
          <p class="text-slate-700 font-semibold">031-376-5830</p>
          <p class="text-sm text-gray-600 mt-2">24시간 이용</p>
        </div>

        <!-- 주소 -->
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-lg border border-purple-200 text-center">
          <p class="text-4xl mb-4">📍</p>
          <h3 class="text-lg font-bold text-slate-900 mb-3">주소</h3>
          <p class="text-sm text-slate-700">
            경기도 화성시<br>동탄기흥로 64-17
          </p>
        </div>

        <!-- 이메일 -->
        <div class="bg-gradient-to-br from-amber-50 to-amber-100 p-8 rounded-lg border border-amber-200 text-center">
          <p class="text-4xl mb-4">✉️</p>
          <h3 class="text-lg font-bold text-slate-900 mb-3">이메일</h3>
          <p class="text-sm text-slate-700 break-all">
            info@samjin.co.kr
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 문의 카테고리 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">문의 유형</h2>
        <p class="text-gray-500 text-lg">어떤 문의를 도와드릴까요?</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- 제품 문의 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">🏢</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">제품 문의</h3>
          <p class="text-slate-700 mb-4">
            Display 부품, 배터리, OA, 금형 등 제품에 관한 상세한 정보 및 기술 사양 문의
          </p>
          <button class="text-emerald-600 font-semibold hover:text-emerald-700 transition">문의하기 →</button>
        </div>

        <!-- 파트너십 문의 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">🤝</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">파트너십</h3>
          <p class="text-slate-700 mb-4">
            협력업체 모집, OEM 파트너십, 대리점 가입 등 비즈니스 파트너 관련 문의
          </p>
          <button class="text-emerald-600 font-semibold hover:text-emerald-700 transition">문의하기 →</button>
        </div>

        <!-- 기타 문의 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">❓</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">기타 문의</h3>
          <p class="text-slate-700 mb-4">
            투자 정보, 채용 관련, 기타 일반 문의 및 제안 사항
          </p>
          <button class="text-emerald-600 font-semibold hover:text-emerald-700 transition">문의하기 →</button>
        </div>
      </div>
    </div>
  </section>

  <!-- 자주 묻는 질문 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">자주 묻는 질문</h2>
        <p class="text-gray-500 text-lg">흔한 문의사항을 확인하세요</p>
      </div>

      <div class="space-y-4 max-w-3xl mx-auto">
        <!-- FAQ 1 -->
        <details class="bg-slate-50 p-6 rounded-lg border border-slate-200 cursor-pointer hover:bg-slate-100 transition">
          <summary class="font-bold text-slate-900 flex items-center justify-between">
            <span>제품 샘플은 요청할 수 있나요?</span>
            <span class="text-emerald-600">+</span>
          </summary>
          <p class="text-slate-700 mt-4">
            네, 전화(031-379-2000) 또는 이메일(info@samjin.co.kr)로 연락주시면
            제품 사양과 샘플 요청을 안내해드립니다.
          </p>
        </details>

        <!-- FAQ 2 -->
        <details class="bg-slate-50 p-6 rounded-lg border border-slate-200 cursor-pointer hover:bg-slate-100 transition">
          <summary class="font-bold text-slate-900 flex items-center justify-between">
            <span>최소 주문 수량이 있나요?</span>
            <span class="text-emerald-600">+</span>
          </summary>
          <p class="text-slate-700 mt-4">
            제품 종류에 따라 다르며, 상담 시 구체적인 조건을 논의할 수 있습니다.
            대량 주문 시 우대 조건도 가능합니다.
          </p>
        </details>

        <!-- FAQ 3 -->
        <details class="bg-slate-50 p-6 rounded-lg border border-slate-200 cursor-pointer hover:bg-slate-100 transition">
          <summary class="font-bold text-slate-900 flex items-center justify-between">
            <span>배송은 어떻게 이루어지나요?</span>
            <span class="text-emerald-600">+</span>
          </summary>
          <p class="text-slate-700 mt-4">
            한국은 택배, 해외는 국제 해운·항공으로 배송됩니다.
            주문량과 지역에 따라 최적의 배송 방법을 제안합니다.
          </p>
        </details>

        <!-- FAQ 4 -->
        <details class="bg-slate-50 p-6 rounded-lg border border-slate-200 cursor-pointer hover:bg-slate-100 transition">
          <summary class="font-bold text-slate-900 flex items-center justify-between">
            <span>품질 인증서는 제공되나요?</span>
            <span class="text-emerald-600">+</span>
          </summary>
          <p class="text-slate-700 mt-4">
            IATF16949, 현대차 SQ, ISO 등의 인증을 보유하고 있으며,
            각 제품별 검사 성적서를 함께 제공합니다.
          </p>
        </details>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
