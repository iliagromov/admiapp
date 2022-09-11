<?php
$fieldACF = get_field('_info-block-certificates');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
?>
<section class="info-block-certificates">
  <div class="wrapper">
    <div class="info-block-certificates-inner">
      <div class="info-block-certificates__card">
        <div class="info-block-certificates-card">
          <h3 class="page__title page_regular page__title-h3">Коттеджи и номера в отеле на воде.</h3>
          <p class="page__text"> Забронируйте проживание в яхт-клубе «Адмирал» заранее и получите самую выгодную
            цену.</p><a class="page-link page-link_arrow" href="">Забронировать коттедж<div
              class="svg-cheveron-right svg-cheveron-right-box"></div></a>
          <div class="info-block-certificates-card__img"><img src="" alt=""></div>
        </div>
      </div>
      <div class="info-block-certificates__card">
        <div class="info-block-certificates-card">
          <h3 class="page__title page_regular page__title-h3">Премиальный загородный отдых и SPA-программы в
            подарок.</h3>
          <p class="page__text">Подарочные сертификаты на сумму или на любую из программ отдыха. Дарите близким
            незабываемые эмоции.</p><a class="page-link page-link_arrow" href="">Выбрать сертификат<div
              class="svg-cheveron-right svg-cheveron-right-box"></div></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>