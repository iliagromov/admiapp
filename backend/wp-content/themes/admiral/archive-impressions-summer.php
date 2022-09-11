<?php get_header(); ?>
<!-- archive impressions-->
<main class="page">

	<?php include(TEMPLATEPATH . "/src/components/_banner/_banner-impressions-summer.php"); ?>

  <section class="impressions-menu">
    <div class="wrapper">
      <h3 class="page__title page_regular page__title-h3">Виды впечатлений</h3>
      <div class="impressions-menu-inner">
        <div class="tabs">
          <?php /*foreach($items as $item):*/?>
          <?php /*endforeach;*/?>
          <div class="tav-nav">
            <a class="tab-link " href="/admiral/impressions/">
              <div class="page-link">Расслабляющие процедуры</div>
            </a>
            <a class="tab-link is-active" href="/admiral/impressions-summer">
              <div class="page-link">Летние развлечения</div>
            </a>
            <a class="tab-link "  href="/admiral/impressions-winter">
              <div class="page-link">Зимние развлечения</div>
            </a>
          </div>

          <div class="tab-content is-active">
            <div class="images-menu-items">
							<?php $args=array(
								'posts_per_page'      => 15, 
								'post_type'     => 'impressions-summer', 
								'key' => 'views',
								'orderby' => 'meta_value_num', 
								'order'    => 'ASC',
								'post_status' => 'publish',
							);
							
							$cpt_query = new WP_Query($args);
							
							while ($cpt_query->have_posts()) : $cpt_query->the_post(); ?> 
								<?php include(TEMPLATEPATH . "/src/components/impressions-menu/_impressions-item.php");?>
							<?php endwhile; ?>

            </div>	
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include(TEMPLATEPATH . "/src/components/_slider-banner/_slider-banner2.php");?>
  <?php include(TEMPLATEPATH . "/src/components/callback/_callback-2.php");?>
		 
</main>
<!-- /archive impressions-->
<?php get_footer(); ?>