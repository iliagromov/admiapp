<?php
$fieldACF = get_field('_callback');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
$shortcode = $fieldACF['shortcode'];
// var_dump($shortcode);
?>
  <!--callback-->
  <section class="callback">
    <div class="wrapper">
      <div class="callback-inner">
        <?php /* echo $shortcode; */?>
        <from class="page-form">
          <h3 class="page__title page_regular page__title-h3">
            Подпишитесь и будьте в курсе наших акций и спецпредложений
          </h3>
          <input class="page-input" type="tel" placeholder="Телефон">
          <button class="page__btn page_broun-outline">Подписаться</button>
        </from>
      </div>
    </div>
  </section>
  <!--callback-->
<?php endif; ?>