<?php
/**
 * 404 content.
 */
return array(
	'title'    => __( '404 content', 'formo2022' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"200","lineHeight":"1"}},"className":"has-text-align-center"} -->
					<h2 class="has-text-align-center" style="font-size:clamp(4rem, 40vw, 20rem);font-weight:200;line-height:1">' . esc_html( _x( '404', 'Error code for a webpage that is not found.', 'formo2022' ) ) . '</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'This page could not be found. Maybe try a search?', 'formo2022' ) . '</p>
					<!-- /wp:paragraph -->
					<!-- wp:search {"label":"' . esc_html_x( 'Search', 'label', 'formo2022' ) . '","showLabel":false,"width":50,"widthUnit":"%","buttonText":"' . esc_html__( 'Search', 'formo2022' ) . '","buttonUseIcon":true,"align":"center"} /-->',
);
