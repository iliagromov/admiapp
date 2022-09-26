<?php
$fieldACF = get_field('_certificates');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
$fields = $fieldACF['fields'];
?>
 <section class="certificates">
      <div class="wrapper">
        <div class="certificates__step certificates__step-1">
          <h3 class="page__title page__title-h3 page_regular">Выберите тип сертификата</h3>
          <div class="certificates-inner">
            <div class="certificates-item">
              <h5 class="page__title-h5 page__title page_regular">Сертификат на сумму</h5>
              <p class="page__text">Вы указываете определенный денежный эквивалент, на сумму которого реципиент может
                воспользоваться любыми услугами нашего комплекса по собственному усмотрению.</p>
            </div>
            <div class="certificates-item">
              <h5 class="page__title-h5 page__title page_regular">Сертификат на программу</h5>
              <p class="page__text">Вы выбираете одну из предложенных нашим комплексом разработанных программ, которая
                отвечает критериям пола, возраста, предпочтениям реципиента, а также требованиям бюджета.</p><a
                class="page-link" href="">Выбрать программу</a>
            </div>
            <div class="certificates-item">
              <h5 class="page__title-h5 page__title page_regular">Индивидуальный Сертификат</h5>
              <p class="page__text">Опытные операторы комплекса по вашему желанию помогут вам составить индивидуальную
                программу, отвечающую только вашим индивидуальным предпочтениям. Для этого позвоните по телефону +7
                (495) 222-02-23и обсудите это с оператором.</p>
            </div>
          </div>
        </div>
        <div class="certificates__step certificates__step-2">
          <h3 class="page__title page__title-h3 page_regular"> Выберите вид сертификата</h3>
          <div class="certificates-form">
            <div class="certificates-form__field"><label for="">
                <h5 class="page__title-h5 page__title page_regular"> Электронный сертификат</h5>
                <p>Позволяет сделать подарок, не выходя из дома.</p>
              </label></div>
            <div class="certificates-form__field"><label for="">
                <h5 class="page__title-h5 page__title page_regular">Физический сертификат</h5>
                <p>Вы можете оформить сертификат с доставкой или забрать самостоятельно.</p>
              </label></div>
            <div class="certificates-form__field"><label for="">
                <h5 class="page__title-h5 page__title page_regular">Комментарий</h5><textarea></textarea>
              </label></div>
            <div class="certificates-form__field"><a class="page-btn" href="">Заказать</a></div>
          </div>
        </div>
        <div class="certificates__step certificates__step-2"> </div>
      </div>
    </section>
<?php endif; ?>