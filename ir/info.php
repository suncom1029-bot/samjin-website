<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IR 정보 - 삼진엘앤디</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/custom.css">

  <!-- Paperlogy 폰트 preload -->
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
          <a href="#" class="hover:text-emerald-400 transition">투자정보</a>
          <span class="mx-2">/</span>
          <span class="text-emerald-400 font-semibold">IR 정보</span>
        </nav>
      </div>
      <h1 class="text-4xl lg:text-5xl font-black mb-3 leading-tight">
        IR 정보
      </h1>
      <p class="text-lg lg:text-xl text-gray-300 font-light">
        투명한 정보 공개와 소통으로 주주 가치를 창출합니다
      </p>
    </div>
  </section>

  <?php include '../includes/mock-data.php'; ?>

  <!-- 회사 소개 섹션 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- 이미지 -->
        <div class="rounded-lg overflow-hidden bg-gradient-to-br from-slate-100 to-slate-50 h-96 flex items-center justify-center">
          <div class="text-center">
            <p class="text-6xl mb-3">🏢</p>
            <p class="text-slate-500 font-semibold">삼진엘앤디</p>
          </div>
        </div>

        <!-- 소개 -->
        <div class="space-y-8">
          <div>
            <h2 class="text-4xl font-bold mb-4">기업 정보</h2>
            <p class="text-slate-700 text-lg leading-relaxed">
              삼진엘앤디는 1987년 설립하여 39년간 정밀금형기술을 바탕으로 성장해온 글로벌 중견기업입니다.
              현재 720명의 직원이 한국을 비롯해 미국, 멕시코, 베트남 등 6개 해외 종속법인에서 근무하고 있습니다.
            </p>
          </div>

          <div class="space-y-4">
            <h3 class="text-2xl font-bold text-slate-900">주요 정보</h3>
            <ul class="space-y-3 text-slate-700">
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span><strong>설립일:</strong> 1987년 3월</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span><strong>상장:</strong> 2023년 8월 4일 (코스닥)</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span><strong>본사:</strong> 경기도 화성시 동탄기흥로 64-17</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span><strong>임직원:</strong> 720명 (국내외 포함)</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-emerald-600 font-bold mt-1">✓</span>
                <span><strong>주요 제품:</strong> Display 부품, 2차전지, OA, 신소재, 금형, AI 지능화</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- IR 자료실 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-4">IR 자료실</h2>
        <p class="text-gray-600 text-lg">기업 관련 공식 자료를 다운로드 받을 수 있습니다</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- 사업보고서 -->
        <a href="#" class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg hover:shadow-xl hover:border-emerald-500 transition">
          <div class="text-4xl mb-4">📋</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">사업보고서</h3>
          <p class="text-slate-600 text-sm mb-4">연간 사업실적 및 경영성과 보고</p>
          <p class="text-xs text-gray-500">2025년도 보고서</p>
        </a>

        <!-- 분기보고서 -->
        <a href="#" class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg hover:shadow-xl hover:border-emerald-500 transition">
          <div class="text-4xl mb-4">📊</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">분기보고서</h3>
          <p class="text-slate-600 text-sm mb-4">분기별 경영실적 현황</p>
          <p class="text-xs text-gray-500">2026년 1분기 보고서</p>
        </a>

        <!-- 감사보고서 -->
        <a href="#" class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg hover:shadow-xl hover:border-emerald-500 transition">
          <div class="text-4xl mb-4">✅</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">감사보고서</h3>
          <p class="text-slate-600 text-sm mb-4">외부감사인의 감사 의견서</p>
          <p class="text-xs text-gray-500">2025년도 감사보고서</p>
        </a>

        <!-- 주주총회 자료 -->
        <a href="#" class="bg-white p-8 rounded-lg border border-slate-200 shadow-lg hover:shadow-xl hover:border-emerald-500 transition">
          <div class="text-4xl mb-4">🤝</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">주주총회 자료</h3>
          <p class="text-slate-600 text-sm mb-4">정기·임시 주주총회 소집 공고</p>
          <p class="text-xs text-gray-500">2026년 정기주주총회</p>
        </a>
      </div>
    </div>
  </section>

  <!-- 공지사항 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-4">공지사항</h2>
        <p class="text-gray-600 text-lg">투자자를 위한 최신 공지사항</p>
      </div>

      <div class="space-y-4">
        <?php foreach ($ir_notices as $notice): ?>
        <a href="<?php echo $notice['link']; ?>" class="block p-6 border border-slate-200 rounded-lg hover:bg-slate-50 hover:border-emerald-500 transition">
          <div class="flex items-start justify-between gap-4">
            <div class="flex-1">
              <p class="text-sm text-emerald-600 font-semibold mb-2"><?php echo $notice['date']; ?></p>
              <h3 class="text-lg font-bold text-slate-900 mb-2"><?php echo $notice['title']; ?></h3>
              <p class="text-slate-600 text-sm"><?php echo $notice['content']; ?></p>
            </div>
            <div class="text-emerald-600 font-bold text-2xl">→</div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<!-- 투자자 연락처 -->
  <section class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold mb-4">투자자 연락처</h2>
        <p class="text-gray-600 text-lg">IR 관련 문의사항을 연락주세요</p>
      </div>

      <div class="max-w-2xl mx-auto bg-gradient-to-br from-emerald-50 to-blue-50 p-12 rounded-lg border-2 border-emerald-500 shadow-lg">
        <div class="space-y-6 text-center">
          <div>
            <p class="text-sm text-slate-600 font-semibold uppercase mb-2">부서</p>
            <p class="text-xl font-bold text-slate-900">경영지원팀 / IR담당</p>
          </div>

          <div class="border-t border-slate-300 pt-6">
            <p class="text-sm text-slate-600 font-semibold uppercase mb-2">전화</p>
            <a href="tel:031-379-2000" class="text-2xl font-bold text-emerald-600 hover:text-emerald-700 transition">
              031-379-2000
            </a>
          </div>

          <div class="border-t border-slate-300 pt-6">
            <p class="text-sm text-slate-600 font-semibold uppercase mb-2">이메일</p>
            <a href="mailto:ir@samjin.co.kr" class="text-lg font-semibold text-blue-600 hover:text-blue-700 transition">
              ir@samjin.co.kr
            </a>
          </div>

          <div class="border-t border-slate-300 pt-6">
            <p class="text-sm text-slate-600 font-semibold uppercase mb-2">주소</p>
            <p class="text-slate-700 font-semibold">
              경기도 화성시 동탄기흥로 64-17<br>
              삼진엘앤디 본사
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 관련 링크 -->
  <section class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-12 text-center">
        <h2 class="text-3xl font-bold mb-6">관련 사이트</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="https://dart.fss.or.kr/" target="_blank" class="p-6 bg-white rounded-lg border border-slate-200 text-center hover:shadow-lg hover:border-emerald-500 transition">
          <p class="text-3xl mb-2">📄</p>
          <h3 class="font-bold text-slate-900">DART</h3>
          <p class="text-xs text-gray-600 mt-2">전자공시시스템</p>
        </a>

        <a href="https://www.krx.co.kr/" target="_blank" class="p-6 bg-white rounded-lg border border-slate-200 text-center hover:shadow-lg hover:border-emerald-500 transition">
          <p class="text-3xl mb-2">📊</p>
          <h3 class="font-bold text-slate-900">KRX</h3>
          <p class="text-xs text-gray-600 mt-2">한국거래소</p>
        </a>

        <a href="/ir/stock.php" class="p-6 bg-white rounded-lg border border-slate-200 text-center hover:shadow-lg hover:border-emerald-500 transition">
          <p class="text-3xl mb-2">📈</p>
          <h3 class="font-bold text-slate-900">주식 정보</h3>
          <p class="text-xs text-gray-600 mt-2">실시간 주가</p>
        </a>

        <a href="/ir/financial.php" class="p-6 bg-white rounded-lg border border-slate-200 text-center hover:shadow-lg hover:border-emerald-500 transition">
          <p class="text-3xl mb-2">💹</p>
          <h3 class="font-bold text-slate-900">재무 정보</h3>
          <p class="text-xs text-gray-600 mt-2">재무현황</p>
        </a>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <script src="/assets/js/main.js"></script>
</body>
</html>
