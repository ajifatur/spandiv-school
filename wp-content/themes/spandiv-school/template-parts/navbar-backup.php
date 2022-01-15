<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-w-s py-lg-3">
  <div class="container">
    <a class="navbar-brand text-center" href="<?= home_url() ?>">
      <span class="n-top d-block">./Spandiv</span>
      <span class="n-bottom d-block">Ehe</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-spandiv" aria-controls="navbar-spandiv" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	  <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav mx-auto mb-2 mb-lg-0 mt-3 mt-lg-0',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    <div class="collapse navbar-collapse d-none" id="navbar-spandiv">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active" href="<?= home_url() ?>">
            <?= get_the_title(get_option('page_on_front')) ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= get_permalink(get_page_by_path('profil')) ?>"><?= get_the_title(get_page_by_path('profil')) ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= get_post_type_archive_link('department') ?>"><?= Spandiv::get_post_type_name('department') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= get_page_link(get_option('page_for_posts')) ?>">
            <?= get_the_title(get_option('page_for_posts')) ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= get_post_type_archive_link('photo') ?>"><?= Spandiv::get_post_type_name('photo') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= get_post_type_archive_link('video') ?>"><?= Spandiv::get_post_type_name('video') ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>