<?php

/* Theme customization */

function potwebprimero_theme_customize_register( $wp_customize ) {

	/*** HEADER CUSTOMIZATION ***/

	/* Add section */
	$wp_customize->add_section('potwebprimero_header_section', array(
		'title' => __('Cabecera - Potenciando tu web Primero', 'potwebprimero'),
		'description' => __('Adapta el tema según necesites', 'potwebprimero'),
		'priority' => 200
	));

	/* Add settings & controls */

	// Header background
	$wp_customize->add_setting('load_header_image');
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'load_header_image',
		array(
			'label' => __('Imagen de fondo: 1440x400 px', 'potwebprimero'),
			'section' => 'potwebprimero_header_section',
			'settings' => 'load_header_image'
		)
	));

	// Background position
	$wp_customize->add_setting('background_position', array(
		'default' => 'center-center'
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'background_position',
		array(
			'label' => __('Posición de la imagen de fondo', 'potwebprimero'),
			'section' => 'potwebprimero_header_section',
			'settings' => 'background_position',
			'type' => 'select',
			'choices' => array(
				'left-top' => __('Izquierda Superior', 'potwebprimero'),
				'left-center' => __('Izquierda Centrado', 'potwebprimero'),
				'left-bottom' => __('Izquierda Inferior', 'potwebprimero'),
				'right-top' => __('Derecha Superior', 'potwebprimero'),
				'right-center' => __('Derecha Centrado', 'potwebprimero'),
				'right-bottom' => __('Derecha Inferior', 'potwebprimero'),
				'center-top' => __('Centro Superior', 'potwebprimero'),
				'center-center' => __('Centro Centrado', 'potwebprimero'),
				'center-bottom' => __('Centro Inferior', 'potwebprimero')
			)
		)
	));

	// Color header text
	$wp_customize->add_setting('header_color', array(
		'default' => '#fff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'header_color',
		array(
			'label' => __('Color del texto de cabecera', 'potwebprimero'),
			'section' => 'potwebprimero_header_section',
			'settings' => 'header_color'
		)
	));

	// Apply shadow to header text
	$wp_customize->add_setting('apply_shadow');
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'apply_shadow',
		array(
			'label' => __('Aplicar sombra al texto de cabecera', 'potwebprimero'),
			'section' => 'potwebprimero_header_section',
			'settings' => 'apply_shadow',
			'type' => 'checkbox'
		)
	));

	/*** COLOR CUSTOMIZATION ***/

	/* Add section */
	$wp_customize->add_section('potwebprimero_colors_section', array(
		'title' => __('Colores - Potenciando tu web Primero', 'potwebprimero'),
		'description' => __('Adapta el tema según necesites', 'potwebprimero'),
		'priority' => 200
	));

	/* Add settings & controls */
	// Main color
	$wp_customize->add_setting('main_color', array(
		'default' => '#457b9d',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability' => 'edit_theme_options',
		'type' => 'theme_mod',
		'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'main_color',
		array(
			'label' => __('Color principal', 'potwebprimero'),
			'section' => 'potwebprimero_colors_section',
			'settings' => 'main_color'
		)
	));

	// Main color hover
	$wp_customize->add_setting('main_color_hover', array(
		'default' => '#3c3c3c',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'main_color_hover',
		array(
			'label' => __('Color principal hover', 'potwebprimero'),
			'section' => 'potwebprimero_colors_section',
			'settings' => 'main_color_hover'
		)
	));

	// Secondary color
	$wp_customize->add_setting('secondary_color', array(
		'default' => '#747474',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'secondary_color',
		array(
			'label' => __('Color secundario', 'potwebprimero'),
			'section' => 'potwebprimero_colors_section',
			'settings' => 'secondary_color'
		)
	));

	// Interface color
	$wp_customize->add_setting('interface_color', array(
		'default' => '#D4D4D4',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize,
		'interface_color',
		array(
			'label' => __('Color de interfaz', 'potwebprimero'),
			'section' => 'potwebprimero_colors_section',
			'settings' => 'interface_color'
		)
	));


	/*** FOOTER CUSTOMIZATION ***/

	/* Add section */
	$wp_customize->add_section('potwebprimero_footer_section', array(
		'title' => __('Pie de página - Potenciando tu web Primero', 'potwebprimero'),
		'description' => __('Adapta el tema según necesites', 'potwebprimero'),
		'priority' => 200
	));

	/* Add setting & control */
	$wp_customize->add_setting('content_footer', array(
		'default' => __('Web creada con WordPress', 'potwebprimero'),
		'sanitize_callback' => 'esc_textarea'
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'content_footer',
		array(
			'label' => __('Texto para el pie de página', 'potwebprimero'),
			'section' => 'potwebprimero_footer_section',
			'settings' => 'content_footer',
			'type' => 'textarea'
		)
	));

	/*** SOCIAL MEDIA CUSTOMIZATION ***/

	/* Add Section */
	$wp_customize->add_section('potwebprimero_sm_section', array(
		'title' => __('Redes sociales - Potenciando tu web Primero', 'potwebprimero'),
		'description' => __('Adapta el tema según necesites', 'potwebprimero'),
		'priority' => 200
	));

	/* Add settings & controls */

	//Instagram
	$wp_customize->add_setting('sm_instagram', array(
		'sanitize_callback'	=> 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sm_instagram',
		array(
			'label' => __('Perfil de Instagram', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'sm_instagram',
			'type' => 'url'
		)
	));

	//Display Instagram icon
	$wp_customize->add_setting('display_instagram');
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'display_instagram',
		array(
			'label' => __('Mostrar icono de Instagram', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'display_instagram',
			'type' => 'checkbox'
		)
	));

	//Facebook
	$wp_customize->add_setting('sm_facebook', array(
		'sanitize_callback'	=> 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sm_facebook',
		array(
			'label' => __('Página de Facebook', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'sm_facebook',
			'type' => 'url'
		)
	));

	//Display Facebook icon
	$wp_customize->add_setting('display_facebook');
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'display_facebook',
		array(
			'label' => __('Mostrar icono de Facebook', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'display_facebook',
			'type' => 'checkbox'
		)
	));

	//Twitter
	$wp_customize->add_setting('sm_twitter', array(
		'sanitize_callback'	=> 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sm_twitter',
		array(
			'label' => __('Perfil de Twitter', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'sm_twitter',
			'type' => 'url'
		)
	));

	//Display Twitter icon
	$wp_customize->add_setting('display_twitter');
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'display_twitter',
		array(
			'label' => __('Mostrar icono de Twitter', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'display_twitter',
			'type' => 'checkbox'
		)
	));

	//Youtube
	$wp_customize->add_setting('sm_youtube', array(
		'sanitize_callback'	=> 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sm_youtube',
		array(
			'label' => __('Canal de Youtube', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'sm_youtube',
			'type' => 'url'
		)
	));

	//Display Youtube icon
	$wp_customize->add_setting('display_youtube');
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'display_youtube',
		array(
			'label' => __('Mostrar icono de Youtube', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'display_youtube',
			'type' => 'checkbox'
		)
	));

	//Vimeo
	$wp_customize->add_setting('sm_vimeo', array(
		'sanitize_callback'	=> 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sm_vimeo',
		array(
			'label' => __('Canal de Vimeo', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'sm_vimeo',
			'type' => 'url'
		)
	));

	//Display Vimeo icon
	$wp_customize->add_setting('display_vimeo');
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'display_vimeo',
		array(
			'label' => __('Mostrar icono de Vimeo', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'display_vimeo',
			'type' => 'checkbox'
		)
	));

	//Pinterest
	$wp_customize->add_setting('sm_pinterest', array(
		'sanitize_callback'	=> 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sm_pinterest',
		array(
			'label' => __('Perfil de Pinterest', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'sm_pinterest',
			'type' => 'url'
		)
	));

	//Display Pinterest icon
	$wp_customize->add_setting('display_pinterest');
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'display_pinterest',
		array(
			'label' => __('Mostrar icono de Pinterest', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'display_pinterest',
			'type' => 'checkbox'
		)
	));

	//Linkedin
	$wp_customize->add_setting('sm_linkedin', array(
		'sanitize_callback'	=> 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sm_linkedin',
		array(
			'label' => __('Perfil de Linkedin', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'sm_linkedin',
			'type' => 'url'
		)
	));

	//Display Linkedin icon
	$wp_customize->add_setting('display_linkedin');
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'display_linkedin',
		array(
			'label' => __('Mostrar icono de Linkedin', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'display_linkedin',
			'type' => 'checkbox'
		)
	));

	//Email
	$wp_customize->add_setting('sm_email', array(
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sm_email',
		array(
			'label' => __('Tu dirección de email', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'sm_email',
			'type' => 'email'
		)
	));

	//Display Email icon
	$wp_customize->add_setting('display_email');
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'display_email',
		array(
			'label' => __('Mostrar icono de Email', 'potwebprimero'),
			'section' => 'potwebprimero_sm_section',
			'settings' => 'display_email',
			'type' => 'checkbox'
		)
	));
}
add_action( 'customize_register', 'potwebprimero_theme_customize_register' );

