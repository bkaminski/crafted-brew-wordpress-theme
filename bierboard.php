<?php
/**
 * Template Name: Bierboard Template
 *
 * @package WordPress
 * @subpackage crafted-brew-wordpress-theme
 * 
 */
get_header(); ?>
<div class="container bierboard">
	<div class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col">
			<h1 class="text-white mb-5 text-uppercase"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-12 mb-4 text-white">
			<h3 class="text-center text-white text-uppercase text-shadow">Bierboard</h3>
			<?php the_content(); ?>
			<br />
			<?php the_tags('Related: ' , ', ', ''); ?>
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
