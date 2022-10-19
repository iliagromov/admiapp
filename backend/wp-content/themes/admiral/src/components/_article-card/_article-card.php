<?php

/**
 * Поля для "Карточки превью для программ / страницы со статьями"
 *
*/
$fieldsACF = get_field('_article-card')["fields"];

$image = $fieldsACF["image-preview"];

$blockPerson = $fieldsACF["block-person"];
$blockAdvantages = $fieldsACF["block-advantages"];
$blockDescripion = $fieldsACF["block-description"];
$blockPrice = $fieldsACF["block-price"];
$isLink = $blockDescripion["isLink"];

// echo '<pre>';
// var_dump($blockPerson);
// echo '</pre>';
?>
  <div class="article-card">
    <a href="<?php echo $isLink ? the_permalink() : 'javascript:void(0)'; ?>">

      <h3 class="page__title-h3 page__title page_regular"><?php the_title(); ?></h3>
    </a>
    
    <a class="article-card-container" href="<?php echo $isLink ? the_permalink() : 'javascript:void(0)'; ?>">
      <div class="article-card__img">
        <img src="<?php echo $image ? $image : 'assets/images/png/archive-bath/spa-item-1.png' ?>" alt="article-image">
      </div>
      
      <div class="article-card__text">

        <div class="article-card__text-icons-info">
          <?php 
          if(!empty($blockPerson)):
          foreach ($blockPerson as $icon) :
          ?>
              <div class="icon">
                <img src="<?php echo $icon['icon'] ?  $icon['icon'] : 'assets/images/svg/user-group.svg'; ?>" alt="icon">
                <span><?php echo $icon['text']; ?> </span>
              </div>
          <?php 
          endforeach;
        endif; ?>
        </div>


        <h3 class="page__title-h3 page__title page_regular"><?php echo $blockAdvantages['title']; ?></h3>
        
        <ul>
          <?php 
            if(!empty($blockAdvantages['advantages'])):
            foreach ($blockAdvantages['advantages'] as $advateage) :
            if (!empty($advateage['icon'])) :
          ?>
              <li>
                <img src="<?php echo $advateage['icon'] ? $advateage['icon'] : 'assets/images/png/archive-bath/icon_Hot.png'; ?>" alt="">
                <p class="page__text"><?php echo $advateage['text'] ? $advateage['text'] : 'Размещение на сутки'; ?></p>
              </li>
          <?php else : ?>
              <li class="list">
                <p class="page__text"><?php echo $advateage['text'] ? $advateage['text'] : 'Стоимость дополнительного размещения гостей (до 4 персон) без программы — 10 000 ₽/чел'; ?></p>
              </li>
          <?php
            endif;
          endforeach; 
        endif;?>
        </ul>

        <?php if(!empty($blockDescripion['title'])):?>
          <h3 class="page__title-h3 page__title page_regular"><?php echo $blockDescripion['title']; ?></h3>
        <?php endif;?>
        <?php if(!empty($blockDescripion['description'])):?>
          <div class="page__text"><?php echo $blockDescripion['description']; ?></div>
        <?php endif;?>

        <?php if(!empty($blockPrice['title'])):?>
          <h3 class="page__title-h3 page__title page_regular"><?php echo $blockPrice['title']; ?></h3>
        <?php endif;?>

        <div class="article-card__text-order">
          <?php 
          if(!empty($blockPrice['prices'])):
          foreach ($blockPrice['prices'] as $price) :
            if (!empty($price['price'])) :
          ?>
              <div class="price">
                <div class="page__title-h3 page__title page_regular">
                  <?php echo $price['price']; ?> ₽ / <span><?php echo $price['time']; ?></span>
                </div>
              </div>
          <?php endif;
          endforeach; 
        endif;?>
        </div>

        <button class="page-btn page-btn_outline js-open-modal js-get-utm" data-modal='modalCallback' data-utm="<?php the_title(); ?>" >Забронировать</button>
      
      </div>

    </a>

  </div>
