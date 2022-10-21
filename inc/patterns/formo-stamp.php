<?php
/**
 * Default footer
 */
return array(
  'title'      => __( 'Formo stamp', 'formo2022' ),
  'categories' => array( 'graphics' ),
  'blockTypes' => array( 'core/template-part/footer' ),
  'content'    => '
    <!-- wp:image {"align":"center","id":226,"sizeSlug":"large","linkDestination":"none","className":"formo-stamp"} -->
    <figure class="wp-block-image aligncenter size-large formo-stamp">
      <img src="' . esc_url( get_template_directory_uri() ) . '/assets/graphics/formo-stamp-01.svg" alt="' . esc_attr__( 'The formo stamp of quality', 'formo2022' ) . '" />
    </figure>
    <!-- /wp:image -->
  ',
);