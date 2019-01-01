<div class="menu">
	<ul class="menu-li">
		<li><a class="home_link true_link" href="<?php echo site_url(''); ?>">Home</a></li>
		<?php $getNav = get_field('nav_links', 'options'); 
		// var_dump($getNav);
			foreach ($getNav as $theNav) {

		?>
		<li><a class="true_link" href="<?php echo $theNav['link']['url']; ?>" data-image="<?php echo $theNav['link_image']; ?>"><?php echo $theNav['link']['title']; ?></a></li>


	
		<?php } ?>
		<li><a  class="cta h_over" href="<?php the_field('view_packages_link', 'options'); ?>"><?php the_field('view_packages_text', 'options'); ?></a></li>
		<li class="mb-o" style="color: white; font-size: 18px;">&copy; Papas&Beer</li>
	</ul>
</div>

<!-- 

Travel/Hotel
	- Driving Down (directions)

	- Hotels 

	- Boarders

	- Airports 

-->
 
<!-- venue page, package , line up  -->