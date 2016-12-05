<?php

/* Setup */
function potwebprimero_setup() {
	/* Let WordPress manage the document title */
	add_theme_support( 'title-tag' );

	/* Enable support for Post Thumbnails */
	add_theme_support( 'post-thumbnails' );

	/* Enable support for Post Formats */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	/* Register location of menus */
	register_nav_menus( array(
		'primary' => __('Principal', 'potwebprimero'),
		'secondary' => __('Pie de página', 'potwebprimero'),
	) );
}
add_action( 'after_setup_theme', 'potwebprimero_setup' );

/* Register Widget Area */
function potwebprimero_widgets_init() {
	register_sidebar( array(
		'name' => __('Barra lateral', 'potwebprimero'),
		'id' => 'sidebar-1',
		'description' => __('Elige los widgets que desees', 'potwebprimero'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
	));
}
add_action( 'widgets_init', 'potwebprimero_widgets_init' );

/* Add styles */
function potwebprimero_enqueue_style() {
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'normalize', get_template_directory_uri().'/assets/css/normalize.css');
	wp_enqueue_style( 'potwebprimero-style', get_stylesheet_uri(), array('font-awesome', 'normalize'), 1.0, 'all');
}
add_action( 'wp_enqueue_scripts', 'potwebprimero_enqueue_style' );

/* Add scripts */
function potwebprimero_enqueue_scripts() {
	wp_enqueue_script( 'potwebprimero-scripts', get_template_directory_uri().'/assets/js/functions.js', array( 'jquery' ), 1.0, true );
}
add_action( 'wp_enqueue_scripts', 'potwebprimero_enqueue_scripts' );

/* Customized comments */
function potwebprimero_comment($comment, $args, $depth) {
?>
<li>
	<article class="comment">
		<div class="comment-author">
			<?php echo get_avatar(get_comment_author_email(), 50, '', get_comment_author() ); ?>
			<span class="author-name">
				<?php comment_author_link(); ?>
			</span>
		</div><!-- .comment-author -->
		<div class="comment-content">
			<?php if($comment->comment_approved == '0') : ?>
				<em><?php _e('Tu comentario está pendiente de moderación', 'potwebprimero'); ?></em>
			<?php endif; ?>
			<?php comment_text(); ?>
		</div><!-- .comment-content -->
		<div class="comment-footer">
			<span class="comment-date"><?php comment_date(); ?></span>
			<?php
				comment_reply_link( array_merge($args, array(
					'reply_text' => __('Responder', 'potwebprimero'),
					'depth' => $depth,
					'max_depth' => $args['max_depth']
				) ) );
				edit_comment_link( __('Editar','potwebprimero') );
			?>
		</div><!-- .comment-footer -->
	</article><!-- .comment -->
<?php
}

/* Theme customization */
require get_template_directory().'/inc/customizer.php';

/* External functions */
require get_template_directory().'/inc/external.php';