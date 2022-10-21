<?php
/**
 * Default header block pattern
 */
return array(
	'title'      => __( 'Hero with Video', 'formo2022' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","textColor":"background","className":"formo-hero"} -->
  <div class="wp-block-group alignfull formo-hero has-background-color has-text-color"><!-- wp:video {"className":"formo-hero-video"} -->
  <figure class="wp-block-video formo-hero-video"><video loop muted src="https://prismic-io.s3.amazonaws.com/formo/7082ed05-190f-4b07-9f9e-a6f6f1df796f_210910_formo_sizzle_home.mp4" ></video></figure>
  <!-- /wp:video -->
  
  <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"textColor":"formo-cream","className":"formo-hero-text"} -->
  <div class="wp-block-group formo-hero-text has-formo-cream-color has-text-color"><!-- wp:columns {"className":"grid"} -->
  <div class="wp-block-columns grid"><!-- wp:column {"width":"50%","className":"span9 gridline content-bottom"} -->
  <div class="wp-block-column span9 gridline content-bottom" style="flex-basis:50%"><!-- wp:heading {"textAlign":"left","level":1} -->
  <h1 class="has-text-align-left"><span class="smaller">The</span> <br>future <br><span class="smaller">of</span> dairy</h1>
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
