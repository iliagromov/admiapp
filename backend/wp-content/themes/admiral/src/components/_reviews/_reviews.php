<?php
$fieldACF = get_field('_reviews');
$articles = $fieldACF['_articles'];
$all_posts = get_posts(array(
  'numberposts' => -1,
  'category'    => 0,
  'orderby'     => 'rand',
  'order'       => 'DESC',
  'include'     => array(),
  'exclude'     => array(),
  'meta_key'    => '',
  'meta_value'  => '',
  'post_type'   => 'review',
  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
));

$posts = $articles ? $articles : $all_posts;
// echo '<pre>';
// var_dump($posts);
// echo '</pre>';

if (!empty($fieldACF) && $fieldACF["isShow"]) :
?>
  <section class="review">
    <div class="wrapper">
      <h3 class="page__title page_regular page__title-h3">Отзывы</h3>
      <div class="review-inner">
        <div class="review-items js--slider-banner swiper">
          <div class="review__toggles">
            <div class="js--swiper-pagination swiper-pagination"></div>
            <div class="js--swiper-button-next swiper-button-next"></div>
            <div class="js--swiper-button-prev swiper-button-prev"></div>
          </div>
          <div class="swiper-wrapper">
            <?php

            foreach ($posts as $post) :
              setup_postdata($post);
              // TODO: think namenig !acfFields!
              $acfFields = get_field('_reviews-fields');
              $text = $acfFields['text'];
              $name = $acfFields['name'];
            ?>
              <div class="swiper-slide review-item">
                <div class="bg"><img src="assets/images/svg/icon-review.svg" alt=""></div>
                <div class="review-item__stars"><img src="assets/images/png/main-page/stars.png" alt=""></div>
                <div class="review-item__text">
                  <p class="page__text"><?php echo $text; ?></p>
                </div>
                <div class="review-item__name">
                  <div class="name"><?php echo $name; ?></div>
                </div>
              </div>
            <?php endforeach;
            wp_reset_postdata(); ?>
          </div>
        </div>
        <div class="review__link"><a class="page-link page-link_arrow" href="">Все отзывы<div class="svg-cheveron-right svg-cheveron-right-box"></div></a></div>
      </div>
    </div>
  </section>
  <!--/_review-->
<?php endif; ?>