<!--_slider-banner-3-->
<section class="slider-banner js--slider-banner swiper">
  <div class="swiper-wrapper">
    <?php
    $articles = get_field('_slider-banner-3');
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

    $posts =  $articles['_slides'] ? $articles['_slides'] : $all_posts;

    foreach ($posts as $post) :
      setup_postdata($post); 
      $acfFields = get_field('_slider-banner-fields');
      $title = $acfFields['title'];
      $text = $acfFields['text'];
      $bg = $acfFields['bg'] ? $acfFields['bg']  : 'assets/images/png/main-page/img-баня.jpg';
      ?>
      <div class="swiper-slide slider-banner-slide">
        <div class="slider-banner-slide__text">
          <div class="wrapper">
            <div class="slider-banner-slide-text">
              <div class="page__title page_regular page__title-h2">
                <?php echo $title; ?>
              </div>
              <br>
              <div class="price">
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
      </div>
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
<!--/_slider-banner-3-->