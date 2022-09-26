
<?php
$bannerACF = get_field('_banner');
if (!empty($bannerACF) && $bannerACF["isShow"]) :
?>

<?php endif; ?>
   <section class="banner">
      <div class="banner_bg">
        <img src="assets/images/png/impressions/img-impressions.png" alt="banner"></div>
      <div class="wrapper">
        <div class="banner-inner banner-inner_left">
          <div class="banner__title_left">
            <h1 class="page__title page_regular page__title-h1">
              Широкий спектр летних впечатлений:
            </h1>
            <br>
            <p class="page__text"> водные виды спорта, зимние и летние развлечения и расслабляющие процедуры</p>
          </div>
        </div>
      </div>
    </section>