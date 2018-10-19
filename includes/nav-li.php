<div class="menu">
	<ul class="menu-li">
		<li><a class="true_link" href="" data-image="https://images.pexels.com/photos/196652/pexels-photo-196652.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">Lineup</a></li>
		<li><a class="true_link" href="" data-image="https://images.pexels.com/photos/1304473/pexels-photo-1304473.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">Experience</a></li>
		<li><a class="true_link" href="" data-image="https://images.pexels.com/photos/341858/pexels-photo-341858.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">Travel</a></li>
		<li><a class="true_link" href="" data-image="https://images.pexels.com/photos/2143/lights-party-dancing-music.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">Info</a></li>

		<?php $ab = is_page_template('templates/moded-template.php'); ?>
		<?php if($ab) { ?>
			<li><a  class="cta" href="<?php the_field('view_packages_link', 'options'); ?>"><?php the_field('view_packages_text', 'options'); ?></a></li>
			<?php }	?>
	</ul>
</div>