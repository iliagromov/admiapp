<?php
// Блок Инфоблок "Сертификаты"
$fieldACF = get_field('_info-block-certificates');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
$fields = $fieldACF['fields'];
$items = $fields['items'];
?>
<section class="info-block-certificates">
  <div class="wrapper">
    <div class="info-block-certificates-inner">
      <?php 
      if(!empty($items )):
      foreach($items as $item): ?>
        <div class="info-block-certificates__card">
        <div class="info-block-certificates-card">
          <h3 class="page__title page_regular page__title-h3"><?php echo $item['title']; ?></h3>
          <p class="page__text"><?php echo $item['text']; ?> </p>

          <?php if(!empty($item['link']['url'])) :?>

          <a class="page-link page-link_arrow " href="<?php echo $item['link']['url']; ?> " >
            <?php echo $item['link']['title'] ? $item['link']['title'] : 'Забронировать коттедж'; ?>
            <div class="svg-cheveron-right svg-cheveron-right-box"></div>
          </a>

          <?php else: ?>

            <div class="page-link page-link_arrow " data-tl-booking-open='true' data-tl-room='206476'>
            <?php echo 'Забронировать коттедж'; ?>
            <div class="svg-cheveron-right svg-cheveron-right-box"></div>
          </div>
            
          <?php endif;?>


          <div class="info-block-certificates-card__img">
            <img src="" alt=""></div>
        </div>
      </div>
      <?php endforeach;
      endif;
      ?>
    </div>
  </div>
</section>
<?php endif; ?>