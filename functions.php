<?php
/**
 * Soivigol Block Theme Functions
 *
 * @package    soivigol-block-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue styles to Soivigol Block Theme.
 */
function soivigol_enqueue_scripts() {
	wp_enqueue_style(
		'soivigol-main-stye',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' ),
	);
}
add_action( 'wp_enqueue_scripts', 'soivigol_enqueue_scripts' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since Twenty Twenty-Two 1.0
 *
 * @return void
 */
function soivigol_add_support() {

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

}

add_action( 'after_setup_theme', 'soivigol_add_support' );