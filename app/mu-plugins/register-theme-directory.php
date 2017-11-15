<?php
/*
Plugin Name:  Register Theme Directory
Plugin URI:   https://github.com/fostertime/WordPress-Structure
Description:  Registers the standard WordPress theme directory under /wp-content/themes/ so bundled WordPress themes can be activated.
Version:      1.0
Author:       Chris Foster
Author URI:   https://github.com/fostertime
License:      MIT License
*/
if (!defined('WP_DEFAULT_THEME')) {
	register_theme_directory(ABSPATH . 'wp-content/themes');
}
