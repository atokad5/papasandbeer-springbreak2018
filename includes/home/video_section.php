<?php $root = get_template_directory_uri(); ?>

<section class="is-orange">
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
		<div class="inner has-max-container">
			<div class="video-container">
					
				<div class="play-circ">
					<div class="carrot"><?php get_template_part('includes/home/carrot'); ?></div>
				</div>
				<div class="btn-text">
					<div class="btn-svg"><?php get_template_part('includes/home/video-text'); ?></div>
				</div>
				<div class="video-img-parent is-bg" data-bg-src="<?php echo "$root/_assets/images/video-placeholder-image.jpg"; ?>"></div>
			</div>	
		</div>
	<div class="spacing spacing--md"></div>
</section>