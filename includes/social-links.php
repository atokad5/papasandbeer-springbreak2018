<?php 
	$social = array(
		"twitter" => array(
			"name" => "twitter",
			"url" => "https://twitter.com/Papas_Rosarito"
		),
		"instagram" => array(
			"name" => "instagram",
			"url" => "https://www.instagram.com/papasandbeer/"
		),
		"snapchat" => array(
			"name" => "snapchat",
			"url" => "https://www.snapchat.com/add/papasandbeer83",
		),
		"youtube" => array(
			"name" => "youtube",
			"url" => "https://www.youtube.com/user/papasandbeer1",
		)

	); 

?>

<ul class="social-links-ul">
	<?php foreach($social as $theSo) : ?>
		<li><a href="<?php echo $theSo['url']; ?>"><?php get_template_part('includes/social/'.$theSo['name']); ?></a></li>
	<?php endforeach ?>
</ul>