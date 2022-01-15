<?php
/**
 * Template Name: Page About
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>

<section class="section-content bg-primary-gradient pt-0">
    <div class="container about py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-6 text-center text-white">
                <h1 class="fw-bold">Let Meet The Minds<br>Behind Spandiv</h1>
                <p>Learn what defines us as a team, as a company, and check open positions if you want to be one of us!</p>
            </div>
        </div>
    </div>
</section>
<section class="section-our-mission">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="text-primary fw-bold text-uppercase">Our Mission</h5>
                <h1>Explore. Lead. Do.</h1>
                <p><?= do_shortcode('[a_about]') ?></p>
            </div>   
            <div class="col-lg-6"></div>
        </div>
    </div>          
</section>
<section class="section-our-value">
    <div class="container py-5">
        <div class="heading text-center mb-5">
            <h5 class="text-primary fw-bold text-uppercase">Our Values</h5>
            <h1>Growth Company</h1>
            <p>High-Growth Company With People First Culture</p>
        </div>
        <div class="row pt-5">
            <div class="col-lg-4 mb-5">
                <div class="card border-0 rounded-2 shadow-w-s">
                    <div class="card-body pt-0 text-center">
                        <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-w-s" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/thumbs-up.png" alt="icon" width="80"></div>
                        <h5 class="fw-bold">Commitment</h5>
                        <p>Kami berkomitmen untuk menjadi yang terbaik. Tidak ada tempat untuk upaya setengah hati.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 rounded-2 shadow-w-s">
                    <div class="card-body pt-0 text-center">
                        <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-w-s" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/growth.png" alt="icon" width="80"></div>
                        <h5 class="fw-bold">Add Value</h5>
                        <p>Kami membuat produk dan layanan yang menambah nilai dan bermanfaat bagi kehidupan orang.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 rounded-2 shadow-w-s">
                    <div class="card-body pt-0 text-center">
                        <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-w-s" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/deal.png" alt="icon" width="80"></div>
                        <h5 class="fw-bold">Mutual Respect</h5>
                        <p>Bekerja bersama dengan saling menghormati dan kemitraan dari semua perspektif dan pendekatan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 rounded-2 shadow-w-s">
                    <div class="card-body pt-0 text-center">
                        <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-w-s" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/layers.png" alt="icon" width="80"></div>
                        <h5 class="fw-bold">Professional</h5>
                        <p>Dengan etika tinggi baik secara pribadi maupun profesional setiap layanan yang kami sediakan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 rounded-2 shadow-w-s">
                    <div class="card-body pt-0 text-center">
                        <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-w-s" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/medal.png" alt="icon" width="80"></div>
                        <h5 class="fw-bold">Ultimate</h5>
                        <p>Tujuan kami adalah untuk melampaui harapan dengan menjunjung tinggi hubungan yang kuat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 rounded-2 shadow-w-s">
                    <div class="card-body pt-0 text-center">
                        <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-w-s" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/customer-service.png" alt="icon" width="80"></div>
                        <h5 class="fw-bold">Service Excellent</h5>
                        <p>Bangun kepercayaan dan kepercayaan di antara kami dengan memberikan layanan terbaik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-teams">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="fw-bold text-primary text-uppercase">Our Teams</h5>
                <h1>Meet Out Teams</h1>
                <p>The minds behind Spandiv</p>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-6">
                        <div class="card border-0 shadow-w-s rounded-2">
                            <div class="card-body pt-0 text-center">
                                <div class="bg-white w-fit mx-auto p-3 rounded-circle position-relative shadow-w-s" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/coder.png" alt="icon" width="80"></div>
                                <h5 class="fw-bold">Isna Prasetyo</h5>
                                <p>Front-End Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0 shadow-w-s rounded-2">
                            <div class="card-body pt-0 text-center">
                                <div class="bg-white w-fit mx-auto p-3 rounded-circle position-relative shadow-w-s" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/hacker.png" alt="icon" width="80"></div>
                                <h5 class="fw-bold">Faturahman Prasetyo Aji</h5>
                                <p>Backend-End Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>      
<section class="section-cta">
  <div class="bg-primary-gradient p-5">
    <div class="container">
      <div class="row text-white text-center justify-content-center">
        <div class="col-lg-9">
          <h1 class="fw-bold mb-4">Awali Kesuksesan Anda Bersama Spandiv</h1>
          <p class="mb-4">Kini tidak lagi sulit mewujudkan website impian. Performa hebat, keamanan ekstra, dan layanan dukungan teknis yang bisa diandalkan - semua dengan harga terjangkau!</p>
          <a class="btn btn-secondary rounded-3 px-4 py-2 fw-bold shadow" href="https://wa.me/<?= do_shortcode('[a_phone]') ?>?text=<?= do_shortcode('[a_message]') ?>" target="_blank">Mulai Sekarang</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>