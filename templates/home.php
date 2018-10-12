<?php /* Template Name: Home Page */ 
	get_header(); 
	$root = get_template_directory_uri();
?>

<?php get_template_part('includes/nav') ?>

<?php get_template_part('includes/loadin'); ?>

<header>
	<div class="inner hdr-inner over-bg">
		<div class="hdr-container pre-built">
			<h2 class="dates hdr-el"><?php the_field('dates'); ?></h2>
			<div class="section-header hdr-el">
				<?php the_field('hero_headline') ?>
			</div>
			<div class="hdr-el">
				<p class="hdr-el"><?php the_field('hero_copy'); ?></p>
			</div>
			<div class="hdr-el">
				<a href="<?php the_field('view_packages_link', 'options'); ?>" class="cta hdr-cta"><?php the_field('view_packages_text', 'options'); ?></a>
			</div>
		</div>		
	</div>
	<div class="is-transition-bg"></div>
	<div class="is-bg is-el-bg header-bg" data-bg-src="<?php the_field('hero_background') ;?>"></div>
</header>


<?php get_template_part('includes/home/slider'); ?>

<?php get_template_part('includes/home/video_section'); ?>


<section class="is-blue" style="position: relative;">
<div class="stroke-section stroke-section-orange is-rotated is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);"></div>
<div class="spacing spacing--md"></div>
		<div class="spacing spacing--md"></div>
		<div class="max clearfix flex-row-images">
			<div class="half-el inner clearfix is-half-inner-column">
				<div class="is-image-grid-content">
					<div class="content-area">
						<h2 class="dates is-center sm-hdr"><?php the_field('image_grid_sub_header'); ?></h2>
					</div>
					<div class="section-header is-center image-layout-hdr">
						<div class="content-area">
							<?php the_field('image_grid_header'); ?>
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
		<div class="spacing spacing--sm"></div>
</section>


<?php get_template_part('includes/home/whos-next'); ?>
<?php get_template_part('includes/home/tickets-selling'); ?>
<?php get_template_part('includes/home/faq'); ?>




<?php get_footer(); ?>
