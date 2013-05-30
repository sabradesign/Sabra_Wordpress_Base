<?php

//////////////////////////////////////////////////////////////////
// Add buttons to tinyMCE
//////////////////////////////////////////////////////////////////
add_action('init', 'add_button');

function add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
     add_filter('mce_external_plugins', 'add_plugin');  
     add_filter('mce_buttons_3', 'register_button');  
   }  
}  

function register_button($buttons) {  
   array_push($buttons, "soundcloud", "button", "dropcap", "highlight", "checklist", "tabs", "toggle", "one_half", "one_third", "two_third", "one_fourth", "three_fourth", "slider", "testimonial", "progress", "person", "alert", "pricing_table", "recent_works", "tagline_box", "content_boxes", "recent_posts");  
   return $buttons;  
}  

function add_plugin($plugin_array) { 
   $plugin_array['soundcloud'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['button'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['dropcap'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['highlight'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['checklist'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['tabs'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['toggle'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['one_half'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['one_third'] = get_template_directory_uri().'//tinymce/customcodes.js';
   $plugin_array['two_third'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['one_fourth'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['three_fourth'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['slider'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['testimonial'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['progress'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['person'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['alert'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['pricing_table'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['recent_works'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['tagline_box'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['content_boxes'] = get_template_directory_uri().'/tinymce/customcodes.js';
   $plugin_array['recent_posts'] = get_template_directory_uri().'/tinymce/customcodes.js';
   
   return $plugin_array;  
} 

?>