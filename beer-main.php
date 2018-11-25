<?php
/**
 * Template Name: Main Beer Page
 *
 * @package WordPress
 * @subpackage crafted-brew-wordpress-theme
 * 
 */
get_header(); ?>
<div class="container our-beer">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<header>
			<div class="col">
				<h1 class="headerAlign text-white mb-5 text-uppercase"><?php the_title(); ?></h1>
			</div>
		</header>
	</div>
	<div class="row mt-5">
		<div class="col-md-12 mb-4">
			<figure>
				<?php the_post_thumbnail( 'full', array( 'class' => 'mx-auto d-block' ) ); ?>
						
			</figure>
			<main>
				<?php the_content(); ?>

				<h2 class="text-center text-white mb-5">Our Beers:</h2>
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-white">
						<div itemscope itemtype="http://schema.org/Product">
							<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/210-stout/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/210-stout-blue-earl-150x150.jpg" alt="210 Stout Blue Earl" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-609" /><br /><span itemprop="name">210 Stout</span></a></strong></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center text-white">
						<div itemscope itemtype="http://schema.org/Product">
							<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/black-satin/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/black-satin-blue-earl-150x150.jpg" alt="Black Satin -- Blue Earl" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-120" /><br /><span itemprop="name">Black Satin</span></a></strong></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center text-white">
						<div itemscope itemtype="http://schema.org/Product">
							<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/blue-train/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/blue-train-blue-earl-150x150.jpg" alt="Blue Train -- Blue Earl Brewing" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-108" /><br /><span itemprop="name">Blue Train</span></a></strong></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/blues-power/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/blues-power-pale-ale-blue-earl-150x150.jpg" alt="Blues Power Pale Ale" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-633" /><br /><span itemprop="name">Blues Power</span></a></strong></p>
				    	</div>
				    </div>
				</div><!-- /.row -->
				<div class="row">
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/born-to-be-wild/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/born-to-be-wild-blue-earl-150x150.jpg" alt="Born to be Wild" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-643" /><br /><span itemprop="name">Born to be Wild</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/buster-brown/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/buster-brown-brown-ale-blue-earl-150x150.jpg" alt="buster-brown-brown-ale-blue-earl" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-550" /><br /><span itemprop="name">Buster Brown</span></a></strong></p>
				    	</div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/clockwork-orange/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/07/clockwork-orange-blue-earl-150x150.jpg" alt="Clockwork Orange" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-619" /><br /><span itemprop="name">Clockwork Orange</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/earls-malt-cider/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/08/earlsmaltcider-150x150.jpg" alt="Earl's Malt Cider" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Earl's Malt Cider</span></a></strong></p>
				        </div>
				    </div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-white">
				     	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/four-corners-ale/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/four-corners-ale-blue-earl-150x150.jpg" alt="Four Corners Ale" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-619" /><br /><span itemprop="name">Four Corners Ale</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/fuzzy-wuzzy/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/09/fuzzy-wuzzy-150x150.jpeg" alt="Fuzzy Wuzzy" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Fuzzy Wuzzy</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/gnarly-red-rooster/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/gnarly-red-rooster-blue-earl-150x150.jpg" alt="Gnarly Red Rooster" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-626" /><br /><span itemprop="name">Gnarly Red Rooster</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/honeysuckle-rose/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/05/honeysuckle-rose-blue-earl-150x150.jpg" alt="Honeysuckle Rose -- Blue Earl" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-113" /><br /><span itemprop="name">Honeysuckle Rose</span></a></strong></p>
				    	</div>
				    </div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/ill-sleep-when-im-dead/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/09/ill-sleep-when-im-dead-imperial-porter-150x150.jpg" alt="I'll Sleep When I'm Dead" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">I'll Sleep When I'm Dead</span></a></strong></p>
				    	</div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/life-is-good/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/life-is-good-blue-earl-150x150.jpg" alt="Life is Good" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-611" /><br /><span itemprop="name">Life is Good</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/lovelight-white/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/lovelight-white-blue-earl-150x150.jpg" alt="Lovelight White -- Bue Earl Brewery" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-518" /><br /><span itemprop="name">Lovelight White</span></a></strong></p>
				    	</div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/marg-earl-rita/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/07/marg-earl-rita-150x150.jpg" alt="Marg-EARL-Rita - Blue Earl" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Marg-EARL-Rita</span></a></strong></p>
				        </div>
				    </div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/may-this-be-love/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/may-this-be-love-blue-earl-1-150x150.jpg" alt="May this be Love - Blue Earl" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">May This be Love</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/more-than-a-feeling/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/more-than-a-feeling-blue-earl-150x150.jpg" alt="More Than a Feeling" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">More than a Feeling</span></a></strong></p>
				    	</div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/my-honey-bee/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/08/my-honey-bee-150x150.jpg" alt="More Than a Feeling" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">My Honey Bee</span></a></strong></p>
				    	</div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/pressure-cooker/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/09/pressure-cooker-ipa-150x150.png" alt="Pressure Cooker - Triple IPA" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Pressure Cooker</span></a></strong></p>
				        </div>
				    </div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-white">
						<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/raspberry-beret/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/raspberry-beret-blue-earl-150x150.jpg" alt="Raspberry Beret" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-630" /><br /><span itemprop="name">Raspberry Beret</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/r-e-s-p-e-c-t/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/09/respect-juicy-ipa-150x150.jpeg" alt="R-E-S-P-E-C-T" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">R-E-S-P-E-C-T</span></a></strong></p>
				    	</div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/she-squeezed-my-lemon/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/07/she-squeezed-my-lemon-blue-earl-150x150.jpg" alt="She Squeezed My Lemon" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-628" /><br /><span itemprop="name">She Squeezed My Lemon</span></a></strong></p>
				    	</div>
				    </div>
					<div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/shining-star/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/08/shiningstar-150x150.jpg" alt="Shining Star" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Shining Star</span></a></strong></p>
				    	</div>
				    </div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-white">
				     	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/smooth-muthapukka/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/08/smooth-muthapukka-150x150.jpg" alt="Smooth Muthapukka" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Smooth Muthapukka</span></a></strong></p>
				    	</div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/stardust/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/stardust-blue-earl-150x150.jpg" alt="Stardust" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-628" /><br /><span itemprop="name">Stardust</span></a></strong></p>
				    	</div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/top-of-the-world/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/top-of-the-world-blue-earl-150x150.jpg" alt="Top of the World" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-648" /><br /><span itemprop="name">Top of the World</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/train-kept-a-rollin/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/08/trainrollin-150x150.jpg" alt="Train Kept a Rollin'" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Train Kept a Rollin'</span></a></strong></p>
				    	</div>
				    </div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-white">
				     	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/trouble-in-mind/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/trouble-in-mind-blue-earl-1-150x150.jpg" alt="Trouble In Mind -- Blue Earl Beer" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-525" /><br /><span itemprop="name">Trouble in Mind</span></a></strong></p>
				    	</div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				     	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/walking-blues-ipa/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/05/walking-blues-ipa-blue-earl-150x150.png" alt="Walking Blues IPA -- Blue Earl" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-97" /><br /><span itemprop="name">Walking Blues IPA</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				     	<div itemscope itemtype="http://schema.org/Product">
				    		<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/when-doves-cry/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/05/when-doves-cry-blue-earl-150x150.png" alt="When Doves Cry -- Blue Earl" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-117" /><br /><span itemprop="name">When Doves Cry</span></a></strong></p>
				    	</div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				     	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/white-table-181/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/white-table-181-blue-earl-150x150.jpg" alt="White Table 181 - Beer/Wine Hybrid" width="150" height="150" class="img-thumbnail alignnone size-thumbnail wp-image-614" /><br /><span itemprop="name">White Table 181</span></a></strong></p>
				        </div>
				    </div>
				</div>
				<p class="text-center"><a class="btn btn-warning" href="/blue-earl-brewing/on-tap-at-blue-earl-brewery/">View "On Tap" Selections</a></p>
				&nbsp;
				<h2 class="text-center text-white mb-5">Limited Release Cans:</h2>
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/abra-ca-joo-c/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/09/abra-ca-joo-c-can-150x150.png" alt="Abra-Ca-Joo-C" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Abra-Ca-Joo-C</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/cherry-berry-lips/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/09/cherry-berry-lips-can-150x150.jpg" alt="Cherry Berry Lips" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Cherry Berry Lips</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    </div>
				</div>
				<p class="text-center"><a class="btn btn-warning" href="/blue-earl-brewing/on-tap-at-blue-earl-brewery/">View "On Tap" Selections</a></p>
			&nbsp;
				&nbsp;
				<br />
				<h2 class="text-center text-white mb-5">Limited Release Bottles:</h2>
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/angels-red-shoes/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/angels-red-shoes-bue-earl-150x150.jpg" alt="Angels Red Shoes" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Angels Red Shoes</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/big-boss-man/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/big-boss-man-blue-earl-150x150.jpg" alt="Big Boss Man" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Big Boss Man</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/bop-gun/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/bop-gun-blue-earl-150x150.jpg" alt="Bop Gun" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Bop Gun</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/dark-star/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/big-earl-series-bue-earl-150x150.jpg" alt="Dark Star" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Dark Star</span></a></strong></p>
				        </div>
				    </div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/i-put-a-spell-on-you/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/i-put-a-spell-on-you-blue-earl-150x150.jpg" alt="I Put a Spell on You" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">I Put a Spell on You</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">
				    	<div itemscope itemtype="http://schema.org/Product">
				        	<p><strong><a itemprop="url" href="https://blueearlbrewing.com/blue-earl-beer/magical-mystery-tour/"><img itemprop="image" src="https://blueearlbrewing.com/wp-content/uploads/2018/06/magical-mystery-tour-blue-earl-150x150.jpg" alt="Magical Mystery Tour" width="150" height="150" class="img-thumbnail alignnone size-thumbnail" /><br /><span itemprop="name">Magical Mystery Tour</span></a></strong></p>
				        </div>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">

				    </div>
				    <div class="col-md-3 col-sm-6 text-center text-white">

				    </div>
				</div>
				<p class="text-center"><a class="btn btn-warning" href="/blue-earl-brewing/on-tap-at-blue-earl-brewery/">View "On Tap" Selections</a></p>
				<br />
			</main>
			<?php the_tags('<span class="badge badge-primary mr-2">Related:</span> ' , ', ', ''); ?>
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
