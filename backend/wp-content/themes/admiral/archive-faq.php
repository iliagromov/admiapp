<?php get_header(); ?>
<!-- archive faq-->
<br>
<br>
<br>
<br>
<main class="page">
    <div class="wrapper">
        <div>
            <?php
	        while(have_posts()) : the_post();
		        ?>

                <section>
			        <?php the_title('<h1>', '</h1>'); ?>

			        <?php
			        the_content();
			        ?>
                </section>

		        <?php
	        endwhile; // End of the loop.
	        ?>

        </div>
    </div>

</main>
<br>
<br>
<br>
<br>
<!-- /archive faq-->
<?php get_footer(); ?>