<?php

/**
 *  Блок "Карточки превью с таб-меню"
 */
$blockACF = get_field('_impressions-menu');
// TODO: определять post_type
$allArticles = get_posts(array(
  'numberposts' => -1,
  'category'    => 0,
  'orderby'     => 'rand',
  'order'       => 'DESC',
  'include'     => array(),
  'exclude'     => array(),
  'meta_key'    => '',
  'meta_value'  => '',
  'post_type'   => 'impressions',
  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
));
// проверка статей для страницы если нет то вывожу все allArticles
$articles = $blockACF['_articles'] ? $blockACF['_articles'] : $allArticles;
$acfFieldsAr = get_fields();
// echo '<pre>';
// var_dump($acfFieldsAr);
// echo '</pre>';

if (!empty($blockACF) && $blockACF["isShow"]) : ?>

  <section class="impressions-menu">
    <div class="wrapper">
      <h3 class="page__title page_regular page__title-h3">Виды впечатлений</h3>
      <div class="impressions-menu-inner">
        <div class="tabs">
          <?php if (!empty($blockACF['_isLinks'])) : ?>
            <div class="tav-nav ">
              <?php foreach ($blockACF['_links'] as $link) :
                // echo '<pre>';
                // var_dump($link["link"]);
                // echo '</pre>';
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                // echo $actual_link;
              ?>
                <a class="tab-link <?php echo $actual_link == $link["link"] ? 'is-active'  : '' ?>" href="<?php echo $link["link"]; ?>">
                  <div class="page-link"><?php echo $link["title"]; ?></div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <div class="images-menu-items">
            <?php
            if (!empty($articles)) {
              foreach ($articles as $post) {
                include(TEMPLATEPATH . "/src/components/_impressions-item/_impressions-item.php");
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>