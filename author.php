<?php get_header(); ?>
<main id="main">

	<header id="author-header">
		<div class="bio-author">
			<?php echo get_avatar( get_the_author_meta('ID'), 80, '', get_the_author() ); ?>
			<span class="author-name"><?php the_author(); ?></span>
		</div><!-- .bio-author -->
		<?php
			$bio = get_the_author_meta('description');
			if( $bio != "") :
		?>
			<div class="bio-content">
				<span><?php _e('Biografía', 'potwebprimero'); ?></span>
				<p><?php echo $bio; ?></p>
			</div><!-- .bio-content -->
		<?php endif; ?>
		<h3>
			<?php printf( esc_html__('He escrito %d entradas:','potwebprimero'), get_the_author_posts() ); ?>
		</h3>
	</header><!-- #author-header -->

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