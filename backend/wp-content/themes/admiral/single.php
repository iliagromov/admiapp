<?php get_header(); ?>
<!-- single impressions-->
<main class="page">
    <section class="single-bath-page">
      <div class="wrapper">
        <div class="single-bath-page-inner">
          <h3 class="page__title-h3 page__title page_regular">
            <?php the_title() ?>
          </h3>
          <?php include(TEMPLATEPATH . "/src/components/single-bath-page/_single-bath-page-img.php");?>
          <div class="single-bath-page-description">
            <h3 class="page__title-h3 page__title page_regular">Описание</h3>
            <div class="page__text">
                <?php the_content(); ?>
            </div>
          </div>

          <div class="single-bath-page-information">
            <h3 class="page__title-h3 page__title page_regular">Важная информация</h3>
            <ul class="page-ul">
              <?php /*foreach($importantInformation): */?>
              <li>Вам будет полезно подружиться с парной, если вы:
                <ul>
                  <li> 
                    <img src="assets/icons/svg/spriteSVG.svg#thumb-up" alt="">
                    <p class="page__text">хотите укрепить иммунитет и почувствовать себя моложе;</p>
                  </li>
                  <li> 
                    <img src="assets/icons/svg/spriteSVG.svg#thumb-up" alt="">
                    <p class="page__text">восстанавливаетесь после простудного заболевания;</p>
                  </li>
                  <li> 
                    <img src="assets/icons/svg/spriteSVG.svg#thumb-up" alt="">
                    <p class="page__text">ощущаете стресс и страдаете бессонницей;</p>
                  </li>
                  <li> 
                    <img src="assets/icons/svg/spriteSVG.svg#thumb-up" alt="">
                    <p class="page__text">мучаетесь остеохондрозом;</p>
                  </li>
                  <li> 
                    <img src="assets/icons/svg/spriteSVG.svg#thumb-up" alt="">
                    <p class="page__text">испытываете болевые ощущения в мышцах и суставах;</p>
                  </li>
                  <li> 
                    <img src="assets/icons/svg/spriteSVG.svg#thumb-up" alt="">
                    <p class="page__text">хотите избавиться от лишней жидкости и отеков.</p>
                  </li>
                </ul>
            
              <li> Когда нужно проконсультироваться с нашим специалистом перед процедурой:
                  <ul>
                    <li> 
                      <img src="assets/icons/svg/spriteSVG.svg#hand" alt="">
                      <p class="page__text">вы имеете хронические заболевания в фазе обострения;</p>
                    </li>
                    <li> 
                      <img src="assets/icons/svg/spriteSVG.svg#hand" alt="">
                      <p class="page__text">у вас грыжа в позвоночнике или незалеченная травма;</p>
                    </li>
                    <li> 
                      <img src="assets/icons/svg/spriteSVG.svg#hand" alt="">
                      <p class="page__text">вы перенесли инфаркт или инсульт;</p>
                    </li>
                    <li> 
                      <img src="assets/icons/svg/spriteSVG.svg#hand" alt="">
                      <p class="page__text">имеете сердечно-сосудистые заболевания: гипертонию, варикоз, тромбофлебит, атеросклероз;</p>
                    </li>
                    <li> 
                      <img src="assets/icons/svg/spriteSVG.svg#hand" alt="">
                      <p class="page__text">вы наблюдаетесь у онколога;</p>
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
