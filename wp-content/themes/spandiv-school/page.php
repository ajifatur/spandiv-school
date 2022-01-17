<?php
/**
 * Template Name: Page
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>

<?php get_template_part('template-parts/hero'); ?>

<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mb-4 mb-lg-0">
				<?= the_content() ?>
            </div>
            <div class="col-lg-3">
				<?php $parent = get_post_parent(); ?>
				<?php $parent = $parent ?? get_post() ?>
				<?php $children = get_children(['post_parent' => $parent != null ? $parent->ID : get_the_ID(), 'post_type' => 'page']); ?>
				<?php if(count($children) > 0): ?>
					<h4><?= $parent->post_title ?></h4>
					<div class="list-group">
						<a href="<?= get_the_permalink($parent->ID) ?>" class="list-group-item list-group-item-action <?= get_the_permalink($parent->ID) == get_the_permalink(get_the_ID()) ? 'active' : '' ?>"><?= $parent->post_title ?></a>
						<?php foreach($children as $child) : ?>
						<a href="<?= get_the_permalink($child->ID) ?>" class="list-group-item list-group-item-action <?= get_the_permalink($child->ID) == get_the_permalink(get_the_ID()) ? 'active' : '' ?>"><?= $child->post_title ?></a>
						<?php endforeach ?>
					</div>
				<?php endif ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
