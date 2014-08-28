Hidden Widget Titles
====================

Simple WordPress plugin for hiding select widget titles from displaying on the website. This plugin was spawned from my daily work to help organize a sea of "Text Widget".

Fully functional at the moment, but more of a rough draft of a plugin. Once I get some extra time I'll finish it up and submit it to the WordPress directory.

Example:

On your widget title, add ! as the first character to hide the title from the front end.

```
! My Hidden Title
```

Alternatively, you may hide portions of a title using square brackets.

```
This Is Visible and [this is hidden]
```

In addition, these symbols may be modified using their respective filters.

Hide Entire Title Character:
```php
add_filter('hwt_section_start_character', function() {
	return '[';
});
```

Hide Section Starting Character:
```php
add_filter('hwt_single_start_character', function() {
	return '!';
});
```

Hide Section Ending Character:
```php
add_filter('hwt_section_end_character', function() {
	return ']';
});
```

Note: The "hiding" of the widget titles actually removes the hidden section server side. The text is therefore not visible in the page source.