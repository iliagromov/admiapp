<?php /*$moreOrder*/ ?>
<?php
// Блок Закажите дополнительно
$fieldACF = get_field('_more-order');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
$fields = $fieldACF['fields'];
$title = $fields['title'];
$items = $fields['items'];
?>
<div class="single-bath-page-more-order">
  <div class="wrapper">
  <h3 class="page__title-h3 page__title page_regular"><?php echo $title;?></h3>
  <div class="single-bath-page-more-order__items">
    <?php if (!empty($items)) :
      foreach ($items as $item):

    ?>
       <?php include(TEMPLATEPATH . "/src/components/_more-order/_more-order-item.php"); ?>
    <?php 
    endforeach;
  endif; ?>
  </div>
  </div>
 
</div>
<?php /*$moreOrder*/ ?>
<?php endif; ?>