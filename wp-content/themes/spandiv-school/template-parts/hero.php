<section class="section-heroo" style="background: url('<?= get_template_directory_uri() ?>/assets/images/backgrounds/bg-3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center">
    <div style="background-color: rgba(0, 14, 56, .7);">
        <div style="height: 70px" class=""></div>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center text-center px-3 py-4 bg-white rounded-1 shadow position-relative" style="bottom: -50px">
                <div>
                    <h1><?= Spandiv::get_title() ?></h1>
                    <?php if(is_search()) : ?>
                        <p>Menampilkan pencarian dengan kata kunci: <strong><?= get_search_query() ?></strong></p>
                    <?php else : ?>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= home_url() ?>"><?= get_the_title(get_option('page_on_front')) ?></a></li>
                                <?php if(is_single() || (is_archive() && !is_post_type_archive())) : ?>
                                    <li class="breadcrumb-item"><a href="<?= get_post_type_archive_link(get_post_type()) ?>"><?= Spandiv::get_post_type_name() ?></a></li>
                                <?php endif; ?>
                                <li class="breadcrumb-item active" aria-current="page"><?= Spandiv::get_title() ?></li>
                            </ol>
                        </nav>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>