<?php get_header(); ?>

<main id="main">
	<?php if(have_posts() ) : ?>
	<?php while(have_posts() ) : the_post(); ?>
	<article class="post">
		<header class="entry-header">
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</header><!-- .entry-header -->
		<?php if(has_post_thumbnail() ) : ?>
			<div class="featured-image">
				<?php the_post_thumbnail(); ?>
			</div><!-- .featured-image -->
		<?php endif; ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</article><!-- .post -->
	<?php endwhile; ?>
	<?php endif; ?>
</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>