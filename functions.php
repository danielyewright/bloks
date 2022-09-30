<?php

if ( ! function_exists( 'bloks_support' ) ) :
	function bloks_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
	add_action( 'after_setup_theme', 'bloks_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function bloks_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'bloks-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'bloks_scripts' );
