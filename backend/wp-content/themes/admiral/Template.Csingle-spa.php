<?php get_header(); 
$singleBlockACF = get_field('_single-page')['fields'];

$gallary = $singleBlockACF["gallary"];
$advantages = $singleBlockACF["advantages"];
$moreOrder = $singleBlockACF["more-order"];
$information = $singleBlockACF["information"];
?>
<!-- single spa-->
<main class="page">
  <section class="single-bath-page">
    <div class="wrapper">
      <div class="single-bath-page-inner">
        <h3 class="page__title-h3 page__title page_regular">
          <?php the_title() ?>
        </h3>
        <?php include(TEMPLATEPATH . "/src/components/single-bath-page/_single-bath-page-img.php"); ?>
       
        <div class="single-bath-page-description">
          <h3 class="page__title-h3 page__title page_regular">Описание</h3>
          <div class="page__text">
            <?php the_content(); ?>
          </div>
        </div>
        <?php /*advantages*/ ?>
        <div class="single-bath-page-advantages">
          <h3 class="page__title-h3 page__title page_regular"><?php echo $advantages['title']; ?></h3>
          <div class="single-bath-page-advantages__lists">
            <?php 
            if(!empty($advantages['lists'])) :
              foreach ($advantages['lists'] as $listItem) : ?>

              <?php if(!empty($listItem['title'])) : ?>
              <h5 class="page__title-h5 page__title page_regular"><?php echo $listItem['title']; ?></h5>
              <?php endif;?>

              <?php if ($listItem['items']) : ?>
                <ul class="page-ul page-ul_lv-1">
                  <?php foreach ($listItem['items'] as $item) : ?>
                    <li><?php echo $item['title']; ?>
                      <ul class="page-ul_lv-2">
                        <?php
                        if (!empty($item['items2'])) :
                          foreach ($item['items2'] as $list) : ?>
                            <li>
                              <img src="<?php echo $list['image'] ? $list['image']  : 'assets/icons/svg/spriteSVG.svg#check-circle' ?>" alt="image">
                              <p class="page__text"><?php echo $list['text'] ?></p>
                            </li>
                        <?php
                          endforeach;
                        endif; ?></ul>
                      
                    </li>
                  <?php endforeach; ?>

                </ul>
              <?php endif; ?>
            <?php endforeach; 
            endif;?>

          </div>
        </div>
        <?php /*advantages*/ ?>

        <?php /*$information*/ ?>
        <div class="single-bath-page-information">
          <h3 class="page__title-h3 page__title page_regular">Важная информация</h3>

          <?php if ($information['items']) : ?>

            <ul class="page-ul">
              <?php foreach ($information['items'] as $item) : ?>
                <li><?php echo $item['title']; ?>
                  <ul>
                    <?php
                    if (!empty($item['items2'])) :
                      foreach ($item['items2'] as $list) : ?>
                        <li>
                          <img src="<?php echo $list['image'] ? $list['image']  : 'assets/icons/svg/spriteSVG.svg#check-circle' ?>" alt="image">
                          <p class="page__text"><?php echo $list['text'] ?></p>
                        </li>
                    <?php endforeach;
                    endif; ?>
                  </ul>
                </li>
              <?php endforeach; ?>

            </ul>
            <?php else : ?>
                  <ul class="page-ul">
                    <li>Бронирование домов<ul>
                        <li> <img src="assets/icons/svg/spriteSVG.svg#check-circle" alt="">
                          <p class="page__text">Прибытие: 15:00 - 22.00</p>
                        </li>
                        <li> <img src="assets/icons/svg/spriteSVG.svg#check-circle" alt="">
                          <p class="page__text">Выезд: 12.00</p>
                        </li>
                        <li> <img src="assets/icons/svg/spriteSVG.svg#noun-no-smoking-1322400" alt="">
                          <p class="page__text">Курение в доме запрещено</p>
                        </li>
                        <li> <img src="assets/icons/svg/spriteSVG.svg#noun-no-smoking-1322400" alt="">
                          <p class="page__text">Размещение с животными запрещено</p>
                        </li>
                      </ul>
                    </li>
                    <li>Правила отмены<ul>
                        <li> <img src="assets/icons/svg/spriteSVG.svg#exclamation-circle" alt="">
                          <p class="page__text">Для возврата оплаты за проживание отмена производится не позже, чем за 3 суток
                          </p>
                        </li>
                        <li> <img src="assets/icons/svg/spriteSVG.svg#exclamation-circle" alt="">
                          <p class="page__text">За отмену бронирования меньше, чем за 3 суток, взимается компенсация</p>
                        </li>
                      </ul>
                    </li>
                    <li>Здоровье и безопасность<ul>
                        <li> <img src="assets/icons/svg/spriteSVG.svg#noun-virus-1182496" alt="">
                          <p class="page__text">Применяются правила социального дистанцирования и другие рекомендации,
                            связанные с пандемией</p>
                        </li>
                        <li> <img src="assets/icons/svg/spriteSVG.svg#credit-card" alt="">
                          <p class="page__text">Залог за сохранность имущества: если вы нанесете ущерб жилью, вам придется
                            заплатить до 10 000₽</p>
                        </li>
                      </ul>
                    </li>
                  </ul>
                <?php endif; ?>
        </div>
        <?php /*$information*/ ?>
      </div>
    </div>
  </section>
</main>
<!-- /single -->
<?php get_footer(); ?>