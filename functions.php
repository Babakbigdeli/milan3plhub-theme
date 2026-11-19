<?php
/**
 * Milan3PLHub child theme functions.
 *
 * @package milan3plhub
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load the child theme stylesheet on the front end.
 */
function milan3plhub_enqueue_styles() {
	wp_enqueue_style(
		'milan3plhub-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'milan3plhub_enqueue_styles' );

/**
 * Load the same stylesheet in the block editor so pages look right while editing.
 */
function milan3plhub_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'milan3plhub_editor_styles' );
