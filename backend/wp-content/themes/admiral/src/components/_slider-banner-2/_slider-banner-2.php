<?php
$fieldACF = get_field('_slider-banner-2');
$all_posts = get_posts(array(
  'numberposts' => -1,
  'category'    => 0,
  'orderby'     => 'rand',
  'order'       => 'DESC',
  'include'     => array(),
  'exclude'     => array(),
  'meta_key'    => '',
  'meta_value'  => '',
  'post_type'   => 'slider-banner',
  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
));

$posts =  $fieldACF['_slides'] ? $fieldACF['_slides'] : $all_posts;
// echo '<pre>';
// var_dump($articles['slides']);
// echo '</pre>';
if (!empty($fieldACF) && $fieldACF["isShow"]) :
?>
  <!--_slider-banner2-->
  <section class="slider-banner js--slider-banner swiper">
    <div class="swiper-wrapper">
      <?php

      foreach ($posts as $post) :
        setup_postdata($post);
        $acfFields = get_field('_slider-banner-fields');
        $title = $acfFields['title'];
        $text = $acfFields['text'];

        $link = $acfFields['link'];
        $bg = $acfFields['bg'] ? $acfFields['bg']  : 'assets/images/png/main-page/img-баня.jpg';
        // echo '<pre>';
        // var_dump($acfFields);
        // echo '</pre>';
      ?>
        <a class="swiper-slide slider-banner-slide" href="<?php echo $link ? $link : 'javascript:void(0)';?>">
          <div class="slider-banner-slide__text">
            <div class="wrapper">
              <div class="slider-banner-slide-text">
                <div class="page__title page_regular page__title-h2">
                  <?php echo $title; ?>
                </div>
                <br>
                <div class="page__text price">
                  <span>
                    <?php echo $text; ?>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-banner-slide__img">
            <div class="slider-banner-slide__img_bg"></div>
            <img src="<?php echo $bg; ?>" alt="banner-spa">
          </div>
        </a>
      <?php endforeach;
      wp_reset_postdata(); ?>



    </div>
    <div class="wrapper">
      <div class="slider-banner-inner">
        <div class="slider-banner__toggles">
          <div class="js--swiper-pagination swiper-pagination"></div>
          <div class="js--swiper-button-next swiper-button-next"></div>
          <div class="js--swiper-button-prev swiper-button-prev"></div>
        </div>
      </div>
    </div>

  </section>
<?php endif; ?>
<!--/_slider-banner-->