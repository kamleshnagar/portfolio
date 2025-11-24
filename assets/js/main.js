/**
* Template Name: iPortfolio
* Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
* Updated: Jun 29 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function () {
  "use strict";

  /**
   * Header toggle
   */
  const headerToggleBtn = document.querySelector('.header-toggle');

  function headerToggle() {
    document.querySelector('#header').classList.toggle('header-show');
    headerToggleBtn.classList.toggle('bi-list');
    headerToggleBtn.classList.toggle('bi-x');
  }
  headerToggleBtn.addEventListener('click', headerToggle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.header-show')) {
        headerToggle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function (e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Init typed.js
   */
  const selectTyped = document.querySelector('.typed');
  if (selectTyped) {
    let typed_strings = selectTyped.getAttribute('data-typed-items');
    typed_strings = typed_strings.split(',');
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Animate the skills items on reveal
   */
  let skillsAnimation = document.querySelectorAll('.skills-animation');
  skillsAnimation.forEach((item) => {
    new Waypoint({
      element: item,
      offset: '80%',
      handler: function (direction) {
        let progress = item.querySelectorAll('.progress .progress-bar');
        progress.forEach(el => {
          el.style.width = el.getAttribute('aria-valuenow') + '%';
        });
      }
    });
  });

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function (isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function () {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function (filters) {
      filters.addEventListener('click', function () {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });

  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function (swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function (e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();




//......................................

(function () {
  const container = document.getElementById('videoContainer');
  const video = document.getElementById('myVideo');
  const soundBtn = document.getElementById('soundBtn');

  // playline elements
  const playlineWrap = document.getElementById('playlineWrap');
  const playline = document.getElementById('playline');
  const playProgress = document.getElementById('playProgress');
  const playpoint = document.getElementById('playpoint');

  // ensure video starts muted (for autoplay)
  video.muted = true;

  // toggle mute/unmute icon + behavior
  soundBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    const nowUnmuted = video.muted;
    video.muted = !video.muted;
    updateSoundIcon();
    // keep button visible briefly after unmute for feedback
    if (!video.muted) {
      soundBtn.style.opacity = 0.96;
      setTimeout(() => {
        // allow normal hover behavior
      }, 800);
    }
  });

  function updateSoundIcon() {
    soundBtn.innerHTML = video.muted ?
      `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
         <path d="M3 10v4h4l5 4V6L7 10H3z" fill="currentColor"/>
         <line x1="2" y1="2" x2="22" y2="22" stroke="currentColor" stroke-width="2"/>
       </svg>` :
      `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
         <path d="M3 10v4h4l5 4V6L7 10H3z" fill="currentColor"/>
         <path d="M14 9c1 .8 2 2 2 4s-1 3.2-2 4" stroke="currentColor" stroke-width="2" fill="none"/>
         <path d="M17 7c2 1.5 3 3.5 3 6s-1 4.5-3 6" stroke="currentColor" stroke-width="2" fill="none"/>
       </svg>`;
  }
  updateSoundIcon();

  /* ---------- Show playline only when hovering in bottom 50% ---------- */
  let isPointerOver = false;

  container.addEventListener('pointerenter', () => isPointerOver = true);
  container.addEventListener('pointerleave', () => {
    isPointerOver = false;
    hidePlayline();
  });

  container.addEventListener('pointermove', (e) => {
    // get pointer Y relative to container
    const rect = container.getBoundingClientRect();
    const y = e.clientY - rect.top;
    const bottomHalf = rect.height / 2;

    if (y >= bottomHalf && isPointerOver) {
      // pointer is in bottom 50% -> show playline
      showPlayline();
    } else {
      // pointer in top half -> hide playline
      hidePlayline();
    }
  });

  // For touch devices, show playline when touching near bottom.
  container.addEventListener('touchstart', (e) => {
    const rect = container.getBoundingClientRect();
    const touchY = e.touches[0].clientY - rect.top;
    if (touchY >= rect.height / 2) showPlayline();
  });

  function showPlayline() {
    playlineWrap.classList.add('visible');
    playline.setAttribute('aria-hidden', 'false');
  }
  function hidePlayline() {
    playlineWrap.classList.remove('visible');
    playline.setAttribute('aria-hidden', 'true');
  }

  /* ---------- Update progress during playback ---------- */
  function updateProgressUI() {
    const percent = (video.currentTime / Math.max(1, video.duration)) * 100;
    playProgress.style.width = percent + '%';
    // position playpoint (clamped to 0..100)
    const clamped = Math.max(0, Math.min(100, percent));
    playpoint.style.left = clamped + '%';
    // update aria value
    playline.setAttribute('aria-valuenow', Math.round(clamped));
  }
  video.addEventListener('timeupdate', updateProgressUI);
  video.addEventListener('loadedmetadata', updateProgressUI);

  /* ---------- Seek on click or drag ---------- */
  function seekFromEvent(e) {
    const rect = playline.getBoundingClientRect();
    let clientX = (e.touches ? e.touches[0].clientX : e.clientX);
    let pos = (clientX - rect.left) / rect.width;
    pos = Math.max(0, Math.min(1, pos));
    video.currentTime = pos * video.duration;
    updateProgressUI();
  }

  // click to seek
  playline.addEventListener('click', (e) => {
    seekFromEvent(e);
  });

  // drag support on the playpoint
  let dragging = false;
  playpoint.addEventListener('pointerdown', (e) => {
    e.preventDefault();
    dragging = true;
    playpoint.setPointerCapture(e.pointerId);
  });
  window.addEventListener('pointermove', (e) => {
    if (!dragging) return;
    seekFromEvent(e);
  });
  window.addEventListener('pointerup', (e) => {
    if (!dragging) return;
    dragging = false;
    try { playpoint.releasePointerCapture(e.pointerId); } catch (err) { }
  });

  // keyboard accessibility: left/right arrows seek small steps
  playline.addEventListener('keydown', (e) => {
    if (!video.duration) return;
    const step = Math.max(1, video.duration * 0.05); // 5% step or 1s min
    if (e.key === 'ArrowRight') {
      video.currentTime = Math.min(video.duration, video.currentTime + step);
      updateProgressUI();
      e.preventDefault();
    } else if (e.key === 'ArrowLeft') {
      video.currentTime = Math.max(0, video.currentTime - step);
      updateProgressUI();
      e.preventDefault();
    } else if (e.key === 'Home') {
      video.currentTime = 0; updateProgressUI(); e.preventDefault();
    } else if (e.key === 'End') {
      video.currentTime = video.duration; updateProgressUI(); e.preventDefault();
    }
  });

  // initial UI update in case already buffered
  updateProgressUI();
})();
