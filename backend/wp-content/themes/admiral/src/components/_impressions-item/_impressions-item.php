<?php

/**
 * Поля для Блок "Карточки превью для развлечений / яхтинга"
 *
*/
$fieldsACF = get_field('_impressions-item')["fields"];

$image = $fieldsACF["image-preview"];
$title1 = $fieldsACF["title1"];

// echo '<pre>';
// var_dump($blockPerson);
// echo '</pre>';
?>
<a class="images-menu__item" href="<?php the_permalink(); ?>">
  <div class="images-menu__item-img">
    <img src="<?php echo $image ? $image : 'assets/images/png/archive-bath/spa-item-1.png' ?>" alt="impressions">
  </div>
  <div class="images-menu__item-text">
    <h4 class="page__title page_regular page__title-h4"><?php echo $title1; ?></h4>
  </div>
</a>
  