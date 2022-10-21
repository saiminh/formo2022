<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'formo2022' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
    <!-- wp:group {"className":"footer-row","layout":{"type":"flex","orientation":"horizontal","verticalAlignment":"top","alignItems":"flex-start","flexWrap":"nowrap"}} -->
    <div class="wp-block-group footer-row"><!-- wp:group {"className":"footer-row-column"} -->
    <div class="wp-block-group footer-row-column"><!-- wp:paragraph -->
    <p><a href="https://www.instagram.com/eatformo/" data-type="URL" data-id="https://www.instagram.com/eatformo/">Home</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><a href="/cheese" data-type="URL" data-id="/cheese">Cheese</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><a href="/mission">Mission</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><a href="/method">Method</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><a href="/team">Team</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"footer-row-column"} -->
    <div class="wp-block-group footer-row-column"><!-- wp:paragraph -->
    <p><a href="/news">News</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><a href="/work-with-us">Work with us</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"footer-row-column"} -->
    <div class="wp-block-group footer-row-column"><!-- wp:paragraph -->
    <p><a href="https://www.instagram.com/eatformo/" data-type="URL" data-id="https://www.instagram.com/eatformo/">Instagram</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><a href="https://twitter.com/eatformo" data-type="URL" data-id="https://twitter.com/eatformo">Twitter</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><a href="https://www.linkedin.com/company/eat-formo/" data-type="URL" data-id="https://www.linkedin.com/company/eat-formo/">Linkedin</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"footer-row-column"} -->
    <div class="wp-block-group footer-row-column"><!-- wp:paragraph -->
    <p>Email</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p>Contact</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
  ',
);
