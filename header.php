<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<nav id="social-navbar">
		<ul>
			<?php if(get_theme_mod('display_instagram') ) : ?>
			<li><a href="<?php echo get_theme_mod('sm_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
			<?php endif; ?>

			<?php if(get_theme_mod('display_facebook') ) : ?>
			<li><a href="<?php echo get_theme_mod('sm_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php endif; ?>

			<?php if(get_theme_mod('display_twitter') ) : ?>
			<li><a href="<?php echo get_theme_mod('sm_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<?php endif; ?>

			<?php if(get_theme_mod('display_youtube') ) : ?>
			<li><a href="<?php echo get_theme_mod('sm_youtube'); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
			<?php endif; ?>

			<?php if(get_theme_mod('display_vimeo') ) : ?>
			<li><a href="<?php echo get_theme_mod('sm_vimeo'); ?>" target="_blank"><i class="fa fa-vimeo"></i></a></li>
			<?php endif; ?>

			<?php if(get_theme_mod('display_pinterest') ) : ?>
			<li><a href="<?php echo get_theme_mod('sm_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
			<?php endif; ?>

			<?php if(get_theme_mod('display_linkedin') ) : ?>
			<li><a href="<?php echo get_theme_mod('sm_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<?php endif; ?>

			<?php if(get_theme_mod('display_email') ) : ?>
			<li><a href="mailto:<?php echo get_theme_mod('sm_email'); ?>" target="_blank"><i class="fa fa-envelope"></i></a></li>
			<?php endif; ?>
		</ul>
	</nav><!-- #social-navbar -->

	<header id="hero">
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p><?php bloginfo( 'description' ); ?></p>
	</header><!-- #hero -->

	<div id="toggle-bar">
		<a href="#"><i class="fa fa-bars"></i></a>
	</div><!-- #toggle-bar -->

	<nav id="main-navbar">
		<?php
		wp_nav_menu(array(
			'theme_location' => 'primary',
			'depth' => -1,
		) );
		?>
	</nav><!-- #main-navbar -->

	<div id="primary">