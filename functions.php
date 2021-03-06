<?php 
	add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
	function my_acf_json_save_point( $path ) {
			
			// update path
			$path = get_stylesheet_directory() . '/acf-json';
			
			
			// return
			return $path;
			
	}
	 


	add_action( 'after_setup_theme', 'register_my_menu' );

	function register_my_menu() {
		register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
		register_nav_menu( 'footerNav', __( 'Footer Menu', 'theme-slug' ) );
	}


	if (function_exists('acf_add_options_page')) {
		acf_add_options_page();
		acf_set_options_page_title('Site Global Settings');
		acf_add_options_sub_page('Faq Section');
		acf_add_options_sub_page('Nav');
		acf_add_options_sub_page('cookies');
		acf_add_options_sub_page('countdown');
	}




	// changes permissions for options page, allows lower-level user access to options pages
	if( function_exists('acf_set_options_page_capability') ) {
	    acf_set_options_page_capability( 'manage_options' );
	}


	add_theme_support( 'post-thumbnails' ); 

	// admin footer message, shown in bottom left on all screens
	function add_admin_footer() {
	   echo '<span id="footer-thankyou">Wordpress Theme by <a href="https://zitrocreative.com">Zitro Creative</a>.</span>';
	}
	add_filter('admin_footer_text', 'add_admin_footer');

	add_filter( 'wpcf7_validate_configuration', '__return_false' );


	
 



?>