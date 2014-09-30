<?php
/**
 * Plugin Name: Hidden Widget Titles
 * Description: Allows select widget titles to display in the admin panel but not on your site.
 * Version: 1.0.2
 * Date: 10 September 2014
 * Author: Tyler Shaw
**/

function hwt_process_title($title) {

	// Remove entire title if the appropriate character is present.
	$single_start_character = apply_filters('hwt_single_start_character', '!');
	
	if(empty($title) || $title[0] == $single_start_character) {
		return '';
	}
	
	// Remove hidden sections if they exist.
	$start_char = apply_filters('hwt_section_start_character', '[');
	$end_char= apply_filters('hwt_section_end_character', ']');
	
	// Infinite loop to allow for unlimited sections to be hidden.
	while(true) {
		
		$start_p = strpos($title, $start_char);
		$end_p = strpos($title, $end_char);

		if($start_p !== false && $end_p !== false) {
			$deletion = substr($title, $start_p, ($end_p + strlen($end_char)) - $start_p);
			$title = str_replace($deletion, '', $title);
			
			continue;
		}
		
		break;
	}
	
	return $title;
}

add_filter('widget_title', 'hwt_process_title');