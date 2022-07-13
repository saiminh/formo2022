<?php
/**
 * Default header block pattern
 */
return array(
	'title'      => __( 'Hero with Video', 'formo2022' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","textColor":"background","className":"formo-hero-video"} -->
  <div class="wp-block-group alignfull formo-hero-video has-background-color has-text-color"><!-- wp:video {"className":"formo-hero-video-video"} -->
  <figure class="wp-block-video formo-hero-video-video"><video autoplay loop muted src="https://prismic-io.s3.amazonaws.com/formo/7082ed05-190f-4b07-9f9e-a6f6f1df796f_210910_formo_sizzle_home.mp4"></video></figure>
  <!-- /wp:video -->
  
  <!-- wp:group {"className":"formo-hero-video-text"} -->
  <div class="wp-block-group formo-hero-video-text"><!-- wp:paragraph -->
  <p>We’re using microorganisms instead of animals to produce</p>
  <!-- /wp:paragraph -->
  
  <!-- wp:heading -->
  <h2>Cheese Humans Love</h2>
  <!-- /wp:heading --></div>
  <!-- /wp:group --></div>
  <!-- /wp:group -->',
);
