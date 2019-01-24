<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.3
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();


	/* Register Styles */
	wp_register_style( 'reset', get_theme_file_uri( '/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'flickity', get_theme_file_uri( '/assets/css/flickity.css'), null, '2.1.0', 'screen' );
	wp_register_style( 'fontawesome', get_theme_file_uri( '/assets/css/fontawesome.css'), null, '5.2.0', 'screen' );
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700|Work+Sans:700,900', null, null, screen );
	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, null, screen );
	wp_register_style( 'my_style', get_theme_file_uri( '/assets/css/mystyle.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'menu', get_theme_file_uri( '/assets/css/menu.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'responsive', get_theme_file_uri( '/assets/css/responsive.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'tablet', get_theme_file_uri( '/assets/css/tablet.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );


	/* Enqueue Styles */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}

	if ( $theme_options['fontawesome'] ) {
		wp_enqueue_style( 'fontawesome' );
	}

	
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'main_style' );
	wp_enqueue_style( 'fonts' );
	wp_enqueue_style( 'my_style' );
	wp_enqueue_style( 'menu' );
	wp_enqueue_style( 'responsive' );
	wp_enqueue_style( 'tablet' );


}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
