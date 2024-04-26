<?php
/**
 * @package Designer Artist
 * Setup the WordPress core custom header feature.
 *
 * @uses designer_artist_header_style()
*/
function designer_artist_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'designer_artist_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 196,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'designer_artist_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'designer_artist_custom_header_setup' );

if ( ! function_exists( 'designer_artist_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see designer_artist_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'designer_artist_header_style' );

function designer_artist_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .home-page-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		    background-size: cover;
		}";
	   	wp_add_inline_style( 'designer-artist-basic-style', $custom_css );
	endif;
}
endif;