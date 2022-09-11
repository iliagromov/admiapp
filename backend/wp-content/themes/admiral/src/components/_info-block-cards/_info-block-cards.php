<?php
$fieldACF = get_field('_info-block-cards');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
?>
<section class="info-block-cards">
    <div class="wrapper">
      <div class="info-block-cards-inner">
        <div class="info-block-cards__text">
          <h3 class="page__title page__title-h3 page_regular">Все привилегии в одной карте</h3>
          <p class="page__text page_regular">Вступайте в наше сообщество истинных ценителей банного отдыха и получайте
            дополнительные привелегии</p><a class="page-link page-link_arrow" href="">Узнать все привилегии клуба<div
              class="svg-cheveron-right svg-cheveron-right-box"></div></a>
        </div>
        <div class="info-block-cards__img"><img src="assets/images/png/main-page/info-block-cards.png"
            alt="info-block-cards"></div>
      </div>
    </div>
  </section>
<?php endif; ?>