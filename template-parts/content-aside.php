<article class="post post-format format-aside">
	<div class="icon"><i class="fa fa-bolt"></i></div>
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
		<p class="entry-meta"><?php _e('Publicado en', 'potwebprimero'); ?> <?php the_time(get_option('date_format')); ?> <?php _e('por', 'potwebprimero'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- .post -->