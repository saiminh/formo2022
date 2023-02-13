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
		// add_theme_support( 'wp-block-styles' );

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

    // Dequeue the default Gutenberg stylesheets? 
    // wp_dequeue_style( 'wp-block-library' );
    // wp_dequeue_style( 'wp-block-library-theme' );
    // wp_dequeue_style( 'global-styles' );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'formo2022-style' );

    //register and enqueue JS
    wp_register_script( 'runtime', get_template_directory_uri().'/js-dist/runtime.js', [], $version_string, true );
    wp_register_script( 'global-js', get_template_directory_uri().'/js-dist/index.js', [], $version_string, true );
    wp_enqueue_script( 'runtime' );
    wp_enqueue_script( 'global-js' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'formo2022_styles' );

// Remove those filters from the body
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

// Remove WP default block patterns
add_action('init', function() {
  remove_theme_support('core-block-patterns');
});

// Add theme's own block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add theme's custom post types
require get_template_directory() . '/inc/custom-post-types.php';

// Customise admin area
require get_template_directory() . '/inc/customise-admin.php';

// Custom image sizes
require get_template_directory() . '/inc/custom-image-sizes.php';

// Adding support for certain span tags in Gutenberg
function addspansupport(){
  wp_enqueue_script(
    'addspansupport',
    get_template_directory_uri().'/js-src/addspansupport.js',
    array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-editor'),
    '1.0', 
    true
  );
}
add_action('enqueue_block_editor_assets', 'addspansupport');

// Remove jQuery
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate($scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
    }
}

// Change receipient of simple email contact from
add_filter( 'mcfb_email_to', function ( $to, $form ) {
  $to = 'hello@formo.bio';
  return $to;
}, 10, 2 );
