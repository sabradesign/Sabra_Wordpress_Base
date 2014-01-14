<?php

add_action('admin_menu', 'custom_settings_menus');

function custom_settings_menus() {
	add_menu_page('Company Information', 'Company Information', 'edit_posts', 'company_information', 'company_information_menu', '', 3 );
    add_menu_page('Site Branding', 'Site Branding', 'manage_options', 'site_branding', 'site_branding_menu' );
}

function company_information_menu(){
  	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	include('menus/company_information_menu.php');

}

function site_branding_menu(){
  	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	include('menus/site_branding_menu.php');

}

?>