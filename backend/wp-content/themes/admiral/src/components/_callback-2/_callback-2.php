
<?php
$fieldACF = get_field('_callback-2');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
$shortcode = $fieldACF['shortcode'];
// var_dump($shortcode);
?>
<section class="callback">
  <div class="wrapper">
    <div class="callback-inner">
      <form class="page-form page-form-callback">
        <h3 class="page__title page_regular page__title-h3">Если есть вопросы, свяжитесь с нами</h3>
        <div class="page-form-links">
          <div class="page-fl-aic">
            <div class="svg-phone svg-phone-box"></div>
            <div class="page-link js-open-modal" data-modal='modalCallback' >Заказать звонок </div>
          </div>
          <div class="page-fl-aic">
            <div class="svg-mail-solid svg-mail-solid-box"></div>
            <a class="page-link" href="mailto:info@club-admiral.com">Написать на почту</a>
          </div>
          <div class="page-fl-aic">
            <div class="svg-whatsapp svg-whatsapp-box"></div>
            <a class="page-link" href="https://wa.me/79895793606" target="_blank">Написать в Whats app</a>
          </div>
        </div>
        <div class="page-form__img">
          <img src="assets/images/svg/icon-noun-soap-suds.svg" alt="">
        </div>
      </form>
    </div>
  </div>
</section>
<?php endif; ?>