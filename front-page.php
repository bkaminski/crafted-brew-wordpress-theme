<?php get_header(); ?>
	<div id="preloader">
		<p class="text-center h5 loadtext">Blue Earl is loading...</p>
	</div>

	<header>
		<div class="container-fluid no-padding header-content">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-brewing.png" class="blue-earl-logo img-fluid mx-auto d-block" alt="Blue Earl Brewing Company" />
			<video autoplay="" id="video-background" class="beer-overflow" muted="" loop="" src="<?php echo get_template_directory_uri(); ?>/lib/img/blue-earl-brewing.mp4">
				<p class="text-center">Your browser may not support HTML5 video</p>
				<span class="sr-only">Video of beer being poured into pint glass.</span>
			</video>
		</div>
	</header>
	<section>
		<div id="featuredEvent" class="container-fluid featured-event pt-3 pb-3">
			<div class="container mb-3">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-center text-white pb-3 eventTitle"><?php echo do_shortcode('[eme_events category=3 limit=1 template_id=7]'); ?></h2>
					</div>
					<div class="col-md-6">
						<p class="shadow text-center"><?php echo do_shortcode('[eme_events category=3 limit=1 template_id=4]'); ?></p>
					</div>
					<div class="col-md-6">
						<div class="shadow event-details"><?php echo do_shortcode('[eme_events category=3 limit=1 template_id=6]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container-fluid book-tour">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h6 class="gold-text pt-3 text-uppercase pf-1">Delaware’s 7th microbrewery located in The Historic Town of Smyrna. Brewing extra special beer offerings!</h6>
					</div>
					<div class="col-md-3">
						<a class="ml-3 btn btn-lg btn-warning mt-3 mb-3 btn-1 text-uppercase" href="brewery/about-us/">About Us</a>
					</div>
				</div>
			</div>	
		</div>
	</section>
	<main>
		<div class="container-fluid no-padding">
			<?php include get_template_directory() . '/lib/inc/blue-earl-carousel.php'; ?>
		</div>
	</main>
	<section>
		<div class="container-fluid book-tour">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h6 class="gold-text pt-3 text-uppercase pf-1">Book your next brewery tour now by calling 302.653.BEER</h6>
					</div>
					<div class="col-md-3">
						<a class="ml-3 btn btn-lg btn-warning mt-3 mb-3 btn-1 text-uppercase" href="/blue-earl-brewing/brewery-tours/">Book Tour</a>
					</div>
				</div>
			</div>	
		</div>
	</section>
	<aside>
		<div class="container-fluid no-padding testimonail-outer">
			<div class="container">
				<div class="testimonials">
					<p class="text-center text-white text-shadow pb-3">"My favorite craft beer at my favorite brewery! And the entertainment they have....second to none!!! Their blues jam every month is not to be missed!"
					<br />
					<small><cite>- Judy M. Mangini</cite></small></p>
					<p class="text-center text-white text-shadow pb-3">"Great beer, great staff, great ambiance, great jamming music; a warm relaxing experience...highly recommended!"
				    <br />
					<cite><small>- Philip Ardanuy</small></cite>
					<p class="text-center text-white text-shadow pb-3">"The beer is magical, the atmosphere cozy and the folks who own & operate it can't be any nicer!"
				    <br />
					<cite><small>- Tara K. Schriver</small></cite>
				</div>
				<div class="col pt-3">
					<p class="text-center text-white text-uppercase">In partnership with Blue Earl Brewing</p>
					<p class="text-center pb-4">
						<a href="https://centraldelawareblues.com/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/lib/img/central-de-blues-society.jpg" alt="Central Delaware Blues Society" />
						</a>
					</p>
				</div>
			</div>
		</div>
	</aside>
<?php get_footer(); ?>
