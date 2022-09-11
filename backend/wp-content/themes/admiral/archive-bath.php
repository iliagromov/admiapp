<?php get_header(); ?>
<!-- archive -->
<main class="page">
	<?php include(TEMPLATEPATH . "/src/components/_banner/_banner-spa.php"); ?>

	<section class="bath-items">
		<div class="wrapper">
			<div class="bath-items-inner">

				<?php /*
				// вынести в компоненты
				ACF*/ ?>

				<?php
				$args = array(
					'posts_per_page'      => 15,
					'post_type'     => 'bath',
					'key' => 'views',
					'orderby' => 'meta_value_num',
					'order'    => 'ASC',
					'post_status' => 'publish'
				);


				// Execute query
				$cpt_query = new WP_Query($args);

				while ($cpt_query->have_posts()) : $cpt_query->the_post(); 
				?>

					<?php include(TEMPLATEPATH . "/src/components/_bath-items/_bath-item.php"); ?>
				<?php
				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</section>
	<?php include(TEMPLATEPATH . "/src/components/callback/_callback-2.php"); ?>
</main>
<!-- /archive -->
<?php get_footer(); ?>