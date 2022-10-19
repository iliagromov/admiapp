<?php
$fieldACF = get_field('_order-form');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
  $shortcode = $fieldACF['shortcode'];
  $payments = $fieldACF['payments'];
  $price = $payments['price'];
  $hour = $payments['hour'];
  $isLink = $payments['isLink'];
  $link = $payments['link'];

?>
  <!--_order-form-->
  <section class="order-form">
    <div class="wrapper">
      <div class="order-form-inner">
        <div class="order-form-container">
          <div class="order-form-container__price">
            <div class="price">
              <div class="page__title-h3 page__title page_regular"><?php echo $price; ?> ₽ / <span><?php echo $hour; ?></span></div>
            </div>
          </div>
          <div class="order-form-container__btn">
            <?php if ($isLink) : ?>
              <a class="page-btn" href="<?php echo $link; ?>" target="_blank">Забронировать </a>
            <?php else : ?>
              <a class="page-btn js-open-modal" data-modal='modalCallback' href="">Забронировать </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--_order-form-->
<?php endif; ?>