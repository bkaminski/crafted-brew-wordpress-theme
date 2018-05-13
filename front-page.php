<?php get_header(); ?>
		<div class="container-lg header-content">
			<video autoplay="true" id="video-background" class="beer-overflow" muted="" plays-inline loop="true" src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-brewing.mp4" type="video/mp4">
			<!-- loading fallback -->
				<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-white"></i>
				<p class="text-center">Your browser may not support HTML5 video</p>
				<span class="sr-only">Video of beer being poured into pint glass.</span>
			</video>
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-logo.png" class="img-fluid main-logo-image mx-auto d-block" alt="Blue Earl Brewing Company" />
		</div>
		<div style="border: 1px solid;width:100%;height:150px;">
		</div>
<?php get_footer(); ?>
