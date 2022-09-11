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
      <img src="<?php echo $img ? $img : 'assets/images/png/main-page/Banner.png'?>" alt="banner">
    </div>

    <div class="wrapper">
      <?php if($isCenter) : ?>
        <div class="banner-inner">
          <div class="banner__title_bottom">
            <h1 class="page__title page_regular page__title-h1"><?php echo $title; ?></h1>
          </div>
        </div>
      <?php endif; ?>
      
      <?php if($isLeft)  : ?>
        <div class="banner-inner banner-inner_left">
          <div class="banner__title_left">
            <h1 class="page__title page_regular page__title-h1"><?php echo $title; ?></h1>
            <p class="page__text"><?php echo $text; ?></p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>