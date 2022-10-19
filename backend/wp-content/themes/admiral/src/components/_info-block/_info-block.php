<?php
$fieldACF = get_field('_info-block');
if (!empty($fieldACF) && $fieldACF["isShow"]) :
  $fields = $fieldACF['fields'];
?>
  <section class="info-block">
    <div class="wrapper">
      <a href="<?php echo $fields['link']; ?>">
        <div class="info-block-inner">
          <h2 class="page__title page_regular page__title-h2"><?php echo $fields['title']; ?></h2>
          <p class="page__text"><?php echo $fields['text']; ?></p>
        </div>
      </a>

    </div>
    <div class="info-block__img"> <img src="<?php echo $fields['image'] ? $fields['image'] : 'assets/images/png/main-page/banner-admiral@2x.png'; ?>" alt="banner-admiral">
      <!--<div class="info-block__link-show-more">
        <a class="page-link page-link_arrow" href="/">Больше программ
          <div class="svg-cheveron-right svg-cheveron-right-box">

        </div>
      </a> 
    </div>-->
    </div>
  </section>
<?php endif; ?>