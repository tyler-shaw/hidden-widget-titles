Hidden Widget Titles
====================

Simple WordPress plugin for hiding select widget titles from displaying on the website. This plugin was spawned from my daily work to help organize a sea of indistinguishable widget in the admin panel.

Plugin is fully functional currently and will be submitted to the WordPress directory in the near future.

Examples:

On your widget title, add ! as the first character to hide the entire title from the front end.

```
! My Hidden Title
```

Alternatively, you may hide any number of sections of a title using square brackets.

```
This is Visible and [This is Hidden]
```


In addition, these symbols may be modified using their respective filters.

Hide Entire Title Character:
```php
add_filter('hwt_single_start_character', function() {
	// Simply return the new character here.
	return '!';
});
```

Hide Section Starting Character:
```php
add_filter('hwt_section_start_character', function() {
	// Simply return the new character here.
	return '[';
});
```

Hide Section Ending Character:
```php
add_filter('hwt_section_end_character', function() {
	// Simply return the new character here.
	return ']';
});
```

Notes:
------

- The "hiding" of the widget titles actually removes the hidden text server side. The text is therefore not visible in the page source.
- Requires PHP 5.3 or greater.
- Credit to the author(s) of [Remove Widget Titles](https://wordpress.org/plugins/remove-widget-titles/) for the idea of adding use of the exclamation to hide the entire title.