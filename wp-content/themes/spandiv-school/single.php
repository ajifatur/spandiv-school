<?php
/**
 * Template Name: Single Post
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>

<?php if(have_posts()) : ?>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mb-4 mb-lg-0">

                <?php while(have_posts()) : the_post(); ?>

                    <div class="post-detail">
                        <div>
                            <?php if(has_post_thumbnail()) : ?>
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="rounded-1" style="background-image: url('<?= the_post_thumbnail_url() ?>'); width: 100%; background-size: cover; background-repeat: no-repeat; max-height: 400px;">
                            <?php else : ?>
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="rounded-1" style="background-image: url('<?= bloginfo('template_url') ?>/assets/images/icon/thumbnail.png');; width: 100%; background-size: cover; background-repeat: no-repeat; max-height: 400px;">
                            <?php endif; ?>
                            <div class="mt-3"><?= the_content() ?></div>
                            <?php $post_tags = get_the_terms(get_the_ID(), 'post_tag'); if($post_tags) : ?>
                                <hr>
                                <div>
                                    <?php foreach($post_tags as $tag): ?>
                                    <a href="<?= get_tag_link($tag) ?>"><span class="badge bg-primary">#<?= $tag->name ?></span></a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>

                
                <?php if(comments_open() || get_comments_number()) comments_template(); ?>

            </div>

            <div class="col-lg-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>

<script>
    $(document).on("click", ".img-btn", function(e) {
        e.preventDefault();
        var img = $(this).data('src');
        $(".img-popup").attr("href", img);
        // $(".img-popup .img-large-1").attr("src", img);
        $(".img-popup .img-large-1").css("background-image", 'url('+ img +')');
    });
</script>
