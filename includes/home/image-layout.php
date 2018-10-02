<?php $root = get_template_directory_uri(); ?>

<div class="is-image-column left-image-column">
	<div class="image-nest figure-left-img">
		<img class="lazy-image" data-lazy="<?php the_field('left_image_tall'); ?>" src="" alt="">
		<div class="is-reveal-sleeve-img-group"></div>
	</div>
</div>

<div class="is-image-column right-image-column">

	<div class="image-nest figure-right-top-img">
		<img class="lazy-image" data-lazy="<?php the_field('top_right_image'); ?>" src="" alt="">
		<div class="is-reveal-sleeve-img-group"></div>
	</div>

	<div class="is-half-inner">
		<div class="image-nest figure-right-bottom-img">
			<img class="lazy-image" data-lazy="<?php the_field('bottom_right_image'); ?>" src="" alt="">
			<div class="is-reveal-sleeve-img-group"></div>
		</div>
	</div>
	
</div>

