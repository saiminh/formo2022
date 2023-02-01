<?php
/**
 * Short biography block pattern
 */
return array(
  'title'      => __( 'Short bio block with thumbnail', 'formo2022' ),
  'categories' => array( 'bios' ),
  'content'    => '
  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"1.5em","right":"1.5em","bottom":"1.5em","left":"1.5em"}}},"backgroundColor":"formo-grey","className":"bio bio-with-thumbnail rounded-corners","layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignwide bio bio-with-thumbnail rounded-corners has-formo-grey-background-color has-background" style="padding-top:1.5em;padding-right:1.5em;padding-bottom:1.5em;padding-left:1.5em"><!-- wp:columns {"align":"wide"} -->
  <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"20%"} -->
  <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:20%"><!-- wp:image {"id":66,"sizeSlug":"large","style":{"border":{"radius":"15px"}}} -->
  <figure class="wp-block-image size-large has-custom-border"><img src="https://via.placeholder.com/400/0000BB/FFFFFF?text=Upload+Image+or+Video" alt="" class="wp-image-66" style="border-radius:15px"/></figure>
  <!-- /wp:image --></div>
  <!-- /wp:column -->

  <!-- wp:column {"width":"80%"} -->
  <div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"level":4} -->
  <h4>Oscar zt</h4>
  <!-- /wp:heading -->

  <!-- wp:paragraph -->
  <p>Oscar is a passionate writer and researcher who is deeply committed to raising awareness of the food system and its negative impacts on the health and well-being of society. He believes that it is essential to have a better understanding of how the food system works, and the implications of its current state on current and future generations.</p>
  <!-- /wp:paragraph --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns --></div>
  <!-- /wp:group -->  
  ',
  );