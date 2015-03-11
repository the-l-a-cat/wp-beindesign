<?php 
		
		function register_menus(){
			register_nav_menus(array( 'header-menu' => 'header-menu1', 'footer-menu' => 'footer-menu1'));
		}
		if (function_exists('register_nav_menus'))	{
			 add_action( 'init', 'register_menus' );
			}

		add_theme_support( 'post-thumbnails' ); 
		
		function jquery_init() {
			if (!is_admin()) {
				wp_enqueue_script('jquery');
			}
		}
		add_action('wp_enqueue_scripts', 'jquery_init');
		
		
		
		
		if ( !is_admin() ) {
		function register_my_js() {
			wp_enqueue_script( 'the_wheel', get_bloginfo( 'template_directory' ).'/the_wheel.js', array( 'jquery' ), '1.0', true );
			}
			add_action('init', 'register_my_js');
		}
	
		
?>