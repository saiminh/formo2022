<?php
/**
 * Default header block pattern
 */
return array(
  'title'      => __( 'Contact Page', 'formo2022' ),
  'categories' => array( 'pages' ),
  'content'    => '<!-- wp:group {"align":"full","backgroundColor":"formo-grey"} -->
  <div class="wp-block-group alignfull has-formo-grey-background-color has-background"><!-- wp:columns -->
  <div class="wp-block-columns" id="header"><!-- wp:column {"className":"span6 gridline"} -->
  <div class="wp-block-column span6 gridline"><!-- wp:spacer {"height":"50px"} -->
  <div style="height:50px" aria-hidden="true" class="wp-block-spacer hide-on-mobile"></div>
  <!-- /wp:spacer -->

  <!-- wp:heading -->
  <h2>R<span class="wide">e</span>ach <span class="wide">o</span>ut</h2>
  <!-- /wp:heading --></div>
  <!-- /wp:column -->

  <!-- wp:column {"className":"span6"} -->
  <div class="wp-block-column span6"></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->

  <!-- wp:spacer {"height":"20px"} -->
  <div style="height:20px" aria-hidden="true" class="wp-block-spacer hide-on-mobile"></div>
  <!-- /wp:spacer -->

  <!-- wp:columns -->
  <div class="wp-block-columns" id="content"><!-- wp:column {"className":"span4"} -->
  <div class="wp-block-column span4" id="blurb"><!-- wp:paragraph -->
  <p>Do you have a special message for us? Curious about what we’re about and what we’re up to?</p>
  <!-- /wp:paragraph -->

  <!-- wp:paragraph -->
  <p>Reach out, reach out using your internet hands.</p>
  <!-- /wp:paragraph --></div>
  <!-- /wp:column -->

  <!-- wp:column {"className":"span4"} -->
  <div class="wp-block-column span4" id="contact-form"><!-- wp:group {"backgroundColor":"formo-white","className":"formo-contact-form"} -->
  <div class="wp-block-group formo-contact-form has-formo-white-background-color has-background"><!-- wp:contact-form-block/contact-form-block {"button_color":"#0000ff"} -->
  [contact-form-block name_label="Name" 
      email_label="E-mail" 
      message_label="Message" 
      header="false" 
      header_image_id="null" 
      header_image_size="50" 
      header_image_align="left" 
      header_title="Get in Touch" 
      header_text="Leave your message and we\'ll get back to you shortly." 
      button_text="Send" 
      button_color="#0000ff" 
      button_text_color="white" 
      align="undefined" 
      theme="default" 
      message_rows="5"][/contact-form-block]
  <!-- /wp:contact-form-block/contact-form-block --></div>
  <!-- /wp:group --></div>
  <!-- /wp:column -->

  <!-- wp:column {"className":"span4"} -->
  <div class="wp-block-column span4" id="map"><!-- wp:webfactory/map {"zoom":12,"height":360,"address":"formo.bio"} -->
  <div class="wp-block-webfactory-map"><div class="wp-block-webfactory-map"><iframe width="100%" height="360px" src="https://www.google.com/maps/embed/v1/place?q=formo.bio&amp;maptype=roadmap&amp;zoom=12&amp;key=AIzaSyAjyDspiPfzEfjRSS5fQzm-3jHFjHxeXB4" frameborder="0"></iframe></div></div>
  <!-- /wp:webfactory/map -->

  <!-- wp:group {"style":{"border":{"radius":"40px"}},"backgroundColor":"formo-blue","textColor":"formo-grey","className":"pill","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
  <div class="wp-block-group pill has-formo-grey-color has-formo-blue-background-color has-text-color has-background" style="border-radius:40px"><!-- wp:paragraph -->
  <p>Looking for a job?</p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
  <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"formo-grey","textColor":"formo-darktone","fontSize":"small"} -->
  <div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-formo-darktone-color has-formo-grey-background-color has-text-color has-background wp-element-button" href="https://oscarz3.sg-host.com/work/">see our vacancies</a></div>
  <!-- /wp:button --></div>
  <!-- /wp:buttons --></div>
  <!-- /wp:group --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->

  <!-- wp:spacer {"height":"20px"} -->
  <div style="height:20px" aria-hidden="true" class="wp-block-spacer hide-on-mobile"></div>
  <!-- /wp:spacer -->

  <!-- wp:columns -->
  <div class="wp-block-columns" id="bottom-space"><!-- wp:column {"className":"span6 gridline"} -->
  <div class="wp-block-column span6 gridline"><!-- wp:spacer {"height":"200px"} -->
  <div style="height:200px" aria-hidden="true" class="wp-block-spacer hide-on-mobile"></div>
  <!-- /wp:spacer --></div>
  <!-- /wp:column -->

  <!-- wp:column {"className":"span6"} -->
  <div class="wp-block-column span6"></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns --></div>
  <!-- /wp:group -->',
  );