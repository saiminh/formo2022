<?php
/**
 * Jobs header block pattern
 */
return array(
	'title'      => __( 'Hero for Job page intro', 'formo2022' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"formo-grey","className":"gridline-middle-bg"} -->
  <div class="wp-block-group alignfull gridline-middle-bg has-formo-grey-background-color has-background" id="intro"><!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column {"className":"span6 gridline"} -->
  <div class="wp-block-column span6 gridline"><!-- wp:heading {"level":1,"textColor":"formo-blue"} -->
  <h1 class="has-formo-blue-color has-text-color"><span class="smaller">Working it </span><br>@formo</h1>
  <!-- /wp:heading --></div>
  <!-- /wp:column -->
  
  <!-- wp:column {"className":"span6"} -->
  <div class="wp-block-column span6"><!-- wp:spacer {"height":"10em"} -->
  <div style="height:10em" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column {"className":"span3"} -->
  <div class="wp-block-column span3"><!-- wp:paragraph -->
  <p>Trade your labour for compensation. And a mission. And frontier science. And time with beautiful, driven colleagues. And company benefits. And for special occasions, fun.</p>
  <!-- /wp:paragraph --></div>
  <!-- /wp:column -->
  
  <!-- wp:column {"className":"span3"} -->
  <div class="wp-block-column span3"><!-- wp:paragraph -->
  <p>It’s our mission to replace 10% <br>of European dairy by 2030.<br>It is a highly silly mission and <br>we want you to be part of it.</p>
  <!-- /wp:paragraph --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-buttons"><!-- wp:button {"fontSize":"small"} -->
  <div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button" href="#jobs">Cut to the chase, show me the jobs</a></div>
  <!-- /wp:button --></div>
  <!-- /wp:buttons --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:spacer -->
  <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer --></div>
  <!-- /wp:group -->',
);
