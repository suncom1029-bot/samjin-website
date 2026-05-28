<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display 부품 - 삼진엘앤디</title>
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
          <a href="#" class="hover:text-emerald-400 transition">제품소개</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">Display 부품</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        Display의 핵심을<br>담다
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        도광판, 확산판, Mold Frame으로 완벽한 조명 솔루션 제공
      </p>
    </div>
  </section>

  <!-- 제품 개요 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- 이미지 -->
        <div class="rounded-lg overflow-hidden">
          <img src="/assets/img/sub_display_img.jpg" alt="Display 부품" class="w-full h-auto object-cover rounded-lg">
        </div>

        <!-- 설명 -->
        <div class="space-y-8">
          <div>
            <h2 class="text-4xl font-bold mb-4">무엇이 다른가?</h2>
            <p class="text-slate-700 text-lg leading-relaxed">
              도광판(LGP), 확산판, Mold Frame 등 디스플레이 조명의 핵심 부품을 제공합니다.
              고정밀 광학 기술과 우수한 내구성으로 글로벌 대형 가전사의 신뢰를 얻고 있습니다.
            </p>
          </div>

          <div class="space-y-4">
            <h3 class="text-2xl font-bold text-slate-900">주요 제품</h3>
            <ul class="space-y-2 text-slate-700">
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>도광판(LGP) — 광효율 극대화 Roll Stamp 공법 적용</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>확산판 — 균일한 빛 분산, 반사율 최적화</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span>Mold Frame — 정밀 사출, 내구성 우수</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 기술 특징 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">기술 특징</h2>
        <p class="text-gray-500 text-lg">세계 수준의 광학 기술</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- 특징 1: 광학 설계 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-blue-100 text-blue-600 mb-4">
            <span class="text-xl font-bold">1</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">고정밀 광학 설계</h3>
          <p class="text-slate-700">
            패턴 각도, 패턴 크기, 패턴 배치의 최적화로 균일한 빛 분포 실현
          </p>
        </div>

        <!-- 특징 2: Roll Stamp 공법 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-emerald-100 text-emerald-600 mb-4">
            <span class="text-xl font-bold">2</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">Roll Stamp 공법</h3>
          <p class="text-slate-700">
            첨단 롤 스탬프 기술로 마이크로 패턴 형성, 광효율 10~15% 향상
          </p>
        </div>

        <!-- 특징 3: 글로벌 품질 -->
        <div class="bg-white p-8 rounded-lg border border-slate-200 hover:shadow-lg transition">
          <div class="flex items-center justify-center h-14 w-14 rounded-full bg-purple-100 text-purple-600 mb-4">
            <span class="text-xl font-bold">3</span>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">글로벌 품질 기준</h3>
          <p class="text-slate-700">
            ISO 9001, 삼성전자 협력사 기준 충족, 일관된 고품질 제공
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 적용 분야 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">적용 분야</h2>
        <p class="text-gray-500 text-lg">삼진의 부품이 들어가는 제품</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg border border-blue-200">
          <p class="text-3xl mb-3">📺</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">TV·Display</h3>
          <p class="text-sm text-slate-700">LED 백라이트 조명</p>
        </div>
        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-6 rounded-lg border border-emerald-200">
          <p class="text-3xl mb-3">🍳</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">주방가전</h3>
          <p class="text-sm text-slate-700">쿡탑·정수기·냉장고</p>
        </div>
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg border border-purple-200">
          <p class="text-3xl mb-3">🖨️</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">복합기·프린터</h3>
          <p class="text-sm text-slate-700">스캔 조명 부품</p>
        </div>
        <div class="bg-gradient-to-br from-amber-50 to-amber-100 p-6 rounded-lg border border-amber-200">
          <p class="text-3xl mb-3">💡</p>
          <h3 class="text-lg font-bold text-slate-900 mb-2">조명</h3>
          <p class="text-sm text-slate-700">LED 패널 조명</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 주요 고객사 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">주요 고객사</h2>
        <p class="text-gray-500 text-lg">글로벌 대형 가전사의 신뢰</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">삼성전자</p>
          <p class="text-sm text-gray-600">TV·냉장고·세탁기</p>
        </div>
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">LG 계열사</p>
          <p class="text-sm text-gray-600">디스플레이·가전</p>
        </div>
        <div class="bg-white p-8 rounded-lg border border-slate-200 text-center hover:shadow-lg transition">
          <p class="text-4xl font-bold text-slate-900 mb-2">기타 글로벌사</p>
          <p class="text-sm text-gray-600">OEM 파트너십</p>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
