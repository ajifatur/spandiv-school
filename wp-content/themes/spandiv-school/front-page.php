<?php
/**
 * Template Name: Front Page
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>

<div id="app">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJ87R83" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <section class="section-hero">
      <div class="wrapper h-100 text-white">
        <div class="container h-100">
          <div class="row align-items-center h-100">
            <div class="col-lg-6">
              <h1 class="fw-bold">Praktis Bikin Website Bisnis dengan Fitur Lengkap</h1>
              <p>Temukan lebih banyak kebebasan untuk membuat, mendesain, mengelola, dan mengembangkan website persis seperti yang Anda inginkan. Langsung siap pakai!</p>
              <button class="btn btn-secondary rounded-3 px-4 py-2 fw-bold shadow" onclick="document.getElementById('website-instant-offer').scrollIntoView({behavior: 'smooth', block: 'start', inline: 'start'})">Lihat Penawaran</button>
            </div>
            <div class="col-lg-6"></div>
          </div>
        </div>
      </div>
    </section>
	
	<section>
		<?= do_shortcode('[logoshowcase cat_id="21" center_mode="true" slides_column="1"]') ?>
	</section>
    
    <section class="section-mengapa">
      <div class="container">
        <div class="row justify-content-center">
          <div class="row">
            <?php foreach(Spandiv::get_posts('department') as $department) : ?>
            <div class="col-lg-3 d-flex align-items-stretch mb-5">
              <div class="card rounded-3 text-center border-0">
                <div class="card-body pt-0">
                  <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-sm" style="top: -2rem">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/icon/online-support.svg" alt="icon" width="80">
                  </div>
                  <div>
                    <h5 class="fw-bold">
                      <a class="text-dark text-decoration-none" href="<?= get_permalink($department) ?>"><?= $department->post_title ?></a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </section>

    <section class="section-mengapa">
      <div class="container">
        <div class="row justify-content-center">
          <div class="row">
            <?php foreach(Spandiv::get_posts('link') as $link) : ?>
            <div class="col-lg-3 d-flex align-items-stretch mb-5">
              <div class="card rounded-3 text-center border-0">
                <div class="card-body pt-0">
                  <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-sm" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/online-support.svg" alt="icon" width="80"></div>
                  <div>
                    <h5 class="fw-bold">
                      <a class="text-dark text-decoration-none" href="<?= get_permalink($link) ?>"><?= $link->post_title ?></a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </section>
	
	<?php $selayang_pandang = get_page_by_path('selayang-pandang'); ?>
	<?php if($selayang_pandang) : ?>
	<section>
		<div class="container p-3">
			<h3>Selayang Pandang</h3>
			<div class="d-flex">
				<div class="flex-shrink-0">
					<?php if(get_the_post_thumbnail_url($selayang_pandang)) : ?>
					<img class="card-img-top shadow rounded-2" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= get_the_post_thumbnail_url($selayang_pandang) ?>'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 100px;">
					<?php else : ?>
					<img class="card-img-top shadow rounded-2" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= bloginfo('template_url') ?>/assets/images/icon/thumbnail.png'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 100px;">
					<?php endif ?>
				</div>
				<div class="flex-grow-1 ms-3">
					<p><?= $selayang_pandang->post_excerpt ?></p>
					<a class="btn btn-primary" href="<?= get_permalink($selayang_pandang) ?>">Selengkapnya</a>
				</div>
			</div>
		</div>
	</section>
	<?php endif ?>
    
    <section class="section-cta">
      <div class="bg-primary-gradient p-5">
        <div class="container">
          <div class="row text-white text-center justify-content-center">
            <div class="col-lg-9">
              <h1 class="fw-bold mb-4">Awali Kesuksesan Anda Bersama Spandiv</h1>
              <p class="mb-4">Kini tidak lagi sulit mewujudkan website impian. Performa hebat, keamanan ekstra, dan layanan dukungan teknis yang bisa diandalkan - semua dengan harga terjangkau!</p>
              <button class="btn btn-secondary rounded-3 px-4 py-2 fw-bold shadow" onclick="document.getElementById('website-instant-offer').scrollIntoView({behavior: 'smooth', block: 'start', inline: 'start'})">Mulai Sekarang</button>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<style>
  
</style>
<?php get_footer(); ?>
