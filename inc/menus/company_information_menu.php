<?php

if ( isset($_POST['action']) && $_POST['action'] == 'update_company_information' ) {

	$post = $_POST;
	
	foreach( $post as $setting => $value ) {
	
		if ( $setting != 'action' ) {
		
			update_option( $setting, $value );
		
		}
	
	}
	
	$company_info = $post['company_info'];
	$company_social = $post['company_social'];

} else {

	$company_info = get_option('company_info');
	$company_social = get_option('company_social');

}

?>

<div class="wrap">
	<h2>Company Information</h2>
	<p>Fill out these fields to setup your company information</p>

	<form method="POST" id="company-information-form">

		<h3>Contact Information</h3>
		
		<table>
			<tbody>
				<tr>
					<td><label for="company_info[name]">Company Name</label></td>
					<td><input type="text" name="company_info[name]" id="company-name" placeholder="Company Name" value="<?php if ( isset( $company_info['name'] ) ) echo $company_info['name']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_info[phone]">Phone Number</label></td>
					<td><input type="text" name="company_info[phone]" id="company-phone" placeholder="ex. +1 (555) 555-5555" value="<?php if ( isset( $company_info['phone'] ) ) echo $company_info['phone']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_info[fax]">Fax Number</label></td>
					<td><input type="text" name="company_info[fax]" id="company-phone" placeholder="ex. +1 (555) 555-5555" value="<?php if ( isset( $company_info['fax'] ) ) echo $company_info['fax']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_info[email]">Contact Email Address</label></td>
					<td><input type="text" name="company_info[email]" id="company-email" placeholder="ex. you@yourcompany.com" value="<?php if ( isset( $company_info['email'] ) ) echo $company_info['email']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_info[street]">Street Address</label></td>
					<td><input type="text" name="company_info[street]" id="company-street" placeholder="ex. 1500 Pennsylvania Ave." value="<?php if ( isset( $company_info['street'] ) ) echo $company_info['street']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_info[city]">City</label></td>
					<td><input type="text" name="company_info[city]" id="company-city" placeholder="ex. Washington" value="<?php if ( isset( $company_info['city'] ) ) echo $company_info['city']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_info[state]">State</label></td>
					<td><input type="text" name="company_info[state]" id="company-state" placeholder="ex. D.C." value="<?php if ( isset( $company_info['state'] ) ) echo $company_info['state']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_info[zip]">Zip Code</label></td>
					<td><input type="text" name="company_info[zip]" id="company-zip" placeholder="ex. 90210" value="<?php if ( isset( $company_info['zip'] ) ) echo $company_info['zip']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_info[url]">Website URL</label></td>
					<td><input type="text" name="company_info[url]" id="company-url" placeholder="http://www.me.com" value="<?php if ( isset( $company_info['url'] ) ) echo $company_info['url']; ?>"></td>
				</tr>
			</tbody>
		</table>
	
		<h3>Social Media Links</h3>
		
		<table>
			<tbody>
				<tr>
					<td><label for="company_social[facebook]">Facebook Page URL</label></td>
					<td><input type="text" name="company_social[facebook]" id="company-facebook" placeholder="ex. http://www.facebook.com/sabradesign.me" value="<?php if ( isset( $company_social['facebook'] ) ) echo $company_social['facebook']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_social[twitter]">Twitter Handle</label></td>
					<td><input type="text" name="company_social[twitter]" id="company-twitter" placeholder="ex. @sabradesign" value="<?php if ( isset( $company_social['twitter'] ) ) echo $company_social['twitter']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_social[linkedin]">LinkedIn Company Page URL</label></td>
					<td><input type="text" name="company_social[linkedin]" id="company-linkedin" placeholder="ex. http://www.linkedin.com/company/2695730" value="<?php if ( isset( $company_social['linkedin'] ) ) echo $company_social['linkedin']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_social[yelp]">Yelp Company Page URL</label></td>
					<td><input type="text" name="company_social[yelp]" id="company-yelp" placeholder="ex. http://www.yelp.com/biz/sabra-design-washington-3" value="<?php if ( isset( $company_social['yelp'] ) ) echo $company_social['yelp']; ?>"></td>
				</tr>
				<tr>
					<td><label for="company_social[youtube]">YouTube Channel</label></td>
					<td><input type="text" name="company_social[youtube]" id="company-youtube" placeholder="ex. http://www.youtube.com/channel/UCqabOBxL9jSUAVAQN14ZW_A" value="<?php if ( isset( $company_social['youtube'] ) ) echo $company_social['youtube']; ?>"></td>
				</tr>
			</tbody>
		</table>
		
		<div class="submit">
			<input type="hidden" name="action" value="update_company_information">
			<input type="submit" value="Submit Changes">
		</div>
	
	</form>

</div>