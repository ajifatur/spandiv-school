<div style="background: url(https://www.transparenttextures.com/patterns/skulls.png)">
	<div class="container py-3">
		<div class="row align-items-center">
			<div class="col-2 text-center logo-left">
				<img width="80" class="logo-left-1" src="https://smkn1mandiraja.sch.id/assets/images/logo/1603636884-logo.png">
				<br>
				<img width="100" src="https://smkn1mandiraja.sch.id/assets/images/logo/logosmartpro.png">
			</div>
			<div class="col-8 text-center logo-center">
				<h4 class="font-weight-bold m-0 mb-1 logo-center-1 text-uppercase"><?= bloginfo('name') ?></h4>
				<p class="m-0 font-weight-bold text-uppercase logo-center-2"><?= bloginfo('description') ?></p>
				<p class="m-0 logo-center-3"><?= do_shortcode('[a_address]') ?></p>
			</div>
			<div class="col-2 text-center logo-right">
				<img width="150" class="logo-right-1" src="https://smkn1mandiraja.sch.id/assets/front/images/logo/smkbisa-min.png">
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-md navbar-light bg-warning p-0">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-spandiv" aria-controls="navbar-spandiv" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php
			wp_nav_menu([
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'navbar-spandiv',
				'menu_class'        => 'nav navbar-nav navbar-right justify-content-center w-100',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			]);
		?>
	</div>
</nav>