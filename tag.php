<?php get_header(); ?>
<div class="container our-beer">
	<div class="row">
		<div class="container-fluid">
				<div class="alert alert-warning mt-3">
					<h1 class="text-uppercase text-center">
						<?php printf( __( 'Content Tagged With: %s', 'crafted_brew' ), '<span>' . get_search_query() . '</span>' ); ?>
						<em>&ldquo;<?php single_tag_title(); ?>&rdquo;</em>
					</h1>
				</div>
			</div>
	</div>
	<div class="row mt-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-12 mb-4">
			<main>
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
						
					</a>
				</h1>
				<div class="text-white">
					<?php the_excerpt(); ?>
						
				</div>
				<hr />
			</main>
		</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		<div class="col">
			<?php echo crafted_brew_pagination(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
