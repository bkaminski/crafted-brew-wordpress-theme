<?php
/**
 * Template Name: Brewery Pages Template
 *
 * @package WordPress
 * @subpackage crafted-brew-wordpress-theme
 * 
 */
get_header(); ?>
<div class="container brewery">
	<div class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<header>
			<div class="col">
				<h1 class="text-white mb-5 text-uppercase"><?php the_title(); ?></h1>
			</div>
		</header>
	</div>
	<div class="row mt-5">
		<div class="col-md-4 mb-4">
			<section>
				<?php the_post_thumbnail('full'); ?>
			</section>
		</div>
		<div class="col-md-8 text-white">
			<main>
				<?php the_content(); ?>
				<br />
				<?php the_tags('<span class="badge badge-primary">Related:</span> ' , ', ', ''); ?>
			</main>
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
