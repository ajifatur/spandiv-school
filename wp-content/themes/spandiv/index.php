<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>

<?php if(!is_front_page()) : get_template_part('template-parts/hero'); endif; ?>

<?php if(have_posts()) : ?>

    <?php while (have_posts()) :
        the_post(); ?>
    	<div class="container py-5 my-4 my-md-5"><?= the_content(); ?></div>
	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

