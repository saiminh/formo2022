<?php
/**
 * Short biography block pattern
 */
return array(
  'title'      => __( 'Short bio block', 'formo2022' ),
  'categories' => array( 'bios' ),
  'content'    => '
  <!-- wp:group {"align":"wide","className":"rounded-corners","layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignwide rounded-corners"><!-- wp:media-text {"mediaId":66,"mediaLink":"https://via.placeholder.com/400/0000BB/FFFFFF?text=Upload+Image+or+Video","mediaType":"image","mediaWidth":20,"mediaSizeSlug":"large","imageFill":true,"focalPoint":{"x":0.51,"y":0.41},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"formo-grey"} -->
  <div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill has-formo-grey-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;grid-template-columns:20% auto"><figure class="wp-block-media-text__media" style="background-image:url(https://via.placeholder.com/400/0000BB/FFFFFF?text=Upload+Image+or+Video);background-position:51% 41%"><img src="https://via.placeholder.com/400/0000BB/FFFFFF?text=Upload+Image+or+Video" alt="" class="wp-image-66 size-large"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":"2em","className":"","hideOnMobile":false} -->
  <div style="height:2em" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:heading {"level":4} -->
  <h4>Oscar zt</h4>
  <!-- /wp:heading -->

  <!-- wp:paragraph -->
  <p>Oscar is a passionate writer and researcher who is deeply committed to raising awareness of the food system and its negative impacts on the health and well-being of society. He believes that it is essential to have a better understanding of how the food system works, and the implications of its current state on current and future generations.</p>
  <!-- /wp:paragraph -->

  <!-- wp:spacer {"height":"2em","className":"","hideOnMobile":false} -->
  <div style="height:2em" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer --></div></div>
  <!-- /wp:media-text --></div>
  <!-- /wp:group -->  
  ',
  );