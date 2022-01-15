<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */

?>
    <?php if (is_front_page() == true OR is_page('about')): ?>
        <footer class="bg-primary-gradient">
    <?php else: ?>
        <footer>
    <?php endif ?>
        <div class="footer-container">
            <div class="container py-5">
                <div class="d-flex justify-content-between">
                    <p class="mb-0 text-white small">Copyright ©2021 <span style="font-family: 'M PLUS Code Latin', sans-serif;">./Spandiv</span> | Bikin website murah hanya di Spandiv</p>
                    <a href="#" class="mb-0 text-white small">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.1/simple-lightbox.jquery.min.js" integrity="sha512-/KPL35RUhlitNiujTD78F6lyczxSeUrAsdPdEgkktIfmV28iY51t1oLOfAGB7fOnci6tntAwFdVpkAvlcXt89Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?= bloginfo('template_url') ?>/assets/js/pro.min.js"></script>
    <script src="<?= bloginfo('template_url') ?>/assets/js/app.js"></script>      
    <?php wp_footer(); ?>

</body>
</html>