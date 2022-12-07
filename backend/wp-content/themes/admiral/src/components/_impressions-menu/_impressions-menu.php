<?php

/**
 *  Блок "Карточки превью с таб-меню"
 */
$blockACF = get_field('_impressions-menu');
$postType = $blockACF['fields']['articles'];
// var_dump($postType);

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
  <!--impressions-menu-->
  <section class="impressions-menu">
    <div class="wrapper">
      <h3 class="page__title page_regular page__title-h3"><?php echo $blockACF['fields']['title'];?></h3>
      <?php if($blockACF['fields']['isMemu']) :?>
      <div style="justify-content: center;display: flex;">
        <a href="<?php echo $blockACF['fields']['link-menu'];?>" class="page-btn page-btn_outline" target="_blank">Посмотреть меню</a>
      </div>
      <br>
      <?php endif;?>
      <div class="impressions-menu-inner">
        <div class="tabs">
          <?php if (!empty($blockACF['_isLinks'])) : ?>
            <div class="tav-nav ">
              <?php foreach ($blockACF['_links'] as $link) :
                
                // echo '<pre>';
                // var_dump($link["link"]);
                // echo '</pre>';
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                // echo $actual_link ;
                // echo '<br>';
                // echo  $link["link"]['url'];
              ?>
                <a class="tab-link <?php echo $actual_link == $link["link"]['url'] ? 'is-active'  : '' ?>" href="<?php echo $link["link"]['url']; ?>">
                  <div class="page-link"><?php echo $link['link']["title"]; ?></div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <div class="images-menu-items">
            <?php
            if (!empty($articles)) {
              foreach ($articles as $post) {
                setup_postdata($post);
                include(TEMPLATEPATH . "/src/components/_impressions-item/_impressions-item.php");
              }
              wp_reset_postdata();
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>