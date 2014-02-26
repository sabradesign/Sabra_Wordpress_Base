<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.gif" type="image/gif">
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" type="image/png">
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.gif" type="image/gif">

<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/images/touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/images/touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/images/touch-icon-ipad-retina.png">

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
<![endif]-->
<?php
	wp_head();
?>
</head>
<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id="utility-nav" class="navbar navbar-static-top">
	  <div class="navbar-inner">
	  	<div class="container">
			
			<ul class="social nav pull-left">
				<li><a href="#">FB</a></li>
				<li><a href="#">G+</a></li>
				<li><a href="#">PI</a></li>
				<li><a href="#">TW</a></li>
				<li><a href="#">YT</a></li>
			</ul>
			
			<ul class="nav lang-select pull-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						English
						<b class="caret"></b>
					  </a>
					<ul class="dropdown-menu">
					  <li><a href="?lang_switch=EN">English</a></li>
					  <li><a href="?lang_switch=SP">Spanish</a></li>
					</ul>
				</li>
			</ul>
			
			<div class="nav-collapse collapse">
				
			</div>
		</div>
	  </div>
	</div>

	<div id="main-nav" class="navbar navbar-static-top" data-spy="affix" data-offset-top="200">
	  <div class="navbar-inner">
	  	<div class="container">
	  		<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </a>
	  	
			<a class="brand" href="<?php bloginfo('wpurl'); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.png" alt="Socrates Connected" width=300 height=100/>
			</a>
			
			<div class="nav-collapse collapse pull-right">
				<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav', 'container' => 'false', 'walker' => new sabra_walker_nav_menu ) ); ?>
				<ul id="menu-main-menu" class="nav">
					<li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8 about">
						<div class="icon"></div>
						<a href="#">About</a>
					</li>
					<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9 how-it-works">
						<div class="icon"></div>
						<a href="#">How It Works</a>
					</li>
					<li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10 course-catalog">
						<div class="icon"></div>
						<a href="#">Course Catalog</a>
					</li>
					<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11 contact">
						<div class="icon"></div>
						<a href="#">Contact</a>
					</li>
					<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12 search">
						<div class="icon"></div>
						<a href="#">Search</a>
					</li>
				</ul>
			</div>
		</div>
	  </div>
	</div>
	
<header id="main-header">
	<div class="container">
		<!-- Main Header Content Here -->
		<?php //echo do_shortcode('[slider group="home-slider"]'); ?>
	</div>
</header>

<div id="main" class="with-sidebar">