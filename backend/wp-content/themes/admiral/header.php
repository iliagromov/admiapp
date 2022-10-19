<?php
// Для общего шаблона pageTemp
global $fieldsACF;
$fieldsACF =  [
    '_banner', 
    '_info-block',
    '_info-block-cards', 
    '_info-block-certificates',
    '_reviews',
    '_slider-banner', 
    '_slider-banner-2', 
    '_slider-banner-3', 
    '_callback',
    '_callback-2',
    '_bath-items',
    '_article-cards',
    '_impressions-menu',
    '_order-form',
    '_certificates',
    '_more-order',
    '_prices',
    '_block-html',
    '_table'
];
?>
<!DOCTYPE html>
<html lang="ru" data-scroll="0">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="tg@gromov_ilia">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  <base href="<?php echo get_template_directory_uri(); ?>/">
  <title><?php echo wp_get_document_title(); ?></title>
  <link rel="stylesheet" href="libs/css/fancybox.css" type="text/css">
  <link rel="stylesheet" href="libs/css/swiper-bundle.min.css" type="text/css">
  <link rel="stylesheet" href="css/base-styles.css" type="text/css">
  
  <link type="image/x-icon" rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <!---->
  <?php wp_head(); ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-WWF8L7HPG0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-WWF8L7HPG0');
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <meta name="yandex-verification" content="c5b87436f0957cfb">
  <script async="" src="https://mc.yandex.ru/metrika/tag.js"></script>
  <script type="text/javascript">(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(30586067, "init", { id:30586067, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true });</script>
  <noscript><div><img src="https://mc.yandex.ru/watch/30586067" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

</head>

<body <?php body_class(); ?>>

  <div class="debugGrid debugGrid__z-index-negative"></div>
  <header class="header">
    <div class="wrapper">
      <div class="header-inner">
        <div class="header__logo">
          <a href="/">
            <img src="assets/images/png/main-page/logo-header.png" alt="logo">
            <!-- <img src="assets/images/png/main-page/logo-header.svg" alt="logo"> -->
          </a>
        </div>
        <div class="header__nav">
          <nav class="page-nav"> 
            <?php wp_nav_custom_menu('headerNavigation'); ?>
            <!-- <a class="page-link" href="/">Коттеджи</a>
            <a class="page-link" href="/">Программы</a>
            <a class="page-link" href="/">Кухня</a>
            <a class="page-link" href="/">Впечатления</a> -->
          </nav>
        </div>
        <div class="header__phone">
          <div class="page-fl-aic">
            <div class="svg-phone svg-phone-box"></div>
            <a class="page-link" href="tel:+7 (499) 325-35-35">+7 (499) 325-35-35</a>
          </div>
        </div>
        <div class="header__menu">
          <div class="menu-btn headerNavBurgerMenu">
            <div class="svg-view-list svg-view-list-box"></div>
          </div>
        </div>
      </div>
      <nav class="menu">
        <div class="menuClose"></div>
        <div class="menuContent">
          <div class="menuContent_desktop">
            <?php wp_nav_custom_menu('menuNavigation'); ?></div>
          <div class="menuContent_mobile">
            <?php wp_nav_custom_menu('menuNavigationMobile'); ?></div>
      </nav>
    </div>
  </header>
  
