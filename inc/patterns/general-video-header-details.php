<?php
/**
 * Video with header and details block pattern
 */
return array(
	'title'      => __( 'Video with header and details', 'formo2022' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"foreground","textColor":"background"} -->
					<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)"><!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h1 class="alignwide" id="warble-a-film-about-hobbyist-bird-watchers-1" style="font-size:clamp(3rem, 6vw, 4.5rem)">' . wp_kses_post( __( 'Warble, a film about <br>hobbyist bird watchers.', 'formo2022' ) ) . '</h1>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:video {"align":"wide"} -->
					<figure class="wp-block-video alignwide"><video controls src="' . esc_url( get_template_directory_uri() ) . '/assets/videos/birds.mp4"></video></figure>
					<!-- /wp:video -->

					<!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
					<p><strong>' . esc_html__( 'Featuring', 'formo2022' ) . '</strong></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . wp_kses_post( __( 'Jesús Rodriguez<br>Doug Stilton<br>Emery Driscoll<br>Megan Perry<br>Rowan Price', 'formo2022' ) ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . wp_kses_post( __( 'Angelo Tso<br>Edward Stilton<br>Amy Jensen<br>Boston Bell<br>Shay Ford', 'formo2022' ) ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
