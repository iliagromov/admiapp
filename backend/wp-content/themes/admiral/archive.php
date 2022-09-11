<?php get_header(); ?>
<!-- archive -->
<main class="page">
    <section class="banner banner-bath">
      <div class="banner_bg">
        <div class="banner_bg-shadow"></div>
        <img src="assets/images/png/archive-bath/banner-img-spa.png" alt="banner">
      </div>
      <div class="wrapper">
        <div class="banner-inner banner-inner_center">
          <div class="banner__title_left">
            <h1 class="page__title page_regular page__title-h1">Тщательно продуманные готовые программы отдыха</h1>
            <p class="page__text">Крепкий пар, особая атмосфера и опыт пармастеров удивит даже изысканного любителя бани.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="bath-items">
      <div class="wrapper">
        <div class="bath-items-inner">
					<?php /*ACF*/?>
				<?php
	        while(have_posts()) : the_post();
					$arhiveBlockACF = get_field('_arhive');
					$img = $arhiveBlockACF["image-preview"];
					$title1 = $arhiveBlockACF["title1"];
					$title2 = $arhiveBlockACF["title2"];
					$price = $arhiveBlockACF["pirce"];
					$advateages = $arhiveBlockACF["advateages"];
					// echo '<pre>';
					// var_dump($arhiveBlockACF);
					// echo '</pre>';
		        ?>

          <div class="bath-item">
            <h3 class="page__title-h3 page__title page_regular"><?php the_title(); ?></h3>
						<a
              class="bath-item-container" 
							href="<?php the_permalink(); ?>">
              <div class="bath-item__img"> 
								<img src="<?php echo $img ? $img : 'assets/images/png/archive-bath/bath-item-1.png' ?>" alt="bath-item">
              </div>
              <div class="bath-item__text">
                <h3 class="page__title-h3 page__title page_regular"><?php echo $title1; ?></h3>
                <ul>
								<?php foreach ($advateages as $item) :
									 if(!empty($item['text'])):
										// echo '<pre>';
										// var_dump($item);
										// echo '</pre>';
									 ?>
									 <li> 
										<img src="<?php echo $item['image'] ? $item['image'] : 'assets/images/png/archive-bath/icon_Hot.png'; ?>" alt="">
                    <p class="page__text"><?php echo $item['text'] ? $item['text'] : 'Размещение на сутки'; ?></p>
                  </li>
								<?php endif; endforeach; ?>
                </ul>
                <h3 class="page__title-h3 page__title page_regular"><?php echo $title2; ?></h3>
                <div class="bath-item__text-order">

									<?php foreach ($price as $item) :
									 if(!empty($item['price'])):
										// echo '<pre>';
										// var_dump($item);
										// echo '</pre>';
									 ?>
									 
										<div class="price">
											<div class="page__title-h3 page__title page_regular"><?php echo $item['price']; ?> ₽ /<span><?php echo $item['days']; ?></span></div>
										</div>
									<?php endif; endforeach; ?>
                  <div class="page-btn page-btn_outline">Забронировать</div>
                </div>
              </div>
            </a>
          </div>
					<?php
	        endwhile; // End of the loop.
	        ?>
        </div>
      </div>
    </section>
  </main>
<!-- /archive -->
<?php get_footer(); ?>