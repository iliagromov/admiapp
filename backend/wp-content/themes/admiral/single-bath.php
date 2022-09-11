<?php get_header();

$arhiveBlockACF = get_field('_arhive');

$gallary = $arhiveBlockACF["gallary"];

?>
<!-- single-->
<main class="page">
  <section class="single-bath-page">
    <div class="wrapper">
      <div class="single-bath-page-inner">
        <h3 class="page__title-h3 page__title page_regular">
          <?php the_title() ?></h3>

        <?php include(TEMPLATEPATH . "/src/components/single-bath-page/_single-bath-page-img.php");?>
        
        <div class="single-bath-page-advantages">
          <h3 class="page__title-h3 page__title page_regular">Для Вас</h3>
          <div class="single-bath-page-advantages__lists">
            <ul class="page-ul">
              <li>
                <ul>
                  <li> <img src="assets/icons/svg/spriteSVG.svg#rss" alt="">
                    <p class="page__text">Wifi</p>
                  </li>
                  <li> <img src="assets/icons/svg/spriteSVG.svg#smart-tv" alt="">
                    <p class="page__text">Телевизор со smart</p>
                  </li>
                  <li> <img src="assets/icons/svg/spriteSVG.svg#Commode" alt="">
                    <p class="page__text">Туалет и душевая</p>
                  </li>
                  <li> <img src="assets/icons/svg/spriteSVG.svg#bed" alt="">
                    <p class="page__text">Двуспальная кровать</p>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="page-ul">
              <li>
                <ul>
                  <li> <img src="assets/icons/svg/spriteSVG.svg#table" alt="">
                    <p class="page__text">Стол</p>
                  </li>
                  <li> <img src="assets/icons/svg/spriteSVG.svg#deck-chair" alt="">
                    <p class="page__text">2 шезлонга</p>
                  </li>
                  <li> <img src="assets/icons/svg/spriteSVG.svg#river" alt="">
                    <p class="page__text">Спуск к воде</p>
                  </li>
                  <li> <img src="assets/icons/svg/spriteSVG.svg#yacht" alt="">
                    <p class="page__text">Парковка яхт</p>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <div class="single-bath-page-description">
          <h3 class="page__title-h3 page__title page_regular">Описание</h3>
          <div class="page__text">
            <?php the_content() ?>
          </div>
        </div>

        <div class="single-bath-page-more-order">
          <h3 class="page__title-h3 page__title page_regular">Заказажите дополнительно</h3>
          <div class="single-bath-page-more-order__items">
            <div class="single-bath-page-more-order__item">
              <h3 class="page__title-h3 page__title page_regular">Блюда авторской кухни</h3>
              <p class="page__text">Сервис доставки из ресторана с сервировкой в коттедже. </p>
              <div class="single-bath-page-more-order__item-img"> <img src="assets/images/png/archive-bath/single-bath-page-more-order-img-2.png" alt=""></div>
              <div class="single-bath-page-more-order__item-link"><a class="page-link page-link_arrow" href="">Посмотреть меню<div class="svg-cheveron-right svg-cheveron-right-box"></div></a></div>
            </div>
            <div class="single-bath-page-more-order__item">
              <h3 class="page__title-h3 page__title page_regular">Впечатления</h3>
              <p class="page__text">Процедуры парения и спа, водные виды спорта, яхтинг</p>
              <div class="single-bath-page-more-order__item-img"> <img src="assets/images/png/archive-bath/single-bath-page-more-order-img-1.png" alt=""></div>
              <div class="single-bath-page-more-order__item-link"><a class="page-link page-link_arrow" href="">Посмотреть впечатления<div class="svg-cheveron-right svg-cheveron-right-box"></div></a>
              </div>
            </div>
          </div>
        </div>

        <?php include(TEMPLATEPATH . "/src/components/review/_review.php"); ?>

        <div class="single-bath-page-information">
          <h3 class="page__title-h3 page__title page_regular">Важная информация</h3>
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
        </div>
        
      </div>
    </div>
  </section>
</main>
<!-- /single -->
<?php get_footer(); ?>