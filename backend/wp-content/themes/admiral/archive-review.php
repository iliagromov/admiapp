<?php get_header(); 

?>
<!-- archive -->
<main class="page">
	<section class="review">
		<div class="wrapper">
			<h3 class="page__title page_regular page__title-h3">Отзывы</h3>
			<div class="review-inner">
				<div class="review-items">
					<?php
					$args = array(
						'posts_per_page'      => 15,
						'post_type'     => 'review',
						'key' => 'views',
						'orderby' => 'meta_value_num',
						'order'    => 'ASC',
						'post_status' => 'publish'
					);


					// Execute query
					$cpt_query = new WP_Query($args);

					while ($cpt_query->have_posts()) : $cpt_query->the_post();
						// echo '<pre>';
						// var_dump($arhiveBlockACF);
						// echo '</pre>';
					?>
						<div class="review-item">
							<div class="bg"><img src="assets/images/svg/icon-review.svg" alt=""></div>
							<div class="review-item__stars"><img src="assets/images/png/main-page/stars.png" alt=""></div>
							<div class="review-item__text">
								<p class="page__text"><?php the_content(); ?></p>
							</div>
							<div class="review-item__name">
								<div class="name"><?php the_title(); ?></div>
							</div>
						</div>

					<?php
					endwhile; // End of the loop.
					?>
				</div>

			</div>
		</div>

	</section>

</main>
<!-- /archive -->
<?php get_footer(); ?>