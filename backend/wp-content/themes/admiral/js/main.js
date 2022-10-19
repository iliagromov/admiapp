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

document.addEventListener('DOMContentLoaded', function() {
  let utms =  document.querySelectorAll('.js-get-utm');
  
  utms && utms.forEach(function(item){
      /* Назначаем каждой кнопке обработчик клика */
      item.addEventListener('click', function(e) {
        let modalUtm = this.getAttribute('data-utm');
        window.utm = modalUtm;
      })
  })
})

