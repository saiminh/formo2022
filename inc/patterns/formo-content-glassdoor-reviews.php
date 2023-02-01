<?php
/**
 * Glassdoor Reviews block pattern
 */
return array(
  'title'      => __( 'Glassdoor Reviews', 'formo2022' ),
  'categories' => array( 'content' ),
  'content'    => '
  <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3em","bottom":"3em"}}},"backgroundColor":"formo-white","layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignfull has-formo-white-background-color has-background" id="glassdoor-reviews" style="padding-top:3em;padding-bottom:3em"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"x-large"} -->
  <h3 class="has-text-align-center has-x-large-font-size">Fi<span class="wide">n</span>d us <span class="wide">o</span>n</h3>
  <!-- /wp:heading -->

  <!-- wp:spacer {"height":"37px","className":"","hideOnMobile":false} -->
  <div style="height:37px" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:group {"align":"wide","style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"borderColor":"formo-grey","layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignwide has-border-color has-formo-grey-border-color" style="border-width:2px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:create-block/formo-glassdoor-reviews {"reviews":[{"text":"Warm and friendly environment in which to grow and be challenged","author":"Current Employee","location":"Berlin, Germany"}]} -->
  <div class="wp-block-create-block-formo-glassdoor-reviews"><a class="glassdoorScore" href="https://www.glassdoor.com/Overview/Working-at-Formo-Bio-EI_IE6951338.11,20.htm"><img alt="Find us on Glassdoor." src="https://www.glassdoor.com/api/widget/horizontalStarRating.htm?e=6951338"/></a><div class="swiper"><div class="swiper-wrapper"><div class="swiper-slide"><p class="reviewtext">Warm and friendly environment in which to grow and be challenged</p><div class="reviewauthor"><strong class="reviewauthorname">Current Employee</strong> in Berlin, Germany</div></div></div><div class="swiper-pagination"></div><div class="swiper-button-prev"></div><div class="swiper-button-next"></div></div></div>
  <!-- /wp:create-block/formo-glassdoor-reviews -->

  <!-- wp:buttons -->
  <div class="wp-block-buttons"><!-- wp:button {"textColor":"formo-darktone","align":"center","style":{"color":{"background":"#59ee88"}}} -->
  <div class="wp-block-button aligncenter"><a class="wp-block-button__link has-formo-darktone-color has-text-color has-background wp-element-button" href="https://www.glassdoor.com/Overview/Working-at-Formo-Bio-EI_IE6951338.11,20.htm" style="background-color:#59ee88">Go to glassdoor </a></div>
  <!-- /wp:button --></div>
  <!-- /wp:buttons --></div>
  <!-- /wp:group -->

  <!-- wp:paragraph {"align":"center","fontSize":"large"} -->
  <p class="has-text-align-center has-large-font-size">Follow us on social to get a look inside</p>
  <!-- /wp:paragraph -->

  <!-- wp:social-links {"iconBackgroundColor":"cyan-bluish-gray","iconBackgroundColorValue":"#abb8c3","size":"has-large-icon-size","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
  <ul class="wp-block-social-links aligncenter has-large-icon-size has-icon-background-color"><!-- wp:social-link {"url":"https://twitter.com/eatformo","service":"twitter"} /-->

  <!-- wp:social-link {"url":"facebook.con","service":"facebook"} /-->

  <!-- wp:social-link {"url":"https://www.instagram.com/eatformo/","service":"instagram"} /-->

  <!-- wp:social-link {"url":"https://www.linkedin.com/company/eat-formo/","service":"linkedin"} /-->

  <!-- wp:social-link {"url":"https://medium.com/formo","service":"medium"} /--></ul>
  <!-- /wp:social-links --></div>
  <!-- /wp:group -->  
  ',
  );