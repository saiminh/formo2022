<?php
/**
 * Default Recipe content pattern
 */
return array(
  'title'      => __( 'The recipe template', 'formo2022' ),
  'categories' => array( 'query' ),
  'blockTypes' => array( 'core/query' ),
  'content'    => '
  <!-- wp:post-featured-image {"aspectRatio":"16/9","width":"100%","height":"","className":"formo-recipe-page-featured-image"} /-->

  <!-- wp:group {
    "className":"formo-recipe-page-content",
    "style":{
      "elements":{
        "link":{
          "color":{
            "text":"var:preset|color|formo-cream"
          }
        }
      }
    },
    "backgroundColor":"formo-blue",
    "textColor":"formo-cream",
    "layout":{
      "type":"constrained"
    }
  } -->
  <div class="wp-block-group formo-recipe-page-content has-formo-cream-color has-formo-blue-background-color has-text-color has-background has-link-color">

    <!-- wp:columns -->
    <div class="wp-block-columns">

      <!-- wp:column {"width":"50%","className":"span7"} -->
      <div class="wp-block-column  span7" style="flex-basis:50%">
      
        <!-- wp:spacer {"height":"1rem","className":"  hide-on-desktop","hideOnDesktop":true} -->
        <div style="height:1rem" aria-hidden="true" class="wp-block-spacer  hide-on-desktop"></div>
        <!-- /wp:spacer -->

        <!-- wp:spacer {"height":"2rem","className":" hide-on-mobile","hideOnMobile":true} -->
        <div style="height:2rem" aria-hidden="true" class="wp-block-spacer  hide-on-mobile"></div>
        <!-- /wp:spacer -->

        <!-- wp:create-block/formo-recipe-header {"className":"wp-block-create-block-formo-recipe-header"} /-->

        <!-- wp:spacer {"height":"2em"} -->
        <div style="height:2em" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
      
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"50%","className":" span2 gridline"} -->
      <div class="wp-block-column  span2 gridline" style="flex-basis:50%"></div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"50%","className":" span3"} -->
      <div class="wp-block-column  span3" style="flex-basis:50%"></div>
      <!-- /wp:column -->
    
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns -->
    <div class="wp-block-columns">

      <!-- wp:column {"width":"50%","className":"span6"} -->
      <div class="wp-block-column  span6" style="flex-basis:50%">

        <!-- wp:paragraph -->
        <p><strong>Preparation</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:list {"ordered":true} -->
        <ol class="wp-block-list">
        
          <!-- wp:list-item -->
          <li>Flame on:&nbsp;Fire up your oven to a burning 190°C.</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>Base Preparation:&nbsp;Roll out the puff pastry and gently fit into a 24 cm quiche pan. Fork the base lightly to prevent puffing during baking.</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>Cheese Mixture Mastery:&nbsp;In a mixing bowl, combine Frischhain, Hellasdorf, vegan cream, olive oil, chopped garlic, fresh thyme, lemon zest and juice, nutmeg, salt, and pepper. Mix until smooth and irresistibly creamy.</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>Beetroot Preparation:&nbsp;Peel and roughly chop the beetroot. Transfer to a food processor, add olive oil, honey, lemon zest, salt, and pepper. Pulse until combined but still retaining some texture.</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>Assemble the Artistry:&nbsp;Spread the cheese mixture evenly over the pastry base. Top with the beetroot mix, smoothing it out for an even layer.</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>Garnish with Gusto:&nbsp;Arrange the red onion rings over the beetroot layer. This not only adds flavor but also makes your quiche look like a piece of art.</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>Bake the Beauty:&nbsp;Place in the oven and bake for 15 minutes. Then, drizzle a little honey over the top and sprinkle with walnuts for an extra touch of sweetness and crunch. Continue baking for another 10 minutes or until golden and set.</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item -->
          <li>Cool and Conquer:&nbsp;Let the quiche cool slightly before slicing. Serve warm and watch as each slice disappears faster than you can say “Beetroot Bliss.”</li>
          <!-- /wp:list-item -->
        </ol>
        <!-- /wp:list -->

        <!-- wp:paragraph -->
        <p>Enjoy your Frischhain &amp; Hellasdorf Beetroot Quiche – a perfect blend of creamy, tangy, and sweet with a crunchy finish. Bon appétit!</p>
        <!-- /wp:paragraph -->

        <!-- wp:spacer {"className":" hide-on-mobile","hideOnMobile":true} -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer  hide-on-mobile"></div>
        <!-- /wp:spacer -->
      
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"50%","className":"  gridline span3"} -->
      <div class="wp-block-column  gridline span3" style="flex-basis:50%"></div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"50%","className":" span3"} -->
      <div class="wp-block-column  span3" style="flex-basis:50%">

        <!-- wp:spacer {"height":"1rem","className":"  hide-on-desktop","hideOnDesktop":true} -->
        <div style="height:1rem" aria-hidden="true" class="wp-block-spacer  hide-on-desktop"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph -->
        <p><strong>Ingredients</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul class="wp-block-list">
        
          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">1 sheet puff pastry</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">Filling</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">150g Hellasdorf</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">150g Frischhain</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">50g vegan cream</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">1 tbsp olive oil</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">1 clove garlic</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">2-3 twigs fresh thyme</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">¼ lemon (juice + zest)</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">a pinch of nutmeg</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">to taste: salt &amp; pepper</li>
          <!-- /wp:list-item -->
        
        </ul>
        <!-- /wp:list -->

        <!-- wp:paragraph -->
        <p><strong>Beetroot Mix</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul class="wp-block-list">
          
          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">1 large beetroot</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">1 tsp olive oil</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">1 tsp honey</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">a bit of lemon zest</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">to taste: salt &amp; pepper</li>
          <!-- /wp:list-item -->
        
        </ul>
        <!-- /wp:list -->

        <!-- wp:paragraph -->
        <p><strong>Additional Toppings</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul class="wp-block-list">
        
          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">1 medium-sized red onion</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">a bit of honey</li>
          <!-- /wp:list-item -->

          <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"0.1em","bottom":"0.1em"}}}} -->
          <li style="margin-top:0.1em;margin-bottom:0.1em">a few walnuts</li>
          <!-- /wp:list-item -->
        
        </ul>
        <!-- /wp:list -->

      </div>
      <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

  <!-- wp:columns -->
  <div class="wp-block-columns">
  
    <!-- wp:column {"width":"50%","className":"     span7"} -->
    <div class="wp-block-column  span7" style="flex-basis:50%">
  
      <!-- wp:columns -->
      <div class="wp-block-columns">
  
        <!-- wp:column {"className":"  span2"} -->
        <div class="wp-block-column  span2">
        
          <!-- wp:spacer {"height":"1rem","className":" hide-on-desktop","hideOnDesktop":true} -->
          <div style="height:1rem" aria-hidden="true" class="wp-block-spacer  hide-on-desktop"></div>
          <!-- /wp:spacer -->

          <!-- wp:paragraph -->
          <p><strong>SHARE</strong></p>
          <!-- /wp:paragraph -->

          <!-- wp:social-links {"iconColor":"formo-cream","iconColorValue":"#fff7e8","className":"is-style-logos-only formo-share formo-share-recipe","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
          <ul class="wp-block-social-links has-icon-color is-style-logos-only formo-share formo-share-recipe">
          
            <!-- wp:social-link {"url":"hank","service":"pinterest"} /-->

            <!-- wp:social-link {"url":"yank","service":"instagram"} /-->

          </ul>
          <!-- /wp:social-links -->

          <!-- wp:spacer {"height":"1rem"} -->
          <div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->
        
          </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":" span6"} -->
        <div class="wp-block-column  span6">
    
        <!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"border":{"radius":"12px"}}} /-->
        
        </div>
        <!-- /wp:column -->
      
      </div>
      <!-- /wp:columns -->

      <!-- wp:spacer -->
      <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->
      
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%","className":" span2 gridline"} -->
    <div class="wp-block-column  span2 gridline" style="flex-basis:50%"></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%","className":" span3"} -->
    <div class="wp-block-column  span3" style="flex-basis:50%"></div>
    <!-- /wp:column -->
  
  </div>
  <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"formo-recipe-page-other-recipes","style":{"elements":{"link":{"color":{"text":"var:preset|color|formo-blue"}}}},"backgroundColor":"formo-cream","textColor":"formo-blue","layout":{"type":"constrained"}} -->
