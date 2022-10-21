<?php
/**
 * Default header block pattern
 */
return array(
	'title'      => __( 'Hero with Image', 'formo2022' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","textColor":"background","className":"formo-hero"} -->
  <div class="wp-block-group alignfull formo-hero has-background-color has-text-color"><!-- wp:image {"id":553,"sizeSlug":"large","linkDestination":"none","className":"formo-hero-image"} -->
  <figure class="wp-block-image size-large formo-hero-image"><img src="http://formo2022.local/wp-content/uploads/2022/09/2_190424_153849-1-1024x618.jpg" alt="" class="wp-image-553"/></figure>
  <!-- /wp:image -->
  
  <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"textColor":"formo-cream","className":"formo-hero-text"} -->
  <div class="wp-block-group formo-hero-text has-formo-cream-color has-text-color"><!-- wp:columns {"className":"grid"} -->
  <div class="wp-block-columns grid"><!-- wp:column {"width":"50%","className":"span9 gridline content-bottom"} -->
  <div class="wp-block-column span9 gridline content-bottom" style="flex-basis:50%"><!-- wp:heading {"textAlign":"left","level":1} -->
  <h1 class="has-text-align-left">C<span class="wide">H</span>eese li<span class="wide">k</span>e you\'ve <span class="outlined">never</span> <span class="special">always</span> kn<span class="wide">o</span>wn</h1>
  <!-- /wp:heading --></div>
  <!-- /wp:column -->
  
  <!-- wp:column {"width":"50%","className":"span3"} -->
  <div class="wp-block-column span3" style="flex-basis:50%"></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns {"className":"grid"} -->
  <div class="wp-block-columns grid"><!-- wp:column {"width":"33.33%","className":"span3 gridline"} -->
  <div class="wp-block-column span3 gridline" style="flex-basis:33.33%"><!-- wp:paragraph -->
  <p>Using microorganisms instead of animals to produce the cheese humans love.</p>
  <!-- /wp:paragraph --></div>
  <!-- /wp:column -->
  
  <!-- wp:column {"width":"33.33%","className":"span6 gridline"} -->
  <div class="wp-block-column span6 gridline" style="flex-basis:33.33%"></div>
  <!-- /wp:column -->
  
  <!-- wp:column {"width":"33.33%","className":"span3"} -->
  <div class="wp-block-column span3" style="flex-basis:33.33%"></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns --></div>
  <!-- /wp:group --></div>
  <!-- /wp:group -->',
);
