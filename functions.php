<?php
/**
 * Formo 2022 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Formo 2022
 * @since Formo 2022 1.0
 */


if ( ! function_exists( 'formo2022_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Formo 2022 1.0
	 *
	 * @return void
	 */
	function formo2022_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'index.css' );

	}

endif;

add_action( 'after_setup_theme', 'formo2022_support' );

if ( ! function_exists( 'formo2022_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Formo 2022 1.0
	 *
	 * @return void
	 */
	function formo2022_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'formo2022-style',
			get_template_directory_uri() . '/index.css',
			array(),
			$version_string
		);
		// Enqueue theme stylesheet.
		wp_enqueue_style( 'formo2022-style' );

    wp_register_script( 'runtime', get_template_directory_uri().'/js-dist/runtime.js', [], $version_string, true );
    wp_enqueue_script( 'runtime' );
    wp_register_script( 'global-js', get_template_directory_uri().'/js-dist/index.js', [], $version_string, true );
    wp_enqueue_script( 'global-js' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'formo2022_styles' );

// Remove WP default block patterns
add_action('init', function() {
  remove_theme_support('core-block-patterns');
});

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add custom post types
require get_template_directory() . '/inc/custom-post-types.php';

// Customise admin
require get_template_directory() . '/inc/customise-admin.php';
