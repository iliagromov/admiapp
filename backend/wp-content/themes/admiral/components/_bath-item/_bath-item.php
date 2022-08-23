<?php /*<div class="bath-item">
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
									 if(!empty($item['image'])):
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
                  <div class="price">
                    <div class="page__title-h3 page__title page_regular">6 000 ₽ / <span>сутки</span></div>
                  </div>

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
          </div>*/?>