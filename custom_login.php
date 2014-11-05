<?php
/**
 * 
 * Template Name: Socrates Login Form
 *
 */
?>

<!DOCTYPE html>
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
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
<![endif]-->

<?php if ( is_page_template( 'contact.php' ) ) : ?>

<script>
	var prospects = <?php echo json_encode( sc_get_prospects_array() ); ?>;
</script>

<?php endif; ?>

<?php
	wp_head();
?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".scroll-navbar" data-offset="320">

	<div id="form-container" class="vertical-center">
		<div class="container">
				<div id="primary" class="row">
					<div id="content" role="main" class="span12 text-center">

						<div class="logo"></div>

						<?php 
						$args = array(
							'redirect' => site_url(), 
							'form_id' => 'loginform-custom',
							'label_username' => __( 'Username', 'socratesconnected' ),
							'label_password' => __( 'Password', 'socratesconnected' ),
							'label_remember' => __( 'Remember Me', 'socratesconnected' ),
							'label_log_in' => __( 'Log In', 'socratesconnected' ),
							'remember' => true
						);
						
						//wp_login_form(); ?>
						
						<?php
						
							if ( isset( $_REQUEST['login_redirect'] ) ) $redirect = $_REQUEST['login_redirect'];
								else $redirect = site_url();
						
						?>
						
						<form id="custom-login-form" method="POST" action="<?php echo site_url('wp-login.php'); ?>">
							
							<fieldset for="log">
								<input type="text" name="log" id="user_login" class="input-block-level" placeholder="<?php _e('Username', 'socratesconnected'); ?>">
							</fieldset>
						
							<fieldset for="pwd">
								<input type="password" name="pwd" id="user_pass" class="input-block-level" placeholder="<?php _e('Password', 'socratesconnected'); ?>">
							</fieldset>
						
							<!-- 
<fieldset for="rememberme">
								<label class="checkbox">
									<input type="checkbox" name="rememberme" id="rememberme" value="forever"> 
									<?php _e('Remember Me', 'socratesconnected'); ?>
								</label>
							</fieldset>
 -->
							<input type="hidden" name="rememberme" value="forever">
							<input type="submit" name="wp-submit" id="wp-submit" class="btn btn-block pull-right btn-primary" value="<?php _e('Log In', 'socratesconnected'); ?>">
							<input type="hidden" name="redirect_to" value="<?php echo $redirect; ?>">
						
						</form>

					</div><!-- end #content -->
			</div><!-- end #primary -->
		</div>
	</div>

<?php wp_footer(); ?>
</body>
</html>