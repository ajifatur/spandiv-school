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

// Theme setup
if(!function_exists('spandiv_setup')) {
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
		
		// Add post type support for page
		add_post_type_support('page', 'excerpt');
    }
	add_action('after_setup_theme', 'spandiv_setup');
}

// Search filter
if(!function_exists('spandiv_search_filter')) {
	function spandiv_search_filter($query) {
		if($query->is_search) {
			$query->set('post_type', 'post');
		}
		return $query;
	}
	add_filter('pre_get_posts', 'spandiv_search_filter');
}

require_once "functions/main.php";

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/* Navigation Menus */
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'spandiv-school' ),
) );
// filter for bootstrap 5
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}