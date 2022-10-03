<?php

/**
 * Блок "Большой Баннер с картинкой и текстом"
 *
 */
$fieldACF = get_field('_banner');
$fieldsACF = $fieldACF["fields"];

$img = $fieldsACF['img'];
$title = $fieldsACF['title'];
$text = $fieldsACF['text'];
$isLeft = $fieldsACF['isLeft'];
$isCenter = $fieldsACF['isCenter'];

if (!empty($fieldACF) && $fieldACF["isShow"]) :
?>
  <section class="banner">
    <div class="banner_bg">
      <img src="<?php echo $img ? $img : '' ?>" alt="banner">
    </div>


    <?php if ($isCenter) : ?>

      <div class="banner-inner banner-inner_center">
        <div class="wrapper">
          <div class="banner__title_bottom">
            <h1 class="page__title page_regular page__title-h1"><?php echo $title; ?></h1>
          </div>
        </div>
      </div>

    <?php endif; ?>

    <?php if ($isLeft) : ?>

      <div class="banner-inner banner-inner_left">
        <div class="wrapper">
          <div class="banner__title_left">
            <h1 class="page__title page_regular page__title-h1"><?php echo $title; ?></h1>
            <br>
            <p class="page__text"><?php echo $text; ?></p>
          </div>
        </div>
      </div>
    <?php endif; ?>






  </section>
<?php endif; ?>