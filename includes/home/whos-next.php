<?php $root = get_template_directory_uri(); ?>

<section id="who_next">
	<div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-white.png"; ?>);">
		
	</div>
	<div class="spacing spacing--sm"></div>
	<div class="spacing spacing--md"></div>

	<div class="inner">


		<div class="is-center">
			<div class="content-area">
				<h2 class="dates sm-hdr"><?php the_field('line_up_subtitle'); ?></h2>
			</div>
			<div class="hdr-el content-area">
				<h1 class="section-header"><?php the_field('line_up_headline'); ?></h1>
			</div>
			<div class="mini-spliter animated-spliter"></div>
			
			<div class="content-area has-max">
				<div class="toggle-element">
				<ul>
					<li class="lineup-year active"><span><?php the_field('line_up_option_one'); ?></span></li>
					<li class="lineup-year"><span><?php the_field('line_up_option_two'); ?></span></li>
				</ul>
			</div>
				<div class="copy-lineup-group">
					<div class="copy-lineup active">
						<?php the_field('line_up_copy'); ?>
					</div>
					<div class="copy-lineup">
						<?php the_field('line_up_two'); ?>
					</div>
				</div>
			</div>
		</div>

		
		
	</div>

	<div class="image-lineup-nest">
		<div class="figure-lineup-parent">
			<figure class="element-lineup active-image">
				<img class="lazy-image is-active" data-lazy="<?php the_field('2018_lineup') ;?>" src="" alt="">
			</figure>

			<figure class="element-lineup">
				<img  class="lazy-image" data-lazy="<?php the_field('2019_lineup') ;?>" src="" alt="">
			</figure>
		</div>
	</div>
</section>