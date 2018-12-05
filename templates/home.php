<?php /* Template Name: Home Page */ 
	get_header(); 
	$root = get_template_directory_uri();
?>

<?php get_template_part('includes/nav') ?>

<?php get_template_part('includes/loadin'); ?>

<header>
	<div class="inner hdr-inner over-bg">
		<div class="hdr-container pre-built">
			<h2 class="dates hdr-el" id="top-content"><?php the_field('dates'); ?></h2>
			<div class="hdr-el">
				<h1 class="section-header" style="font-weight: 100;"><?php the_field('hero_headline') ?></h1>
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
		<div class="spacing spacing--md"></div>
		<div class="spacing spacing--sm"></div>
</section>


<?php get_template_part('includes/home/whos-next'); ?>

<?php get_template_part('includes/home/tickets-selling'); ?>

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
<?php get_template_part('includes/home/faq'); ?>


		<section class="is-blue dkSpacing">
			<div class="spacing spacing--md"></div>
			<div class="spacing spacing--md"></div>
			<div class="spacing spacing--md"></div>
		</section>

<?php get_footer(); ?>
