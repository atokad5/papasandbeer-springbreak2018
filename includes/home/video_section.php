<?php $root = get_template_directory_uri(); ?>

<section class="is-orange" style="position: relative;">
	<div class="stroke-section stroke-section-orange is-rotated" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);">
		
	</div>
		<div class="inner has-max-container">

			<div class="is-center is-white">
				<div class="content-area">
					<h2 class="dates sm-hdr" style="padding-top: 3em;"><?php the_field('video_subheadline_home_page'); ?></h2>
				</div>
				<div class="hdr-el content-area">
					<h1 class="section-header"><?php the_field('video_headline_home_page'); ?></h1>
				</div>
				<div class="mini-spliter animated-spliter"></div>
				<div class="content-area has-max">
					<p><?php the_field('line_up_copy'); ?></p>
				</div>
			</div>
			<div class="spacing spacing--md"></div>


			<div class="video-container video-trigger" data-video-src="<?php the_field('video_url');?>">
					
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

				
				<div class="video-img-parent is-bg" data-bg-src="<?php the_field('video_placeholder_image'); ?>"></div>

				<div class="is-reveal-sleeve-img-group"></div>
			</div>	
		</div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--sm"></div>
</section>