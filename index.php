
<?php get_header(); 
	$root = get_template_directory_uri();
?>

<header id="scene">
	<div class="inner hdr-inner over-bg" data-depth="0.1">
		<div class="hdr-container"  data-depth="0.1">
			<h2 class="dates">October 19th & 20th, 2018</h2>
			<div class="section-header">
				<h1>Main headline goes here</h1>
			</div>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus atque cum fugit fugiat accusantium, corrupti officiis quisquam illo ullam qui enim. Veniam accusantium consectetur modi laboriosam, quidem quaerat maxime molestiae!</p>
		</div>		
	</div>

	<div  class="is-el-bg header-bg" style="background-image: url(<?php echo "$root/_assets/images/hero-image.jpg" ;?>) ; ?>"></div>
</header>

<?php get_footer(); ?>
