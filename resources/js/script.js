import Swiper from 'swiper';
import { Navigation, Pagination, EffectFade } from 'swiper/modules';
import IMask from 'imask';

import.meta.glob(["../images/**", "../fonts/**"]);

// Запуск после загрузки DOM
document.addEventListener('DOMContentLoaded', () => {
  initSmoothScroll();
  headerMenu();
  sliders();
  hideMenu();
  phoneMask();
});

function phoneMask() {
  const phoneInput = document.querySelector('#phone');

  if (!phoneInput) return;

  IMask(phoneInput, {
	mask: '+{7}(000)000-00-00',
  });
}

function unlockScroll() {
  document.body.style.overflow = '';
  document.body.style.paddingRight = '';
  delete document.body.dataset.scrollbarWidth;
}

// Menu 
function headerMenu() {
  const btn = document.querySelector('.header__menu-btn');
  const header = document.querySelector('.header');

  function lockScroll() {

    const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;

    document.body.dataset.scrollbarWidth = scrollBarWidth;

    document.body.style.paddingRight = scrollBarWidth + 'px';
    document.body.style.overflow = 'hidden';
  }


  

  btn.addEventListener("click", function () {
    header.classList.toggle('header--open');

    if (header.classList.contains('header--open')) {
      lockScroll();
    } else {
      unlockScroll();
    }
  });
}

// Scroll
function initSmoothScroll(selector = '[data-target]') {
  document.querySelectorAll(selector).forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      const targetId = btn.getAttribute('data-target');
      if (!targetId) return;

      const targetEl = document.getElementById(targetId);
      if (!targetEl) return;

      targetEl.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    });
  });
}

// Sliders
function sliders() {
  const reviewsSlider = new Swiper('.reviews-slider__swiper', {
    modules: [Navigation, EffectFade],
    spaceBetween: 12,
    effect: "fade",
    navigation: {
      nextEl: ".reviews-slider__btn-next",
      prevEl: ".reviews-slider__btn-prev",
    },
  });

  const practiceSlider = new Swiper('.practice-slider__swiper', {
    modules: [Navigation, Pagination],
    spaceBetween: 30,
    slidesPerView: 3,
    loop: true,
	breakpoints: {
		1023.98: {
		  slidesPerView: 3,
		  spaceBetween: 30,
		},
		767.98: {
		  slidesPerView: 2,
		  spaceBetween: 20,
		},
		0: {
		  slidesPerView: 1,
		  spaceBetween: 16,
		}
	  },
    navigation: {
      nextEl: ".practice-slider__btn-next",
      prevEl: ".practice-slider__btn-prev",
    },
    pagination: {
      el: ".practice-slider__pagination",
      clickable: true
    }
  });

  const afterSlider = new Swiper('.after-slider__swiper', {
    modules: [Navigation],
    loop: true,
    navigation: {
      nextEl: ".after-slider__btn-next",
      prevEl: ".after-slider__btn-prev",
    },
  });

  const costSlider = new Swiper('.cost-slider__swiper', {
    modules: [Pagination],
    pagination: {
      el: ".cost-slider__pagination",
      clickable: true
    },
    breakpoints: {
      1023.98: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      767.98: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      0: {
        slidesPerView: 1,
        spaceBetween: 16,

      }
    }
  });
}

// Hide menu on click header links
function hideMenu() {
  const headerLinks = document.querySelectorAll('.header .main-menu__link, .header__info-btn');

  headerLinks.forEach((link) => {
    link.addEventListener("click", function () {
      const headerOpen = link.closest('.header--open');
    
      if (headerOpen) {
        headerOpen.classList.remove('header--open');
        unlockScroll();
      }
    })
  })
}
