// Main JavaScript for SAMJIN L&D

document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu toggle
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
    });

    // Close menu when link is clicked
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
      link.addEventListener('click', function() {
        mobileMenu.classList.add('hidden');
      });
    });
  }

  // Navbar scroll effect
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  // Initialize Swiper slider
  initializeSwiper();

  // Initialize counter animations
  initializeCounters();

  // Initialize Intersection Observer for scroll animations
  initializeScrollAnimations();
});

// Swiper initialization
function initializeSwiper() {
  if (typeof Swiper !== 'undefined') {
    const swiper = new Swiper('.hero-swiper', {
      direction: 'vertical',
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      },
      speed: 800,
    });
  }
}

// Counter animation for stats
function initializeCounters() {
  const counters = document.querySelectorAll('[data-count]');

  const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px 0px -100px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.dataset.counted) {
        const target = entry.target;
        const finalValue = target.dataset.count;
        const numValue = parseInt(finalValue.replace(/,/g, ''));
        // 설립연도(1987)를 3초에 카운트하는 속도로 맞춤
        const duration = Math.ceil((numValue / 1987) * 3000); // 3 seconds for founding year
        const startTime = Date.now();

        const updateCounter = () => {
          const elapsed = Date.now() - startTime;
          const progress = Math.min(elapsed / duration, 1);

          // Extract numeric value from finalValue (remove commas)
          const numValue = parseInt(finalValue.replace(/,/g, ''));
          const currentValue = Math.floor(numValue * progress);

          // 설립연도(1987)는 천단위 표기 없음, 나머지는 천단위 표기
          const formattedValue = numValue === 1987 ? currentValue.toString() : currentValue.toLocaleString('ko-KR');
          target.textContent = formattedValue + (finalValue.includes('+') ? '+' : '');

          if (progress < 1) {
            requestAnimationFrame(updateCounter);
          } else {
            const finalNumValue = parseInt(finalValue.replace(/,/g, ''));
            const formattedFinalValue = finalNumValue === 1987 ? finalNumValue.toString() : finalNumValue.toLocaleString('ko-KR');
            target.textContent = formattedFinalValue + (finalValue.includes('+') ? '+' : '');
            target.dataset.counted = 'true';
          }
        };

        updateCounter();
      }
    });
  }, observerOptions);

  counters.forEach(counter => {
    observer.observe(counter);
  });
}

// Scroll animation using Intersection Observer
function initializeScrollAnimations() {
  const animatedElements = document.querySelectorAll('[data-aos]');

  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fade-in-up');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  animatedElements.forEach(element => {
    observer.observe(element);
  });
}

// Smooth scroll for anchor links
document.addEventListener('click', function(e) {
  const link = e.target.closest('a[href^="#"]');
  if (link) {
    const targetId = link.getAttribute('href');
    if (targetId && targetId !== '#') {
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();
        const offsetTop = targetElement.offsetTop - 80; // Account for navbar height
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth'
        });
      }
    }
  }
}, true);

// Lazy load images
function initializeLazyLoading() {
  const images = document.querySelectorAll('img[data-src]');

  const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.removeAttribute('data-src');
        imageObserver.unobserve(img);
      }
    });
  });

  images.forEach(image => {
    imageObserver.observe(image);
  });
}

// Initialize lazy loading when document is ready
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initializeLazyLoading);
} else {
  initializeLazyLoading();
}
