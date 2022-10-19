

<footer class="footer">
    <div class="footer__nav">
      <div class="wrapper">
        <div class="footer-inner">
          <?php /*wp_nav_custom_menu('footerNav');*/ 
          /* $menu = wp_nav_menu([
            'echo'           => false,
            'theme_location' => 'header_menu',
            'menu'           => 'header_menu',
            'container'      => false,
            'menu_class'     => 'main_nav--list main_nav--list-level_1 list-unstyled',
            'link_before'    => '<span>',
            'link_after'     => '</span>',
            'is_mobile'      => 0,
        ]);
        $menu = str_replace('sub-menu', 'main_nav--list main_nav--list-level_2 list-unstyled', $menu);
        echo $menu;*/
          
          ?>
          
          <div class="footer__col">
            <div class="page__title page_regular page__title-h4">Проживание</div>
              <?php wp_nav_custom_menu('footerNavCol1'); ?>
              <?php /*<a class="page-link" href="/">Коттеджи и номера</a>
              <a class="page-link" href="/">Забронировать</a>
              <a class="page-link" href="/">Клубная карта</a> */?>
          </div>
          <div class="footer__col">
            <div class="page__title page_regular page__title-h4">Бани и SPA</div>
            <?php wp_nav_custom_menu('footerNavCol2'); ?>
            <?php /* <a class="page-link" href="/">SPA Программы</a>  */?>
          </div>
          <?php /* 
          <div class="footer__col">
            <div class="page__title page_regular page__title-h4">Кухня</div>
            <?php wp_nav_custom_menu('footerNavCol3'); ?>
            <a class="page-link" href="/">О ресторане</a>
            <a class="page-link" href="/">Меню</a>
            <a class="page-link" href="/">Полный панисион</a>
            <a class="page-link" href="/">Винная карта</a>
          </div> */?>
          <div class="footer__col">
            <div class="page__title page_regular page__title-h4">Отдых и Впечатления</div>
            <?php wp_nav_custom_menu('footerNavCol4'); ?>
            <?php /* <a class="page-link" href="/">Ресторан</a>
            <a class="page-link" href="/">Летние впечатления</a>
            <a class="page-link" href="/">Зимние впечатления</a>
            <a class="page-link" href="/">Расслабляющие процедуры</a> */?>
          </div>
          <div class="footer__col">
            <div class="page__title page_regular page__title-h4">Информация</div>
            <?php wp_nav_custom_menu('footerNavCol5'); ?>
            <?php /*<a class="page-link" href="/">Правила посещения яхт-клуба</a>
            <a class="page-link" href="/">Реквизиты</a>
            <a class="page-link" href="/">Политика  конфиденциальности</a>
            <a class="page-link" href="/">Публичная оферта</a> */?>
          </div>
          <div class="footer__col footer__contacts">
            <div class="page__title page_regular page__title-h4">Контакты</div>
            <div class="page-fl-aic">
              <div class="svg-phone svg-phone-box"></div>
              <a class="page-link" href="tel:+7 (499) 325-35-35">
              +7 (499) 325-35-35</a>
            </div>
            <div class="page-fl-aic">
              <div class="svg-mail-solid svg-mail-solid-box"></div>
              <a class="page-link"  href="mailto:info@club-admiral.com">info@club-admiral.com</a>
            </div>
            <div class="page-fl-aic">
              <div class="svg-home svg-home-box"></div> 
              <p>Россия, Московская обл., Мытищинский р-н., Виноградовский СО, д. Грибки, ул. Адмиральская, вл. 1, стр.1</p>
              
            </div>
            <div class="page-fl-aic"></div>
          </div>
          <div class="footer__col footer__bottom">
          <div class="footer__logo">
            <a href="/">
              <img src="assets/images/png/main-page/logo-footer.png" alt="logo">
              <!-- <img src="assets/images/png/main-page/logo-footer.svg" alt="logo"> -->
            </a>  
          </div>
          <div class="footer__social">
            <div class="select-city">
              <div class="svg-globe-solid svg-globe-solid-box"></div>
              <p class="page__text">Русский (RU)</p>
            </div>
            <div class="social">
              <a class="social-link" href="https://vk.com/yacht_club_admiral" target="_blank">
                <div class="svg-vk svg-vk-box"></div>
              </a>
              <a class="social-link"  href="https://wa.me/79895793606" target="_blank">
                <div class="svg-watsapp svg-watsapp-box"></div>
              </a>
              <a class="social-link" href="https://t.me/admiral_yacht_club" target="_blank">
                <div class="svg-telegramm svg-telegramm-box"></div>
              </a>

            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php include(TEMPLATEPATH . "/src/components/modal/modal.php"); ?>
  <div class="overlay js-overlay-modal"></div>
  <link rel="stylesheet" href="css/styles-calc.css" type="text/css">
  <link rel="stylesheet" href="css/styles-sprites.css" type="text/css">
  <script src="libs/js/_all/modal.js"></script>
  <script src="libs/js/_all/swiper-bundle.min.js"></script>
  <script src="libs/js/_all/store-scroll.js"></script>
  <script src="libs/js/_all/tabs.js"></script>
  <script src="libs/js/_all/fancybox.umd.js"></script>
  <script src="js/main.js"></script>
  
  <script src="js/menu/menu.component.js"></script>
	<?php wp_footer(); ?>
</body>

</html>