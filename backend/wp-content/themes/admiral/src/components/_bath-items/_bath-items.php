<?php
$fieldACF = get_field('_bath-items');
$all_posts = get_posts(array(
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

$posts =  $fieldACF['_articles'] ? $fieldACF['_articles'] : $all_posts;

if (!empty($fieldACF) && $fieldACF["isShow"]) :
  foreach ($posts as $post) :
    setup_postdata($post);
    $acfFields = get_field('_bath-item-fields');

    $img = $fieldACF["image-preview"];
    $title1 = $fieldACF["title1"];
    $title2 = $fieldACF["title2"];
    $price = $fieldACF["pirce"];
    $icons = $fieldACF["icons"];
    $advateages = $fieldACF["advateages"]
?>
    <div class="bath-item">
      <h3 class="page__title-h3 page__title page_regular"><?php the_title(); ?></h3>
      <a class="bath-item-container" href="<?php the_permalink(); ?>">
        <div class="bath-item__img">
          <img src="<?php echo $img ? $img : 'assets/images/png/archive-bath/spa-item-1.png' ?>" alt="bath-item">
        </div>
        <div class="bath-item__text">
          <div class="bath-item__text-icons-info">
            <?php foreach ($icons as $item) :
              if (!empty($item['img'])) :
            ?>
                <div class="icon">
                  <img src="<?php echo $item['img'] ?  $item['img'] : 'assets/images/svg/user-group.svg'; ?>" alt="icon">
                  <span><?php echo $item['text']; ?> </span>
                </div>
            <?php endif;
            endforeach; ?>
          </div>
          <h3 class="page__title-h3 page__title page_regular"><?php echo $title1; ?></h3>
          <ul>
            <?php foreach ($advateages as $item) :
              if (!empty($item['image'])) :
            ?>
                <li>
                  <img src="<?php echo $item['image'] ? $item['image'] : 'assets/images/png/archive-bath/icon_Hot.png'; ?>" alt="">
                  <p class="page__text"><?php echo $item['text'] ? $item['text'] : 'Размещение на сутки'; ?></p>
                </li>
              <?php else : ?>
                <li class="list">
                  <p class="page__text"><?php echo $item['text'] ? $item['text'] : 'Стоимость дополнительного размещения гостей (до 4 персон) без программы — 10 000 ₽/чел'; ?></p>
                </li>
            <?php
              endif;
            endforeach; ?>
          </ul>
          <h3 class="page__title-h3 page__title page_regular"><?php echo $title2; ?></h3>
          <div class="bath-item__text-order">

            <?php foreach ($price as $item) :
              if (!empty($item['price'])) :
            ?>

                <div class="price">
                  <div class="page__title-h3 page__title page_regular"><?php echo $item['price']; ?> ₽ /<span><?php echo $item['days']; ?></span></div>
                </div>
            <?php endif;
            endforeach; ?>
            <div class="page-btn page-btn_outline">Забронировать</div>
          </div>
        </div>
      </a>
    </div>
<?php endforeach;
  wp_reset_postdata();
endif; ?>