<div class="section-product mb-0 pb-0 pt-5">
  <div class="container">
    <div class="heading text-center mb-5">
        <h1>Spandiv Website Packs</h1>
        <p>Kami memastikan bahwa setiap design yang kami buat adalah terbaik</p>
    </div>
    <div class="card shadow-w-s border-0 rounded-2">
      <div class="card-body">
        <ul class="nav nav-pills justify-content-center">
          <li class="nav-item">
            <a class="nav-link <?= is_page('product') ? 'active' : '' ?>" href="<?= home_url('product') ?>">Semua</a>
          </li>

          <?php
          // $taxonomyName = "category"; 
          // $parent_terms = get_terms( $taxonomyName, array('taxonomy' => 'category', 'parent' => 2, 'hide_empty' => 0, ) );   
          // foreach ( $parent_terms as $pterm ):
          // $term_link = get_term_link( $pterm ); ?>
<!--             <li class="nav-item">
              <a class="nav-link <?= is_category($pterm->name) ? 'active' : '' ?>" href="<?= $term_link ?>"><?= $pterm->name ?></a>
            </li> -->
          <?php //endforeach ?>

          <?php
            $categories = get_categories([
                'taxonomy' => 'product_category',
                'number' => 5,
                'orderby' => 'count',
                'order' => 'DESC',
                'hide_empty' => 0,
            ]);
            foreach ($categories as $category) :
          ?>
            <li class="nav-item">
              <a class="nav-link <?= is_category($category->name) ? 'active' : '' ?>" href="<?= get_category_link($category->term_id) ?>"><?= $category->cat_name ?></a>
            </li>
          <?php endforeach ?>

        </ul>
      </div>
    </div>
  </div>
</div>