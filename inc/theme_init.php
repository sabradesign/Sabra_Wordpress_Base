<?php

add_action( 'after_setup_theme', 'sabra_theme_setup', 9999 );
function sabra_theme_setup()
{
	// First we check to see if our default theme settings have been applied.
	$the_theme_status = get_option( 'sabra_theme_setup_status' );
	// If the theme has not yet been used we want to run our default settings.
	if ( $the_theme_status !== '1' ) {
		// Setup Default WordPress settings

		// Delete dummy post, page and comment.
		wp_delete_post( 1, true );
		wp_delete_post( 2, true );
		wp_delete_comment( 1 );
		
		// Once done, we register our setting to make sure we don't duplicate everytime we activate.
		update_option( 'reality_theme_setup_status', '1' );

		// Lets let the admin know whats going on.
		$msg = '
		<div class="error">
			<p>The ' . get_option( 'current_theme' ) . 'theme has changed your WordPress default <a href="' . admin_url( 'options-general.php' ) . '" title="See Settings">settings</a> and deleted default posts & comments.</p>
		</div>';
		add_action( 'admin_notices', $c = create_function( '', 'echo "' . addcslashes( $msg, '"' ) . '";' ) );
	}
	// Else if we are re-activing the theme
	elseif ( $the_theme_status === '1' and isset( $_GET['activated'] ) ) {
		$msg = '
		<div class="updated">
			<p>The ' . get_option( 'current_theme' ) . ' theme was successfully re-activated.</p>
		</div>';
		add_action( 'admin_notices', $c = create_function( '', 'echo "' . addcslashes( $msg, '"' ) . '";' ) );
	}
	
	// ADD THUMBNAIL SUPPORT
	add_theme_support( 'post-thumbnails' );
	
	// REGISTER MENUS
	add_theme_support( 'menus' );
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );
	
	// ADD THUMBNAIL SUPPORT
	add_theme_support( 'automatic-feed-links' );
}


?>