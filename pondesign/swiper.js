'use strict';

//スライドショー
const swiper = new Swiper(".swiper", {
    autoplay: {
        delay: 5000,
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      type: 'bullets',
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    spaceBetween: 20,
    slidesPerView: 1,
    centeredSlides: true,
  })