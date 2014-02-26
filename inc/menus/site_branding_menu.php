<?php

if ( isset($_POST['action']) && $_POST['action'] == 'set_custom_less_vars' ) {

	$post = $_POST;
	
	foreach( $post as $setting => $value ) {
	
		if ( $setting != 'action' ) {
		
			update_option( $setting, $value );
		
		}
	
	}
	
	$custom_bootstrap_vars = $post['custom_bootstrap_vars'];

} else {

	$custom_bootstrap_vars = get_option('custom_bootstrap_vars');

}

?>

<div class="wrap">
	<h2>Site Branding Variables</h2>
	<p>Fill out these fields to setup the site's branding</p>

	<form method="POST" id="site-branding-form">
		
		<table>
			<tbody>
				<tr>
					<td><label for="custom_bootstrap_vars[primaryColor]">Primary Color</label></td>
					<td><input type="color" name="custom_bootstrap_vars[primaryColor]" id="var-primaryColor" placeholder="ex. #777" value="<?php if ( isset( $custom_bootstrap_vars['primaryColor'] ) ) echo $custom_bootstrap_vars['primaryColor']; ?>"></td>
				</tr>
				<tr>
					<td><label for="custom_bootstrap_vars[linkColor]">Link Color</label></td>
					<td><input type="color" name="custom_bootstrap_vars[linkColor]" id="var-linkColor" placeholder="ex. #777" value="<?php if ( isset( $custom_bootstrap_vars['linkColor'] ) ) echo $custom_bootstrap_vars['linkColor']; ?>"></td>
				</tr>
			</tbody>
		</table>
		
		<div class="submit">
			<input type="hidden" name="action" value="set_custom_less_vars">
			<input type="submit" value="Submit Changes">
		</div>
	
	</form>

</div>