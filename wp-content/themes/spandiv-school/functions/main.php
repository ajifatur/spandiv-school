<?php
/**
 * Main Functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */

class Spandiv {

    /**
     * Get posts by post type.
     * 
     * @param  string $post_type
     * @param  int    $posts_per_page
     * @return object $posts
     */
    public static function get_posts($post_type = 'post', $posts_per_page = -1) {
        // The query
        $query = new WP_Query([
            'post_type' => $post_type,
            'posts_per_page' => $posts_per_page,
        ]);

        // Loop posts if have posts
        $posts = [];
        if($query->have_posts()) {
            while($query->have_posts()) {
                $query->the_post();
                array_push($posts, get_post());
            }
        }

        // Reset
        wp_reset_postdata();

        // Return
        return $posts;
    }

    /**
     * Get categories by post type.
     * 
     * @param  string $post_type
     * @param  int    $posts_per_page
     * @return object $categories
     */
    public static function get_categories($post_type = 'post', $posts_per_page = -1) {
		// Set post type
		if($post_type == false) $post_type = 'post';
		
        // Get the category
        $category = '';
        $taxonomies = get_object_taxonomies($post_type);
        foreach($taxonomies as $taxonomy) {
            // Search taxonomy that has "category" word
            if(is_int(strpos($taxonomy, "category"))) {
                $category = $taxonomy;
            }
        }

        // Get categories
        $categories = get_categories([
            'taxonomy' => $category,
            'number' => $posts_per_page,
            'orderby' => 'count',
            'order' => 'DESC',
            // 'hide_empty' => 0,
        ]);

        // Return
        return $categories;
    }

    /**
     * Get post type name.
     * 
     * @return string $post_type_name
     */
    public static function get_post_type_name($post_type = null) {
        // Get post type object 
        $post_type_object = $post_type != null ? get_post_type_object($post_type) : get_post_type_object(get_post_type());

        // Set post type name
        $post_type_name = $post_type_object ? $post_type_object->labels->singular_name : get_the_title(get_option('page_for_posts'));
        $post_type_name = $post_type_object && $post_type_object->name == 'post' ? get_the_title(get_option('page_for_posts')) : $post_type_name;

        // Return
        return $post_type_name;
    }

    /**
     * Get post/page title.
     * 
     * @return string $title
     */
    public static function get_title() {
        $title = '';
        if(is_home() || is_page() || is_single())
            $title = single_post_title();
        elseif(is_category() || is_tax())
            $title = single_cat_title();
        elseif(is_tag())
            $title = 'Tag: '.single_tag_title('', false);
        elseif(is_author())
            $title = 'Author: '.get_the_author();
        elseif(is_post_type_archive())
            $title = self::get_post_type_name();
        elseif(is_search())
            $title = _e('Pencarian');
        elseif(is_404())
            $title = 'Error 404';

        // Return
        return $title;
    }

}

?>