/* Apply customization */
function potwebprimero_theme_customize_css() {
	$main_color = get_theme_mod( 'main_color' );
	$main_color_hover = get_theme_mod( 'main_color_hover' );
	$secondary_color = get_theme_mod( 'secondary_color' );
	$interface_color = get_theme_mod( 'interface_color' );
	$header_image = get_theme_mod( 'load_header_image' );
	$background_position = get_theme_mod( 'background_position' );
	$background_position = str_replace('-', ' ', $background_position);
	$header_color = get_theme_mod( 'header_color' );
	$apply_shadow = get_theme_mod( 'apply_shadow' );
?>
	<style type="text/css">
		/* main color */
		h1, h2, h3, h4, h5, h6,
		#social-navbar ul li .fa,
		#main-navbar ul li a,
		.post .entry-header .entry-title a,
		.post-format .icon i,
		.navigation div a,
		#comments .comment-author a,
		#comments .comment-author span,
		#comments .comment-footer a,
		#author-header .bio-author span {
			color: <?php echo $main_color; ?>;
		}

		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.post .entry-footer p .read-more,
		#main-footer {
			background: <?php echo $main_color; ?>;
		}

		.post .entry-content blockquote,
		#comments ol li ul li article,
		#comments ul li ul li article {
			border-color: <?php echo $main_color; ?>;
		}

		@media only screen and (max-width: 740px){
			#toggle-bar a,
			#main-navbar ul li a:hover,
			#main-navbar ul li a:active,
			#main-navbar ul li.current-menu-item a{
				background: <?php echo $main_color; ?>;
			}
		}

		/* main color hover */
		button:hover,
		input[type="button"]:hover,
		input[type="reset"]:hover,
		input[type="submit"]:hover,
		.post .entry-footer p .read-more:hover,
		.post .entry-footer p .read-more:active  {
			background: <?php echo $main_color_hover; ?>;
		}

		/* secondary color */
		body, a, input, textarea {
			color: <?php echo $secondary_color; ?>;
		}

		#main-navbar ul li.current-menu-item a {
			border-color: <?php echo $secondary_color; ?>;
		}

		/* interface color */
		input, textarea,
		#social-navbar,
		#main-navbar,
		#main-navbar ul li a:hover,
		#main-navbar ul li a:active,
		.post .entry-header .entry-title a:hover,
		.post .entry-header .entry-title a:active,
		.navigation,
		#comments .comment-author a:hover,
		#comments .comment-author a:active,
		#comments .comment-footer a,
		.widget a:hover,
		.widget a:active {
			border-color: <?php echo $interface_color; ?>;
		}

		#not-found-header h3::before,
		#search-header h3::before,
		#archive-header h3::before {
			color: <?php echo $interface_color; ?>;
		}

		@media only screen and (max-width: 900px){
			#sidebar {
				border-color: <?php echo $interface_color; ?>;
			}
		}

		@media only screen and (max-width: 740px) {
			#main-navbar ul li {
				border-color: <?php echo $interface_color; ?>;
			}
		}

		/* header image */
		#hero {
			<?php if($header_image != "") : ?>
				background-image: url(<?php echo $header_image; ?>);
			<?php endif; ?>
			background-position: <?php echo $background_position; ?>;
		}

		/* header color */
		#hero h1,
		#hero p {
			color: <?php echo $header_color; ?>;
			<?php if($apply_shadow) : ?>
				text-shadow: 0px 2px 2px rgba(150, 150, 150, 1);
			<?php endif; ?>
		}
	</style>
<?php
}
add_action( 'wp_head', 'potwebprimero_theme_customize_css' );