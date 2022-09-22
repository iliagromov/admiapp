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
</head>

<body <?php body_class(); ?>>
  <!-- FIXME: add variables class-->
  <!-- <button class="debugGrid-btn debugGrid-btn__create"
    onclick="debugGridCreate()"></button><button class="debugGrid-btn debugGrid-btn__remove debugGrid-btn__hidden"
    onclick="debugGridRemove()"></button> -->
  <div class="debugGrid debugGrid__z-index-negative"></div>
  <header class="header">
    <div class="wrapper">
      <div class="header-inner">
        <div class="header__logo">
          <a href="https://gromov-studio.ru/admiral/">
            <img src="assets/images/png/main-page/logo-admiral-min.svg" alt="logo">
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
            <a class="page-link" href="tel:+7 (495) 222-02-23">+7 (495)222-02-23</a>
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
  
