<div class="row">

    <?php if(have_posts()) : ?>

        <?php while(have_posts()) : the_post(); ?>

            <?php $post = $wp_query->post; // Catch post ?>

            <!-- filter by parent category -->
            <?php $categories = get_the_category();
            if (count($categories) > 0) {
                $category_id = $categories[0]->cat_ID;
            } else {
                $category_id = null;
            }
            $this_cat = get_category($category_id); ?>

            <?php if (is_home() !== true ): ?>
                <?php if ($cat !== get_cat_ID('product')): ?>
                    <?php if (property_exists($this_cat, 'parent') && $this_cat->parent == 2): ?>
                        <?php require "posts-template-cat-product.php" ?>
                    <?php else: ?>
                        <?php require "posts-template.php" ?>
                    <?php endif ?>
                <?php else: ?>
                    <?php do_shortcode('[d_products]') ?>
                <?php endif ?>
            <?php else: ?>
                <!-- filter by category -->
                <?php $categories = get_the_category(); foreach($categories as $category) : ?>
                <?php $cat = $category->cat_ID; ?>
                <?php if (property_exists($this_cat, 'parent') && $this_cat->parent !== 2 && $cat !== get_cat_ID('promo') && $cat !== get_cat_ID('event')): ?>
                    <?php require "posts-template.php" ?>
                <?php endif ?>
                <?php endforeach ?>
            <?php endif ?>

        <?php endwhile; ?>

    <?php the_posts_pagination(); ?>

    <?php else : ?>

        <div class="col-12 mb-3">
            <div class="alert alert-danger">Tidak ada.</div>
        </div>

    <?php endif; ?>

</div>