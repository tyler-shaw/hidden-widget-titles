<?php
/**
 * Plugin Name: Hidden Widget Titles
 * Description: Allows select widget titles to display in the admin panel but not on your site.
 * Version: 0.1.0
 * Author: Tyler Shaw
 */

// Anonymous function requiring PHP 5.3 or greater.
add_filter('widget_title', function($title) {
	
	// Note: Check what version of PHP made $my_string[0] work.
	
	$title_check = trim($title);
	
	$single_start_character = apply_filters('hwt_single_start_character', '!');
	
	if($title_check[0] == $single_start_character) {
		$title = '';
		return $title;
	}
	
	$start_char = apply_filters('hwt_section_start_character', '[');
	$end_char= apply_filters('hwt_section_end_character', ']');
	
	while(true) {
		$start_p = strpos($title_check, $start_char);
		$end_p = strpos($title_check, $end_char);

		if($start_p !== false && $end_p !== false) {

			$deletion = substr($title_check, $start_p, ($end_p + strlen($end_char)) - $start_p);

			$title_check = str_replace($deletion, '', $title_check);

		}
		else {
			break;
		}

	}
	
	return $title_check;
	
});