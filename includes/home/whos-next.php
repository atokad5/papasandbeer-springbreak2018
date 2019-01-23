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
			<div class="hdr-el content-area artist-line-up-header" >
				<h1 class="section-header"><?php the_field('line_up_headline'); ?></h1>
			</div>
			<!-- <div class="mini-spliter animated-spliter"></div> -->
			
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
			<figure class="element-lineup active-image image-expand">
				<img class="lazy-image is-active" data-lazy="<?php the_field('2018_lineup') ;?>" src="" alt="">
				<div class="expand">
					<svg xmlns="http://www.w3.org/2000/svg" width="20.828" height="20.828" viewBox="0 0 20.828 20.828">
						<g id="minimize-2" transform="translate(-1.586 -1.586)">
							<path id="Path_1" data-name="Path 1" d="M4,14h6v6" transform="translate(13 35) rotate(180)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
							<line id="Line_2" data-name="Line 2" y1="7" x2="7" transform="translate(10 21) rotate(180)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
							<path id="Path_2" data-name="Path 2" d="M20,10H14V4" transform="translate(35 13) rotate(180)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
							<line id="Line_1" data-name="Line 1" y1="7" x2="7" transform="translate(21 10) rotate(180)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
						</g>
					</svg>
				</div>
			</figure>

			<figure class="element-lineup">
				<img  class="lazy-image" data-lazy="<?php the_field('2019_lineup') ;?>" src="" alt="">
				<div class="expand">
					<svg xmlns="http://www.w3.org/2000/svg" width="20.828" height="20.828" viewBox="0 0 20.828 20.828">
						<g id="minimize-2" transform="translate(-1.586 -1.586)">
							<path id="Path_1" data-name="Path 1" d="M4,14h6v6" transform="translate(13 35) rotate(180)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
							<line id="Line_2" data-name="Line 2" y1="7" x2="7" transform="translate(10 21) rotate(180)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
							<path id="Path_2" data-name="Path 2" d="M20,10H14V4" transform="translate(35 13) rotate(180)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
							<line id="Line_1" data-name="Line 1" y1="7" x2="7" transform="translate(21 10) rotate(180)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
						</g>
					</svg>
				</div>
			</figure>
		</div>
	</div>
</section>