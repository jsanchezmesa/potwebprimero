<?php get_header(); ?>

<main id="main">

	<header id="not-found-header">
		<h3><?php _e('¡Vaya! ¡La página solicitada no existe!', 'potwebprimero'); ?></h3>
		<p><?php _e('No se ha encontrado el contenido buscado. Vuelve a buscar utilizando el buscador:', 'potwebprimero'); ?></p>

		<?php get_search_form(); ?>
	</header><!-- #not-found-header -->

</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>