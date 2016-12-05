<?php get_header(); ?>
<main id="main">

	<?php if( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if(get_previous_posts_link() || get_next_posts_link()) : ?>
		<div class="navigation">
			<div class="previous">
				<?php previous_posts_link( __('&laquo; Entradas anteriores', 'potwebprimero') ); ?>
			</div>
			<div class="next">
				<?php next_posts_link( __('Entradas siguientes &raquo;', 'potwebprimero') ); ?>
			</div>
		</div><!-- .navigation -->
	<?php endif; ?>

</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>