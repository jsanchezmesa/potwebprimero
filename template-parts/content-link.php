<article class="post post-format format-link">
	<div class="icon"><i class="fa fa-link"></i></div>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php echo get_url_in_content( get_the_content() ); ?>" target="_blank"><?php the_title(); ?></a></h2>
		<p class="entry-meta"><?php _e('Publicado en', 'potwebprimero'); ?> <?php the_time(get_option('date_format')); ?> <?php _e('por', 'potwebprimero'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
	</header><!-- .entry-header -->
</article><!-- .post -->