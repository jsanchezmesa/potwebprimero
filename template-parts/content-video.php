<article class="post post-format format-video">
	<div class="icon"><i class="fa fa-video-camera"></i></div>
	<header class="entry-header">
		<p class="entry-meta"><?php _e('Publicado en', 'potwebprimero'); ?> <?php the_time(get_option('date_format')); ?> <?php _e('por', 'potwebprimero'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="video-wrapper">
			<?php echo potwebprimero_get_first_embed_media($post->ID); ?>
		</div><!-- .video-wrapper -->
	</div><!-- .entry-content -->
</article><!-- .post -->