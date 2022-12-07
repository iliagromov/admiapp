
<?php
$blockACF = get_field('_cuisine-contacts');
if (!empty($blockACF) && $blockACF["isShow"]) :
$fieldsACF = $blockACF['fields'];
$codeContacts = $fieldsACF['codeContacts'];
$shortcode = $fieldsACF['shortcode'];
// var_dump($fieldACF);
?>
<style>
  .map{
    max-width: 767px;
    max-height: 597px;
    width: 100%;
    height: 100%;
    height: 597px;

  }
  @media screen and (max-width: 768px) {
    .map{
      height: 450px;
    }
  }
</style>


<section class="cuisine-contacts">
    <div class="wrapper">
  
      <div class="cuisine-contacts-inner">
        <div class="cuisine-contacts__map">
          <?php echo $shortcode; ?>
          
        </div>
        <div class="cuisine-contacts__text">
          <h3 class="page__title page_regular page__title-h3">Рестораны на территории</h3>
            
             <div class="cuisine-contacts__text-item">
              <?php echo $codeContacts; ?>
              
          </div>
          
         
          <!-- <div class="cuisine-contacts__text-item">
            <span>«Nachile»: <a class="page-link" href="tel:+7 (499) 325-35-35">+7 (499) 325-35-35</a></span>
            <div class="page__text">Пн-Суб: 11.00-21.00, Вс: 11.00-20.00</div>
          </div> -->
          
       
          
          <!-- <div class="cuisine-contacts__text-item"><span>«Surf Bar»: <a class="page-link" href="tel:+7 (499) 325-42-82">+7 (499) 325-42-82</a></span>
            <div class="page__text">Пн-Суб: 11.00-21.00, Вс: 11.00-20.00</div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>