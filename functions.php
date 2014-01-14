<?php

// INCLUDE BASE FUNCTIONS

include_once( 'inc/base_functions.php' );

// INCLUDE NECESSARY JS AND CSS FILES

function sabra_enqueue_scripts_styles() {

	$scripts = array();
	$styles = array();
	
	// Script Name:  MODERNIZR
	$scripts[] = array(
		'handle'	=>	'modernizr',
		'src'	=>	get_template_directory_uri() . '/js/modernizr.min.js',
		'dependencies'	=>	array( 'jquery' ),
		'version'		=>	'2.6.2',
		'in_footer'		=>	true
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
		'handle'	=>	'flexslider',
		'src'	=>	get_template_directory_uri() . '/js/flexslider/jquery.flexslider-min.js',
		'dependencies'	=>	array( 'jquery' ),
		'version'		=>	'2.1',
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

remove_filter('the_content', 'wpautop');

?>