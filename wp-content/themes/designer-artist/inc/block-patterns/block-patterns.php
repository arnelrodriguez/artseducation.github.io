<?php
/**
 *  Designer Artist: Block Patterns
 *
 * @package  Designer Artist
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'designer-artist',
		array( 'label' => __( 'Designer Artist', 'designer-artist' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'designer-artist/banner-section',
		array(
			'title'      => __( 'Banner Section', 'designer-artist' ),
			'categories' => array( 'designer-artist' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":154,\"dimRatio\":50,\"minHeight\":500,\"align\":\"full\",\"className\":\"designer-artist-banner-section\"} -->\n<div class=\"wp-block-cover alignfull designer-artist-banner-section\" style=\"min-height:500px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-154\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"style\":{\"typography\":{\"textTransform\":\"capitalize\",\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"fontSize\":\"45px\"}},\"textColor\":\"white\"} -->\n<h1 class=\"has-text-align-center has-white-color has-text-color\" style=\"font-size:45px;font-style:normal;font-weight:600;text-transform:capitalize\">We Deliver Best Painiting</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"16px\",\"fontStyle\":\"normal\",\"fontWeight\":\"600\"}},\"className\":\"designer-artist-banner-content\"} -->\n<p class=\"has-text-align-center designer-artist-banner-content\" style=\"font-size:16px;font-style:normal;font-weight:600\">INNOVATION, PERFECTION, AND CREATIVITY AT ITS BEST </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"textColor\":\"white\",\"width\":25,\"align\":\"center\",\"style\":{\"color\":{\"background\":\"#00000000\"},\"typography\":{\"fontSize\":\"18px\",\"fontStyle\":\"normal\",\"fontWeight\":\"600\"}},\"className\":\"designer-artist-banner-button\"} -->\n<div class=\"wp-block-button aligncenter has-custom-width wp-block-button__width-25 has-custom-font-size designer-artist-banner-button\" style=\"font-size:18px;font-style:normal;font-weight:600\"><a class=\"wp-block-button__link has-white-color has-text-color has-background wp-element-button\" style=\"background-color:#00000000\">Explore Now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'designer-artist/product-section',
		array(
			'title'      => __( 'Product Section', 'designer-artist' ),
			'categories' => array( 'designer-artist' ),
			'content'    => "<!-- wp:group {\"style\":{\"color\":{\"text\":\"#868f8f\"}},\"className\":\"designer-artist-product-section\",\"layout\":{\"type\":\"constrained\"},\"fontSize\":\"medium\"} -->\n<div class=\"wp-block-group designer-artist-product-section has-text-color has-medium-font-size\" style=\"color:#868f8f\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"700\",\"textTransform\":\"capitalize\",\"fontSize\":\"30px\"}},\"textColor\":\"black\"} -->\n<h2 class=\"has-text-align-center has-black-color has-text-color\" style=\"font-size:30px;font-style:normal;font-weight:700;text-transform:capitalize\">our paintings</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"textTransform\":\"uppercase\",\"fontSize\":\"16px\",\"fontStyle\":\"normal\",\"fontWeight\":\"600\"},\"color\":{\"text\":\"#98979d\"}}} -->\n<p class=\"has-text-align-center has-text-color\" style=\"color:#98979d;font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase\">our products</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:woocommerce/product-category {\"contentVisibility\":{\"image\":true,\"title\":true,\"price\":true,\"rating\":false,\"button\":true},\"categories\":[24],\"stockStatus\":[\"\",\"instock\",\"onbackorder\",\"outofstock\"],\"className\":\"designer-artist-product-category-section\"} /--></div>\n<!-- /wp:group -->",
		)
	);
}