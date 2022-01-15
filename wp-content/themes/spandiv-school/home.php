<?php
/**
 * Template Name: Blog
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>

<?php if(!is_front_page()) : get_template_part('template-parts/hero'); endif; ?>

<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mb-4 mb-lg-0">
                <?php get_template_part('template-parts/posts'); ?>
            </div>
            <div class="col-lg-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>