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
        <form id="form-callback" class="page-form">
          <h3 class="page__title page_regular page__title-h3">
            Подпишитесь и будьте в курсе <br>наших акций и спецпредложений
          </h3>
          <label for="form_name" style="display: none !important;">
            <input require type="text" name="form_name" class="page-input required form_name" placeholder="Имя Фамилия" value="callback"/>
          </label>
          <input require type="tel" name="form_tel"  class="page-input required form_tel" inputmode="numeric" data-inputmask="'mask': '(999) 999-99-99'" placeholder="+7 (___) ___-__-__" value="">
          <input type="hidden" name="url" class="url" value="<?php echo $actual_link; ?>">
            <input type="hidden" name="utm" class="utm" value="Форма подписки ">
      
          <input type="checkbox" name="form_anticheck" class="form_anticheck" style="display: none !important;" value="true" checked="checked"/>
          <input type="text" name="form_submitted" class="form_submitted" value="" style="display: none !important;"/>

          <input type="submit"  class="form_submit page__btn page_broun-outline" value="Подписаться"/>

        </form>
      </div>
    </div>
  </section>
  <!--callback-->
<?php endif; ?>