<?php
/**
 * Default header block pattern
 */
return array(
  'title'      => __( 'Blog post', 'formo2022' ),
  'categories' => array( 'pages' ),
  'content'    => '<!-- wp:post-featured-image {"align":"full"} /-->

  <!-- wp:group {"align":"full","backgroundColor":"formo-cream","textColor":"formo-darktone"} -->
  <div class="wp-block-group alignfull has-formo-darktone-color has-formo-cream-background-color has-text-color has-background" id="post-content"><!-- wp:group {"className":"span6 offset2"} -->
  <div class="wp-block-group span6 offset2"><!-- wp:spacer {"height":"50px"} -->
  <div style="height:50px" aria-hidden="true" class="wp-block-spacer hide-on-mobile"></div>
  <!-- /wp:spacer -->

  <!-- wp:group {"style":{"spacing":{"blockGap":"0.5em","padding":{"bottom":"1em"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
  <div class="wp-block-group" style="padding-bottom:1em"><!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":"A science article by","style":{"color":{}}} /-->

  <!-- wp:post-date /--></div>
  <!-- /wp:group -->

  <!-- wp:post-title {"level":1} /--></div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"span6 offset3"} -->
  <div class="wp-block-group span6 offset3"><!-- wp:paragraph -->
  <p>Just put there to hold a place. Meaningless ramblings. They do hold a place for the real content, but they don\'t hold a real place in our hearts. </p>
  <!-- /wp:paragraph -->

  <!-- wp:paragraph -->
  <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! Welcome to WordPress. This is your first post. Edit or delete it, then start writing! </p>
  <!-- /wp:paragraph --></div>
  <!-- /wp:group -->

  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column {"className":"span8 offset1"} -->
  <div class="wp-block-column span8 offset1"><!-- wp:image {"id":516,"sizeSlug":"full","linkDestination":"none"} -->
  <figure class="wp-block-image size-full"><img src="http://formo2022.local/wp-content/uploads/2022/09/cheese-head.png" alt="" class="wp-image-516"/></figure>
  <!-- /wp:image -->

  <!-- wp:paragraph {"className":"span5 offset2"} -->
  <p class="span5 offset2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <!-- /wp:paragraph -->

  <!-- wp:quote {"className":"span6 offset1 has-formo-blue-color has-text-color","fontSize":"large"} -->
  <blockquote class="wp-block-quote span6 offset1 has-formo-blue-color has-text-color has-large-font-size"><!-- wp:paragraph -->
  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <!-- /wp:paragraph --></blockquote>
  <!-- /wp:quote --></div>
  <!-- /wp:column -->

  <!-- wp:column {"verticalAlignment":"center","className":"span3"} -->
  <div class="wp-block-column is-vertically-aligned-center span3"><!-- wp:image {"sizeSlug":"large"} -->
  <figure class="wp-block-image size-large"><img src="https://media0.giphy.com/media/7fwBcr9lB0Fos/giphy.gif?cid=ecf05e47bjmuhbv5lrrwcpaw9lkk65b94octikr2c2yiq255&amp;rid=giphy.gif&amp;ct=g" alt=""/></figure>
  <!-- /wp:image --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns --></div>
  <!-- /wp:group -->',
  );