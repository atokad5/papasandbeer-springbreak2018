<?php $social = ["twitter", "instagram", "snapchat", "youtube"] ?>
<ul class="social-links-ul">
	<?php foreach($social as $theSo) : ?>
		<li><a href=""><?php get_template_part('includes/social/'.$theSo); ?></a></li>
	<?php endforeach ?>
</ul>