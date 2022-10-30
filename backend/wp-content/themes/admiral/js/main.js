const swiperSliderBanner = new Swiper('.js--slider-banner', {
  spaceBetween: 0,
  slidesPerView: 1,
  loop: false,
  navigation: {
      nextEl: '.js--swiper-button-next',
      prevEl: '.js--swiper-button-prev',
  },
  effect: 'fade',
  pagination: {
    el: '.js--swiper-pagination',
    type: 'bullets',
  },
  fadeEffect: {
    crossFade: true
  },
});
