<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-w-s py-lg-3">
  <div class="container">
    <a class="navbar-brand text-center" href="<?= home_url() ?>">
      <span class="n-top d-block">./Spandiv</span>
      <span class="n-bottom d-block">Software Solutions</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-spandiv" aria-controls="navbar-spandiv" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-spandiv">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?= home_url() ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= home_url('product') ?>">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= home_url('about') ?>">Tentang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Acara
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item d-flex align-items-center" href="<?= home_url('promo') ?>">
              <div class="icon-wrap"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/price-tag.svg" alt="icon" width="35"></div>
              <div>
                <p class="fw-bold">Promo & Diskon Spesial</p>
                <p class="text-muted small">Promo spesial hosting & domain</p>
              </div>
            </a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="<?= home_url('event') ?>">
              <div class="icon-wrap"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/calendar.svg" alt="icon" width="35"></div>
              <div>
                <p class="fw-bold">Spandiv Event</p>
                <p class="text-muted small">Insight terhangat oleh para pakar</p>
              </div>
            </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item d-flex align-items-center" href="<?= home_url('blog') ?>">
              <div class="icon-wrap"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/newspaper.svg" alt="icon" width="35"></div>
              <div>
                <p class="fw-bold">Blog</p>
                <p class="text-muted small">Tips & trik menarik dari Spandiv</p>
              </div>
            </a></li>
          </ul>
        </li>
      </ul>
      <a class="btn btn-primary rounded-3 px-3 fw-bold" href="https://wa.me/<?= do_shortcode('[a_phone]') ?>?text=<?= do_shortcode('[a_message]') ?>" target="_blank">Pesan Sekarang</a>
    </div>
  </div>
</nav>