<?php
// Блок Инфоблок "Карточки "Все привилегии""
$fieldACF = get_field('_info-block-cards');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
$fields = $fieldACF['fields']
?>
<section class="info-block-cards">
    <div class="wrapper">
      <div class="info-block-cards-inner">
        <div class="info-block-cards__text">
          <h3 class="page__title page__title-h3 page_regular"><?php echo $fields['title'];?></h3>
          <p class="page__text "><?php echo $fields['text'];?></p>
          <a class="page-link page-link_arrow" href="<?php echo $fields['link'];?>">Узнать все привилегии клуба<div
              class="svg-cheveron-right svg-cheveron-right-box"></div></a>
        </div>
        <div class="info-block-cards__img"><img src="assets/images/png/main-page/info-block-cards.png"
            alt="info-block-cards"></div>
      </div>
    </div>
  </section>
<?php endif; ?>