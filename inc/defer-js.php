<?php
/**
 * Formo 2022: Defer JS
 *
 * @since Formo 2022 1.0
 */

/**
 * Tells certain scripts to defer
 *
 * @since Formo 2022 1.0
 *
 * @return void
 */

 function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; //don't break WP Admin
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

//This solution would be more granular, but then I don't know the handles of the plugins

// function mind_defer_scripts( $tag, $handle, $src ) {
//   $defer = array( 
//     'formo-popover-js',
//     'formo-glassdoor-reviews',
//     'formo-jobs-listing-js',

//   );
//   if ( in_array( $handle, $defer ) ) {
//      return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
//   }
//   return $tag;
// } 
// add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );