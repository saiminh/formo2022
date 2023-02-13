<?php
/**
 * Formo 2022: Custom Image Sizes
 *
 * @since Formo 2022 1.0
 */

/**
 * Registers custom image sizes.
 *
 * @since Formo 2022 1.0
 *
 * @return void
 */

//------------------------
// Responsive image sizes
//------------------------

add_theme_support( 'post-thumbnails' );

function add_image_sizes() {
  add_image_size( 'half-screen-width', 1500, 1500, false );
  add_image_size( 'quarter-screen-width', 750, 750, false );
}
add_action('after_setup_theme', 'add_image_sizes');

function formo_custom_sizes( $sizes ) {
  return array_merge( $sizes, array(
    'half-screen-width' => __( 'Half Screen width' ),
    'quarter-screen-width' => __( 'Quarter Screen width' ),
    ) );
}
add_filter( 'image_size_names_choose', 'formo_custom_sizes' );

function my_content_image_sizes_attr( $sizes, $size ) {
    $width = $size[0];
    
    if ( $width === 1500 ) { //half
      $sizes = '(min-width: 782px) 47vw, 95vw';
    }
    if ( $width === 750) { //quarte
      $sizes = '(min-width: 782px) 24vw, 95vw';
    }
      
  return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'my_content_image_sizes_attr', 10, 5 );