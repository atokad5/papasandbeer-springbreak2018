
<?php get_header(); 
	$root = get_template_directory_uri();
?>

<?php get_template_part('includes/nav') ?>

<?php get_template_part('includes/loadin'); ?>


<header>
	<div class="inner hdr-inner over-bg">
		<div class="hdr-container pre-built">
		 	<figure class="sb-logo">
				<img src="<?php echo "$root/_assets/images/sb-logo.png"; ?>" alt="">
			</figure>
			<h2 class="dates hdr-el">October 19th & 20th, 2018</h2>
			<div class="section-header hdr-el">
				<h1>Main headline goes here</h1>
			</div>
			<p class="hdr-el">Have a cold drink in hand while sitting under the sun, poolside listening to amazing music in good company. When the sun sets, our beachfront club lights up and comes to life.</p>
			<a class="cta hdr-el hdr-cta" href="">View Packages</a>
		</div>		
	</div>
	<div class="is-transition-bg"></div>
	<div class="is-bg is-el-bg header-bg" data-bg-src="<?php echo "$root/_assets/images/hero-image.jpg" ;?>"></div>
</header>



<?php get_template_part('includes/home/video_section'); ?>


<section class="is-orange">
		
		<div class="max clearfix flex-row-images">

			<div class="half-el inner clearfix is-half-inner-column">
				<div class="is-image-grid-content">
					<div class="content-area">
						<h2 class="dates is-center sm-hdr">THIS IS ONLY THE BEGINNING</h2>
					</div>
					<div class="section-header is-center image-layout-hdr">
						<div class="content-area">
							<h1>The Ultimate Party</h1>
						</div>
					</div>

					<div class="hr-splitter animated-spliter"></div>

					<div class="image-grid-copy">
						<div class="content-area">
							<p>Have a cold drink in hand while sitting under the sun, poolside listening to amazing music in good company. When the sun sets, our beachfront club lights up and comes to life.</p>
						</div>
						<div class="content-area">
							<p>Papas&Beer celebrates Spring Break the entire month of March, we are ready for you to dance all night and make memories to remember. During the weekdays, JusCollege will be hosting pool parties and bringing in fire performers. On the weekends, we got you covered with more wild pool parties and several A-List performers.</p>
						</div>
					</div>
					<div class="section-cta">
						<a class="cta" href="">View Packages</a>
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


<?php get_template_part('includes/home/slider'); ;?>
<?php get_template_part('includes/home/tickets-selling') ?>
<?php get_footer(); ?>
