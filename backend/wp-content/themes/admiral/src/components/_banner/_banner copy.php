
<?php
$bannerACF = get_field('_banner');
if (!empty($bannerACF) && $bannerACF["isShow"]) :
?>
  <section class="banner">
    <div class="banner_bg">
      <img src="assets/images/png/main-page/Banner.png" alt="banner">
    </div>

    <div class="wrapper">
      <div class="banner-inner">
        <div class="banner__title_bottom">
          <h1 class="page__title page_regular page__title-h1">Загородный отдых класса luxe: коттеджи с баней, яхтинг, SPA-программы</h1>
        </div>
      </div>
      
    </div>
  </section>
<?php endif; ?>