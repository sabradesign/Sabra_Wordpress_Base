<?php

// INCLUDE BASE FUNCTIONS

include_once( 'inc/base_functions.php' );

// LOAD THEME TEXT DOMAIN

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('sabra-wordpress-base', get_template_directory() . '/languages');
}

// INCLUDE NECESSARY JS AND CSS FILES

function sabra_enqueue_scripts_styles() {

	$scripts = array();
	$styles = array();
	
	// Script Name:  MODERNIZR
	$scripts[] = array(
		'handle'	=>	'modernizr',
		'src'	=>	get_template_directory_uri() . '/js/modernizr.min.js',
		'dependencies'	=>	array(),
		'version'		=>	'2.6.2',
		'in_footer'		=>	false
	);
	
	// Script Name:  Bootstrap
	$scripts[] = array(
		'handle'	=>	'bootstrap',
		'src'	=>	get_template_directory_uri() . '/js/bootstrap.min.js',
		'dependencies'	=>	array( 'jquery' ),
		'version'		=>	'2.3.2',
		'in_footer'		=>	true
	);
	
	// Script Name:  FLEXSLIDER
	$scripts[] = array(
		'handle'	=>	'owl-carousel',
		'src'	=>	get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js',
		'dependencies'	=>	array( 'jquery' ),
		'version'		=>	'1.3.2',
		'in_footer'		=>	true
	);
	
	// Script Name:  FANCYBOX
	$scripts[] = array(
		'handle'	=>	'fancybox',
		'src'	=>	get_template_directory_uri() . '/js/fancybox/jquery.fancybox.js',
		'dependencies'	=>	array( 'jquery' ),
		'version'		=>	'2.1.4',
		'in_footer'		=>	true
	);
	
	// Script Name:  FANCYBOX HELPER THUMBNAILS
	$scripts[] = array(
		'handle'	=>	'fancybox-thumbs',
		'src'	=>	get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-thumbs.js',
		'dependencies'	=>	array( 'jquery', 'fancybox' ),
		'version'		=>	'1.0.7',
		'in_footer'		=>	true
	);
	
	// Script Name:  SELECT 2
	$scripts[] = array(
		'handle'	=>	'select2',
		'src'	=>	get_stylesheet_directory_uri() . '/js/select2/select2.min.js',
		'dependencies'	=>	array( 'jquery' ),
		'version'		=>	'3.4.5',
		'in_footer'		=>	true
	);
	
	// Script Name:  TWEENLITE
	$scripts[] = array(
		'handle'	=>	'TweenLite',
		'src'	=>	get_stylesheet_directory_uri() . '/js/TweenLite.min.js',
		'dependencies'	=>	array( 'jquery' ),
		'version'		=>	'1.10.3',
		'in_footer'		=>	true
	);

		// Script Name:  MMENU
	$scripts[] = array(
		'handle'	=>	'mmenu',
		'src'	=>	get_template_directory_uri() . '/js/jquery.mmenu.min.all.js',
		'dependencies'	=>	array( 'jquery' ),
		'version'		=>	'4.3.1',
		'in_footer'		=>	true
	);
	
	// Script Name:  GLOBAL
	$scripts[] = array(
		'handle'	=>	'global',
		'src'	=>	get_template_directory_uri() . '/js/global.js',
		'dependencies'	=>	array( 'jquery' ),
		'version'		=>	'1.0',
		'in_footer'		=>	true
	);
	
	// CSS Style Name: Retina
	$styles[] = array(
		'handle'	=>	'main',
		'src'		=>	get_template_directory_uri() . '/css/style.less'
	);
	
	// ADD THE STYLES AND SCRIPS FUNCTIONS
	
	foreach( $scripts as $script ) {
		wp_enqueue_script( $script['handle'], $script['src'], $script['dependencies'], $script['version'], $script['in_footer'] );
	}
	
	foreach( $styles as $style ) {
		isset( $style['dependencies'] ) ? $dependencies = $style['dependencies'] : $dependencies = false;
		isset( $style['version'] ) ? $version = $style['version'] : $version = false;
		isset( $style['media'] ) ? $media = $style['media'] : $media = false;
		
		wp_enqueue_style( $style['handle'], $style['src'], $dependencies, $version, $media );
	}

    
}
add_action( 'wp_enqueue_scripts', 'sabra_enqueue_scripts_styles' );

//LOAD ADMIN JS

function sabra_enqueue_admin_scripts() {

	wp_enqueue_script( 'jquery-ui-tabs' );
	wp_enqueue_script( 'jquery-ui-datepicker' );
	wp_enqueue_script( 'admin-js', get_stylesheet_directory_uri() . '/inc/js/admin.js', array( 'jquery' ) );

	wp_enqueue_style( 'jquery-ui', 'http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css' );
	wp_enqueue_style( 'admin-css', get_stylesheet_directory_uri() . '/inc/admin.less');
	
	if (class_exists('WPLessPlugin')){
	
		$less = WPLessPlugin::getInstance();

		// do stuff with its API like:
		$less->processStylesheets();
	
	}
	
}
add_action( 'admin_init', 'sabra_enqueue_admin_scripts' );

// remove_filter('the_content', 'wpautop');


// FORCE LOGIN TO REACH SITE
function site_lockdown() {

	if ( is_user_logged_in() ) return true;

	if ( !is_page_template('custom_login.php') && !isset( $_GET['login_redirect'] ) ) {
	
		if ( strpos( $_SERVER['REQUEST_URI'], 'login' ) ) $redirect = site_url();
			else $redirect = site_url( $_SERVER['REQUEST_URI'] );
	
		wp_redirect( site_url('login/?login_redirect=' . $redirect ) );
		die;
	
	}

}
// add_action( 'parse_request', 'site_lockdown', 1 );

?>