<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>고객문의 - 삼진엘앤디</title>
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

  <!-- 부서별 연락처 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">부서별 연락처</h2>
        <p class="text-gray-500 text-lg">담당 부서에 직접 연락주세요</p>
      </div>

      <!-- 데스크탑 테이블 -->
      <div class="hidden lg:block overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-slate-900 to-emerald-900 text-white">
              <th class="px-6 py-4 text-left font-semibold text-base border-b border-slate-200">부문</th>
              <th class="px-6 py-4 text-left font-semibold text-base border-b border-slate-200">E-Mail</th>
              <th class="px-6 py-4 text-left font-semibold text-base border-b border-slate-200">전화번호</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="px-6 py-4 font-semibold text-slate-900">채용(인사)</td>
              <td class="px-6 py-4 text-slate-700"><a href="mailto:recruit@samjin.co.kr" class="text-emerald-600 hover:text-emerald-700 transition">recruit@samjin.co.kr</a></td>
              <td class="px-6 py-4 text-slate-700"><a href="tel:031-379-2022" class="text-emerald-600 hover:text-emerald-700 transition">031-379-2022</a></td>
            </tr>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="px-6 py-4 font-semibold text-slate-900">구매</td>
              <td class="px-6 py-4 text-slate-700"><a href="mailto:purchase@samjin.co.kr" class="text-emerald-600 hover:text-emerald-700 transition">purchase@samjin.co.kr</a></td>
              <td class="px-6 py-4 text-slate-700"><a href="tel:031-379-2028" class="text-emerald-600 hover:text-emerald-700 transition">031-379-2028</a></td>
            </tr>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="px-6 py-4 font-semibold text-slate-900">홍보/IR</td>
              <td class="px-6 py-4 text-slate-700"><a href="mailto:ir@samjin.co.kr" class="text-emerald-600 hover:text-emerald-700 transition">ir@samjin.co.kr</a></td>
              <td class="px-6 py-4 text-slate-700"><a href="tel:031-379-2038" class="text-emerald-600 hover:text-emerald-700 transition">031-379-2038</a></td>
            </tr>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="px-6 py-4 font-semibold text-slate-900">영업</td>
              <td class="px-6 py-4 text-slate-700"><a href="mailto:sales2@samjin.co.kr" class="text-emerald-600 hover:text-emerald-700 transition">sales2@samjin.co.kr</a></td>
              <td class="px-6 py-4 text-slate-700"><a href="tel:031-379-2141" class="text-emerald-600 hover:text-emerald-700 transition">031-379-2141</a></td>
            </tr>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="px-6 py-4 font-semibold text-slate-900">품질보증</td>
              <td class="px-6 py-4 text-slate-700"><a href="mailto:quality@samjin.co.kr" class="text-emerald-600 hover:text-emerald-700 transition">quality@samjin.co.kr</a></td>
              <td class="px-6 py-4 text-slate-700"><a href="tel:031-379-2084" class="text-emerald-600 hover:text-emerald-700 transition">031-379-2084</a></td>
            </tr>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="px-6 py-4 font-semibold text-slate-900">제조</td>
              <td class="px-6 py-4 text-slate-700"><a href="mailto:product@samjin.co.kr" class="text-emerald-600 hover:text-emerald-700 transition">product@samjin.co.kr</a></td>
              <td class="px-6 py-4 text-slate-700"><a href="tel:031-379-2153" class="text-emerald-600 hover:text-emerald-700 transition">031-379-2153</a></td>
            </tr>
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
              <td class="px-6 py-4 font-semibold text-slate-900">LGP 개발</td>
              <td class="px-6 py-4 text-slate-700"><a href="mailto:lgp@samjin.co.kr" class="text-emerald-600 hover:text-emerald-700 transition">lgp@samjin.co.kr</a></td>
              <td class="px-6 py-4 text-slate-700"><a href="tel:031-379-2093" class="text-emerald-600 hover:text-emerald-700 transition">031-379-2093</a></td>
            </tr>
            <tr class="hover:bg-slate-50 transition">
              <td class="px-6 py-4 font-semibold text-slate-900">KM사업팀</td>
              <td class="px-6 py-4 text-slate-700"><a href="mailto:km@samjin.co.kr" class="text-emerald-600 hover:text-emerald-700 transition">km@samjin.co.kr</a></td>
              <td class="px-6 py-4 text-slate-700"><a href="tel:031-379-2188" class="text-emerald-600 hover:text-emerald-700 transition">031-379-2188</a></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- 모바일 카드 -->
      <div class="lg:hidden space-y-4">
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <p class="text-sm font-semibold text-emerald-600 mb-1">채용(인사)</p>
          <p class="text-slate-700 text-sm mb-2"><a href="mailto:recruit@samjin.co.kr" class="text-emerald-600 hover:underline">recruit@samjin.co.kr</a></p>
          <p class="text-slate-700 text-sm"><a href="tel:031-379-2022" class="text-emerald-600 hover:underline">031-379-2022</a></p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <p class="text-sm font-semibold text-emerald-600 mb-1">구매</p>
          <p class="text-slate-700 text-sm mb-2"><a href="mailto:purchase@samjin.co.kr" class="text-emerald-600 hover:underline">purchase@samjin.co.kr</a></p>
          <p class="text-slate-700 text-sm"><a href="tel:031-379-2028" class="text-emerald-600 hover:underline">031-379-2028</a></p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <p class="text-sm font-semibold text-emerald-600 mb-1">홍보/IR</p>
          <p class="text-slate-700 text-sm mb-2"><a href="mailto:ir@samjin.co.kr" class="text-emerald-600 hover:underline">ir@samjin.co.kr</a></p>
          <p class="text-slate-700 text-sm"><a href="tel:031-379-2038" class="text-emerald-600 hover:underline">031-379-2038</a></p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <p class="text-sm font-semibold text-emerald-600 mb-1">영업</p>
          <p class="text-slate-700 text-sm mb-2"><a href="mailto:sales2@samjin.co.kr" class="text-emerald-600 hover:underline">sales2@samjin.co.kr</a></p>
          <p class="text-slate-700 text-sm"><a href="tel:031-379-2141" class="text-emerald-600 hover:underline">031-379-2141</a></p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <p class="text-sm font-semibold text-emerald-600 mb-1">품질보증</p>
          <p class="text-slate-700 text-sm mb-2"><a href="mailto:quality@samjin.co.kr" class="text-emerald-600 hover:underline">quality@samjin.co.kr</a></p>
          <p class="text-slate-700 text-sm"><a href="tel:031-379-2084" class="text-emerald-600 hover:underline">031-379-2084</a></p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <p class="text-sm font-semibold text-emerald-600 mb-1">제조</p>
          <p class="text-slate-700 text-sm mb-2"><a href="mailto:product@samjin.co.kr" class="text-emerald-600 hover:underline">product@samjin.co.kr</a></p>
          <p class="text-slate-700 text-sm"><a href="tel:031-379-2153" class="text-emerald-600 hover:underline">031-379-2153</a></p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <p class="text-sm font-semibold text-emerald-600 mb-1">LGP 개발</p>
          <p class="text-slate-700 text-sm mb-2"><a href="mailto:lgp@samjin.co.kr" class="text-emerald-600 hover:underline">lgp@samjin.co.kr</a></p>
          <p class="text-slate-700 text-sm"><a href="tel:031-379-2093" class="text-emerald-600 hover:underline">031-379-2093</a></p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <p class="text-sm font-semibold text-emerald-600 mb-1">KM사업팀</p>
          <p class="text-slate-700 text-sm mb-2"><a href="mailto:km@samjin.co.kr" class="text-emerald-600 hover:underline">km@samjin.co.kr</a></p>
          <p class="text-slate-700 text-sm"><a href="tel:031-379-2188" class="text-emerald-600 hover:underline">031-379-2188</a></p>
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
