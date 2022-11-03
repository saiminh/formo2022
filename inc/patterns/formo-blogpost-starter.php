<?php
/**
 * Default header block pattern
 */
return array(
  'title'      => __( 'Hero with Video', 'formo2022' ),
  'categories' => array( 'header' ),
  'blockTypes' => array( 'core/template-part/header' ),
  'content'    => '
    <!-- wp:post-featured-image {"align":"full"} /-->

    <!-- wp:group {"align":"full","backgroundColor":"formo-cream","textColor":"formo-darktone"} -->
    <div class="wp-block-group alignfull has-formo-darktone-color has-formo-cream-background-color has-text-color has-background" id="post-content"><!-- wp:group {"className":"span6 offset2"} -->
    <div class="wp-block-group span6 offset2"><!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"0.5em","padding":{"bottom":"1em"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
    <div class="wp-block-group" style="padding-bottom:1em"><!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":"A science article by","style":{"color":{}}} /-->

    <!-- wp:post-date /--></div>
    <!-- /wp:group -->

    <!-- wp:post-title {"level":1} /--></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"span6 offset3"} -->
    <div class="wp-block-group span6 offset3"><!-- wp:paragraph -->
    <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! Welcome to WordPress. This is your first post. Edit or delete it, then start writing!  Welcome to WordPress. This is your first post. Edit or delete it, then start writing! Welcome to WordPress. This is your first post. Edit or delete it, then start writing! </p>
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
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div id="post-nav" class="wp-block-group"><!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":4},"layout":{"inherit":true}} -->
    <div class="wp-block-query"><!-- wp:query-no-results -->
    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
    <p></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results --></div>
    <!-- /wp:query -->

    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div id="post-navigation" class="wp-block-group"><!-- wp:heading {"level":3} -->
    <h3>More posts</h3>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":4},"layout":{"inherit":true}} -->
    <div class="wp-block-query"><!-- wp:post-template {"className":"more-posts-query"} -->
    <!-- wp:post-featured-image {"isLink":true} /-->

    <!-- wp:post-terms {"term":"category"} /-->

    <!-- wp:post-title {"isLink":true} /-->

    <!-- wp:read-more /-->
    <!-- /wp:post-template -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
    <p></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results --></div>
    <!-- /wp:query -->

    <!-- wp:group {"align":"wide","className":"post-single-postnav","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide post-single-postnav"><!-- wp:post-navigation-link {"type":"previous","label":"← Previous article"} /-->

    <!-- wp:post-navigation-link {"label":"Next article →"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"mailchimp-form span6 offset3"} -->
    <div id="newsletter" class="wp-block-group mailchimp-form span6 offset3"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}},"border":{"radius":{"topLeft":"15px","topRight":"15px"}}},"backgroundColor":"formo-grey"} -->
    <div class="wp-block-group has-formo-grey-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"level":3,"textColor":"formo-darktone"} -->
    <h3 class="has-formo-darktone-color has-text-color">Stay i<span class="wide">n</span> t<span class="wide">h</span>e loop.</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:html -->
    <!-- Begin Mailchimp Signup Form -->
    <div id="mc_embed_signup">
        <form action="https://design.us18.list-manage.com/subscribe/post?u=0f1330d14fe8191b9c79a04d4&amp;id=14e0b847b6&amp;v_id=5138&amp;f_id=00a521e7f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
            <div id="mc_embed_signup_scroll">
            <h2>Subscribe</h2>
            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
    <div class="mc-field-group">
      <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
    </label>
      <input type="email" value="" name="EMAIL" placeholder="Email" class="required email" id="mce-EMAIL" required="">
      <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
    </div>
    <div class="mc-field-group input-group">
        <strong>Email Format </strong>
        <ul><li><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0"><label for="mce-EMAILTYPE-0">html</label></li>
    <li><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"><label for="mce-EMAILTYPE-1">text</label></li>
    </ul>
    </div>
    <p><a href="https://us18.campaign-archive.com/home/?u=0f1330d14fe8191b9c79a04d4&amp;id=14e0b847b6" title="View previous campaigns">View previous campaigns.</a></p>
    <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
        <div class="content__gdpr">
            <label>Marketing Permissions</label>
            <p>Please select all the ways you would like to hear from Simon Floter:</p>
            <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
        <label class="checkbox subfield" for="gdpr_93454"><input type="checkbox" id="gdpr_93454" name="gdpr[93454]" value="Y" class="av-checkbox "><span>Email</span> </label>
            </fieldset>
            <p>You can unsubscribe at any time by clicking the link in the footer of our emails. For information about our privacy practices, please visit our website.</p>
        </div>
        <div class="content__gdprLegal">
            <p>We use Mailchimp as our marketing platform. By clicking below to subscribe, you acknowledge that your information will be transferred to Mailchimp for processing. <a href="https://mailchimp.com/legal/terms" target="_blank" rel="noopener">Learn more about Mailchimp\'s privacy practices here.</a></p>
        </div>
    </div>
      <div id="mce-responses" class="clear foot">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0f1330d14fe8191b9c79a04d4_14e0b847b6" tabindex="-1" value=""></div>
            <div class="optionalParent">
                <div class="clear foot">
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                    <p class="brandingLogo"><a href="http://eepurl.com/iaivM5" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
                </div>
            </div>
        </div>
    </form>
    </div>

    <!--End mc_embed_signup-->
    <!-- /wp:html --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
  );