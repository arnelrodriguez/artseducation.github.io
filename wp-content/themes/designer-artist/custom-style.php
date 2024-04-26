<?php

	$designer_artist_custom_css= "";
	/*-------------------- First Global Color -------------------*/

	$designer_artist_first_color = get_theme_mod('designer_artist_first_color');

	if($designer_artist_first_color != false){
		$designer_artist_custom_css .='.post-main-box .more-btn a, .error404 .page-content a, #comments input[type="submit"], #comments a.comment-reply-link, input[type="submit"], .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .pro-button a, .woocommerce a.added_to_cart.wc-forward, #slider .carousel-control-next i, #slider .carousel-control-prev i, .woocommerce span.onsale, .bradcrumbs span{';
			$designer_artist_custom_css .='background: '.esc_attr($designer_artist_first_color).';';
		$designer_artist_custom_css .='}';
	}

	if($designer_artist_first_color != false){
		$designer_artist_custom_css .='{';
			$designer_artist_custom_css .='color: '.esc_attr($designer_artist_first_color).'!important;';
		$designer_artist_custom_css .='}';
	}

	/*--------------------Second  Global Color -------------------*/
	$designer_artist_second_color = get_theme_mod('designer_artist_second_color');

	if($designer_artist_second_color != false){
		$designer_artist_custom_css .='#footer-2, .scrollup i, .post-main-box .more-btn a:hover, .error404 .page-content a:hover, input[type="submit"]:hover, #comments input[type="submit"]:hover, #comments a.comment-reply-link:hover, .pagination a:hover, #footer .tagcloud a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .widget_product_search button:hover, nav.woocommerce-MyAccount-navigation ul li:hover, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .pro-button a:hover, .bradcrumbs a:hover, .post-categories li a:hover, #sidebar h3, #sidebar .widget_block h3, #sidebar h2{';
			$designer_artist_custom_css .='background: '.esc_attr($designer_artist_second_color).';';
		$designer_artist_custom_css .='}';
	}

	if($designer_artist_second_color != false){
		$designer_artist_custom_css .='a, .main-navigation li a:hover, .main-navigation li a:focus, .main-navigation ul ul a:focus, .main-navigation ul ul a:hover, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6{';
			$designer_artist_custom_css .='color: '.esc_attr($designer_artist_second_color).';';
		$designer_artist_custom_css .='}';
	}
	/*---------------------------Width Layout -------------------*/

	$designer_artist_theme_lay = get_theme_mod( 'designer_artist_width_option','Full Width');
    if($designer_artist_theme_lay == 'Boxed'){
		$designer_artist_custom_css .='body{';
			$designer_artist_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='.scrollup i{';
			$designer_artist_custom_css .='right: 100px;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='.page-template-custom-home-page .home-page-header{';
			$designer_artist_custom_css .='padding: 0px 40px 0 10px;';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_theme_lay == 'Wide Width'){
		$designer_artist_custom_css .='body{';
			$designer_artist_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='.scrollup i{';
			$designer_artist_custom_css .='right: 30px;';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_theme_lay == 'Full Width'){
		$designer_artist_custom_css .='body{';
			$designer_artist_custom_css .='max-width: 100%;';
		$designer_artist_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$designer_artist_resp_slider = get_theme_mod( 'designer_artist_resp_slider_hide_show',true);
	if($designer_artist_resp_slider == true && get_theme_mod( 'designer_artist_slider_hide_show', false) == false){
    	$designer_artist_custom_css .='#slider{';
			$designer_artist_custom_css .='display:none;';
		$designer_artist_custom_css .='} ';
	}
    if($designer_artist_resp_slider == true){
    	$designer_artist_custom_css .='@media screen and (max-width:575px) {';
		$designer_artist_custom_css .='#slider{';
			$designer_artist_custom_css .='display:block;';
		$designer_artist_custom_css .='} }';
	}else if($designer_artist_resp_slider == false){
		$designer_artist_custom_css .='@media screen and (max-width:575px) {';
		$designer_artist_custom_css .='#slider{';
			$designer_artist_custom_css .='display:none;';
		$designer_artist_custom_css .='} }';
		$designer_artist_custom_css .='@media screen and (max-width:575px){';
		$designer_artist_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$designer_artist_custom_css .='margin-top: 45px;';
		$designer_artist_custom_css .='} }';
		$designer_artist_custom_css .='@media screen and (max-width:575px) {';
		$designer_artist_custom_css .='#track-player-sec .audioigniter-root{';
			$designer_artist_custom_css .='margin-top: 5%;';
		$designer_artist_custom_css .='} }';
	}

	$designer_artist_resp_sidebar = get_theme_mod( 'designer_artist_sidebar_hide_show',true);
    if($designer_artist_resp_sidebar == true){
    	$designer_artist_custom_css .='@media screen and (max-width:575px) {';
		$designer_artist_custom_css .='#sidebar{';
			$designer_artist_custom_css .='display:block;';
		$designer_artist_custom_css .='} }';
	}else if($designer_artist_resp_sidebar == false){
		$designer_artist_custom_css .='@media screen and (max-width:575px) {';
		$designer_artist_custom_css .='#sidebar{';
			$designer_artist_custom_css .='display:none;';
		$designer_artist_custom_css .='} }';
	}

	$designer_artist_resp_scroll_top = get_theme_mod( 'designer_artist_resp_scroll_top_hide_show',true);
	if($designer_artist_resp_scroll_top == true && get_theme_mod( 'designer_artist_hide_show_scroll',true) == false){
    	$designer_artist_custom_css .='.scrollup i{';
			$designer_artist_custom_css .='visibility:hidden !important;';
		$designer_artist_custom_css .='} ';
	}
    if($designer_artist_resp_scroll_top == true){
    	$designer_artist_custom_css .='@media screen and (max-width:575px) {';
		$designer_artist_custom_css .='.scrollup i{';
			$designer_artist_custom_css .='visibility:visible !important;';
		$designer_artist_custom_css .='} }';
	}else if($designer_artist_resp_scroll_top == false){
		$designer_artist_custom_css .='@media screen and (max-width:575px){';
		$designer_artist_custom_css .='.scrollup i{';
			$designer_artist_custom_css .='visibility:hidden !important;';
		$designer_artist_custom_css .='} }';
	}

	$designer_artist_resp_menu_toggle_btn_bg_color = get_theme_mod('designer_artist_resp_menu_toggle_btn_bg_color');
	if($designer_artist_resp_menu_toggle_btn_bg_color != false){
		$designer_artist_custom_css .='.toggle-nav i{';
			$designer_artist_custom_css .='background: '.esc_attr($designer_artist_resp_menu_toggle_btn_bg_color).';';
		$designer_artist_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$designer_artist_slider_height = get_theme_mod('designer_artist_slider_height');
	if($designer_artist_slider_height != false){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='height: '.esc_attr($designer_artist_slider_height).';';
		$designer_artist_custom_css .='}';
	}

/*------------------ Slider Opacity -------------------*/

	$designer_artist_theme_lay = get_theme_mod( 'designer_artist_slider_opacity_color','0.5');
	if($designer_artist_theme_lay == '0'){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:0';
		$designer_artist_custom_css .='}';
		}else if($designer_artist_theme_lay == '0.1'){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:0.1';
		$designer_artist_custom_css .='}';
		}else if($designer_artist_theme_lay == '0.2'){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:0.2';
		$designer_artist_custom_css .='}';
		}else if($designer_artist_theme_lay == '0.3'){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:0.3';
		$designer_artist_custom_css .='}';
		}else if($designer_artist_theme_lay == '0.4'){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:0.4';
		$designer_artist_custom_css .='}';
		}else if($designer_artist_theme_lay == '0.5'){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:0.5';
		$designer_artist_custom_css .='}';
		}else if($designer_artist_theme_lay == '0.6'){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:0.6';
		$designer_artist_custom_css .='}';
		}else if($designer_artist_theme_lay == '0.7'){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:0.7';
		$designer_artist_custom_css .='}';
		}else if($designer_artist_theme_lay == '0.8'){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:0.8';
		$designer_artist_custom_css .='}';
		}else if($designer_artist_theme_lay == '0.9'){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:0.9';
		$designer_artist_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$designer_artist_slider_image_overlay = get_theme_mod('designer_artist_slider_image_overlay', true);
	if($designer_artist_slider_image_overlay == false){
		$designer_artist_custom_css .='#slider img{';
			$designer_artist_custom_css .='opacity:1;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_slider_image_overlay_color = get_theme_mod('designer_artist_slider_image_overlay_color', true);
	if($designer_artist_slider_image_overlay_color != false){
		$designer_artist_custom_css .='#slider{';
			$designer_artist_custom_css .='background-color: '.esc_attr($designer_artist_slider_image_overlay_color).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_theme_lay = get_theme_mod( 'designer_artist_slider_content_option','Center');
    if($designer_artist_theme_lay == 'Left'){
		$designer_artist_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$designer_artist_custom_css .='text-align:left; left:10%; right:40%;';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_theme_lay == 'Center'){
		$designer_artist_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$designer_artist_custom_css .='text-align:center; left:20%; right:20%;';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_theme_lay == 'Right'){
		$designer_artist_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$designer_artist_custom_css .='text-align:right; left:40%; right:10%;';
		$designer_artist_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$designer_artist_slider_content_padding_top_bottom = get_theme_mod('designer_artist_slider_content_padding_top_bottom');
	$designer_artist_slider_content_padding_left_right = get_theme_mod('designer_artist_slider_content_padding_left_right');
	if($designer_artist_slider_content_padding_top_bottom != false || $designer_artist_slider_content_padding_left_right != false){
		$designer_artist_custom_css .='#slider .carousel-caption{';
			$designer_artist_custom_css .='top: '.esc_attr($designer_artist_slider_content_padding_top_bottom).'; bottom: '.esc_attr($designer_artist_slider_content_padding_top_bottom).';left: '.esc_attr($designer_artist_slider_content_padding_left_right).';right: '.esc_attr($designer_artist_slider_content_padding_left_right).';';
		$designer_artist_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$designer_artist_copyright_alingment = get_theme_mod('designer_artist_copyright_alingment');
	if($designer_artist_copyright_alingment != false){
		$designer_artist_custom_css .='.copyright p{';
			$designer_artist_custom_css .='text-align: '.esc_attr($designer_artist_copyright_alingment).' !important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_footer_widgets_heading = get_theme_mod( 'designer_artist_footer_widgets_heading','Left');
    if($designer_artist_footer_widgets_heading == 'Left'){
		$designer_artist_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$designer_artist_custom_css .='text-align: left;';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_footer_widgets_heading == 'Center'){
		$designer_artist_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$designer_artist_custom_css .='text-align: center;';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_footer_widgets_heading == 'Right'){
		$designer_artist_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$designer_artist_custom_css .='text-align: right;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_footer_widgets_content = get_theme_mod( 'designer_artist_footer_widgets_content','Left');
    if($designer_artist_footer_widgets_content == 'Left'){
		$designer_artist_custom_css .='#footer .widget{';
		$designer_artist_custom_css .='text-align: left;';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_footer_widgets_content == 'Center'){
		$designer_artist_custom_css .='#footer .widget{';
			$designer_artist_custom_css .='text-align: center;';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_footer_widgets_content == 'Right'){
		$designer_artist_custom_css .='#footer .widget{';
			$designer_artist_custom_css .='text-align: right;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_footer_padding = get_theme_mod('designer_artist_footer_padding');
	if($designer_artist_footer_padding != false){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='padding: '.esc_attr($designer_artist_footer_padding).' 0;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_footer_background_image = get_theme_mod('designer_artist_footer_background_image');
	if($designer_artist_footer_background_image != false){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='background: url('.esc_attr($designer_artist_footer_background_image).')!important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_footer_background_color = get_theme_mod('designer_artist_footer_background_color');
	if($designer_artist_footer_background_color != false){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='background-color: '.esc_attr($designer_artist_footer_background_color).'!important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_copyright_background_color = get_theme_mod('designer_artist_copyright_background_color');
	if($designer_artist_copyright_background_color != false){
		$designer_artist_custom_css .='#footer-2{';
			$designer_artist_custom_css .='background-color: '.esc_attr($designer_artist_copyright_background_color).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_theme_lay = get_theme_mod( 'designer_artist_img_footer','scroll');
	if($designer_artist_theme_lay == 'fixed'){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$designer_artist_custom_css .='}';
	}elseif ($designer_artist_theme_lay == 'scroll'){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_copyright_font_weight = get_theme_mod('designer_artist_copyright_font_weight');
	if($designer_artist_copyright_font_weight != false){
		$designer_artist_custom_css .='.copyright p, .copyright a{';
			$designer_artist_custom_css .='font-weight: '.esc_attr($designer_artist_copyright_font_weight).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_copyright_text_color = get_theme_mod('designer_artist_copyright_text_color');
	if($designer_artist_copyright_text_color != false){
		$designer_artist_custom_css .='.copyright p, .copyright a{';
			$designer_artist_custom_css .='color: '.esc_attr($designer_artist_copyright_text_color).';';
		$designer_artist_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$designer_artist_site_title_font_size = get_theme_mod('designer_artist_site_title_font_size');
	if($designer_artist_site_title_font_size != false){
		$designer_artist_custom_css .='.logo h1, .logo p.site-title{';
			$designer_artist_custom_css .='font-size: '.esc_attr($designer_artist_site_title_font_size).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_site_tagline_font_size = get_theme_mod('designer_artist_site_tagline_font_size');
	if($designer_artist_site_tagline_font_size != false){
		$designer_artist_custom_css .='.logo p.site-description{';
			$designer_artist_custom_css .='font-size: '.esc_attr($designer_artist_site_tagline_font_size).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_logo_padding = get_theme_mod('designer_artist_logo_padding');
	if($designer_artist_logo_padding != false){
		$designer_artist_custom_css .='.top-bar .logo{';
			$designer_artist_custom_css .='padding: '.esc_attr($designer_artist_logo_padding).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_logo_margin = get_theme_mod('designer_artist_logo_margin');
	if($designer_artist_logo_margin != false){
		$designer_artist_custom_css .='.top-bar .logo{';
			$designer_artist_custom_css .='margin: '.esc_attr($designer_artist_logo_margin).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_site_title_color = get_theme_mod('designer_artist_site_title_color');
	if($designer_artist_site_title_color != false){
		$designer_artist_custom_css .='p.site-title a{';
			$designer_artist_custom_css .='color: '.esc_attr($designer_artist_site_title_color).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_site_tagline_color = get_theme_mod('designer_artist_site_tagline_color');
	if($designer_artist_site_tagline_color != false){
		$designer_artist_custom_css .='.logo p.site-description{';
			$designer_artist_custom_css .='color: '.esc_attr($designer_artist_site_tagline_color).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_logo_width = get_theme_mod('designer_artist_logo_width');
	if($designer_artist_logo_width != false){
		$designer_artist_custom_css .='.logo img{';
			$designer_artist_custom_css .='width: '.esc_attr($designer_artist_logo_width).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_logo_height = get_theme_mod('designer_artist_logo_height');
	if($designer_artist_logo_height != false){
		$designer_artist_custom_css .='.logo img{';
			$designer_artist_custom_css .='height: '.esc_attr($designer_artist_logo_height).';';
		$designer_artist_custom_css .='}';
	}

	/*------------------ Menus -------------------*/

	$designer_artist_header_menus_color = get_theme_mod('designer_artist_header_menus_color');
	if($designer_artist_header_menus_color != false){
		$designer_artist_custom_css .='.main-navigation a{';
			$designer_artist_custom_css .='color: '.esc_attr($designer_artist_header_menus_color).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_header_menus_hover_color = get_theme_mod('designer_artist_header_menus_hover_color');
	if($designer_artist_header_menus_hover_color != false){
		$designer_artist_custom_css .='.main-navigation a:hover{';
			$designer_artist_custom_css .='color: '.esc_attr($designer_artist_header_menus_hover_color).'!important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_header_submenus_color = get_theme_mod('designer_artist_header_submenus_color');
	if($designer_artist_header_submenus_color != false){
		$designer_artist_custom_css .='.main-navigation ul ul a{';
			$designer_artist_custom_css .='color: '.esc_attr($designer_artist_header_submenus_color).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_header_submenus_hover_color = get_theme_mod('designer_artist_header_submenus_hover_color');
	if($designer_artist_header_submenus_hover_color != false){
		$designer_artist_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$designer_artist_custom_css .='color: '.esc_attr($designer_artist_header_submenus_hover_color).'!important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_navigation_menu_font_size = get_theme_mod('designer_artist_navigation_menu_font_size');
	if($designer_artist_navigation_menu_font_size != false){
		$designer_artist_custom_css .='.main-navigation a{';
			$designer_artist_custom_css .='font-size: '.esc_attr($designer_artist_navigation_menu_font_size).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_navigation_menu_font_weight = get_theme_mod('designer_artist_navigation_menu_font_weight','600');
	if($designer_artist_navigation_menu_font_weight != false){
		$designer_artist_custom_css .='.main-navigation a{';
			$designer_artist_custom_css .='font-weight: '.esc_attr($designer_artist_navigation_menu_font_weight).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_theme_lay = get_theme_mod( 'designer_artist_menu_text_transform','Capitalize');
	if($designer_artist_theme_lay == 'Capitalize'){
		$designer_artist_custom_css .='.main-navigation a{';
			$designer_artist_custom_css .='text-transform:Capitalize;';
		$designer_artist_custom_css .='}';
	}
	if($designer_artist_theme_lay == 'Lowercase'){
		$designer_artist_custom_css .='.main-navigation a{';
			$designer_artist_custom_css .='text-transform:Lowercase;';
		$designer_artist_custom_css .='}';
	}
	if($designer_artist_theme_lay == 'Uppercase'){
		$designer_artist_custom_css .='.main-navigation a{';
			$designer_artist_custom_css .='text-transform:Uppercase;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_menus_item = get_theme_mod( 'designer_artist_menus_item_style','None');
    if($designer_artist_menus_item == 'None'){
		$designer_artist_custom_css .='.main-navigation a{';
			$designer_artist_custom_css .='';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_menus_item == 'Zoom In'){
		$designer_artist_custom_css .='.main-navigation a:hover{';
			$designer_artist_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #7fbe4b;';
		$designer_artist_custom_css .='}';
	}
	/*---------------------------Blog Layout -------------------*/

	$designer_artist_single_blog_post_navigation_show_hide = get_theme_mod('designer_artist_single_blog_post_navigation_show_hide',true);
	if($designer_artist_single_blog_post_navigation_show_hide != true){
		$designer_artist_custom_css .='.post-navigation{';
			$designer_artist_custom_css .='display: none;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_featured_image_border_radius = get_theme_mod('designer_artist_featured_image_border_radius', 0);
	if($designer_artist_featured_image_border_radius != false){
		$designer_artist_custom_css .='.box-image img, .feature-box img{';
			$designer_artist_custom_css .='border-radius: '.esc_attr($designer_artist_featured_image_border_radius).'px;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_featured_image_box_shadow = get_theme_mod('designer_artist_featured_image_box_shadow',0);
	if($designer_artist_featured_image_box_shadow != false){
		$designer_artist_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$designer_artist_custom_css .='box-shadow: '.esc_attr($designer_artist_featured_image_box_shadow).'px '.esc_attr($designer_artist_featured_image_box_shadow).'px '.esc_attr($designer_artist_featured_image_box_shadow).'px #cccccc;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_comment_width = get_theme_mod('designer_artist_single_blog_comment_width');
	if($designer_artist_comment_width != false){
		$designer_artist_custom_css .='#comments textarea{';
			$designer_artist_custom_css .='width: '.esc_attr($designer_artist_comment_width).';';
		$designer_artist_custom_css .='}';
	}

	// featured image dimention
	$designer_artist_blog_post_featured_image_dimension = get_theme_mod('designer_artist_blog_post_featured_image_dimension', 'default');
	$designer_artist_blog_post_featured_image_custom_width = get_theme_mod('designer_artist_blog_post_featured_image_custom_width',250);
	$designer_artist_blog_post_featured_image_custom_height = get_theme_mod('designer_artist_blog_post_featured_image_custom_height',250);
	if($designer_artist_blog_post_featured_image_dimension == 'custom'){
		$designer_artist_custom_css .='.box-image img{';
			$designer_artist_custom_css .='width: '.esc_attr($designer_artist_blog_post_featured_image_custom_width).'; height: '.esc_attr($designer_artist_blog_post_featured_image_custom_height).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_blog_page_posts_settings = get_theme_mod( 'designer_artist_blog_page_posts_settings','Into Blocks');
    if($designer_artist_blog_page_posts_settings == 'Without Blocks'){
		$designer_artist_custom_css .='.post-main-box{';
			$designer_artist_custom_css .='box-shadow: none; border: none; margin:30px 0;background:unset;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_theme_lay = get_theme_mod( 'designer_artist_blog_layout_option','Default');
    if($designer_artist_theme_lay == 'Default'){
		$designer_artist_custom_css .='.post-main-box{';
			$designer_artist_custom_css .='';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_theme_lay == 'Center'){
		$designer_artist_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$designer_artist_custom_css .='text-align:center;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='.post-info{';
			$designer_artist_custom_css .='margin-top:10px;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='.post-info hr{';
			$designer_artist_custom_css .='margin:15px auto;';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_theme_lay == 'Left'){
		$designer_artist_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$designer_artist_custom_css .='text-align:Left;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='.post-info hr{';
			$designer_artist_custom_css .='margin-bottom:10px;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='.post-main-box h2{';
			$designer_artist_custom_css .='margin-top:10px;';
		$designer_artist_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$designer_artist_preloader_bg_color = get_theme_mod('designer_artist_preloader_bg_color');
	if($designer_artist_preloader_bg_color != false){
		$designer_artist_custom_css .='#preloader{';
			$designer_artist_custom_css .='background-color: '.esc_attr($designer_artist_preloader_bg_color).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_preloader_border_color = get_theme_mod('designer_artist_preloader_border_color');
	if($designer_artist_preloader_border_color != false){
		$designer_artist_custom_css .='.loader-line{';
			$designer_artist_custom_css .='border-color: '.esc_attr($designer_artist_preloader_border_color).'!important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_preloader_bg_img = get_theme_mod('designer_artist_preloader_bg_img');
	if($designer_artist_preloader_bg_img != false){
		$designer_artist_custom_css .='#preloader{';
			$designer_artist_custom_css .='background: url('.esc_attr($designer_artist_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$designer_artist_custom_css .='}';
	}

	// Header Background Color
	$designer_artist_header_background_color = get_theme_mod('designer_artist_header_background_color');
	if($designer_artist_header_background_color != false){
		$designer_artist_custom_css .='.home-page-header{';
			$designer_artist_custom_css .='background-color: '.esc_attr($designer_artist_header_background_color).';';
		$designer_artist_custom_css .='}';
	}
	$designer_artist_header_img_position = get_theme_mod('designer_artist_header_img_position','center top');
	if($designer_artist_header_img_position != false){
		$designer_artist_custom_css .='.home-page-header{';
			$designer_artist_custom_css .='background-position: '.esc_attr($designer_artist_header_img_position).'!important;';
		$designer_artist_custom_css .='}';
	}
	/*----------------- Slider -----------------*/

	$designer_artist_slider_hide_show = get_theme_mod('designer_artist_slider_hide_show');
	if($designer_artist_slider_hide_show == false){
		$designer_artist_custom_css .='.page-template-custom-home-page .home-page-header{';
			$designer_artist_custom_css .='position: static; background-color: #000; padding: 15px;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_product_title = get_theme_mod('designer_artist_product_title');
	if($designer_artist_product_title == false){
		$designer_artist_custom_css .='.heding-title p:after, .heding-title p:before{';
			$designer_artist_custom_css .='display:none;';
		$designer_artist_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/
	$designer_artist_button_letter_spacing = get_theme_mod('designer_artist_button_letter_spacing');
	$designer_artist_custom_css .='.post-main-box .more-btn a{';
		$designer_artist_custom_css .='letter-spacing: '.esc_attr($designer_artist_button_letter_spacing).';';
	$designer_artist_custom_css .='}';

	$designer_artist_button_padding_top_bottom = get_theme_mod('designer_artist_button_padding_top_bottom');
	$designer_artist_button_padding_left_right = get_theme_mod('designer_artist_button_padding_left_right');
	if($designer_artist_button_padding_top_bottom != false || $designer_artist_button_padding_left_right != false){
		$designer_artist_custom_css .='.post-main-box .more-btn a{';
			$designer_artist_custom_css .='padding-top: '.esc_attr($designer_artist_button_padding_top_bottom).'!important;
			padding-bottom: '.esc_attr($designer_artist_button_padding_top_bottom).'!important;
			padding-left: '.esc_attr($designer_artist_button_padding_left_right).'!important;
			padding-right: '.esc_attr($designer_artist_button_padding_left_right).'!important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_button_border_radius = get_theme_mod('designer_artist_button_border_radius');
	if($designer_artist_button_border_radius != false){
		$designer_artist_custom_css .='.post-main-box .more-btn a{';
			$designer_artist_custom_css .='border-radius: '.esc_attr($designer_artist_button_border_radius).'px !important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_button_font_size = get_theme_mod('designer_artist_button_font_size',14);
	$designer_artist_custom_css .='.post-main-box .more-btn a{';
		$designer_artist_custom_css .='font-size: '.esc_attr($designer_artist_button_font_size).'!important;';
	$designer_artist_custom_css .='}';

	$designer_artist_theme_lay = get_theme_mod( 'designer_artist_button_text_transform','Uppercase');
	if($designer_artist_theme_lay == 'Capitalize'){
		$designer_artist_custom_css .='.post-main-box .more-btn a{';
			$designer_artist_custom_css .='text-transform:Capitalize;';
		$designer_artist_custom_css .='}';
	}
	if($designer_artist_theme_lay == 'Lowercase'){
		$designer_artist_custom_css .='.post-main-box .more-btn a{';
			$designer_artist_custom_css .='text-transform:Lowercase;';
		$designer_artist_custom_css .='}';
	}
	if($designer_artist_theme_lay == 'Uppercase'){
		$designer_artist_custom_css .='.post-main-box .more-btn a{';
			$designer_artist_custom_css .='text-transform:Uppercase;';
		$designer_artist_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$designer_artist_scroll_to_top_font_size = get_theme_mod('designer_artist_scroll_to_top_font_size');
	if($designer_artist_scroll_to_top_font_size != false){
		$designer_artist_custom_css .='.scrollup i{';
			$designer_artist_custom_css .='font-size: '.esc_attr($designer_artist_scroll_to_top_font_size).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_scroll_to_top_padding = get_theme_mod('designer_artist_scroll_to_top_padding');
	$designer_artist_scroll_to_top_padding = get_theme_mod('designer_artist_scroll_to_top_padding');
	if($designer_artist_scroll_to_top_padding != false){
		$designer_artist_custom_css .='.scrollup i{';
			$designer_artist_custom_css .='padding-top: '.esc_attr($designer_artist_scroll_to_top_padding).';padding-bottom: '.esc_attr($designer_artist_scroll_to_top_padding).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_scroll_to_top_width = get_theme_mod('designer_artist_scroll_to_top_width');
	if($designer_artist_scroll_to_top_width != false){
		$designer_artist_custom_css .='.scrollup i{';
			$designer_artist_custom_css .='width: '.esc_attr($designer_artist_scroll_to_top_width).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_scroll_to_top_height = get_theme_mod('designer_artist_scroll_to_top_height');
	if($designer_artist_scroll_to_top_height != false){
		$designer_artist_custom_css .='.scrollup i{';
			$designer_artist_custom_css .='height: '.esc_attr($designer_artist_scroll_to_top_height).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_scroll_to_top_border_radius = get_theme_mod('designer_artist_scroll_to_top_border_radius');
	if($designer_artist_scroll_to_top_border_radius != false){
		$designer_artist_custom_css .='.scrollup i{';
			$designer_artist_custom_css .='border-radius: '.esc_attr($designer_artist_scroll_to_top_border_radius).'px;';
		$designer_artist_custom_css .='}';
	}

	// Wocommerce
	$designer_artist_related_product_show_hide = get_theme_mod('designer_artist_related_product_show_hide',true);
	if($designer_artist_related_product_show_hide != true){
		$designer_artist_custom_css .='.related.products{';
			$designer_artist_custom_css .='display: none;';
		$designer_artist_custom_css .='}';
	}

	// Woocommerce img

	$designer_artist_shop_featured_image_border_radius = get_theme_mod('designer_artist_shop_featured_image_border_radius', 0);
	if($designer_artist_shop_featured_image_border_radius != false){
		$designer_artist_custom_css .='.woocommerce ul.products li.product a img{';
			$designer_artist_custom_css .='border-radius: '.esc_attr($designer_artist_shop_featured_image_border_radius).'px;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_shop_featured_image_box_shadow = get_theme_mod('designer_artist_shop_featured_image_box_shadow',0);
	if($designer_artist_shop_featured_image_box_shadow != false){
		$designer_artist_custom_css .='.woocommerce ul.products li.product a img{';
			$designer_artist_custom_css .='box-shadow: '.esc_attr($designer_artist_shop_featured_image_box_shadow).'px '.esc_attr($designer_artist_shop_featured_image_box_shadow).'px '.esc_attr($designer_artist_shop_featured_image_box_shadow).'px !important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_products_padding_top_bottom = get_theme_mod('designer_artist_products_padding_top_bottom');
	if($designer_artist_products_padding_top_bottom != false){
		$designer_artist_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$designer_artist_custom_css .='padding-top: '.esc_attr($designer_artist_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($designer_artist_products_padding_top_bottom).'!important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_products_padding_left_right = get_theme_mod('designer_artist_products_padding_left_right');
	if($designer_artist_products_padding_left_right != false){
		$designer_artist_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$designer_artist_custom_css .='padding-left: '.esc_attr($designer_artist_products_padding_left_right).'!important; padding-right: '.esc_attr($designer_artist_products_padding_left_right).'!important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_products_box_shadow = get_theme_mod('designer_artist_products_box_shadow');
	if($designer_artist_products_box_shadow != false){
		$designer_artist_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$designer_artist_custom_css .='box-shadow: '.esc_attr($designer_artist_products_box_shadow).'px '.esc_attr($designer_artist_products_box_shadow).'px '.esc_attr($designer_artist_products_box_shadow).'px #ddd;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_products_border_radius = get_theme_mod('designer_artist_products_border_radius', 0);
	if($designer_artist_products_border_radius != false){
		$designer_artist_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$designer_artist_custom_css .='border-radius: '.esc_attr($designer_artist_products_border_radius).'px !important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_products_btn_padding_top_bottom = get_theme_mod('designer_artist_products_btn_padding_top_bottom');
	if($designer_artist_products_btn_padding_top_bottom != false){
		$designer_artist_custom_css .='.woocommerce a.button{';
			$designer_artist_custom_css .='padding-top: '.esc_attr($designer_artist_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($designer_artist_products_btn_padding_top_bottom).' !important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_products_btn_padding_left_right = get_theme_mod('designer_artist_products_btn_padding_left_right');
	if($designer_artist_products_btn_padding_left_right != false){
		$designer_artist_custom_css .='.woocommerce a.button{';
			$designer_artist_custom_css .='padding-left: '.esc_attr($designer_artist_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($designer_artist_products_btn_padding_left_right).' !important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_products_button_border_radius = get_theme_mod('designer_artist_products_button_border_radius', 0);
	if($designer_artist_products_button_border_radius != false){
		$designer_artist_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$designer_artist_custom_css .='border-radius: '.esc_attr($designer_artist_products_button_border_radius).'px !important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_woocommerce_sale_position = get_theme_mod( 'designer_artist_woocommerce_sale_position','right');
    if($designer_artist_woocommerce_sale_position == 'left'){
		$designer_artist_custom_css .='.woocommerce ul.products li.product .onsale{';
			$designer_artist_custom_css .='left: 10px !important; right: auto !important;';
		$designer_artist_custom_css .='}';
	}else if($designer_artist_woocommerce_sale_position == 'right'){
		$designer_artist_custom_css .='.woocommerce ul.products li.product .onsale{';
			$designer_artist_custom_css .='left: auto !important; right: 10px !important;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_woocommerce_sale_font_size = get_theme_mod('designer_artist_woocommerce_sale_font_size');
	if($designer_artist_woocommerce_sale_font_size != false){
		$designer_artist_custom_css .='.woocommerce span.onsale{';
			$designer_artist_custom_css .='font-size: '.esc_attr($designer_artist_woocommerce_sale_font_size).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_woocommerce_sale_border_radius = get_theme_mod('designer_artist_woocommerce_sale_border_radius', 0);
	if($designer_artist_woocommerce_sale_border_radius != false){
		$designer_artist_custom_css .='.woocommerce span.onsale{';
			$designer_artist_custom_css .='border-radius: '.esc_attr($designer_artist_woocommerce_sale_border_radius).'px;';
		$designer_artist_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$designer_artist_social_icon_font_size = get_theme_mod('designer_artist_social_icon_font_size');
	if($designer_artist_social_icon_font_size != false){
		$designer_artist_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$designer_artist_custom_css .='font-size: '.esc_attr($designer_artist_social_icon_font_size).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_social_icon_padding = get_theme_mod('designer_artist_social_icon_padding');
	if($designer_artist_social_icon_padding != false){
		$designer_artist_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$designer_artist_custom_css .='padding: '.esc_attr($designer_artist_social_icon_padding).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_social_icon_width = get_theme_mod('designer_artist_social_icon_width');
	if($designer_artist_social_icon_width != false){
		$designer_artist_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$designer_artist_custom_css .='width: '.esc_attr($designer_artist_social_icon_width).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_social_icon_height = get_theme_mod('designer_artist_social_icon_height');
	if($designer_artist_social_icon_height != false){
		$designer_artist_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$designer_artist_custom_css .='height: '.esc_attr($designer_artist_social_icon_height).';';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_footer_img_position = get_theme_mod('designer_artist_footer_img_position','center center');
	if($designer_artist_footer_img_position != false){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='background-position: '.esc_attr($designer_artist_footer_img_position).'!important;';
		$designer_artist_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$designer_artist_display_grid_posts_settings = get_theme_mod( 'designer_artist_display_grid_posts_settings','Into Blocks');
    if($designer_artist_display_grid_posts_settings == 'Without Blocks'){
		$designer_artist_custom_css .='.grid-post-main-box{';
			$designer_artist_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$designer_artist_custom_css .='}';
	}

	/*---------------- Grid Posts Settings ------------------*/

	$designer_artist_grid_featured_image_border_radius = get_theme_mod('designer_artist_grid_featured_image_border_radius', 0);
	if($designer_artist_grid_featured_image_border_radius != false){
		$designer_artist_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img{';
			$designer_artist_custom_css .='border-radius: '.esc_attr($designer_artist_grid_featured_image_border_radius).'px;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_grid_featured_image_box_shadow = get_theme_mod('designer_artist_grid_featured_image_box_shadow',0);
	if($designer_artist_grid_featured_image_box_shadow != false){
		$designer_artist_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$designer_artist_custom_css .='box-shadow: '.esc_attr($designer_artist_grid_featured_image_box_shadow).'px '.esc_attr($designer_artist_grid_featured_image_box_shadow).'px '.esc_attr($designer_artist_grid_featured_image_box_shadow).'px #cccccc;';
		$designer_artist_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$designer_artist_sticky_header_padding = get_theme_mod('designer_artist_sticky_header_padding');
	if($designer_artist_sticky_header_padding != false){
		$designer_artist_custom_css .='.header-fixed{';
			$designer_artist_custom_css .='padding: '.esc_attr($designer_artist_sticky_header_padding).'!important;';
		$designer_artist_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$designer_artist_button_footer_heading_letter_spacing = get_theme_mod('designer_artist_button_footer_heading_letter_spacing',1);
	$designer_artist_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$designer_artist_custom_css .='letter-spacing: '.esc_attr($designer_artist_button_footer_heading_letter_spacing).'px;';
	$designer_artist_custom_css .='}';

	$designer_artist_button_footer_font_size = get_theme_mod('designer_artist_button_footer_font_size','30');
	$designer_artist_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$designer_artist_custom_css .='font-size: '.esc_attr($designer_artist_button_footer_font_size).'px;';
	$designer_artist_custom_css .='}';

	$designer_artist_theme_lay = get_theme_mod( 'designer_artist_button_footer_text_transform','Capitalize');
	if($designer_artist_theme_lay == 'Capitalize'){
		$designer_artist_custom_css .='#footer h3{';
			$designer_artist_custom_css .='text-transform:Capitalize;';
		$designer_artist_custom_css .='}';
	}
	if($designer_artist_theme_lay == 'Lowercase'){
		$designer_artist_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$designer_artist_custom_css .='text-transform:Lowercase;';
		$designer_artist_custom_css .='}';
	}
	if($designer_artist_theme_lay == 'Uppercase'){
		$designer_artist_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$designer_artist_custom_css .='text-transform:Uppercase;';
		$designer_artist_custom_css .='}';
	}

	$designer_artist_footer_heading_weight = get_theme_mod('designer_artist_footer_heading_weight','600');
	if($designer_artist_footer_heading_weight != false){
		$designer_artist_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$designer_artist_custom_css .='font-weight: '.esc_attr($designer_artist_footer_heading_weight).';';
		$designer_artist_custom_css .='}';
	}
	/*---------------------------Footer Style -------------------*/

	$designer_artist_theme_lay = get_theme_mod( 'designer_artist_footer_template','designer_artist-footer-one');
    if($designer_artist_theme_lay == 'designer_artist-footer-one'){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='';
		$designer_artist_custom_css .='}';

	}else if($designer_artist_theme_lay == 'designer_artist-footer-two'){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$designer_artist_custom_css .='color:#000;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='#footer ul li::before{';
			$designer_artist_custom_css .='background:#000;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$designer_artist_custom_css .='border: 1px solid #000;';
		$designer_artist_custom_css .='}';

	}else if($designer_artist_theme_lay == 'designer_artist-footer-three'){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='background: #232524;';
		$designer_artist_custom_css .='}';
	}
	else if($designer_artist_theme_lay == 'designer_artist-footer-four'){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='background: #f7f7f7;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$designer_artist_custom_css .='color:#000;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='#footer ul li::before{';
			$designer_artist_custom_css .='background:#000;';
		$designer_artist_custom_css .='}';
		$designer_artist_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$designer_artist_custom_css .='border: 1px solid #000;';
		$designer_artist_custom_css .='}';
	}
	else if($designer_artist_theme_lay == 'designer_artist-footer-five'){
		$designer_artist_custom_css .='#footer{';
			$designer_artist_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$designer_artist_custom_css .='}';
	}