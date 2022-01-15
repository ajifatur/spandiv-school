<?php
    // Get post type name
    $post_type = get_post_type_object(get_post_type());
    $post_type_name = $post_type ? $post_type->labels->singular_name : '';
    $post_type_name = get_post_type() == 'post' ? 'Blog' : $post_type_name;
?>

<section class="section-heroo" style="background: url('<?php echo get_template_directory_uri() ?>/assets/images/backgrounds/bg-3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center">
    <div style="background-color: rgba(0, 14, 56, .7);">
        <div style="height: 70px" class=""></div>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center text-center px-3 py-4 bg-white rounded-1 shadow position-relative" style="bottom: -50px">
                <div>
                    <?php if(is_home() || is_page() || is_single()) : ?>
                        <h1><?= single_post_title() ?></h1>
                    <?php elseif(is_category() || is_tax()) : ?>
                        <h1><?= single_cat_title() ?></h1>
                    <?php elseif(is_tag()) : ?>
                        <h1><?= single_tag_title() ?></h1>
                    <?php elseif(is_author()) : ?>
                        <h1><?= get_the_author() ?></h1>
                    <?php elseif(is_post_type_archive()) : ?>
                        <h1><?= $post_type_name ?></h1>
                    <?php elseif(is_search()) : ?>
                        <h1><?= _e('Pencarian') ?></h1>
                    <?php endif; ?>
                    
                    <?php if(is_search()) : ?>
                        <p>Menampilkan pencarian dengan kata kunci: <strong><?= get_search_query() ?></strong></p>
                    <?php else : ?>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= home_url() ?>">Beranda</a></li>
                                <?php if(is_single() || is_tax()) : ?>
                                    <li class="breadcrumb-item"><a href="<?= get_post_type_archive_link(get_post_type()) ?>"><?= $post_type_name ?></a></li>
                                <?php endif; ?>
                                <?php if(is_home() || is_page() || is_single()) : ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?= single_post_title() ?></li>
                                <?php elseif(is_category() || is_tax()) : ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?= single_cat_title() ?></li>
                                <?php elseif(is_tag()) : ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?= single_tag_title() ?></li>
                                <?php elseif(is_author()) : ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?= get_the_author() ?></li>
                                <?php elseif(is_post_type_archive()) : ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $post_type_name ?></li>
                                <?php endif; ?>
                            </ol>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>