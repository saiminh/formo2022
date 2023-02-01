<?php
/**
 * Formo 2022: Block Patterns
 *
 * @since Formo 2022 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Formo 2022 1.0
 *
 * @return void
 */
function formo2022_register_block_patterns() {
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'formo2022' ) ),
		'content'  => array( 'label' => __( 'Content', 'formo2022' ) ),
		'bios'  => array( 'label' => __( 'Bios', 'formo2022' ) ),
		'header'   => array( 'label' => __( 'Headers', 'formo2022' ) ),
		'query'    => array( 'label' => __( 'Query', 'formo2022' ) ),
    'graphics' => array( 'label' => __( 'Graphics', 'formo2022' ) ),
    'forms' => array( 'label' => __( 'Forms', 'formo2022' ) ),
		'pages'    => array( 'label' => __( 'Full Pages', 'formo2022' ) ),
		// 'footer'   => array( 'label' => __( 'Footers', 'formo2022' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Formo 2022 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'formo2022_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		// 'footer-default',
    // 'formo-stamp',
		// 'header-default',
    'formo-page-home',
    'formo-page-cheese',
    'formo-page-mission',
    'formo-page-process',
    'formo-page-team',
    'formo-page-team-full',
    'formo-page-jobs',
    'formo-page-faqs',
    'formo-page-contact',
    'formo-page-blogpost',
    'formo-hero-video',
    'formo-hero-image',
    'formo-hero-jobs',
    'formo-biography',
    'formo-biography-thumbnail',
    'formo-content-glassdoor-reviews',
    'formo-content-jobspage-opportunity',
		'hidden-404',
		'query-default',
		'query-team',
    'mailchimp-signup'
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Formo 2022 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'formo2022_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'formo2022/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'formo2022_register_block_patterns', 9 );
