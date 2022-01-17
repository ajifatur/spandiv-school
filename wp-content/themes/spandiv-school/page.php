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

<div class="container-xl py-5">
	<div class="row">
		<div class="col-lg-3 col-md-12">
			<?php $parent = get_post_parent(); ?>
			<?php $parent = $parent ?? get_post() ?>
			<?php $children = get_children(['post_parent' => $parent != null ? $parent->ID : get_the_ID(), 'post_type' => 'page']); ?>
			<?php if(count($children) > 0): ?>
				<h4><?= $parent->post_title ?></h4>
				<hr>
				<div class="list-group">
					<?php foreach($children as $child) : ?>
					<a href="<?= get_the_permalink($child->ID) ?>" class="list-group-item list-group-item-action <?= get_the_permalink($child->ID) == get_the_permalink(get_the_ID()) ? 'active' : '' ?>"><?= $child->post_title ?></a>
					<?php endforeach ?>
				</div>
			<?php endif ?>
		</div>
		<div class="col-lg-9 col-md-12">
			<h4><?= the_title() ?></h4>
			<hr>
			<?= the_content() ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
