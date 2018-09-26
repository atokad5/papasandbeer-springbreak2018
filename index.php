
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

<?php get_footer(); ?>
