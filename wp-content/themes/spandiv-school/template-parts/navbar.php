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
            'container_id'      => 'navbar-spandiv',
            'menu_class'        => 'nav navbar-nav ms-auto mb-2 mb-lg-0 mt-3 mt-lg-0',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
  </div>
</nav>