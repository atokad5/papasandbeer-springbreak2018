<?php /* Template Name: Home Page */ 
	get_header(); 
	$root = get_template_directory_uri();
?>

<?php get_template_part('includes/nav') ?>

<?php get_template_part('includes/loadin'); ?>

<header>
	<div class="inner hdr-inner over-bg">
		<div class="hdr-container hero_flex">

		<div class="hero_flex--el">
				<h1 class="section-header">
					<?php the_field('hero_headline'); ?>
				</h1>
				<div class="content-area hero-copy" style="margin-bottom: 1.5em;">
					<?php the_field('hero_copy'); ?>
				</div>
				<a href="<?php the_field('view_packages_link', 'options'); ?>" class="cta"><?php the_field('view_packages_text', 'options'); ?></a>
		</div>

		<div class="hero_flex--el">
			<div class="hero_video--card video-trigger" data-video-src="<?php the_field('video_src');?>">
				<div class="py-bt">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 89.334 89.334"><defs><style></style><linearGradient id="a" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#f29e67"/><stop offset="1" stop-color="#dd675d"/></linearGradient></defs><g transform="translate(-1774.33 -1025.238)"><circle class="a" style="fill:#fff;" cx="44.667" cy="44.667" r="44.667" transform="translate(1774.33 1025.238)"/><path class="b" style=
				"fill:url(#a);" d="M0,0,22.079,3.473,12.462,13.09l-9.04,9.04Z" transform="translate(1830.154 1069.337) rotate(135)"/></g></svg>
				</div>
				<div class="card-bg" style="background-image: url(<?php the_field('hero_video_placeholder'); ?>);"></div>
			</div>
			<div class="hero-watch-video">
				<div class="hero-watch-video--inner">
				<?php the_field('video_card_content'); ?>
				</div>
				<span class="gradient"></span>
			</div>
		
		</div>
			
		</div>
	</div>
	<div class="is-transition-bg"></div>
	<div class="is-bg is-el-bg header-bg" data-bg-src="<?php the_field('hero_background') ;?>" id="headerBg"></div>
</header>


<?php get_template_part('includes/home/whos-next'); ?>

<?php get_template_part('includes/home/tickets-selling'); ?>



<?php get_template_part('includes/home/slider'); ?>

<section class="is-orange">
	<div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);"></div>
	<div class="spacing spacing--md"></div>
	<div class="inner">
		<div class="is-image-grid-content">
			<div class="content-area">
				<h2 class="dates is-center sm-hdr">
					<?php the_field('user_content_subheadline'); ?>
				</h2>
			</div>
			<div class="is-center image-layout-hdr">
				<div class="content-area">
					<h1 class="section-header"><?php the_field('user_content_headline'); ?></h1>
				</div>
			</div>
		</div>

		<div class="image-layout-ug">
			<?php 
				$ugContent = get_field('user_content');
				 foreach($ugContent as $imgContent) { ?>
				<div class="ug-parent">
					<div class="ug-item is-bg" data-bg-src="<?php echo $imgContent['url'] ?>" style="background-image: url();">
						
						<div class="author">
							<?php echo $imgContent['title']; ?>
						</div>
						<div class="gradient-img"></div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>

</section>


<?php // get_template_part('includes/home/video_section'); ?>


<section class="is-white" style="position: relative;">
<div class="stroke-section stroke-section-orange is-rotated is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);"></div>
<div class="spacing spacing--md"></div>
		<div class="spacing spacing--md"></div>
		<div class="spacing spacing--md"></div>
		<div class="max clearfix flex-row-images">
			<div class="half-el inner clearfix is-half-inner-column">
				<div class="is-image-grid-content" style="color: black;">
					<div class="content-area">
						<h2 class="dates is-center sm-hdr"><?php the_field('image_grid_sub_header'); ?></h2>
					</div>
					<div class="is-center image-layout-hdr">
						<div class="content-area">
							<h1 class="section-header"><?php the_field('image_grid_header'); ?></h1>
						</div>
					</div>

					<div class="hr-splitter animated-spliter"></div>

					<div class="image-grid-copy">
						<div class="content-area">
							<p><?php the_field('image_paragraph_one'); ?></p>
						</div>
						<?php 
							$hasParagraphTwo = get_field('image_paragraph_two');
							if(strlen($hasParagraphTwo) > 2) : ?>
							<div class="content-area">
								<?php echo $hasParagraphTwo; ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="section-cta">
					<a href="<?php the_field('view_packages_link', 'options'); ?>" class="cta"><?php the_field('view_packages_text', 'options'); ?></a>
					</div>
				</div>
			</div>


			<div class="half-el image-layout-parent">
				<?php get_template_part('includes/home/image-layout'); ?>
			</div>
			
			
		
		</div>
		<div class="spacing spacing--md"></div>
		<div class="spacing spacing--md"></div>

</section>



<?php get_template_part('includes/home/faq'); ?>


		<section class="is-blue dkSpacing">
			<div class="spacing spacing--md"></div>
			<div class="spacing spacing--md"></div>
			<div class="spacing spacing--md"></div>
		</section>

<?php get_footer(); ?>
