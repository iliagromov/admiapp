<?php
/*
	Template Name: Impressions
*/
get_header();

$acf = get_field('_impressions');
?>
<main class="page">
  <section class="banner banner-impressions">
    <div class="banner_bg">
      <div class="banner_bg-shadow"></div>
      <img src="assets/images/png/impressions/img-impressions.png" alt="banner">
    </div>
    <div class="wrapper">
      <div class="banner-inner banner-inner_center">
        <div class="banner__title_left">
          <h1 class="page__title page_regular page__title-h1">Широкий спектр ярких впечатлений:</h1>
          <p class="page__text">водные виды спорта, зимние и летние развлечения и расслабляющие процедуры</p>
        </div>
      </div>
    </div>
  </section>
  <section class="impressions-menu">
    <div class="wrapper">
      <h3 class="page__title page_regular page__title-h3">Виды впечатлений</h3>
      <div class="impressions-menu-inner">
        <div class="tabs" id="tabs">
          <?php /*foreach($items as $item):*/?>
          <?php /*endforeach;*/?>
          <div class="tav-nav">
            <div class="tab-link is-active">
              <div class="page-link">Расслабляющие процедуры</div>
            </div>
            <div class="tab-link">
              <div class="page-link">Летние развлечения</div>
            </div>
            <div class="tab-link">
              <div class="page-link">Зимние развлечения</div>
            </div>
          </div>

          <div class="tab-content is-active">
            <div class="images-menu-items">
              <a class="images-menu__item" href="">
                <div class="images-menu__item-img">
                  <img src="assets/images/png/impressions/img-impressions-1.png" alt="impressions">
                </div>
                <div class="images-menu__item-text">
                  <h4 class="page__title page_regular page__title-h4">Прокат яхт </h4>
                </div>
              </a>
              <a class="images-menu__item" href="">
                <div class="images-menu__item-img"><img src="assets/images/png/impressions/img-impressions-2.png" alt="impressions"></div>
                <div class="images-menu__item-text">
                  <h4 class="page__title page_regular page__title-h4">Катание на гидроцикле</h4>
                </div>
              </a>
              <a class="images-menu__item" href="">
                <div class="images-menu__item-img"><img src="assets/images/png/impressions/img-impressions-3.png" alt="impressions"></div>
                <div class="images-menu__item-text">
                  <h4 class="page__title page_regular page__title-h4">Рыбалка</h4>
                </div>
              </a>
              <a class="images-menu__item" href="">
                <div class="images-menu__item-img"><img src="assets/images/png/impressions/img-impressions-4.png" alt="impressions"></div>
                <div class="images-menu__item-text">
                  <h4 class="page__title page_regular page__title-h4">Сапсерфинг</h4>
                </div>
              </a><a class="images-menu__item" href="">
                <div class="images-menu__item-img"><img src="assets/images/png/impressions/img-impressions-5.png" alt="impressions"></div>
                <div class="images-menu__item-text">
                  <h4 class="page__title page_regular page__title-h4">Прокат лодок</h4>
                </div>
              </a><a class="images-menu__item" href="">
                <div class="images-menu__item-img"><img src="assets/images/png/impressions/img-impressions-6.png" alt="impressions"></div>
                <div class="images-menu__item-text">
                  <h4 class="page__title page_regular page__title-h4">Вейкбординг</h4>
                </div>
              </a>
            </div>
          </div>
          <div class="tab-content">
            <div class="images-menu-items"><a class="images-menu__item" href="">
                <div class="images-menu__item-img"><img src="assets/images/png/impressions/img-impressions-2.png" alt="impressions"></div>
                <div class="images-menu__item-text">
                  <h4 class="page__title page_regular page__title-h4">Прокат яхт </h4>
                </div>
              </a></div>
          </div>
          <div class="tab-content">
            <div class="images-menu-items"><a class="images-menu__item" href="">
                <div class="images-menu__item-img"><img src="assets/images/png/impressions/img-impressions-3.png" alt="impressions"></div>
                <div class="images-menu__item-text">
                  <h4 class="page__title page_regular page__title-h4">Прокат яхт </h4>
                </div>
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="slider-banner js--slider-banner swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide slider-banner-slide">
        <div class="slider-banner-slide__text">
          <div class="wrapper">
            <div class="slider-banner-slide-text">
              <div class="page__title page_regular page__title-h2">Попробуйте программу «SPA VIP PLUS»</div>
              <div class="price">170 000₽ / 22 часа</div>
            </div>
          </div>
        </div>
        <div class="slider-banner-slide__img">
          <div class="slider-banner-slide__img_bg"></div><img src="assets/images/png/main-page/banner-sport.png" alt="banner-spa">
        </div>
      </div>
      <div class="swiper-slide slider-banner-slide">
        <div class="slider-banner-slide__text">
          <div class="wrapper">
            <div class="slider-banner-slide-text">
              <div class="page__title page_regular page__title-h2"> Попробуйте программу «SPA VIP PLUS»</div>
            </div>
          </div>
        </div>
        <div class="slider-banner-slide__img">
          <div class="slider-banner-slide__img_bg"></div><img src="assets/images/png/main-page/banner-menu.png" alt="banner-spa">
        </div>
      </div>
      <div class="swiper-slide slider-banner-slide">
        <div class="slider-banner-slide__text">
          <div class="wrapper">
            <div class="slider-banner-slide-text">
              <div class="page__title page_regular page__title-h2"> Попробуйте программу «SPA VIP PLUS»</div>
            </div>
          </div>
        </div>
        <div class="slider-banner-slide__img">
          <div class="slider-banner-slide__img_bg"></div><img src="assets/images/png/main-page/banner-spa.png" alt="banner-spa">
        </div>
      </div>
    </div>
    <div class="wrapper">
      <div class="slider-banner-inner">
        <div class="slider-banner__toggles">
          <div class="js--swiper-pagination swiper-pagination"></div>
          <div class="js--swiper-button-next swiper-button-next"></div>
          <div class="js--swiper-button-prev swiper-button-prev"></div>
        </div>
      </div>
    </div>
    <div class="slider-banner__link-show-more"><a class="page-link page-link_arrow" href="/">Больше программ<div class="svg-cheveron-right svg-cheveron-right-box"></div></a></div>
  </section>
  <section class="callback">
    <div class="wrapper">
      <div class="callback-inner">
        <form class="page-form page-form-callback">
          <h3 class="page__title page_regular page__title-h3">Если есть вопросы, свяжитесь с нами</h3>
          <div class="page-form-links">
            <div class="page-fl-aic">
              <div class="svg-phone svg-phone-box"></div>
              <div class="page-link">Заказать звонок </div>
            </div>
            <div class="page-fl-aic">
              <div class="svg-mail-solid svg-mail-solid-box"></div>
              <div class="page-link">Написать на почту</div>
            </div>
            <div class="page-fl-aic">
              <div class="svg-whatsapp svg-whatsapp-box"></div>
              <div class="page-link">Написать в Whats app</div>
            </div>
          </div>
          <div class="page-form__img"><img src="assets/images/svg/icon-noun-soap-suds.svg" alt=""></div>
        </form>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>