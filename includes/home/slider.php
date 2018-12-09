<?php $root = get_template_directory_uri(); ?>
<section id="slider" class="is-orange s_sec" style="z-index: 6;">
<div class="spacing spacing--md"></div>
	<div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);"></div>



	<div class="max clearfix old-to-new">
		
		<?php $imageGrid = get_field('4_image_grid');
			foreach($imageGrid as $theImage ) {
		?>
		<div class="old-to-new_item">
			<div class="old-to-new_image-el is-bg" data-bg-src="<?php echo $theImage['url'];?>"></div>
		</div>
		<?php } ?>

	</div>

	<div class="max clearfix flex-slide">


		<div class="is-half-el-slider">
			<div class="is-image-grid-content">
					<div class="content-area mobile-center">
						<h2 class="dates sm-hdr"><?php the_field('slider_subtitle'); ?></h2>
					</div>
					<div class="image-layout-hdr">
						<div class="content-area mobile-center">
							<h1 class="section-header"> <?php the_field('slider_headline'); ?></h1>
						</div>
					</div>

					<div class="hr-splitter animated-spliter"></div>

					<div class="image-grid-copy">
						<div class="content-area mobile-center">
							<p><?php the_field('slider_copy'); ?></p>
						</div>					
					</div>

					<div class="slider-buttons">
						<button class="slider_btn slideTr previous">
							<?php get_template_part('includes/icons/left-arrow'); ?>
						</button>
						<button class="slider_btn slideTr next">
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
					<a href="<?php echo $theSlide['link']; ?>">
						<div class="height"></div>
						<figure class="slider--image" style="background-image: url(<?php echo $theSlide['image']; ?>);">
							<div></div>
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

	<div class="spacing spacing--sm"></div>
</section>