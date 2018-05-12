<?php get_header(); ?>
	<header>
		<div class="col pl-0 pr-0">
			<video autoplay="true" class="beer-overflow" muted="" plays-inline loop="true" src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-brewing.mp4" type="video/mp4">
			<!-- loading fallback -->
				<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-white"></i>
				<p class="text-center">Your browser may not support HTML5 video</p>
				<span class="sr-only">Video of beer being poured into pint glass.</span>
			</video>
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-logo.png" class="img-fluid main-logo-image" alt="Blue Earl Brewing Company" />
		</div>
	</header>
<?php get_footer(); ?>
