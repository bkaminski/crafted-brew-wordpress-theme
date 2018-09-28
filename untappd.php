<?php
/**
 * Template Name: Untappd App
 *
 * @package WordPress
 * @subpackage crafted-brew-wordpress-theme
 * 
 */
get_header(); ?>
<div id="preloader">
		<p class="text-center h5 loadtext">Blue Earl is loading...</p>
</div>
<script type="text/javascript">
  !function(e,n){var t=document.createElement("script"),a=document.getElementsByTagName("script")[0];t.async=1,a.parentNode.insertBefore(t,a),t.onload=t.onreadystatechange=function(e,a){(a||!t.readyState||/loaded|complete/.test(t.readyState))&&(t.onload=t.onreadystatechange=null,t=void 0,a||n&&n())},t.src=e}("https://embed-menu-preloader.untappdapi.com/embed-menu-preloader.min.js",function(){PreloadEmbedMenu("menu-container",15152,56532)});
</script> 
<div class="container bierboard">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<header>
			<div class="col">
				<h1 class="headerAlign text-white mb-5 text-uppercase"><?php the_title(); ?></h1>
			</div>
		</header>
	</div>
	<div class="row mt-5">
		<div class="col-md-12">
			<main>
				<?php the_content(); ?>
				<div id="menu-container"></div>
				<br />
				<?php the_tags('<span class="badge badge-primary mr-2">Related:</span> ' , ', ', ''); ?>
			</main>
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
