<?php  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<section class="modal modalCallback" data-modal="modalCallback"> <button class="modalClose icon-close js-modal-close"></button>
  <div class="modalContent">
    <h2 class="page__title-h2">Форма обратной связи</h2>
    <p class="page__text">Оставьте свои контакты, и администратор яхт-клуба свяжется с Вами в ближайшее время</p>

    <?php /*
    <form id="form" class="page-form" onsubmit="ym(30586067,'reachGoal','formaf')"> 
      <label for="form_name">
        <p class="page__text">Ваше имя: </p>
        <input require type="text" name="form_name" class="page-input required form_name" placeholder="Имя Фамилия" value=""/>
      </label>
      <label for="form_tel">
        <p class="page__text">Номер телефона:</p>
        <input require type="tel" name="form_tel" class="page-input required form_tel" inputmode="numeric" data-inputmask="'mask': '(999) 999-99-99'" placeholder="+7 (___) ___-__-__" value="">
      </label>
      <input type="hidden" name="url" class="url" value="<?php echo $actual_link; ?>">
      <input type="hidden" name="utm" class="utm" value="Форма обратной связи модальное окно ">
      <input type="checkbox" name="form_anticheck"  class="form_anticheck" style="display: none !important;" value="true" checked="checked"/>
      <input type="text" name="form_submitted" class="form_submitted" value="" style="display: none !important;"/>

      <input type="submit"  class="form_submit page__btn page_broun-outline" value="Отправить"/>
    </form>*/?>

    <script data-b24-form="inline/71/9zxdst" data-skip-moving="true">
    (function(w,d,u){
    var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
    var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://cdn-ru.bitrix24.ru/b20055040/crm/form/loader_71.js');
    </script>
  </div>
</section>  