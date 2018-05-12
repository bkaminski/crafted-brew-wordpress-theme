<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/media/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/media/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/media/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/media/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/media/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/media/ms-icon-144x144.png">
		<title><?php echo get_bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<nav class="navbar navbar-expand-md fixed-top navbar-dark">
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-icon-web.png" alt="Blue Earl Brewing" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'depth' => 2,
						'container' => 'justify-content-md-center',
						'container_class' => '',
						'container_id' => '',
						'menu_class' => 'navbar-nav mx-auto',
						'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
						'walker' => new WP_Bootstrap_Navwalker()
					));
				?>
			</div>
			<div class="my-2 my-lg-0">
				<a href="https://www.facebook.com/blueearlbrewing/" target="_blank">
					<i class="fab fa-facebook-square fa-fw fa-lg text-white mr-2"></i>
				</a>
				<a href="https://twitter.com/blueearlbeer" target="_blank">
					<i class="fab fa-twitter-square fa-fw fa-lg text-white mr-2"></i>
				</a>
				<a href="https://www.instagram.com/blueearlbeer/?hl=en" target="_blank">
					<i class="fab fa-instagram fa-fw fa-lg text-white mr-5"></i>
				</a>
				<img src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-brew-for-your-soul.png" alt="Brew For Your Soul" />
			</div>
		</nav>
		<header>
			
		</header>
