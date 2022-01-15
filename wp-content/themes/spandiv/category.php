<?php
/**
 * Template Name: Category
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>


<?php 

$categories = get_the_category();
if (count($categories) > 0) {
    $category_id = $categories[0]->cat_ID;
} else {
    $category_id = null;
}

$this_cat = get_category($category_id);

?>

<?php if (property_exists($this_cat, 'parent') && $this_cat->parent == 2): ?>
    <?php get_template_part('template-parts/nav-product'); ?>
    <section class="section-content pt-5">
<?php else: ?>
    <?php get_template_part('template-parts/hero'); ?>
    <section class="section-content">
<?php endif ?>

    <div class="container">
        <div class="row">
            <?php if (property_exists($this_cat, 'parent') && $this_cat->parent == 2): ?>
                <div class="col-12 mb-4 mb-lg-0">
                    <?php get_template_part('template-parts/posts-query'); ?>
                </div>
            <?php else: ?>
                <div class="col-lg-9 mb-4 mb-lg-0">
                    <?php get_template_part('template-parts/posts-query'); ?>
                </div>
                <div class="col-lg-3">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>