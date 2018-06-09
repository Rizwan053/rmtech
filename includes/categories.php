






<div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
			data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
			data-swiper-breakpoints="true" data-swiper-loop="true" >
			<div class="swiper-wrapper">
			
<?php $categories = Category::find_all();

if($categories){
?>
<?php foreach($categories as $category): ?>
				<div class="swiper-slide">
					<a class="slider-category" href="category.php?id=<?php echo $category->id; ?>">
					
						<div class="blog-image"><img src="http://via.placeholder.com/600/000000/000000" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b><?php echo $category->name?></b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->
<?php endforeach; ?>
<?php }?>
				
			</div><!-- swiper-wrapper -->

		</div><!-- swiper-container -->