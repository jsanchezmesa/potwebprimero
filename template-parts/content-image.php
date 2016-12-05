<article class="post post-format format-image">
	<div class="icon"><i class="fa fa-camera"></i></div>
	<header class="entry-header">
		<p class="entry-meta"><?php _e('Publicado en', 'potwebprimero'); ?> <?php the_time(get_option('date_format')); ?> <?php _e('por', 'potwebprimero'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
	</header><!-- .entry-header -->
	<div class="featured-image">
		<img src="<?php echo potwebprimero_catch_that_image(); ?>" alt="<?php the_title(); ?>">
	</div><!-- .featured-image -->
</article><!-- .post -->