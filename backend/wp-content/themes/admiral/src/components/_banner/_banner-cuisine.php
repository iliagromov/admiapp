
<?php
$bannerACF = get_field('_banner');
if (!empty($bannerACF) && $bannerACF["isShow"]) :
?>

<?php endif; ?>
   <section class="banner">
      <div class="banner_bg"><img src="assets/images/png/main-page/Banner.png" alt="banner"></div>
      <div class="wrapper">
        <div class="banner-inner banner-inner_center">
          <div class="banner__title_bottom">
            <h1 class="page__title page_regular page__title-h1">Загородный отдых класса luxe на воде:</h1>
            <br>
            <h1 class="page__title page_regular page__title-h1">Яхтинг, пляж и лаунж-зоны, банные SPA-программы, спорт и
              мероприятия</h1>
          </div>
        </div>
      </div>
    </section>