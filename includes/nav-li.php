<div class="menu">
	<ul class="menu-li">
		<?php $getNav = get_field('nav_links', 'options'); 
		// var_dump($getNav);
			foreach ($getNav as $theNav) {

		?>
		<li><a class="true_link" href="<?php echo $theNav['link']['url']; ?>" data-image="<?php echo $theNav['link_image']; ?>"><?php echo $theNav['link']['title']; ?></a></li>


	
		<?php } ?>
		<li><a  class="cta h_over" href="<?php the_field('view_packages_link', 'options'); ?>"><?php the_field('view_packages_text', 'options'); ?></a></li>
	</ul>
</div>