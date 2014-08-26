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
	
	$start_character = apply_filters('hwt_section_start_character', '[');
	$end_character = apply_filters('hwt_section_end_character', ']');
	
	if($title_check[0] == $start_character && $title_check[strlen($title_check) - 1] == $end_character) {
		$title = '';
		return $title;
	}
	
	$single_start_character = apply_filters('hwt_single_start_character', '!');
	
	if($title_check[0] == $single_start_character) {
		$title = '';
		return $title;
	}
	
	return $title;
	
});