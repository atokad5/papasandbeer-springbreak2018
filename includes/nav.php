<?php $root = get_template_directory_uri(); ?>
<nav>
	<div class="inner pre-built nav-flex">

		<div class="is-nav-el logo-el">
			
			<figure class="sb-logo-mini">
				<a href="<?php echo site_url('/');?>">
					<img src="<?php echo "$root/_assets/images/sb-logo.png"; ?>" alt="">
				</a>
			</figure>

			<button class="mt-trigger">
				<span class="sr-only">Menu</span>
				<span id="mt-top"></span>
				<span id="mt-bot"></span>
			</button>
			
		</div>

		<div class="is-nav-el">
			
		</div>


		<div class="is-nav-el is-menu-dk">
			<div class="dk-nav">
				<?php get_template_part('includes/nav-li'); ?>
			</div>
		</div>


	</div>
	<div class="inner cookie-msg">
		<?php get_template_part('includes/cookie'); ?>
	</div>
</nav>