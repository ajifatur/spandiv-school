<div class="row">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <article class="col-md-6 col-lg-4 mb-3">
                <div class="card shadow-sm bg-light border-0 rounded-1 h-100">
                    <a href="<?= the_permalink() ?>">
                        <?php if(has_post_thumbnail()) : ?>
                            <img class="card-img-top shadow rounded-2" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= the_post_thumbnail_url() ?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                        <?php else : ?>
                            <img class="card-img-top shadow rounded-2" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= bloginfo('template_url') ?>/assets/images/icon/thumbnail.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                        <?php endif ?>
                    </a>
                    <div class="card-body">
                        <p class="fw-bold mb-0"><a class="link-dark text-decoration-none" href="<?= the_permalink() ?>"><?= the_title() ?></a></p>
                        <small class="text-muted"><?= get_the_date() ?></small>
                        <p class="mb-0">
                            <?php foreach(get_the_category() as $category) : ?>
                                <a href="<?= get_category_link($category->term_id) ?>"><span class="badge bg-primary"><?= $category->cat_name ?></span></a>
                            <?php endforeach ?>
                        </p>
                    </div>
                </div>
            </article>
        <?php endwhile ?>
    <?php endif ?>
</div>