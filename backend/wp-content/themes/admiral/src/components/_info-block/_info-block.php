<?php
$fieldACF = get_field('_info-block');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
?>
  <section class="info-block">
    <div class="wrapper">
      <div class="info-block-inner">
        <h2 class="page__title page_regular page__title-h2">Адмиральские бани</h2>
        <p class="page__text page_regular">— это 6 коттеджей с русской баней, спа-программы, круглосуточная кухня и
          река впечатлений</p>
      </div>
    </div>
    <div class="info-block__img"> <img src="assets/images/png/main-page/banner-admiral@2x.png" alt="banner-admiral">
      <div class="info-block__link-show-more"><a class="page-link page-link_arrow" href="/">Больше программ<div class="svg-cheveron-right svg-cheveron-right-box"></div></a></div>
    </div>
  </section>
<?php endif; ?>