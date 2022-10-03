<?php
$fieldACF = get_field('_block-html');
$fields = get_field('_block-html')['fields'];
if (!empty($fieldACF) && $fieldACF["isShow"]) :
$html = $fields['text-html'];
?>
  <!--block-text-->
  <section class="block-text">
    <div class="wrapper">
      <div class="block-text-inner">
          <h3 class="page__title page_regular page__title-h3">
            <?php echo $fields['title']; ?>
          </h3>

        <div class="block-text-description">
          <?php echo $html;?>
        </div>
          
      </div>
    </div>
  </section>
  <!--block-text-->
<?php endif; ?>