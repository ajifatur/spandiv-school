<div class="row">

    <?php if(count(Spandiv::get_categories(get_post_type(), 5)) > 0) : ?>
    <div class="col-12 mb-4">
        <h4 class="mb-0"><?= _e('Kategori') ?></h4>
        <hr>
        <div class="list-group">
            <?php foreach(Spandiv::get_categories(get_post_type(), 5) as $category) : ?>
                <a href="<?= get_category_link($category->term_id) ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <?= $category->cat_name ?>
                    <span class="badge bg-primary rounded-pill"><?= $category->count ?></span>
                </a>
            <?php endforeach ?>
        </div>
    </div>
    <?php endif ?>

    <div class="col-12 mb-4">
        <h4 class="mb-0"><?= Spandiv::get_post_type_name() ?> Terbaru</h4>
        <hr>
        <?php foreach(Spandiv::get_posts(get_post_type(), 5) as $post) : ?>
        <div class="recent-post">
            <div class="flex-shrink-0">
                <a href="<?= get_permalink() ?>">
                    <?php if(has_post_thumbnail($post->ID)) : ?>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= get_the_post_thumbnail_url($post) ?>');">
                    <?php else : ?>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= bloginfo('template_url') ?>/assets/images/icons/thumbnail.png">
                    <?php endif ?>
                </a>
            </div>
            <div class="flex-grow-1 ms-3">
                <p class="mb-0"><a class="h6 link-dark text-decoration-none" href="<?= get_permalink() ?>"><?= get_the_title() ?></a></p>
                <p class="mb-0"><small class="text-muted"><i class="bi-calendar me-1"></i><?= get_the_date() ?></small></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php if(count(get_tags()) > 0 && get_post_type() == 'post') : ?>
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