<?php

$singleBlockACF = get_field('_single-page')['fields'];

$gallary = $singleBlockACF["gallary"];
// echo '<pre>';
// var_dump($gallary);
// echo '</pre>';
if($singleBlockACF['gallaryIsShow']):
?>
<div class="single-bath-page-img">
  <style>
      :root{
        <?php if(count($gallary)>6) : ?>
        --img-box-count: '+<?php echo count($gallary)-5;?>';
        --img-box-count-display: flex;
        <?php else: ?>
        --img-box-count: '«ещё фото»';
        --img-box-count-display: none;
        <?php endif;?>
      }
      
    </style>
  <div class="single-bath-page__img">
    
    <?php
    if (!empty($gallary)) :
      foreach ($gallary as $item) :
        setup_postdata($item);
    ?>
      
        <a class="single-bath-page__img-box " href="<?php echo $item['image']['url']; ?>" data-slug="cat" data-fancybox="gallery" data-caption='<?php echo $item['image']['title']; ?>' >
            
          <img src="<?php echo $item['image']['url'] ? $item['image']['url'] : ''; ?>" alt="<?php echo $item['image']['url']; ?>">
          <div  class="single-bath-page__img-box_count"></div>
        </a>
      <?php endforeach;?>
      <?php  else : ?>
        <div>Картинок нет</div>
    <?php
    endif;
    wp_reset_postdata();
    ?>

  </div>
</div>
<?php endif;?>