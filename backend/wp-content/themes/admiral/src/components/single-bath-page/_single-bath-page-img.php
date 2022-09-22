<?php

$arhiveBlockACF = get_field('_single-page')['fields'];

$gallary = $arhiveBlockACF["gallary"];
// echo '<pre>';
// var_dump($gallary);
// echo '</pre>';

?>
<div class="single-bath-page-img">
  <div class="single-bath-page__img">
    <?php
    if (!empty($gallary)) :
      foreach ($gallary as $item) :
        setup_postdata($item);
    ?>
        <a class="single-bath-page__img-box " href="<?php echo $item['image']; ?>" data-slug="cat" data-fancybox="gallery">
          <img src="<?php echo $item['image'] ? $item['image']: 'assets/images/png/archive-bath/single-bath-page-img-22'; ?>" alt="img">
        </a>
      <?php endforeach;?>
      <?php  else : ?>
        <!-- <a class="single-bath-page__img-box " href="assets/images/png/archive-bath/single-bath-page-img-1.png" data-slug="cat" data-fancybox="gallery">
          <img src="assets/images/png/archive-bath/single-bath-page-img-1.png" alt="img">
        </a>
        <a class="single-bath-page__img-box " href="assets/images/png/archive-bath/single-bath-page-img-22.png" data-slug="cat" data-fancybox="gallery">
          <img src="assets/images/png/archive-bath/single-bath-page-img-22.png" alt="img">
        </a>
        <a class="single-bath-page__img-box " href="assets/images/png/archive-bath/single-bath-page-img-2.png" data-slug="cat" data-fancybox="gallery">
          <img src="assets/images/png/archive-bath/single-bath-page-img-2.png" alt="img">
        </a>
        <a class="single-bath-page__img-box " href="assets/images/png/archive-bath/single-bath-page-img-3.png" data-slug="cat" data-fancybox="gallery">
          <img src="assets/images/png/archive-bath/single-bath-page-img-3.png" alt="img">
        </a>
        <a class="single-bath-page__img-box " href="assets/images/png/archive-bath/single-bath-page-img-4.png" data-slug="cat" data-fancybox="gallery">
          <img src="assets/images/png/archive-bath/single-bath-page-img-4.png" alt="img">
      </a> -->
    <?php
    endif;
    wp_reset_postdata();
    ?>

  </div>
</div>