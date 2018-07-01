<?php
/**
 * Template Name: Our Beer Pages Template
 *
 * @package WordPress
 * @subpackage crafted-brew-wordpress-theme
 * 
 */
get_header(); ?>
<div class="container our-beer">
	<div itemscope itemtype="http://schema.org/Product">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<header>
					<div class="col">
						<span itemprop="name">
							<h1 class="text-white mb-5 text-uppercase"><?php the_title(); ?></h1>
						</span>
					</div>
				</header>
		</div>
		<div class="row mt-5">
			<div class="col-md-4 mb-4">
				<figure>
					<?php the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); ?>
						
				</figure>
				<span class="sr-only" itemprop="brand">Blue Earl Brewing</span>
			</div>
			<div class="col-md-8 text-white">
				<main>
					<span itemprop="description">
						<?php the_content(); ?>
					</span>
					<br />
					<button class="btn btn-success" onclick="goBack()"><i class="fas fa-angle-double-left fa-fw mr-2"></i>Go Back!</button>
						<script>
						function goBack() {
						    window.history.back();
						}
						</script>
					<br />
					<br />
					<?php the_tags('<span class="badge badge-primary mr-2">Related:</span> ' , ', ', ''); ?>
				</main>
			</div>
			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
