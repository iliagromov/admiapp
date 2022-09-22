<?php
$fieldACF = get_field('_order-form');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
$shortcode = $fieldACF['shortcode'];
$payments = $fieldACF['payments'];
$price = $payments['price'];
$hour = $payments['hour'];

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
            <a class="page-btn" href="">Забронировать </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--_order-form-->
<?php endif; ?>