<?php
/*
Plugin Name:  Disallow Indexing
Plugin URI:   https://github.com/fostertime/WordPress-Structure
Description:  Disallow indexing of your site on non-production environments.
Version:      1.0
Author:       Chris Foster
Author URI:   https://github.com/fostertime
License:      MIT License
*/
if (WP_ENV !== 'production' && !is_admin()) {
	add_action('pre_option_blog_public', '__return_zero');
}