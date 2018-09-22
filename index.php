
<?php get_header(); 
	$root = get_template_directory_uri();
?>

<header>
	<div class="inner hdr-inner over-bg">
		<div class="hdr-container" >
			<h2 class="dates" style="position: relative; transition: all 400ms ease;">October 19th & 20th, 2018</h2>
			<div class="section-header">
				<h1>Main headline goes here</h1>
			</div>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus atque cum fugit fugiat accusantium, corrupti officiis quisquam illo ullam qui enim. Veniam accusantium consectetur modi laboriosam, quidem quaerat maxime molestiae!</p>
		</div>		
	</div>

	<div class="is-el-bg header-bg" style="background-image: url(<?php echo "$root/_assets/images/hero-image.jpg" ;?>);"></div>
	<div class="hdr-sleeve">
			
			<div class="spring-break-welcome">

				<div class="sp-position">
					<span class="sp-welcome-parent">
						<span class="parent-current">
							<span class="current-name" style="opacity: 0;"> Vamos Spring Break 2019</span>
						</span>
					</span>
				</div>

			</div>

	</div>
</header>

<?php get_footer(); ?>
