<?php get_header(); ?>
<!-- archive -->
<main class="page">
	<?php /*todo: динамический баннер для архива*/; 
		/**Вариант сделать шаблон страницы отделно, а записи отдельно включать блоком  */
	?>
	<?php include(TEMPLATEPATH . "/src/components/_banner/_banner-spa.php"); ?>

	<section class="article-cards">
		<div class="wrapper">
			<!--tabs-->
			<div class="article-cards-inner">
				<div class="tabs" id="tabs">
					<div class="tav-nav">
						<div class="tab-link is-active">
							<div class="page-link">Программы до 6 часов</div>
						</div>
						<div class="tab-link">
							<div class="page-link">Программы на сутки</div>
						</div>
					</div>
					<div class="tab-content is-active">
						<?php $args=array(
							'posts_per_page'      => 15, 
							'post_type'     => 'spa', 
							'key' => 'views',
							'orderby' => 'meta_value_num', 
							'order'    => 'ASC',
							'post_status' => 'publish',
							'tax_query' => array(
									array(
											'taxonomy' => 'spa-mark',
											'field' => 'slug',
											'terms' => 'hour'
									)
							)
						 );
						
						$cpt_query = new WP_Query($args);
						 
						while ($cpt_query->have_posts()) : $cpt_query->the_post(); ?> 
<?php
          include(TEMPLATEPATH . "/src/components/_article-card/_article-card.php");
        ?>
						<?php endwhile; ?>
					</div>
					<div class="tab-content ">
					<?php $args=array(
							'posts_per_page'      => 15, 
							'post_type'     => 'spa', 
							'key' => 'views',
							'orderby' => 'meta_value_num', 
							'order'    => 'ASC',
							'post_status' => 'publish',
							'tax_query' => array(
								array(
										'taxonomy' => 'spa-mark',
										'field' => 'slug',
										'terms' => 'day'
								)
						)
						 );
						
						$cpt_query = new WP_Query($args);
						 
						while ($cpt_query->have_posts()) : $cpt_query->the_post(); ?> 
						<?php
          include(TEMPLATEPATH . "/src/components/_article-card/_article-card.php");
        ?>
						<?php
						endwhile; // End of the loop.
						?>
					</div>
				</div>

			</div>
		</div>
	</section>
</main>
<!-- /archive -->
<?php get_footer(); ?>