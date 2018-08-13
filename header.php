<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119885337-1"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());

  			gtag('config', 'UA-119885337-1');
		</script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/lib/img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/lib/img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/lib/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/lib/img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/lib/img/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/lib/img/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/lib/img/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php if ( is_front_page() ) {
    		echo '<div class="noparallax"></div>';
			} else {
    		echo '<div class="parallax-window" data-parallax="scroll" data-image-src="https://blueearlbrewing.com/wp-content/themes/crafted-brew-wordpress-theme/lib/img/interior-bg.png">';
		};?>
		
		<nav class="navbar navbar-expand-md fixed-top navbar-dark">
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-brewing-icon.png" alt="Blue Earl Brewing" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars fa-fw fa-3x text-white text-shadow hamburger"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				 <?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'nav navbar-nav mx-auto',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
				?>
				<div class="pl-1 my-2 my-lg-0">
					<a href="https://www.facebook.com/blueearlbrewing/" target="_blank">
						<i class="fab fa-facebook-square fa-fw fa-lg text-white mr-2 text-shadow social-fa"></i>
					</a>
					<a href="https://twitter.com/blueearlbeer" target="_blank">
						<i class="fab fa-twitter-square fa-fw fa-lg text-white mr-2 text-shadow social-fa"></i>
					</a>
					<a href="https://www.instagram.com/blueearlbeer/?hl=en" target="_blank">
						<i class="fab fa-instagram fa-fw fa-lg text-white mr-2 text-shadow social-fa"></i>
					</a>
					<a href="https://untappd.com/BlueEarlBrewingCo" target="_blank">
						<i class="fab fa-untappd fa-fw fa-lg text-white text-shadow social-fa mr-5"></i>
					</a>
					<img id="brewForYourSoul" src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-brew-for-your-soul.png" alt="Brew For Your Soul" class="img-fluid" />
				</div>
			</div>
		</nav>
