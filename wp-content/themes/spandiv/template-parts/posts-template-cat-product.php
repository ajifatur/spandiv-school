<article class="col-xxl-3 col-lg-4 col-md-6 mb-4">
    <div class="card border-0 shadow-s rounded-2">
        <a href="<?= the_permalink(); ?>">
            <?php if(has_post_thumbnail()) : ?>
                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= the_post_thumbnail_url() ?>'); background-repeat: no-repeat; height: 200px; width: 100%; background-size:cover; border-radius: 1rem 1rem 0 0;">
            <?php else : ?>
                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= bloginfo('template_url') ?>/assets/images/icons/thumbnail.png'); background-repeat: no-repeat; height: 200px; width: 100%; background-size:cover; border-radius: 1rem 1rem 0 0;">
            <?php endif; ?>
        </a>
        <div class="card-body">
            <div class="row">
                <div class="col text-start">
                    <p class="mb-0 fw-bold text-truncate"><?php the_title(); ?></p>
                    <span>
                        <?php $values = CFS()->get( 'category' );
                        foreach ( $values as $term_id ) {
                            $the_term = get_term($term_id); ?>
                            <p class="mb-0 text-muted"><?= $the_term->name ?></p>
                        <?php } ?>
                        <h4 class="mb-0 fw-bold text-primary">Rp <?= CFS()->get( 'price' ); ?></h4>
                    </span>
                </div>
            </div>
        <hr>
        <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '...');?></p>
        <div class="text-center">
            <a class="btn btn-primary-s fw-bold rounded-3 px-4 mb-3" href="<?php the_permalink() ?>" rel="bookmark">Lihat Lebih Lanjut</a>
            <a class="btn btn-primary fw-bold rounded-3 px-4" href="https://wa.me/<?= do_shortcode('[a_phone]') ?>?text=Halo Saya mau pesan website seperti <?= the_title() ?>">Pesan Sekarang</a>
        </div>
        </div>
    </div>
</article>