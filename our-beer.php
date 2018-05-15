<?php
/**
 * Template Name: Our Beer Page Layout
 *
 * @package WordPress
 * @subpackage crafted-brew-wordpress-theme
 * 
 */
get_header(); ?>
<div class="container our-beer">
	<div class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col">
			<h1 class="text-white mb-5 text-uppercase"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-4 mb-4">
			<?php the_post_thumbnail('full'); ?>
		</div>
		<div class="col-md-8 text-white">
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
