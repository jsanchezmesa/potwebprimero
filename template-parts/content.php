<article class="post">
	<header class="entry-header">
		<h2 class="entry-title">
			<?php if( is_single() ) : ?>
				<?php the_title(); ?>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php endif; ?>
		</h2>
		<p class="entry-meta"><?php _e('Publicado en', 'potwebprimero'); ?> <?php the_time(get_option('date_format')); ?> <?php _e('por', 'potwebprimero'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
	</header><!-- .entry-header -->
	<?php if( has_post_thumbnail() ) : ?>
		<div class="featured-image">
			<?php if( is_single() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		</div><!-- .featured-image -->
	<?php endif; ?>
	<div class="entry-content">
		<?php
		if( is_single() ) {
			the_content();
		} else {
			the_excerpt();
		}
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<p>
			<?php if( !is_single() ) : ?>
				<a href="<?php the_permalink(); ?>" class="read-more"><?php _e('Seguir Leyendo', 'potwebprimero'); ?></a>
				<span class="meta-comments"><i class="fa fa-commenting"></i> <?php comments_number( __('No hay comentarios', 'potwebprimero'), __('1 comentario', 'potwebprimero'), __('% comentarios', 'potwebprimero') ); ?></span>
			<?php endif; ?>
			<span class="meta-category"><i class="fa fa-folder-open"></i> <?php the_category( ', ' ) ?></span>
			<?php if(has_tag() ) : ?>
				<span class="meta-tags"><i class="fa fa-hashtag"></i> <?php the_tags( '', ', ', '' ); ?></span>
			<?php endif; ?>
		</p>
	</footer><!-- .entry-footer -->
</article><!-- .post -->