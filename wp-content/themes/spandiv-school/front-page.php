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

<div class="my-5">
	<section>
		<div class="container">
			<div class="row justify-content-center">
				<?php foreach(Spandiv::get_posts('department') as $department) : ?>
				<div class="col-lg-3 mb-5">
					<div class="card h-100 rounded-3 text-center">
						<div class="card-body">
							<img src="<?= get_template_directory_uri() ?>/assets/images/icon/online-support.svg" alt="icon" width="80">
							<br>
							<a class="text-dark text-decoration-none" href="<?= get_permalink($department) ?>"><?= $department->post_title ?></a>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<?php $selayang_pandang = get_page_by_path('selayang-pandang'); ?>
					<?php if($selayang_pandang) : ?>
						<h4>Selayang Pandang</h4>
						<hr>
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
					<?php endif ?>
					<br>
					<h4>Galeri</h4>
					<hr>
					<div class="row">
						<?php foreach(Spandiv::get_posts('photo') as $photo) : ?>
						<div class="col-md-4">
							<figure>
								<div class="card">
									<a class="text-decoration-none text-body" href="https://akuntansionline.net/impulsive-buying-ini-cara-menghindarinya/" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Impulsive Buying: Ini Cara Menghindarinya!">
										<img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Generic" placeholder="image" style="background: url('https://akuntansionline.net/wp-content/uploads/2021/07/woman-3040029_1920-1024x683-1.jpg'); width: 100%; height: 200px; background-position: center; background-repeat: no-repeat; background-size: cover;">
									</a>
									<div class="card-body">
										<a href="https://akuntansionline.net/impulsive-buying-ini-cara-menghindarinya/" class="text-decoration-none text-body fw-bold">
											<p class="card-title text-truncate mb-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Impulsive Buying: Ini Cara Menghindarinya!"><?= $photo->post_title ?></p>
										</a>
										<!-- <a href="https://akuntansionline.net/category/Uncategorized"><p><span class="badge bg-primary"">Uncategorized</span></p></a> -->
										<small class="text-muted">
											<i class="far fa-calendar"></i> July 31, 2021 &bull;
											<i class="far fa-user"></i> By <a href="https://akuntansionline.net/author/kariena-sa/" title="Posts by Kariena SA" rel="author">Kariena SA</a>
										</small>
									</div>
								</div>
							</figure>
						</div>
						<?php endforeach ?>
					</div>
					<br>
					<h4>Video</h4>
					<hr>
					<div class="row">
						<?php foreach(Spandiv::get_posts('video') as $video) : ?>
						<div class="col-md-4">
							<figure>
								<div class="card">
									<a class="text-decoration-none text-body" href="https://akuntansionline.net/impulsive-buying-ini-cara-menghindarinya/" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Impulsive Buying: Ini Cara Menghindarinya!">
										<img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Generic" placeholder="image" style="background: url('https://akuntansionline.net/wp-content/uploads/2021/07/woman-3040029_1920-1024x683-1.jpg'); width: 100%; height: 200px; background-position: center; background-repeat: no-repeat; background-size: cover;">
									</a>
									<div class="card-body">
										<a href="https://akuntansionline.net/impulsive-buying-ini-cara-menghindarinya/" class="text-decoration-none text-body fw-bold">
											<p class="card-title text-truncate mb-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Impulsive Buying: Ini Cara Menghindarinya!"><?= $video->post_title ?></p>
										</a>
										<!-- <a href="https://akuntansionline.net/category/Uncategorized"><p><span class="badge bg-primary"">Uncategorized</span></p></a> -->
										<small class="text-muted">
											<i class="far fa-calendar"></i> July 31, 2021 &bull;
											<i class="far fa-user"></i> By <a href="https://akuntansionline.net/author/kariena-sa/" title="Posts by Kariena SA" rel="author">Kariena SA</a>
										</small>
									</div>
								</div>
							</figure>
						</div>
						<?php endforeach ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
				</div>
			</div>
		</div>
	</section>
	<section class="mt-4">
		<div class="container">
			<div class="row justify-content-center">
				<?php foreach(Spandiv::get_posts('link') as $link) : ?>
				<div class="col-lg-3 mb-5">
					<div class="card h-100 rounded-3 text-center">
						<div class="card-body">
							<img src="<?= get_template_directory_uri() ?>/assets/images/icon/online-support.svg" alt="icon" width="80">
							<br>
							<a class="text-dark text-decoration-none" href="<?= get_permalink($link) ?>"><?= $link->post_title ?></a>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
