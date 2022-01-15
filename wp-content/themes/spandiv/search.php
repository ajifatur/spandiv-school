<?php
/**
 * Template Name: Search
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>

<?php get_template_part('template-parts/hero'); ?>

<!-- Content -->
<section class="section-content">
    <div class="container">
        <div class="row">
            <!-- Posts -->
            <div class="col-lg-9 mb-4 mb-lg-0">
                <?php get_template_part('template-parts/posts-query'); ?>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>