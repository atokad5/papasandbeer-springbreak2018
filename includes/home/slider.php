<?php $root = get_template_directory_uri(); ?>
<section id="slider" class="is-orange">
<div class="spacing spacing--md"></div>
	<div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);"></div>
	<div class="max clearfix flex-slide">


		<div class="is-half-el-slider">
			<div class="is-image-grid-content">
					<div class="content-area mobile-center">
						<h2 class="dates sm-hdr"><?php the_field('slider_subtitle'); ?></h2>
					</div>
					<div class="section-header image-layout-hdr">
						<div class="content-area mobile-center">
							<h1><?php the_field('slider_headline'); ?></h1>
						</div>
					</div>

					<div class="hr-splitter animated-spliter"></div>

					<div class="image-grid-copy">
						<div class="content-area mobile-center">
							<p><?php the_field('slider_copy'); ?></p>
						</div>					
					</div>

					<div class="slider-buttons">
						<button class="slider_btn previous">
							<?php get_template_part('includes/icons/left-arrow'); ?>
						</button>
						<button class="slider_btn next">
							<?php get_template_part('includes/icons/left-arrow'); ?>
						</button>
					</div>
	
				</div>
		</div>
		<div class="is-half-el-slider slider_parent">
			
			<?php 
			$slider_slides = get_field('slider_slides');
			foreach($slider_slides as $theSlide) : ?>
				<div class="slider-el">
					<a href="">
						<figure class="slider--image">
							<img src="<?php echo $theSlide['link']; ?>" alt="">
							<figcaption class="slide-txt">
								<div class="contents-inner-slider">
									<h4><?php echo $theSlide['title']; ?></h4>
									<p><?php echo $theSlide['summary']; ?></p>
								</div>
								<div class="gradient-hr"></div>
							</figcaption>
						</figure>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
</section>