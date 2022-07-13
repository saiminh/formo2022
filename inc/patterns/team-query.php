<?php
/**
 * Default header block pattern
 */
return array(
	'title'      => __( 'All Team members with Video', 'formo2022' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:query {"query":{"offset":0,"postType":"formo2022_teammember","order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":100},"displayLayout":{"type":"flex","columns":5},"className":"formo2022_teammember","layout":{"inherit":true}} -->
  <div class="wp-block-query formo2022_teammember"><!-- wp:post-template -->
  <!-- wp:post-content /-->
  <!-- /wp:post-template --></div>
  <!-- /wp:query -->',
);
