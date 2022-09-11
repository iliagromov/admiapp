<?php

$arhiveBlockACF = get_field('_single-page')[''];

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
        <a class="single-bath-page__img-box " href="<?php echo $item->guid; ?>" data-slug="cat" data-fancybox="gallery">
          <img src="<?php echo $item->guid; ?>" alt="img">
        </a>
    <?php
      endforeach;

    endif;
    wp_reset_postdata();
    ?>

  </div>
</div>