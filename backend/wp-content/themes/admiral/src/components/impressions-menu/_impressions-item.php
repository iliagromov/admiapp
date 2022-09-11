<?php
$arhiveBlockACF = get_field('_arhive');
$img = $arhiveBlockACF["image-preview"];
$title1 = $arhiveBlockACF["title1"];
$title2 = $arhiveBlockACF["title2"];
$price = $arhiveBlockACF["pirce"];
$icons = $arhiveBlockACF["icons"];
$advateages = $arhiveBlockACF["advateages"];
?>
<a class="images-menu__item" href="<?php the_permalink(); ?>">
  <div class="images-menu__item-img">
    <img src="<?php echo $img ? $img : 'assets/images/png/archive-bath/spa-item-1.png' ?>" alt="impressions">
  </div>
  <div class="images-menu__item-text">
    <h4 class="page__title page_regular page__title-h4"><?php echo $title1; ?></h4>
  </div>
</a>
  