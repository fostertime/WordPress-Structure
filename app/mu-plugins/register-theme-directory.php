<?php
/*
Plugin Name: Register Theme Directory
Plugin URI: https://github.com/markjaquith
Description: Registers the standard WordPress theme directory under /wp-content/themes/ for WordPress bundled theme activations.
Version: 1.0
Author: Mark Jaquith
Author URI: https://github.com/markjaquith
*/
register_theme_directory( ABSPATH . 'wp-content/themes/' );
