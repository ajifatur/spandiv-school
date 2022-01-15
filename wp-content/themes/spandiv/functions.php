<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */

if (!function_exists('spandiv_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since spandiv 1.0
	 *
	 * @return void
	 */
	function spandiv_setup() {
        // Add theme support for some HTML5
        add_theme_support('html5', [
            'comment-form', 'comment-list'
        ]);

        // Add theme support for post thumbnails
        add_theme_support('post-thumbnails');
    }
}

add_action('after_setup_theme', 'spandiv_setup');

require_once "functions/products.php";
require_once "functions/products-home.php";