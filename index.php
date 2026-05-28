<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>삼진엘앤디 | 글로벌 정밀금형 기업</title>
  <meta name="description" content="1987년부터 정밀금형기술을 바탕으로 성장해온 글로벌 중견기업 삼진엘앤디입니다.">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Swiper CSS & JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="bg-white text-slate-900">

  <?php include 'includes/mock-data.php'; ?>
  <?php include 'includes/header.php'; ?>

  <!-- Hero Section with Swiper -->
  <section class="hero-section relative">
    <div class="swiper hero-swiper h-full">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1200&h=800&fit=crop');">
          <div class="hero-content">
            <h2 class="hero-title">세상을 바꾸는 기술,<br>삼진엘앤디</h2>
            <p class="hero-subtitle">1987년부터 38년, 정밀금형에서 AI 배터리 부품까지</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=1200&h=800&fit=crop');">
          <div class="hero-content">
            <h2 class="hero-title">ESS·UPS 배터리 부품<br>국내 선도 기업</h2>
            <p class="hero-subtitle">삼성SDI 핵심 파트너, 북미 AI 데이터센터 전력 인프라 공급</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=800&fit=crop');">
          <div class="hero-content">
            <h2 class="hero-title">4개국 글로벌 제조 거점<br>800명 임직원</h2>
            <p class="hero-subtitle">한국·미국·멕시코·베트남, 세계 시장과 함께 성장</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1487215078519-e21cc028cb29?w=1200&h=800&fit=crop');">
          <div class="hero-content">
            <h2 class="hero-title">도광판부터<br>AI 비전 검사까지</h2>
            <p class="hero-subtitle">Roll Stamp 기술 특허, 정밀 광학 부품 글로벌 공급</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1495521821757-a1efb6729352?w=1200&h=800&fit=crop');">
          <div class="hero-content">
            <h2 class="hero-title">Pride in Quality<br>& Technology</h2>
            <p class="hero-subtitle">현대자동차 SQ·IATF16949 인증, 뿌리기술 명가 대통령상</p>
          </div>
        </div>
      </div>
      <div class="swiper-pagination absolute bottom-8 left-1/2 transform -translate-x-1/2 z-30"></div>
    </div>
  </section>

  <!-- Products Section -->
  <section id="products" class="section-lg bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-4">BUSINESS</h2>
        <p class="text-gray-500 text-lg">초격차 기술경쟁력으로 최고의 품질을 만듭니다</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
          $product_images = [
            'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1518895949257-7621c3c786d7?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1576086213369-97a306d36557?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&h=400&fit=crop'
          ];
        ?>
        <?php foreach ($products as $index => $product): ?>
          <div
            class="product-card"
            style="background-image: url('<?php echo $product_images[$index]; ?>');"
            data-aos="fade-up"
          >
            <span class="product-label"><?php echo $product['name']; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="section-lg bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-4">HIGHLIGHTS</h2>
        <p class="text-gray-500 text-lg">38년 정밀 제조 기술로 써 내려간 삼진엘앤디의 성장</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach ($stats as $stat): ?>
          <div class="stat-card" data-aos="fade-up">
            <div class="stat-value" data-count="<?php echo $stat['value']; ?>">0</div>
            <div class="stat-label"><?php echo $stat['label']; ?></div>
            <div class="stat-description"><?php echo $stat['description']; ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- IR Section -->
  <section class="section-lg bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-12">
        <h2 class="text-4xl font-bold mb-4">IR</h2>
        <p class="text-gray-500 text-lg"><?php echo $ir_data['subtitle']; ?></p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
        <!-- Stock Price Card -->
        <div class="lg:col-span-2 bg-gradient-to-br from-slate-50 to-white rounded-lg p-8 shadow-lg border border-slate-100 transition-all duration-300 hover:shadow-xl hover:border-emerald-500 hover:-translate-y-1" data-aos="fade-up">
          <h3 class="text-slate-600 font-semibold mb-4 text-lg">실시간 주가정보</h3>
          <div>
            <p class="text-6xl font-bold text-slate-900 mb-4"><?php echo number_format($ir_data['stock_price']); ?>원</p>
            <div class="space-y-3">
              <div class="flex justify-between items-center">
                <span class="text-slate-600 text-base">전일대비</span>
                <span class="<?php echo ($ir_data['price_change'] < 0 ? 'text-blue-500' : 'text-red-500'); ?> font-semibold text-lg"><?php echo ($ir_data['price_change'] < 0 ? '▼' : '▲'); ?> <?php echo number_format(abs($ir_data['price_change'])); ?></span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-slate-600 text-base">등락률(%)</span>
                <span class="<?php echo ($ir_data['change_percent'] < 0 ? 'text-blue-500' : 'text-red-500'); ?> font-semibold text-lg"><?php echo $ir_data['change_percent']; ?>%</span>
              </div>
            </div>
          </div>
        </div>

        <!-- IR Info Cards -->
        <?php foreach ($ir_sections as $section): ?>
          <div class="lg:col-span-1 bg-white rounded-lg p-6 shadow-lg flex flex-col items-center justify-center text-center border border-slate-100 transition-all duration-300 hover:shadow-lg hover:border-emerald-500 hover:-translate-y-1" data-aos="fade-up">
            <div class="text-4xl mb-2"><?php echo $section['icon']; ?></div>
            <h3 class="font-semibold text-slate-900 text-lg"><?php echo $section['title']; ?></h3>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="section-lg bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-4">ESG</h2>
        <p class="text-gray-500 text-lg">환경, 사회, 윤리경영으로 지속가능한 미래를 만듭니다</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php foreach ($services as $service): ?>
          <div class="feature-card" data-aos="fade-up">
            <div class="feature-icon"><?php echo $service['icon']; ?></div>
            <h3 class="feature-title"><?php echo $service['title']; ?></h3>
            <p class="feature-description"><?php echo $service['description']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section id="news" class="section-lg bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-4">NEWS</h2>
        <p class="text-gray-500 text-lg">변화와 성장을 함께하는 뉴스</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($news as $item): ?>
          <div class="news-card" data-aos="fade-up">
            <div class="news-date"><?php echo $item['date']; ?></div>
            <h3 class="news-title"><?php echo $item['title']; ?></h3>
            <p class="news-summary"><?php echo $item['summary']; ?></p>
            <a href="<?php echo $item['link']; ?>" class="inline-block mt-4 text-emerald-500 font-semibold hover:text-emerald-600 transition">
              읽기 →
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="text-center mt-12">
        <a href="#" class="btn-primary">모든 뉴스 보기</a>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section id="contact" class="section-lg bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="mb-16">
        <h2 class="text-4xl font-bold mb-4">CONNECT WITH US</h2>
        <p class="text-gray-500 text-lg">고객, 인재, 사회와 함께하는 삼진엘앤디</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($cta_banners as $banner): ?>
          <a href="<?php echo $banner['link']; ?>" class="cta-banner" data-aos="fade-up">
            <div class="cta-content">
              <div class="cta-icon"><?php echo $banner['icon']; ?></div>
              <h3 class="cta-title"><?php echo $banner['title']; ?></h3>
              <p class="cta-description"><?php echo $banner['description']; ?></p>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- Scripts -->
  <script src="assets/js/main.js"></script>

  <script>
    // Initialize synchronized counters for stats
    document.addEventListener('DOMContentLoaded', function() {
      const statCards = document.querySelectorAll('.stat-card');
      const totalStats = statCards.length;
      let visibleCount = 0;
      let animationStarted = false;

      function startAllCounters() {
        const duration = 2000;
        const startTime = Date.now();

        statCards.forEach(card => {
          const value = card.querySelector('[data-count]');
          if (value && !value.dataset.animated) {
            const finalValue = value.dataset.count;
            const numValue = parseInt(finalValue);

            const updateCounter = () => {
              const elapsed = Date.now() - startTime;
              const progress = Math.min(elapsed / duration, 1);
              const currentValue = Math.floor(numValue * progress);
              value.textContent = currentValue + (finalValue.includes('+') ? '+' : '');

              if (progress < 1) {
                requestAnimationFrame(updateCounter);
              } else {
                value.textContent = finalValue;
                value.dataset.animated = 'true';
              }
            };

            updateCounter();
          }
        });
      }

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            visibleCount++;
          }
        });

        if (visibleCount >= totalStats && !animationStarted) {
          animationStarted = true;
          startAllCounters();
          observer.disconnect();
        }
      }, { threshold: 0.5 });

      statCards.forEach(card => observer.observe(card));
    });
  </script>
</body>
</html>
