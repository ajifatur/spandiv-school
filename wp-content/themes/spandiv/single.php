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

<?php if (in_category( 2 ) !== true) : ?>
<?php get_template_part('template-parts/hero'); ?>
<?php endif ?>

<?php if(have_posts()) : ?>

<!-- Content -->
<section class="section-content">
    <div class="container">
        <div class="row">
            <?php if (in_category( 2 ) !== true) : ?>
            <div class="col-lg-9 mb-4 mb-lg-0">
            <?php else: ?>
            <div class="col-lg-12 mb-4 mb-lg-0">
            <?php endif ?>

                <?php while(have_posts()) : the_post(); ?>

                    <div class="post-detail">
                        <?php if (in_category( 2 ) !== true) : ?>
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
                        <?php else: ?>
                            <div class="heading text-center mb-5 pb-5">
                                <h1>Spandiv Website Packs</h1>
                                <p>Kami memastikan bahwa setiap design yang kami buat adalah terbaik</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="<?= CFS()->get( 'image_1' ) ?>" class="img-popup" data-bs-toggle="tooltip" data-bs-placement="top" title="Klik untuk memperbesar">
                                        <div class="img-overlay">
                                            <img class="img-fluid img-large-1 shadow-sm rounded-2" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="thumbnail" style="background-image: url('<?= CFS()->get( 'image_1' ) ?>'); width: 100%; background-size: cover; background-position: top; background-repeat: no-repeat; height: 500px;">
                                            <div class="middle">
                                                <h1 class="mb-0" style="font-size: 3rem;"><i class="fad fa-search-plus"></i></h1>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-flex mt-3">
                                        <a href="<?= CFS()->get( 'link' ) ?>" class="btn btn-lg btn-primary rounded-3 w-100 me-md-2" target="_blank"><i class="fad fa-external-link"></i> Coba Langsung</a>
                                        <a class="btn btn-lg btn-secondary rounded-3 w-100 ms-md-2" href="https://wa.me/<?= do_shortcode('[a_phone]') ?>?text=<?= do_shortcode('[a_message]') ?> "><i class="fad fa-shopping-cart"></i> Pesan Sekarang</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h1><?= the_title() ?></h1>
                                    <div class="mt-3"><?= the_content() ?></div>
                                    <h5 class="fw-bold">Screenshot</h5>
                                    <div class="row">
                                        <?php for($i=1; $i<=5; $i++): ?>
                                            <?php if(CFS()->get( 'image_'.$i ) != ''): ?>
                                                <div class="col-md-3 mb-3"><img class="img-fluid img-thumbnail-5 shadow-sm rounded img-btn" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?= CFS()->get( 'image_'.$i ) ?>" alt="thumbnail" style="background-image: url('<?= CFS()->get( 'image_'.$i ) ?>'); width: 100%; background-size: cover; background-position: top; background-repeat: no-repeat; height: 150px;"></div>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                            <section class="section-cta">
                                <div class="text-white py-5">
                                    <div class="container py-5 text-center">
                                        <svg viewBox="0 0 300 322">
                                        <title>Colorful Shapes</title>
                                        <defs>
                                        <linearGradient id="gradient" gradientTransform="rotate(45)">
                                        <stop offset="5%" stop-color="rgba(233,244,255,1)"></stop>
                                        <stop offset="95%" stop-color="rgba(233,244,255,0)"></stop>
                                        </linearGradient>
                                        </defs>
                                        <path fill="url(#gradient)" d="M300,211.09V110.76c0-21.47-11.55-41.27-30.23-51.85L179.35,7.73c-18.21-10.31-40.48-10.31-58.69,0L30.23,58.91 C11.55,69.48,0,89.29,0,110.76v100.33c0,21.47,11.55,41.27,30.23,51.85l90.42,51.18c18.21,10.31,40.48,10.31,58.69,0l90.42-51.18 C288.45,252.36,300,232.55,300,211.09z"></path>
                                        </svg>
                                        <div class="achievement-container rounded-2 p-5 position-relative bg-primary-gradient shadow-w-s">
                                            <h1 class="fw-bold mb-4">Awali Kesuksesan Anda Bersama Spandiv</h1>
                                            <p class="mb-4">Kini tidak lagi sulit mewujudkan website impian. Performa hebat, keamanan ekstra, dan layanan dukungan teknis yang bisa diandalkan - semua dengan harga terjangkau!</p>
                                            <button class="btn btn-secondary rounded-3 px-4 py-2 fw-bold shadow" onclick="document.getElementById('website-instant-offer').scrollIntoView({behavior: 'smooth', block: 'start', inline: 'start'})">Mulai Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                            </section> 
                        <?php endif ?>
                    </div>

                <?php endwhile; ?>

                
                <?php if(comments_open() || get_comments_number()) comments_template(); ?>

            </div>

            <?php if (in_category( 2 )) : ?>
                <div class="col-lg-3 d-none">
                    <div class="card border-0 rounded-2 shadow-w-s sticky-top" style="top: 6rem;">
                        <div class="card-body py-5 text-center">
                            <?php $values = CFS()->get( 'category' );
                            foreach ( $values as $term_id ) {
                                $the_term = get_term($term_id); ?>
                                <p class="mb-0 fw-bold"><?= $the_term->name ?></p>
                            <?php } ?>
                            <h3 class="my-3">Rp <?= CFS()->get( 'price' ); ?></h3>
                            <div class="text-center">
                                <a class="btn btn-primary rounded-3 px-3 fw-bold" href="https://wa.me/<?= do_shortcode('[a_phone]') ?>?text=<?= do_shortcode('[a_message]') ?> ">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="col-lg-3">
                   <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
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
