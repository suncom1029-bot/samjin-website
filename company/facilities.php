<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>사업장 - 삼진엘앤디</title>
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
          <a href="#" class="hover:text-emerald-400 transition">회사소개</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">사업장</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        4개국,<br>하나의 삼진엘앤디
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        글로벌 제조 거점에서 세계 시장과 함께 성장합니다
      </p>
    </div>
  </section>

  <!-- 글로벌 사업장 네트워크 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-12 text-center">
        <h2 class="text-4xl font-bold mb-4">글로벌 사업장 네트워크</h2>
        <p class="text-gray-500 text-lg">4개국에서 고객사에 최고의 솔루션을 공급합니다</p>
      </div>

      <!-- 사업장 네트워크 이미지 -->
      <div class="rounded-lg overflow-hidden shadow-lg">
        <img src="/assets/img/facilities-network.png" alt="삼진엘앤디 글로벌 사업장 네트워크" class="w-full h-auto">
      </div>
    </div>
  </section>

  <!-- 본사 (한국) -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">🇰🇷 본사 (한국)</h2>
        <p class="text-gray-500 text-lg">개발·기술·금형의 심장</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- 이미지 -->
        <div class="rounded-lg overflow-hidden">
          <img src="/assets/img/img_factory.jpg" alt="본사 사업장" class="w-full h-auto object-cover rounded-lg">
        </div>

        <!-- 정보 -->
        <div class="space-y-6">
          <div>
            <h3 class="text-2xl font-bold text-slate-900 mb-4">기본 정보</h3>
            <div class="space-y-4">
              <div class="border-l-4 border-emerald-500 pl-4">
                <p class="text-sm text-gray-600 mb-1">회사명</p>
                <p class="text-lg font-semibold text-slate-900">(주)삼진엘앤디</p>
              </div>
              <div class="border-l-4 border-emerald-500 pl-4">
                <p class="text-sm text-gray-600 mb-1">주소</p>
                <p class="text-lg font-semibold text-slate-900">경기도 화성시 동탄기흥로 64-17</p>
              </div>
              <div class="border-l-4 border-emerald-500 pl-4">
                <p class="text-sm text-gray-600 mb-1">전화</p>
                <p class="text-lg font-semibold text-slate-900">031-379-2000</p>
              </div>
              <div class="border-l-4 border-emerald-500 pl-4">
                <p class="text-sm text-gray-600 mb-1">팩스</p>
                <p class="text-lg font-semibold text-slate-900">031-376-5830</p>
              </div>
            </div>
          </div>

          <div>
            <h3 class="text-2xl font-bold text-slate-900 mb-4">역할</h3>
            <ul class="space-y-2 text-slate-700">
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>본사 & 경영지원</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>R&D 센터 (신기술 개발)</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>금형 설계·제조 (Hot Runner 기술)</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>배터리 부품 가스켓 생산 (삼성SDI 공급)</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>도광판(LGP), 광학 부품 생산</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 글로벌 거점 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">글로벌 거점</h2>
        <p class="text-gray-500 text-lg">세계 3개 지역에서 함께 성장</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- 미국 -->
        <div class="bg-white rounded-lg p-8 border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">🇺🇸</p>
          <h3 class="text-2xl font-bold text-slate-900 mb-2">ELEMEK, INC.</h3>
          <p class="text-emerald-600 font-semibold mb-4">미국 (Chula Vista, CA)</p>
          <div class="space-y-3 text-slate-700">
            <div>
              <p class="text-sm text-gray-600 mb-1">역할</p>
              <p class="font-semibold">영업 거점 & OEM 납품</p>
            </div>
            <div>
              <p class="text-sm text-gray-600 mb-1">기능</p>
              <p>북미 시장 영업 활동 및 고객 지원</p>
            </div>
            <div>
              <p class="text-sm text-gray-600 mb-1">설립</p>
              <p>약 2015년경</p>
            </div>
          </div>
        </div>

        <!-- 멕시코 -->
        <div class="bg-white rounded-lg p-8 border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">🇲🇽</p>
          <h3 class="text-2xl font-bold text-slate-900 mb-2">COMEX PLATECH</h3>
          <p class="text-emerald-600 font-semibold mb-4">멕시코 (Tijuana, BC)</p>
          <div class="space-y-3 text-slate-700">
            <div>
              <p class="text-sm text-gray-600 mb-1">역할</p>
              <p class="font-semibold">제조 & 판매</p>
            </div>
            <div>
              <p class="text-sm text-gray-600 mb-1">주요 제품</p>
              <p>도광판, 확산판, OA기기(Finisher) 제조</p>
            </div>
            <div>
              <p class="text-sm text-gray-600 mb-1">규모</p>
              <p class="font-semibold text-emerald-700">약 80명</p>
            </div>
            <div>
              <p class="text-sm text-gray-600 mb-1">설립</p>
              <p>1996년</p>
            </div>
          </div>
        </div>

        <!-- 베트남 -->
        <div class="bg-white rounded-lg p-8 border border-slate-200 hover:shadow-lg transition">
          <p class="text-4xl mb-4">🇻🇳</p>
          <h3 class="text-2xl font-bold text-slate-900 mb-2">SAMJIN LND VINA</h3>
          <p class="text-emerald-600 font-semibold mb-4">베트남 (Vinh Phuc)</p>
          <div class="space-y-3 text-slate-700">
            <div>
              <p class="text-sm text-gray-600 mb-1">역할</p>
              <p class="font-semibold">배터리 부품 제조</p>
            </div>
            <div>
              <p class="text-sm text-gray-600 mb-1">주요 제품</p>
              <p>2차전지 가스켓, ESS·UPS 부품 사출/조립</p>
            </div>
            <div>
              <p class="text-sm text-gray-600 mb-1">규모</p>
              <p class="font-semibold text-emerald-700">약 590명 (주재원 10명)</p>
            </div>
            <div>
              <p class="text-sm text-gray-600 mb-1">설립</p>
              <p>2007년</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 글로벌 전략 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">글로벌 제조 전략</h2>
        <p class="text-gray-500 text-lg">소비지 중심의 현지화 생산</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- 카드 1 -->
        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-8 rounded-lg border border-emerald-200">
          <p class="text-3xl mb-4">🏭</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">현지화 생산</h3>
          <p class="text-slate-700">
            소비지 생산 관점에서 운송비 절감, 납기 단축, 고객 신뢰성 강화
          </p>
        </div>

        <!-- 카드 2 -->
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-lg border border-blue-200">
          <p class="text-3xl mb-4">🎯</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">거점별 특화</h3>
          <p class="text-slate-700">
            한국(개발·기술), 멕시코(디스플레이·OA), 베트남(배터리 부품) 역할 분담
          </p>
        </div>

        <!-- 카드 3 -->
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-lg border border-purple-200">
          <p class="text-3xl mb-4">🌍</p>
          <h3 class="text-xl font-bold text-slate-900 mb-3">글로벌 공급망</h3>
          <p class="text-slate-700">
            삼성SDI, 삼성전자, 현대자동차 등 주요 고객사와 함께 성장
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 주요 고객사 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">주요 고객사</h2>
        <p class="text-gray-500 text-lg">세계적 기업들과의 신뢰 관계</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-3xl font-bold text-slate-900 mb-2">삼성SDI</p>
          <p class="text-sm text-gray-600">배터리 가스켓<br>70% 공급</p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-3xl font-bold text-slate-900 mb-2">삼성전자</p>
          <p class="text-sm text-gray-600">디스플레이 부품<br>OA기기</p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-3xl font-bold text-slate-900 mb-2">현대자동차</p>
          <p class="text-sm text-gray-600">배터리 부품<br>SQ 인증</p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-3xl font-bold text-slate-900 mb-2">LG 계열사</p>
          <p class="text-sm text-gray-600">도광판<br>광학 부품</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 오시는 길 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">본사 오시는 길</h2>
        <p class="text-gray-500 text-lg">경기도 화성시 동탄기흥로 64-17</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- 주소 -->
        <div class="bg-gradient-to-br from-slate-50 to-slate-100 p-8 rounded-lg border border-slate-200">
          <h3 class="text-xl font-bold text-slate-900 mb-4">📍 주소</h3>
          <p class="text-slate-700 mb-2">경기도 화성시 동탄기흥로 64-17</p>
          <p class="text-sm text-gray-600 mt-4">본사 & 개발·기술 센터</p>
        </div>

        <!-- 연락처 -->
        <div class="bg-gradient-to-br from-slate-50 to-slate-100 p-8 rounded-lg border border-slate-200">
          <h3 class="text-xl font-bold text-slate-900 mb-4">☎️ 연락처</h3>
          <div class="space-y-2 text-slate-700">
            <p><span class="font-semibold">대표전화:</span> 031-379-2000</p>
            <p><span class="font-semibold">팩스:</span> 031-376-5830</p>
          </div>
        </div>

        <!-- 대중교통 -->
        <div class="bg-gradient-to-br from-slate-50 to-slate-100 p-8 rounded-lg border border-slate-200">
          <h3 class="text-xl font-bold text-slate-900 mb-4">🚗 대중교통</h3>
          <p class="text-slate-700 text-sm">
            화성시 동탄신도시 인근<br>
            자세한 교통편은 네비게이션으로 확인해주세요
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
