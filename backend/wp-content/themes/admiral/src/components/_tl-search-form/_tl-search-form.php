<?php
/**
 * Блок тревелайн
 */
$fieldACF = get_field('_tl-search-form');

if (!empty($fieldACF) && $fieldACF["isShow"]) :
?>
  <section class="travel-form">
    <div class="wrapper">
      <div id='block-search'>
          <div id="tl-search-form" class="tl-container">
            <noindex><a href="https://www.travelline.ru/products/tl-hotel/" rel='nofollow' target="_blank">TravelLine</a></noindex>
          </div>
      </div>
    </div>
  </section>
<?php endif; ?>