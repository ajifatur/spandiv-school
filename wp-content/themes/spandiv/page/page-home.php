<?php
/**
 * Template Name: Page Home
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>

<div id="app">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJ87R83"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
    
    <section class="section-socialmedia">
      <div class="container">
        <div class="wrapper d-flex py-4 px-5 shadow bg-white w-fit rounded-2 float-end position-relative" style="top: -2rem;">
          <p class="fw-bold me-3 mb-0">Facebook</p>
          <p class="fw-bold me-3 mb-0">Instagram</p>
          <p class="fw-bold me-3 mb-0">Github</p>
          <p class="fw-bold mb-0">Dribbble</p>
        </div>
      </div>
    </section>
    
    <section class="section-info">
      <div class="container">
        <div class="row">
          <div class="col-lg-6"></div>
          <div class="col-lg-6">
            <h1 class="fw-bold">Bebas dan Fleksibel Bikin Website di Spandiv!</h1>
            <p>Bangun website berkualitas tinggi untuk segala kebutuhan online Anda. Baik untuk mempromosikan bisnis, memamerkan karya, membuka toko, atau memulai blog. Mulai kesuksesan online Anda melalui layanan Bikin Website dari Spandiv dengan berbagai pilihan tema siap pakai.</p>
            <button class="btn btn-secondary rounded-3 px-4 py-2 fw-bold shadow" href="#section-product" onclick="document.getElementById('website-instant-offer').scrollIntoView({behavior: 'smooth', block: 'start', inline: 'start'})">Mulai Sekarang</button>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section-product" id="section-product">
      <div class="container">
        <h1 class="fw-bold text-center">Pilihan Paket Bikin Website</h1>
        <div class="card shadow-w-s border-0 my-5 rounded-2">
          <div class="card-body">
            <ul class="nav nav-pills justify-content-center">

              <?php
              $taxonomyName = "category"; 
              $parent_terms = get_terms( $taxonomyName, array('taxonomy' => 'category', 'parent' => 2, 'hide_empty' => 0, ) );   
              foreach ( $parent_terms as $pterm ):
              $term_link = get_term_link( $pterm ); ?>
                <li class="nav-item">
                  <a class="nav-link text-body" href="<?= $term_link ?>"><?= $pterm->name ?></a>
                </li>
              <?php endforeach ?>

              <li class="nav-item">
                <a class="btn btn-primary rounded-3 px-3" href="<?= home_url('product') ?>">Lihat Semua</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="products">
          <div class="row">
            <?php do_shortcode('[d_products]') ?> 
        </div>        
      </div>
    </section>   
    
    <section class="section-survey d-none">
      <div class="container bg-primary-gradient rounded-3">
        <div class="row text-white p-5">
          <div class="col-lg-6">
            <h1 class="fw-bold">Belum Menemukan Tema Website yang Anda Inginkan?</h1>
            <p>Bantu kami untuk melengkapi koleksi Tema dari Web Instant kami melalui form berikut ini.</p>
            <button class="btn btn-secondary rounded-3 px-4 py-2 fw-bold shadow">Ikuti Survey</button>
          </div>
          <div class="col-lg-6"></div>
        </div>
      </div>
    </section>
    
    <section class="section-tutorial d-none">
      <div class="bg-primary-s py-5">
        <div class="container">
          <h1 class="fw-bold text-center">Langkah Mudah Membuat Website</h1>
          <ul class="nav nav-pills justify-content-center bg-secondary-s w-fit my-5 p-3 mx-auto rounded-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link px-5 rounded-3 fw-bold active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Website Instan</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link px-5 rounded-3 fw-bold" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Jasa Pembuatan Website</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <h1>Comingsoon</h1>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="text-center">
                <h1>Comingsoon</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section-fitur">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-9">
            <h1 class="fw-bold text-center mb-4">Fitur Terbaik untuk Mendukung Pembuatan Website dengan Tampilan Profesional</h1>
            <p class="text-center">Nikmati fitur terbaik & terlengkap untuk membuat website Anda sendiri di Spandiv. Temukan juga berbagai pilihan tema website yang dapat disesuaikan dengan kebutuhan bisnis Anda.</p>
          </div>
        </div>  
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card rounded-2">
              <div class="card-body">
                <i class="text-primary fad fa-server h1"></i>
                <h5 class="fw-bold my-3">Gratis Hosting & Domain</h5>
                <p>Website langsung siap pakai, paket pembuatan website sudah termasuk gratis layanan hosting & domain.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card rounded-2">
              <div class="card-body">
                <i class="text-primary fad fa-shield-check h1"></i>
                <h5 class="fw-bold my-3">Gratis SSL Unlimited</h5>
                <p>Dapatkan sertifikat SSL dengan durasi unlimited untuk meningkatkan keamanan & kredibilitas website Anda.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card rounded-2">
              <div class="card-body">
                <i class="text-primary fad fa-envelope-open-text h1"></i>
                <h5 class="fw-bold my-3">Integrasi Email Profesional</h5>
                <p>Anda dapat menggunakan email profesional seperti nama@website.com dan tambah akun dengan Mail Hosting.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card rounded-2">
              <div class="card-body">
                <i class="text-primary fad fa-phone-laptop h1"></i>
                <h5 class="fw-bold my-3">Mobile Optimized</h5>
                <p>Website dapat diakses secara optimal melalui berbagai jenis perangkat. Tampilan website jadi lebih maksimal.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card rounded-2">
              <div class="card-body">
                <i class="text-primary fad fa-file-search h1"></i>
                <h5 class="fw-bold my-3">SEO-Friendly</h5>
                <p>Anda dapat membuat website Anda berada di peringkat atas Google karena dirancang khusus untuk ramah SEO.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card rounded-2">
              <div class="card-body">
                <i class="text-primary fad fa-box-heart h1"></i>
                <h5 class="fw-bold my-3">Layanan Support</h5>
                <p>Website yang Anda pilih telah memiliki tutorial dan dukungan teknis untuk pengelolaan lebih mudah dan lancar.</p>
              </div>
            </div>
          </div>
        </div>  
      </div>  
    </section>
    
    <section class="section-mengapa">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h1 class="text-center fw-bold mb-4">Mengapa Membuat Website di Spandiv?</h1>
            <p class="text-center mb-5 pb-4">Dapatkan lebih banyak kebebasan mengelola website yang Anda buat sendiri dengan fitur terlengkap dan terintegrasi saat Buat Website di Spandiv. Mulai kesuksesan online Anda sekarang juga!</p>
          </div>
          <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch mb-5">
              <div class="card rounded-3 text-center border-0">
                <div class="card-body pt-0">
                  <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-sm" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/online-support.svg" alt="icon" width="80"></div>
                  <div>
                    <h5 class="fw-bold">Support 24/7</h5>
                    <p class="mb-0">Website online tanpa rasa khawatir. Hubungi bantuan teknis 24 jam di mana saja dan kapan saja secara real-time!</p>
                  </div>
                </div>
              </div>
            </div>  
            <div class="col-lg-4 d-flex align-items-stretch mb-5">
              <div class="card rounded-3 text-center border-0">
                <div class="card-body pt-0">
                  <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-sm" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/backup.svg" alt="icon" width="80"></div>
                  <div>
                    <h5 class="fw-bold">Fully Managed Service</h5>
                    <p class="mb-0">Didukung dengan server yang kuat & aman, sumber daya besar dan berbagai fitur optimasi: auto-backup, auto-patch, & auto-installer.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-5">
              <div class="card rounded-3 text-center border-0">
                <div class="card-body pt-0">
                  <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-sm" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/rating.svg" alt="icon" width="80"></div>
                  <div>
                    <h5 class="fw-bold">Buat dan Kelola Website dengan Mudah</h5>
                    <p class="mb-0">Tersedia berbagai pilihan tema siap pakai dan bantuan dari tim Spandiv untuk membantu pengelolaan website, bahkan untuk pemula.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-5">
              <div class="card rounded-3 text-center border-0">
                <div class="card-body pt-0">
                  <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-sm" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/speed.svg" alt="icon" width="80"></div>
                  <div>
                    <h5 class="fw-bold">WordPress Optimized</h5>
                    <p class="mb-0">Tersedia WP Management untuk membantu pengelolaan website dengan fitur unggulan dari WordPress, seperti WP Accelerator.</p>
                  </div>
                </div>
              </div>
            </div>  
            <div class="col-lg-4 d-flex align-items-stretch mb-5">
              <div class="card rounded-3 text-center border-0">
                <div class="card-body pt-0">
                  <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-sm" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/bug.svg" alt="icon" width="80"></div>
                  <div>
                    <h5 class="fw-bold">Website Aman dari Malware dan Hacker</h5>
                    <p class="mb-0">Sistem keamanan terbaik menggunakan Imunify360 akan melindungi website Anda dari serangan DDoS dan Malware.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-5">
              <div class="card rounded-3 text-center border-0">
                <div class="card-body pt-0">
                  <div class="bg-white w-fit mx-auto p-3 rounded-3 position-relative shadow-sm" style="top: -2rem"><img src="<?= get_template_directory_uri() ?>/assets/images/icon/maintenance.svg" alt="icon" width="80"></div>
                  <div>
                    <h5 class="fw-bold">cPanel</h5>
                    <p class="mb-0">Dukungan panel kontrol terbaik dan terlengkap di dunia menjamin kemudahan pengelolaan website Anda.</p>
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
