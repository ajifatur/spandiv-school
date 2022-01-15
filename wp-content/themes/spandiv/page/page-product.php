<?php
/**
 * Template Name: Page Product
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>

<?php get_template_part('template-parts/nav-product'); ?>

<div id="spandiv">
    <section class="section-content pt-5">
        <div class="container">
            <div class="row">
                <?php do_shortcode('[d_products]') ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>