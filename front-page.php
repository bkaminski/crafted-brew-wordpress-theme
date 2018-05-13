<?php get_header(); ?>
		<div class="container-lg header-content">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-logo.png" class="blue-earl-logo img-fluid mx-auto d-block" alt="Blue Earl Brewing Company" />
			<video autoplay="true" id="video-background" class="beer-overflow" muted="" plays-inline loop="true" src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-brewing.mp4" type="video/mp4">
				<!-- loading fallback -->
				<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-white"></i>
				<p class="text-center">Your browser may not support HTML5 video</p>
				<span class="sr-only">Video of beer being poured into pint glass.</span>
			</video>
		</div>
		<div class="container-lg book-tour">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<p class="gold-text pt-4 text-uppercase pf-1">Book your next brewery tour now by calling 302.653.BEER</p>
					</div>
					<div class="col-md-3">
						<a class="ml-5 btn btn-lg btn-warning mt-3 mb-2 btn-1" href="#">Book Tour</a>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
