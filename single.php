<?php get_header(); ?>
<main id="main">
	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

			<div class="navigation">
				<div class="previous">
					<?php if( get_previous_post_link() ) : ?>
						<span><?php _e('Entrada anterior', 'potwebprimero'); ?></span>
						<?php previous_post_link(); ?>
					<?php else: ?>
						<span><?php _e('No hay entradas anteriores', 'potwebprimero'); ?></span>
						<a href="<?php bloginfo('url'); ?>"><?php _e('Volver al blog', 'potwebprimero'); ?></a>
					<?php endif; ?>
				</div>
				<div class="next">
					<?php if( get_next_post_link() ) : ?>
						<span><?php _e('Entrada siguiente', 'potwebprimero'); ?></span>
						<?php next_post_link(); ?>
					<?php else: ?>
						<span><?php _e('No hay entradas más recientes', 'potwebprimero'); ?></span>
						<a href="<?php bloginfo('url'); ?>"><?php _e('Volver al blog', 'potwebprimero'); ?></a>
					<?php endif; ?>
				</div>
			</div><!-- .navigation -->

			<?php
			if( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>

	<?php endwhile; ?>
</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>