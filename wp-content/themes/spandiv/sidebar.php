<?php
    // Get post type name
    $post_type = get_post_type_object(get_post_type());
    $post_type_name = $post_type ? $post_type->labels->singular_name : '';
    $post_type_name = get_post_type() == 'post' ? 'Blog' : $post_type_name;

    // Get category taxonomy by post type
    $category_taxonomy = '';
    $taxonomies = get_object_taxonomies(get_post_type());
    foreach($taxonomies as $taxonomy) {
        // Search taxonomy that has "category" word
        if(is_int(strpos($taxonomy, "category"))) {
            $category_taxonomy = $taxonomy;
        }
    }
?>

<div class="row">

    <?php
        $categories = get_categories([
                        'taxonomy' => $category_taxonomy,
                        'number' => 5,
                        'orderby' => 'count',
                        'order' => 'DESC',
                        // 'hide_empty' => 0,
                    ]);
    ?>
    <?php if(count($categories) > 0) : ?>
    <div class="col-12 mb-4">
        <h4 class="mb-0"><?= _e('Kategori') ?></h4>
        <hr>
        <div class="list-group">
            <?php foreach($categories as $category) : ?>
                <a href="<?= get_category_link($category->term_id) ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <?= $category->cat_name ?>
                    <span class="badge bg-primary rounded-pill"><?= $category->count ?></span>
                </a>
            <?php endforeach ?>
        </div>
    </div>
    <?php endif ?>

    <div class="col-12 mb-4">
        <h4 class="mb-0"><?= $post_type_name ?> Terbaru</h4>
        <hr>
        <?php
            $recent_posts_query = new WP_Query([
                'post_type' => get_post_type(),
                'posts_per_page' => 5
            ]);
            if($recent_posts_query->have_posts()) : 
                while($recent_posts_query->have_posts()) :
                    $recent_posts_query->the_post();
        ?>
            <div class="recent-post">
                <div class="flex-shrink-0">
                    <a href="<?= get_permalink() ?>">
                        <?php if(has_post_thumbnail(get_the_ID())) : ?>
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID()) ?>');">
                        <?php else : ?>
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= bloginfo('template_url') ?>/assets/images/icons/thumbnail.png">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="flex-grow-1 ms-3">
                    <p class="mb-0"><a class="h6 link-dark text-decoration-none" href="<?= get_permalink(get_the_ID()) ?>"><?= get_the_title() ?></a></p>
                    <p class="mb-0"><small class="text-muted"><i class="bi-calendar me-1"></i><?= date('d/m/Y', strtotime(get_the_date('Y-m-d'))) ?></small></p>
                </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
            endif;
        ?>
    </div>

    <?php
        $tags = get_tags();
        if(count(get_tags()) > 0) :
    ?>
    <div class="col-12 mb-4">
        <h4 class="mb-0"><?= _e('Tag') ?></h4>
        <hr>
        <p>
            <?php foreach(get_tags() as $tag): ?>
            <a href="<?= get_tag_link($tag) ?>"><span class="badge bg-primary">#<?= $tag->name ?></span></a>
            <?php endforeach; ?>
        </p>
    </div>
    <?php endif ?>

</div>