<?php
/*	
* Блок "Карточки превью для программ / страницы со статьями"
* artefact
$args = array(
    'posts_per_page'      => 15,
    'post_type'     => 'bath',
    'key' => 'views',
    'orderby' => 'meta_value_num',
    'order'    => 'ASC',
    'post_status' => 'publish'
  );

  // Execute query
  $cpt_query = new WP_Query($args);

  while ($cpt_query->have_posts()) {
    $cpt_query->the_post(); 
  }
* artefact
*/ ?>
<?php
/**
 *  Блок "Карточки превью для программ / страницы со статьями"
 */
$blockACF = get_field('_article-cards');
$fields = $blockACF['fields'];

// TODO: определять post_type
// $allArticles = get_posts(array(
//   'numberposts' => -1,
//   'category'    => 0,
//   'orderby'     => 'rand',
//   'order'       => 'DESC',
//   'include'     => array(),
//   'exclude'     => array(),
//   'meta_key'    => '',
//   'meta_value'  => '',
//   'post_type'   => 'bath',
//   'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
// ));
// проверка статей для страницы если нет то вывожу все allArticles
// $articles = $fields['_articles'] ? $fields['_articles'] : $allArticles;
$acfFieldsAr = get_fields();

// echo '<pre>';
// var_dump($acfFieldsAr);
// echo '</pre>';
if (!empty($blockACF) && $blockACF["isShow"]) : ?>

  <section class="article-cards">
    <div class="wrapper">
      <?php if($fields['isTitle']):?>
      <h3 class="page__title page_regular page__title-h3"><?php echo $fields['title'];?></h3>
      <?php endif;?>
      <div class="article-cards-inner">
      <div class="tabs">
          <?php if (!empty($fields['_isTab'])) : ?>
            <div class="tav-nav ">
              <?php foreach ($fields['_links'] as $link) :
                
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(!empty($link["link"])):
              ?>
                <a class="tab-link <?php echo $actual_link == $link["link"]['url'] ? 'is-active'  : '' ?>" href="<?php echo $link["link"]['url']; ?>">
                  <div class="page-link"><?php echo $link['link']["title"]; ?></div>
                </a>
              <?php endif; endforeach; ?>
            </div>
          <?php endif; ?>

          <div class="images-menu-items">
            <?php
            if (!empty($fields['_articles'])) {
              // echo '<pre>';
              // var_dump($fields['_articles']);
              // echo '</pre>';
              foreach ($fields['_articles'] as $post) {
                setup_postdata($post);
                include(TEMPLATEPATH . "/src/components/_article-card/_article-card.php");
              }
              wp_reset_postdata();
            } else{
              echo 'Добавьте статьи';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
<?php endif; ?>