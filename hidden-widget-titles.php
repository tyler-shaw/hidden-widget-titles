<?php
/**
 * Plugin Name: Hidden Widget Titles
 * Description: Allows select widget titles to display in the admin panel but not on your site.
 * Version: 0.1.0
 * Author: Tyler Shaw
 */

// Anonymous function requiring PHP 5.3 or greater.
add_filter('widget_title', function($title) {
	
	$title_check = trim($title);
	
	if($title_check[0] == '[' && $title_check[strlen($title_check) - 1] == ']') {
		$title = '';
		return $title;
	}
	else {
		return $title;
	}
	
});