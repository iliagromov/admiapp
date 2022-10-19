<?php
$fieldACF = get_field('_table');
$fields = $fieldACF['fields'];
$table = $fields['table'];

if (!empty($fieldACF) && $fieldACF["isShow"]) :
?>
  <section class="table">
    <div class="wrapper">
      <div class="table-inner">
        <h2 class="page__title page__title-h2 page_regular"> 
          <?php echo $table['title']; ?>
        </h2>
        <div class="table-block">

          <div class="table-block__head">

            <div class="table-block__row">
              <?php
              if (!empty($table['thead'])) :
                foreach ($table['thead'] as $item) : ?>

                  <div><?php echo $item['col']; ?></div>
              <?php endforeach;
              endif;
              ?>
            </div>

          </div>

          <div class="table-block__body">
            <?php
            foreach ($table['tbody']['rows'] as $item) :
            ?>
              <div class="table-block__row">
                <?php
                foreach ($item['tds'] as $td) :
                ?>
                  <div><?php echo $td['text']; ?></div>
                <?php
                endforeach;
                ?>

              </div>
            <?php
            endforeach;
            ?>

          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>