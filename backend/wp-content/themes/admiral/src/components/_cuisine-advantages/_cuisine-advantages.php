
<?php
$fieldACF = get_field('_cuisine-advantages');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
$shortcode = $fieldACF['shortcode'];
// var_dump($fieldACF);
$fieldsACF = $fieldACF['fields']['items'];
?>
<section class="cuisine-advantages">
    <div class="wrapper">
      <div class="cuisine-advantages-inner">
        <?php if(!empty($fieldsACF)):
        foreach($fieldsACF as $item):
          ?>
           <div class="cuisine-advantages__item">
          <div class="cuisine-advantages__item_bg">
            <img src="<?php echo $item['bg'] ? $item['bg'] : 'assets/images/svg/cuisine-advantages-img-1.svg'; ?>" alt="">
          </div>
          <div class="cuisine-advantages__item-text">
            <h3 class="page__title page_regular page__title-h3"><?php echo $item['title'];?></h3>
            <p class="page__text"><?php echo $item['text'];?></p>
          </div>
        </div>
          <?php 
          endforeach;
        endif;?>
        
      </div>
    </div>
  </section>
<?php endif; ?>