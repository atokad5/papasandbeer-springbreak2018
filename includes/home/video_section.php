<?php $root = get_template_directory_uri(); ?>

<section class="is-orange">
	<div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);">
		
	</div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
		<div class="inner has-max-container">
			<div class="video-container">
					
				<div class="play-circ">
					<div class="carrot"><?php get_template_part('includes/home/carrot'); ?></div>
				</div>
				<div class="btn-text">
					<div class="btn-svg">
						<div class="btn-svg-wrapper">
							<img src="<?php echo "$root/_assets/images/btn-text.png";  ?>" alt="">
						</div>	
					</div>
				</div>


				<div class="video-card-text-transform">
					<div class="video-card-text-container">
						<h2><span><?php the_field('video_card_title'); ?></span></h2>
						<div class="gradient-hr"></div>
					</div>
				</div>
				
				<div class="video-img-parent is-bg" data-bg-src="<?php the_field('video_placeholder_image'); ?>"></div>

				<div class="is-reveal-sleeve-img-group"></div>
			</div>	
		</div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--sm"></div>
</section>