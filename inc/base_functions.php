<?php

// INCLUDE NECESSARY PHP FILES

/**
 * wp-less
 * https://github.com/sanchothefat/wp-less
 */
if ( ! class_exists( 'wp_less' ) ) {
    require_once( 'wp-less.php' );
}

/**
 * wpthumb
 * https://github.com/humanmade/WPThumb
 */
if ( ! class_exists('WP_Thumb') ) {
    require_once( 'WPThumb/wpthumb.php' );
}

include_once( 'class-tgm-plugin-activation.php' );
include_once( 'custom_post_types.php' );
include_once( 'custom_taxonomies.php' );
include_once( 'custom_meta_boxes.php' );
include_once( 'custom_shortcodes.php' );
include_once( 'theme_init.php' );
include_once( 'tiny_mce_buttons.php' );
include_once( 'nav-walker.php' );

// ADMIN MENUS
include_once( 'custom_admin_menus.php' );

// INCLUDE NECESSARY PLUGINS

add_action( 'tgmpa_register', 'register_required_plugins' );
function register_required_plugins() {
	$plugins = array(

		// META BOXES
		array(
			'name'     				=> 'Meta Box Plugin', // The plugin name
			'slug'     				=> 'meta-box', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/inc/plugins/meta-box.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'force_activation' 		=> true // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
		),

		// This is an example of how to include a plugin from the WordPress Plugin Repository
		array(
			'name' 		=> 'SEO Ultimate',
			'slug' 		=> 'seo-ultimate',
			'required' 	=> true,
			'force_activation' 		=> true
		),
		array(
			'name'		=>	'Contact Form 7',
			'slug'		=>	'contact-form-7',
			'required'	=>	false
		),
		array(
			'name'		=>	'Analytics360',
			'slug'		=>	'analytics360',
			'required'	=>	false
		),
		array(
			'name' 		=> 'Google XML Sitemaps',
			'slug' 		=> 'google-sitemap-generator',
			'required' 	=> true,
			'force_activation' 		=> true
		),
		array(
			'name'		=>	'ShareThis',
			'slug'		=>	'share-this',
			'required'	=>	false
		),
		array(
			'name'		=>	'wpMandrill',
			'slug'		=>	'wpmandrill',
			'required'	=>	false
		),
		array(
			'name'		=>	'W3 Total Cache',
			'slug'		=>	'w3-total-cache',
			'required'	=>	false
		)

	);


	$theme_text_domain = 'Sabra';
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> true,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}

// CUSTOM LOGIN SCREEN CSS
function custom_login_css() { 
	echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/inc/login.css" />'; 
}
add_action('login_head', 'custom_login_css');

?>