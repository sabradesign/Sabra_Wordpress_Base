<?php

/*****************************************************************************************
************************* CREATE CUSTOM SHORT CODES **************************************

INSTRUCTIONS
1.	Copy and paste the commented out code
2.	Customize the variables available to the user
3.  Uncomment the code

Setting details found at:
http://codex.wordpress.org/Function_Reference/add_shortcode

*****************************************************************************************/

// /*
// Shortcode Name:  Shortcode Name
// Shortcode Syntax: [custom_shortcode_slug variable1="" variable2=""]
// Variable:
// 	variable1 = Specifies something happens.  Default: Does something cool
// 	variable2 = Specifies something else happens.  Default:  Does Something Cooler
// */
// function sabra_custom_shortcode( $atts, $content = null ) {
// 	
// 	extract( shortcode_atts( array(
// 			'variable1'	=>	'default value',
// 			'variable2'	=>	'default value'
// 		), $atts ) );
// 		
// 	$output = '';
// 	
// 	$output .= '<p>Variable 1 = <strong>'.$variable1.'</strong></p>';
// 	$output .= '<p>Variable 2 = <strong>'.$variable2.'</strong></p>';
// 	$output .= '<h5>Content</h5>'.do_shortcode( $content );
// 	
// 	return $output;
// 		
// }
// add_shortcode( 'custom_shortcode_slug', 'sabra_custom_shortcode');

/*
Shortcode Name:  Create Bootstrap Row
Shortcode Syntax: [row fluid="0"]
Variable:
	fluid = Should this row be fluid?  Default: 0
*/
function sabra_row( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'fluid'	=>	0
		), $atts ) );
		
	$output = '';
	
	if ( $fluid ) {
		$output .= '<div class="container-fluid">';
		$output .= '<div class="row-fluid">';
	} else {
		$output .= '<div class="row">';
	}
	
	$output .= do_shortcode( $content );
	$output .= '</div>';
	
	if ( $fluid ) $output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'row', 'sabra_row');

/*
Shortcode Name:  Create Bootstrap One Half Div
Shortcode Syntax: [one_half class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_one_half( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$output = '';
	
	$output .= '<div class="span6';
	if ( $class != '' ) $output .= ' '.$class;
	$output .= '">';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'one_half', 'sabra_one_half');

/*
Shortcode Name:  Create Bootstrap One Third Div
Shortcode Syntax: [one_third class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_one_third( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$output = '';
	
	$output .= '<div class="span4';
	if ( $class != '' ) $output .= ' '.$class;
	$output .= '">';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'one_third', 'sabra_one_third');

/*
Shortcode Name:  Create Bootstrap Two Third Div
Shortcode Syntax: [two_third class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_two_third( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$output = '';
	
	$output .= '<div class="span8';
	if ( $class != '' ) $output .= ' '.$class;
	$output .= '">';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'two_third', 'sabra_two_third');

/*
Shortcode Name:  Create Bootstrap One Fourth Div
Shortcode Syntax: [one_fourth class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_one_fourth( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$output = '';
	
	$output .= '<div class="span3';
	if ( $class != '' ) $output .= ' '.$class;
	$output .= '">';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'one_fourth', 'sabra_one_fourth');

/*
Shortcode Name:  Create Bootstrap Three Fourth Div
Shortcode Syntax: [three_fourth class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_three_fourth( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$output = '';
	
	$output .= '<div class="span9';
	if ( $class != '' ) $output .= ' '.$class;
	$output .= '">';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'three_fourth', 'sabra_three_fourth');

/*
Shortcode Name:  Create Bootstrap Well Div
Shortcode Syntax: [well class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_well( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$output = '';
	
	$output .= '<div class="well';
	if ( $class != '' ) $output .= ' '.$class;
	$output .= '">';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'well', 'sabra_well');

?>