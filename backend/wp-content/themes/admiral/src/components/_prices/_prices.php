<?php
$fieldACF = get_field('_prices');
$fields = $fieldACF['fields'];
$blockServices = $fields['block-services'];

if (!empty($fieldACF) && $fieldACF["isShow"]) :
?>
  <section class="prices">
    <div class="wrapper">
      <h2 class="page__title-h2 page__title page_regular">Меню банного клуба «Адмирал»</h2>
      <div class="prices-inner">
        <?php if (!empty($fields)) :
          if (!empty($blockServices)) :
            foreach ($blockServices as $service) :
        ?>
              <div class="prices-item-service">
                <h4 class="page__title page__title-h4 page_regular"><?php echo $service['text-fields']['title']; ?></h4>
                <?php if(!empty($service['text-fields']['text'])): ?>
                  <p class="page__text"><?php echo $service['text-fields']['text']; ?></p>
                <?php endif;?>
                <ul class="prices-item-service__lists">
                  <?php if (!empty($service['lists'])) :
                    foreach ($service['lists'] as $list) :
                  ?>
                      <li class="prices-item-service__list">
                        <div class="prices-item-service__col">
                          <div class="prices-item-service__col_text">
                            <div class="prices-item-service__title"><?php echo $list['text']; ?></div>
                            <div class="prices-item-service__description"><?php echo $list['description']; ?></div>
                          </div>

                        </div>
                        <div class="prices-item-service__price page_regular"><?php echo $list['price']; ?> ₽
                          <?php if(!empty($list['price-text'])): ?>
                            <span>/ <?php echo $list['price-text']; ?> </span>
                          <?php endif;?>
                          <?php if(!empty($list['person'])): ?>
                            <span>/ <?php echo $list['person']; ?> </span>
                          <?php endif;?>
                        </div>
                      </li>
                  <?php
                    endforeach;
                  endif;
                  ?>

                </ul>
              </div>

        <?php
            endforeach;
          endif;
        endif;
        ?>

      </div>
    </div>
  </section>
<?php endif; ?>