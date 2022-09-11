
<?php
$bannerACF = get_field('_banner');
if (!empty($bannerACF) && $bannerACF["isShow"]) :
?>

<?php endif; ?>
   <section class="banner">
      <div class="banner_bg">
        <img src="assets/images/png/impressions/img-impressions-rest.png" alt="banner"></div>
      <div class="wrapper">
        <div class="banner-inner banner-inner_center">
          <div class="banner__title_left">
            <h1 class="page__title page_regular page__title-h1">
              Процедуры для расслабления
            </h1>
            <p class="page__text"> Парение, помывка, различные спа-процедуры и массажи</p>
          </div>
        </div>
      </div>
    </section>