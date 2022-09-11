<?php
/*	
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
  'post_type'   => 'bath',
  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
));
// проверка статей для страницы если нет то вывожу все allArticles
$articles = $blockACF['_articles'] ? $blockACF['_articles'] : $allArticles;
$acfFieldsAr = get_fields();
// echo '<pre>';
// var_dump($acfFieldsAr);
// echo '</pre>';
if (!empty($blockACF) && $blockACF["isShow"]) : ?>

  <section class="article-cards">
    <div class="wrapper">
      <div class="article-cards-inner">
        <?php
        foreach ($articles as $post) {
          include(TEMPLATEPATH . "/src/components/_article-card/_article-card.php");
        }
        ?>
      </div>
    </div>
    </div>
  </section>
<?php endif; ?>