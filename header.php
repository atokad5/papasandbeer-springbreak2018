<?php 
	$root = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MG3WLPW');</script>
	<!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<title>Papas&Beer <?php wp_title(''); ?></title>
	<link rel="icon" 
      type="image/png" 
      href="<?php echo "$root/_assets/favicon.png";?>">
	<link rel="stylesheet" href="<?php echo "$root/dist/assets/css/style.css?zitro=papas" ?>">
	<meta name="viewport" content="Width=device-width, initial-scale=1, user-scalable=no">
	<script src="https://use.fontawesome.com/1eda73ce4d.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MG3WLPW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