<div class="wp-block-group formo-recipe-page-other-recipes has-formo-blue-color has-formo-cream-background-color has-text-color has-background has-link-color">
  
  <!-- wp:spacer {"height":"4rem"} -->
  <div style="height:4rem" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"xx-large"} -->
  <h2 class="wp-block-heading has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">Other recipes</h2>
  <!-- /wp:heading -->

  <!-- wp:query {"queryId":20,"query":{"perPage":"4","pages":0,"offset":0,"postType":"formo2022_recipe","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"className":"recipe-query-alternating-colors"} -->
  <div class="wp-block-query recipe-query-alternating-colors">
  
    <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->

      <!-- wp:group {"className":"   ","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"dimensions":{"minHeight":"100%"},"elements":{"link":{"color":{"text":"var:preset|color|formo-cream"}}}},"backgroundColor":"formo-yellow","textColor":"formo-cream","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"space-between"}} -->
      <div class="wp-block-group has-formo-cream-color has-formo-yellow-background-color has-text-color has-background has-link-color" style="border-radius:12px;min-height:100%;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
    
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"100%","height":"100%","style":{"border":{"radius":"12px"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

          <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":"100%"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
          <div class="wp-block-group" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
      
            <!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontSize":"larger"} /-->

            <!-- wp:post-terms {"term":"main_ingredient","separator":" \u0026 ","prefix":"with ","style":{"typography":{"textTransform":"uppercase","lineHeight":"1.1"}},"fontSize":"medium"} /-->
          
            </div>
          <!-- /wp:group -->
          
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
        
          <!-- wp:read-more {"content":"More","className":"wp-block-button__link","style":{"elements":{"link":{"color":{"text":"var:preset|color|formo-darktone"}}},"border":{"width":"0px","style":"none"},"spacing":{"margin":{"top":"var:preset|spacing|40"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"layout":{"selfStretch":"fit","flexSize":null}},"backgroundColor":"formo-cream","textColor":"formo-darktone","fontSize":"small"} /-->
          
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    
    <!-- /wp:post-template -->
  
  </div>
  <!-- /wp:query -->

  <!-- wp:spacer {"height":"4rem"} -->
  <div style="height:4rem" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

</div>
<!-- /wp:group -->
  '
);