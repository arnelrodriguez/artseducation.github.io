<?php

	$vw_cleaning_company_first_color = get_theme_mod('vw_cleaning_company_first_color');
	$vw_cleaning_company_second_color = get_theme_mod('vw_cleaning_company_second_color');

	$vw_cleaning_company_custom_css= "";

	/*------------------ Global First Color ------------------*/

	if($vw_cleaning_company_first_color != false){
		$vw_cleaning_company_custom_css .='.top-btn a,.menu a:before, .menu a::after,.more-btn a:hover,.scrollup i,#sidebar .custom-social-icons i:hover, #footer .custom-social-icons i:hover,.pagination span, .pagination a,#sidebar .tagcloud a:hover,#comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,#header .menu a:before, #header .menu a::after, #sidebar a.custom_read_more:hover, #footer a.custom_read_more:hover, .custom-about-us .more-button i:hover, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a, .wp-block-button .wp-block-button__link:hover, #preloader,.bradcrumbs a:hover, .bradcrumbs span, .post-categories li a:hover{';
			$vw_cleaning_company_custom_css .='background-color: '.esc_attr($vw_cleaning_company_first_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	if($vw_cleaning_company_first_color != false){
		$vw_cleaning_company_custom_css .='.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{';
			$vw_cleaning_company_custom_css .='background-color: '.esc_attr($vw_cleaning_company_first_color).'!important;';
		$vw_cleaning_company_custom_css .='}';
	}

	if($vw_cleaning_company_first_color != false){
		$vw_cleaning_company_custom_css .='a,.logo h1 a,.middle-header .call i, .service-sec h3:hover, .service-content h4 a:hover,.post-main-box:hover h3,#sidebar ul li a:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title, p.site-title a, .service-sec h3 a:hover, .service-content h4 a:hover, .post-main-box:hover h3 a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .post-main-box:hover h2 a, .post-info span a:hover, .post-main-box:hover h2 a, .post-main-box:hover .post-info a, .single-post .post-info:hover a, nav.woocommerce-MyAccount-navigation ul li a:hover, #slider .inner_carousel h1 a:hover, .service-sec h2 a:hover, .service-content h3 a:hover, #content-vw a{';
			$vw_cleaning_company_custom_css .='color: '.esc_attr($vw_cleaning_company_first_color).';';
		$vw_cleaning_company_custom_css .='}';
	}	

	if($vw_cleaning_company_first_color != false){
		$vw_cleaning_company_custom_css .='nav.woocommerce-MyAccount-navigation ul li a:hover{';
			$vw_cleaning_company_custom_css .='color: '.esc_attr($vw_cleaning_company_first_color).'!important;';
		$vw_cleaning_company_custom_css .='}';
	}	
	if($vw_cleaning_company_first_color != false){
		$vw_cleaning_company_custom_css .='#sidebar .tagcloud a:hover{';
			$vw_cleaning_company_custom_css .='border-color: '.esc_attr($vw_cleaning_company_first_color).';';
		$vw_cleaning_company_custom_css .='}';
	}
	if($vw_cleaning_company_first_color != false){
		$vw_cleaning_company_custom_css .='.main-navigation ul ul{';
			$vw_cleaning_company_custom_css .='border-top-color: '.esc_attr($vw_cleaning_company_first_color).';';
		$vw_cleaning_company_custom_css .='}';
	}
	if($vw_cleaning_company_first_color != false){
		$vw_cleaning_company_custom_css .='.main-navigation ul ul, .header-fixed{';
			$vw_cleaning_company_custom_css .='border-bottom-color: '.esc_attr($vw_cleaning_company_first_color).';';
		$vw_cleaning_company_custom_css .='}';
	}
	if($vw_cleaning_company_first_color != false){
		$vw_cleaning_company_custom_css .='nav.woocommerce-MyAccount-navigation ul li{';
			$vw_cleaning_company_custom_css .='box-shadow: 2px 2px 0 0 '.esc_attr($vw_cleaning_company_first_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	/*------------------- Global Second Color ---------------------*/

	if($vw_cleaning_company_second_color != false){
		$vw_cleaning_company_custom_css .='.middle-header .custom-social-icons i:hover,.search-box i, .middle-header .top-btn a:hover,.more-btn a,input[type="submit"],#sidebar h3,#sidebar .custom-social-icons i, #footer .custom-social-icons i,.pagination .current,.pagination a:hover,#footer .tagcloud a:hover,#footer-2,#comments input[type="submit"],nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon,.widget_product_search button, #comments a.comment-reply-link, .toggle-nav i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer a.custom_read_more, #sidebar a.custom_read_more, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .wp-block-button__link, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__label{';
			$vw_cleaning_company_custom_css .='background-color: '.esc_attr($vw_cleaning_company_second_color).';';
		$vw_cleaning_company_custom_css .='}';
	}
	if($vw_cleaning_company_second_color != false){
		$vw_cleaning_company_custom_css .='.top-bar i,#footer li a:hover,#footer .widget_text a, p.mail-info a:hover, .middle-header a:hover, .logo .site-title a:hover{';
			$vw_cleaning_company_custom_css .='color: '.esc_attr($vw_cleaning_company_second_color).';';
		$vw_cleaning_company_custom_css .='}';
	}	
	if($vw_cleaning_company_second_color != false){
		$vw_cleaning_company_custom_css .='.middle-header .custom-social-icons i:hover,.scrollup i,#footer .tagcloud a:hover{';
			$vw_cleaning_company_custom_css .='border-color: '.esc_attr($vw_cleaning_company_second_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_cleaning_company_theme_lay = get_theme_mod( 'vw_cleaning_company_width_option','Full Width');
    if($vw_cleaning_company_theme_lay == 'Boxed'){
		$vw_cleaning_company_custom_css .='body{';
			$vw_cleaning_company_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_cleaning_company_custom_css .='}';
		$vw_cleaning_company_custom_css .='.scrollup i{';
			$vw_cleaning_company_custom_css .='right: 100px;';
		$vw_cleaning_company_custom_css .='}';
		$vw_cleaning_company_custom_css .='.scrollup.left i{';
		  $vw_cleaning_company_custom_css .='left: 100px;';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_theme_lay == 'Wide Width'){
		$vw_cleaning_company_custom_css .='body{';
			$vw_cleaning_company_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_cleaning_company_custom_css .='}';
		$vw_cleaning_company_custom_css .='.scrollup i{';
			$vw_cleaning_company_custom_css .='right: 30px;';
		$vw_cleaning_company_custom_css .='}';
		$vw_cleaning_company_custom_css .='.scrollup.left i{';
		  $vw_cleaning_company_custom_css .='left: 30px;';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_theme_lay == 'Full Width'){
		$vw_cleaning_company_custom_css .='body{';
			$vw_cleaning_company_custom_css .='max-width: 100%;';
		$vw_cleaning_company_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_cleaning_company_theme_lay = get_theme_mod( 'vw_cleaning_company_slider_opacity_color','0.4');
	if($vw_cleaning_company_theme_lay == '0'){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:0';
		$vw_cleaning_company_custom_css .='}';
		}else if($vw_cleaning_company_theme_lay == '0.1'){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:0.1';
		$vw_cleaning_company_custom_css .='}';
		}else if($vw_cleaning_company_theme_lay == '0.2'){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:0.2';
		$vw_cleaning_company_custom_css .='}';
		}else if($vw_cleaning_company_theme_lay == '0.3'){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:0.3';
		$vw_cleaning_company_custom_css .='}';
		}else if($vw_cleaning_company_theme_lay == '0.4'){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:0.4';
		$vw_cleaning_company_custom_css .='}';
		}else if($vw_cleaning_company_theme_lay == '0.5'){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:0.5';
		$vw_cleaning_company_custom_css .='}';
		}else if($vw_cleaning_company_theme_lay == '0.6'){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:0.6';
		$vw_cleaning_company_custom_css .='}';
		}else if($vw_cleaning_company_theme_lay == '0.7'){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:0.7';
		$vw_cleaning_company_custom_css .='}';
		}else if($vw_cleaning_company_theme_lay == '0.8'){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:0.8';
		$vw_cleaning_company_custom_css .='}';
		}else if($vw_cleaning_company_theme_lay == '0.9'){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:0.9';
		$vw_cleaning_company_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$vw_cleaning_company_slider_image_overlay = get_theme_mod('vw_cleaning_company_slider_image_overlay', true);
	if($vw_cleaning_company_slider_image_overlay == false){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='opacity:1;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_slider_image_overlay_color = get_theme_mod('vw_cleaning_company_slider_image_overlay_color', true);
	if($vw_cleaning_company_slider_image_overlay_color != false){
		$vw_cleaning_company_custom_css .='#slider{';
			$vw_cleaning_company_custom_css .='background-color: '.esc_attr($vw_cleaning_company_slider_image_overlay_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	/*-----------------Slider Content Layout -------------------*/

	$vw_cleaning_company_theme_lay = get_theme_mod( 'vw_cleaning_company_slider_content_option','Left');
    if($vw_cleaning_company_theme_lay == 'Left'){
		$vw_cleaning_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2, #slider .inner_carousel p, #slider .more-btn{';
			$vw_cleaning_company_custom_css .='text-align:left; left:15%; right:45%;';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_theme_lay == 'Center'){
		$vw_cleaning_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2, #slider .inner_carousel p, #slider .more-btn{';
			$vw_cleaning_company_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_theme_lay == 'Right'){
		$vw_cleaning_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2, #slider .inner_carousel p, #slider .more-btn{';
			$vw_cleaning_company_custom_css .='text-align:right; left:45%; right:15%;';
		$vw_cleaning_company_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_cleaning_company_slider_content_padding_top_bottom = get_theme_mod('vw_cleaning_company_slider_content_padding_top_bottom');
	$vw_cleaning_company_slider_content_padding_left_right = get_theme_mod('vw_cleaning_company_slider_content_padding_left_right');
	if($vw_cleaning_company_slider_content_padding_top_bottom != false || $vw_cleaning_company_slider_content_padding_left_right != false){
		$vw_cleaning_company_custom_css .='#slider .carousel-caption{';
			$vw_cleaning_company_custom_css .='top: '.esc_attr($vw_cleaning_company_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_cleaning_company_slider_content_padding_top_bottom).';left: '.esc_attr($vw_cleaning_company_slider_content_padding_left_right).';right: '.esc_attr($vw_cleaning_company_slider_content_padding_left_right).';';
		$vw_cleaning_company_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_cleaning_company_slider_height = get_theme_mod('vw_cleaning_company_slider_height');
	if($vw_cleaning_company_slider_height != false){
		$vw_cleaning_company_custom_css .='#slider img{';
			$vw_cleaning_company_custom_css .='height: '.esc_attr($vw_cleaning_company_slider_height).';';
		$vw_cleaning_company_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$vw_cleaning_company_slider = get_theme_mod('vw_cleaning_company_slider_arrows');
	if($vw_cleaning_company_slider == false){
		$vw_cleaning_company_custom_css .='.page-template-custom-home-page .main-header-box{';
			$vw_cleaning_company_custom_css .='position: static; margin-top: 0px;';
		$vw_cleaning_company_custom_css .='}';
		$vw_cleaning_company_custom_css .='.service-sec{';
			$vw_cleaning_company_custom_css .='margin-top: 20px;';
		$vw_cleaning_company_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_cleaning_company_theme_lay = get_theme_mod( 'vw_cleaning_company_blog_layout_option','Default');
    if($vw_cleaning_company_theme_lay == 'Default'){
		$vw_cleaning_company_custom_css .='.post-main-box{';
			$vw_cleaning_company_custom_css .='';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_theme_lay == 'Center'){
		$vw_cleaning_company_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .post-main-box .more-btn{';
			$vw_cleaning_company_custom_css .='text-align:center;';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_theme_lay == 'Left'){
		$vw_cleaning_company_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .post-main-box .more-btn, #our-services p{';
			$vw_cleaning_company_custom_css .='text-align:Left;';
		$vw_cleaning_company_custom_css .='}';
		$vw_cleaning_company_custom_css .='.box-image{';
			$vw_cleaning_company_custom_css .='padding: 0px;';
		$vw_cleaning_company_custom_css .='}';
		$vw_cleaning_company_custom_css .='.post-main-box h2{';
			$vw_cleaning_company_custom_css .='margin-top:10px;';
		$vw_cleaning_company_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$vw_cleaning_company_blog_page_posts_settings = get_theme_mod( 'vw_cleaning_company_blog_page_posts_settings','Into Blocks');
    if($vw_cleaning_company_blog_page_posts_settings == 'Without Blocks'){
		$vw_cleaning_company_custom_css .='.post-main-box{';
			$vw_cleaning_company_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_cleaning_company_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_cleaning_company_res_topbar = get_theme_mod( 'vw_cleaning_company_resp_topbar_hide_show',false);
	if($vw_cleaning_company_res_topbar == true && get_theme_mod( 'vw_cleaning_company_topbar_hide_show', false) == false){
    	$vw_cleaning_company_custom_css .='.top-bar{';
			$vw_cleaning_company_custom_css .='display:none;';
		$vw_cleaning_company_custom_css .='} ';
	}
    if($vw_cleaning_company_res_topbar == true){
    	$vw_cleaning_company_custom_css .='@media screen and (max-width:575px) {';
		$vw_cleaning_company_custom_css .='.top-bar{';
			$vw_cleaning_company_custom_css .='display:block;';
		$vw_cleaning_company_custom_css .='} }';
	}else if($vw_cleaning_company_res_topbar == false){
		$vw_cleaning_company_custom_css .='@media screen and (max-width:575px) {';
		$vw_cleaning_company_custom_css .='.top-bar{';
			$vw_cleaning_company_custom_css .='display:none;';
		$vw_cleaning_company_custom_css .='} }';
	}

	$vw_cleaning_company_res_stickyheader = get_theme_mod( 'vw_cleaning_company_res_stickyheader_hide_show',false);
	if($vw_cleaning_company_res_stickyheader == true && get_theme_mod( 'vw_cleaning_company_sticky_header',false) != true){
    	$vw_cleaning_company_custom_css .='.header-fixed{';
			$vw_cleaning_company_custom_css .='position:static;';
		$vw_cleaning_company_custom_css .='} ';
	}
    if($vw_cleaning_company_res_stickyheader == true){
    	$vw_cleaning_company_custom_css .='@media screen and (max-width:575px) {';
		$vw_cleaning_company_custom_css .='.header-fixed{';
			$vw_cleaning_company_custom_css .='position:fixed;';
		$vw_cleaning_company_custom_css .='} }';
	}else if($vw_cleaning_company_res_stickyheader == false){
		$vw_cleaning_company_custom_css .='@media screen and (max-width:575px){';
		$vw_cleaning_company_custom_css .='.header-fixed{';
			$vw_cleaning_company_custom_css .='position:static;';
		$vw_cleaning_company_custom_css .='} }';
	}

	$vw_cleaning_company_res_slider = get_theme_mod( 'vw_cleaning_company_resp_slider_hide_show',false);
	if($vw_cleaning_company_res_slider == true && get_theme_mod( 'vw_cleaning_company_slider_arrows', false) == false){
    	$vw_cleaning_company_custom_css .='#slider{';
			$vw_cleaning_company_custom_css .='display:none;';
		$vw_cleaning_company_custom_css .='} ';
	}
    if($vw_cleaning_company_res_slider == true){
    	$vw_cleaning_company_custom_css .='@media screen and (max-width:575px) {';
		$vw_cleaning_company_custom_css .='#slider{';
			$vw_cleaning_company_custom_css .='display:block;';
		$vw_cleaning_company_custom_css .='} }';
	}else if($vw_cleaning_company_res_slider == false){
		$vw_cleaning_company_custom_css .='@media screen and (max-width:575px) {';
		$vw_cleaning_company_custom_css .='#slider{';
			$vw_cleaning_company_custom_css .='display:none;';
		$vw_cleaning_company_custom_css .='} }';
	}

	$vw_cleaning_company_sidebar = get_theme_mod( 'vw_cleaning_company_sidebar_hide_show',true);
    if($vw_cleaning_company_sidebar == true){
    	$vw_cleaning_company_custom_css .='@media screen and (max-width:575px) {';
		$vw_cleaning_company_custom_css .='#sidebar{';
			$vw_cleaning_company_custom_css .='display:block;';
		$vw_cleaning_company_custom_css .='} }';
	}else if($vw_cleaning_company_sidebar == false){
		$vw_cleaning_company_custom_css .='@media screen and (max-width:575px) {';
		$vw_cleaning_company_custom_css .='#sidebar{';
			$vw_cleaning_company_custom_css .='display:none;';
		$vw_cleaning_company_custom_css .='} }';
	}

	$vw_cleaning_company_resp_scroll_top = get_theme_mod( 'vw_cleaning_company_resp_scroll_top_hide_show',true);
	if($vw_cleaning_company_resp_scroll_top == true && get_theme_mod( 'vw_cleaning_company_hide_show_scroll',true) != true){
    	$vw_cleaning_company_custom_css .='.scrollup i{';
			$vw_cleaning_company_custom_css .='visibility:hidden !important;';
		$vw_cleaning_company_custom_css .='} ';
	}
    if($vw_cleaning_company_resp_scroll_top == true){
    	$vw_cleaning_company_custom_css .='@media screen and (max-width:575px) {';
		$vw_cleaning_company_custom_css .='.scrollup i{';
			$vw_cleaning_company_custom_css .='visibility:visible !important;';
		$vw_cleaning_company_custom_css .='} }';
	}else if($vw_cleaning_company_resp_scroll_top == false){
		$vw_cleaning_company_custom_css .='@media screen and (max-width:575px){';
		$vw_cleaning_company_custom_css .='.scrollup i{';
			$vw_cleaning_company_custom_css .='visibility:hidden !important;';
		$vw_cleaning_company_custom_css .='} }';
	}

	$vw_cleaning_company_resp_menu_toggle_btn_bg_color = get_theme_mod('vw_cleaning_company_resp_menu_toggle_btn_bg_color');
	if($vw_cleaning_company_resp_menu_toggle_btn_bg_color != false){
		$vw_cleaning_company_custom_css .='.toggle-nav i{';
			$vw_cleaning_company_custom_css .='background-color: '.esc_attr($vw_cleaning_company_resp_menu_toggle_btn_bg_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_cleaning_company_topbar_padding_top_bottom = get_theme_mod('vw_cleaning_company_topbar_padding_top_bottom');
	if($vw_cleaning_company_topbar_padding_top_bottom != false){
		$vw_cleaning_company_custom_css .='.top-bar{';
			$vw_cleaning_company_custom_css .='padding-top: '.esc_attr($vw_cleaning_company_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_cleaning_company_topbar_padding_top_bottom).';';
		$vw_cleaning_company_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_cleaning_company_navigation_menu_font_size = get_theme_mod('vw_cleaning_company_navigation_menu_font_size');
	if($vw_cleaning_company_navigation_menu_font_size != false){
		$vw_cleaning_company_custom_css .='.main-navigation a{';
			$vw_cleaning_company_custom_css .='font-size: '.esc_attr($vw_cleaning_company_navigation_menu_font_size).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_nav_menus_font_weight = get_theme_mod( 'vw_cleaning_company_navigation_menu_font_weight','Default');
    if($vw_cleaning_company_nav_menus_font_weight == 'Default'){
		$vw_cleaning_company_custom_css .='.main-navigation a{';
			$vw_cleaning_company_custom_css .='';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_nav_menus_font_weight == 'Normal'){
		$vw_cleaning_company_custom_css .='.main-navigation a{';
			$vw_cleaning_company_custom_css .='font-weight: normal;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_sticky_header_padding = get_theme_mod('vw_cleaning_company_sticky_header_padding');
	if($vw_cleaning_company_sticky_header_padding != false){
		$vw_cleaning_company_custom_css .='.header-fixed{';
			$vw_cleaning_company_custom_css .='padding: '.esc_attr($vw_cleaning_company_sticky_header_padding).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_header_menus_color = get_theme_mod('vw_cleaning_company_header_menus_color');
	if($vw_cleaning_company_header_menus_color != false){
		$vw_cleaning_company_custom_css .='.main-navigation a{';
			$vw_cleaning_company_custom_css .='color: '.esc_attr($vw_cleaning_company_header_menus_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_header_menus_hover_color = get_theme_mod('vw_cleaning_company_header_menus_hover_color');
	if($vw_cleaning_company_header_menus_hover_color != false){
		$vw_cleaning_company_custom_css .='.main-navigation a:hover{';
			$vw_cleaning_company_custom_css .='color: '.esc_attr($vw_cleaning_company_header_menus_hover_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_header_submenus_color = get_theme_mod('vw_cleaning_company_header_submenus_color');
	if($vw_cleaning_company_header_submenus_color != false){
		$vw_cleaning_company_custom_css .='.main-navigation ul ul a{';
			$vw_cleaning_company_custom_css .='color: '.esc_attr($vw_cleaning_company_header_submenus_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_header_submenus_hover_color = get_theme_mod('vw_cleaning_company_header_submenus_hover_color');
	if($vw_cleaning_company_header_submenus_hover_color != false){
		$vw_cleaning_company_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_cleaning_company_custom_css .='color: '.esc_attr($vw_cleaning_company_header_submenus_hover_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_menus_item = get_theme_mod( 'vw_cleaning_company_menus_item_style','None');
    if($vw_cleaning_company_menus_item == 'None'){
		$vw_cleaning_company_custom_css .='.main-navigation a{';
			$vw_cleaning_company_custom_css .='';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_menus_item == 'Zoom In'){
		$vw_cleaning_company_custom_css .='.main-navigation a:hover{';
			$vw_cleaning_company_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #ffcf00;';
		$vw_cleaning_company_custom_css .='}';
	}


	/*------------------ Search Settings -----------------*/
	
	$vw_cleaning_company_search_padding_top_bottom = get_theme_mod('vw_cleaning_company_search_padding_top_bottom');
	$vw_cleaning_company_search_padding_left_right = get_theme_mod('vw_cleaning_company_search_padding_left_right');
	$vw_cleaning_company_search_font_size = get_theme_mod('vw_cleaning_company_search_font_size');
	$vw_cleaning_company_search_border_radius = get_theme_mod('vw_cleaning_company_search_border_radius');
	if($vw_cleaning_company_search_padding_top_bottom != false || $vw_cleaning_company_search_padding_left_right != false || $vw_cleaning_company_search_font_size != false || $vw_cleaning_company_search_border_radius != false){
		$vw_cleaning_company_custom_css .='.search-box i{';
			$vw_cleaning_company_custom_css .='padding-top: '.esc_attr($vw_cleaning_company_search_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_cleaning_company_search_padding_top_bottom).';padding-left: '.esc_attr($vw_cleaning_company_search_padding_left_right).';padding-right: '.esc_attr($vw_cleaning_company_search_padding_left_right).';font-size: '.esc_attr($vw_cleaning_company_search_font_size).';border-radius: '.esc_attr($vw_cleaning_company_search_border_radius).'px;';
		$vw_cleaning_company_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_cleaning_company_button_padding_top_bottom = get_theme_mod('vw_cleaning_company_button_padding_top_bottom');
	$vw_cleaning_company_button_padding_left_right = get_theme_mod('vw_cleaning_company_button_padding_left_right');
	if($vw_cleaning_company_button_padding_top_bottom != false || $vw_cleaning_company_button_padding_left_right != false){
		$vw_cleaning_company_custom_css .='.post-main-box .more-btn a{';
			$vw_cleaning_company_custom_css .='padding-top: '.esc_attr($vw_cleaning_company_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_cleaning_company_button_padding_top_bottom).';padding-left: '.esc_attr($vw_cleaning_company_button_padding_left_right).';padding-right: '.esc_attr($vw_cleaning_company_button_padding_left_right).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_button_border_radius = get_theme_mod('vw_cleaning_company_button_border_radius');
	if($vw_cleaning_company_button_border_radius != false){
		$vw_cleaning_company_custom_css .='.post-main-box .more-btn a{';
			$vw_cleaning_company_custom_css .='border-radius: '.esc_attr($vw_cleaning_company_button_border_radius).'px;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_button_font_size = get_theme_mod('vw_cleaning_company_button_font_size',14);
	$vw_cleaning_company_custom_css .='.post-main-box .more-btn a, .more-btn i{';
		$vw_cleaning_company_custom_css .='font-size: '.esc_attr($vw_cleaning_company_button_font_size).';';
	$vw_cleaning_company_custom_css .='}';

	$vw_cleaning_company_theme_lay = get_theme_mod( 'vw_cleaning_company_button_text_transform','Uppercase');
	if($vw_cleaning_company_theme_lay == 'Capitalize'){
		$vw_cleaning_company_custom_css .='.post-main-box .more-btn a{';
			$vw_cleaning_company_custom_css .='text-transform:Capitalize;';
		$vw_cleaning_company_custom_css .='}';
	}
	if($vw_cleaning_company_theme_lay == 'Lowercase'){
		$vw_cleaning_company_custom_css .='.post-main-box .more-btn a{';
			$vw_cleaning_company_custom_css .='text-transform:Lowercase;';
		$vw_cleaning_company_custom_css .='}';
	}
	if($vw_cleaning_company_theme_lay == 'Uppercase'){ 
		$vw_cleaning_company_custom_css .='.post-main-box .more-btn a{';
			$vw_cleaning_company_custom_css .='text-transform:Uppercase;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_button_letter_spacing = get_theme_mod('vw_cleaning_company_button_letter_spacing',14);
	$vw_cleaning_company_custom_css .='.post-main-box .more-btn a{';
		$vw_cleaning_company_custom_css .='letter-spacing: '.esc_attr($vw_cleaning_company_button_letter_spacing).';';
	$vw_cleaning_company_custom_css .='}';

	/*------------- Single Blog Page------------------*/

	$vw_cleaning_company_featured_image_border_radius = get_theme_mod('vw_cleaning_company_featured_image_border_radius', 0);
	if($vw_cleaning_company_featured_image_border_radius != false){
		$vw_cleaning_company_custom_css .='.box-image img, .feature-box img{';
			$vw_cleaning_company_custom_css .='border-radius: '.esc_attr($vw_cleaning_company_featured_image_border_radius).'px;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_featured_image_box_shadow = get_theme_mod('vw_cleaning_company_featured_image_box_shadow',0);
	if($vw_cleaning_company_featured_image_box_shadow != false){
		$vw_cleaning_company_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$vw_cleaning_company_custom_css .='box-shadow: '.esc_attr($vw_cleaning_company_featured_image_box_shadow).'px '.esc_attr($vw_cleaning_company_featured_image_box_shadow).'px '.esc_attr($vw_cleaning_company_featured_image_box_shadow).'px #cccccc;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_single_blog_post_navigation_show_hide = get_theme_mod('vw_cleaning_company_single_blog_post_navigation_show_hide',true);
	if($vw_cleaning_company_single_blog_post_navigation_show_hide != true){
		$vw_cleaning_company_custom_css .='.post-navigation{';
			$vw_cleaning_company_custom_css .='display: none;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_single_blog_comment_title = get_theme_mod('vw_cleaning_company_single_blog_comment_title', 'Leave a Reply');
	if($vw_cleaning_company_single_blog_comment_title == ''){
		$vw_cleaning_company_custom_css .='#comments h2#reply-title {';
			$vw_cleaning_company_custom_css .='display: none;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_single_blog_comment_button_text = get_theme_mod('vw_cleaning_company_single_blog_comment_button_text', 'Post Comment');
	if($vw_cleaning_company_single_blog_comment_button_text == ''){
		$vw_cleaning_company_custom_css .='#comments p.form-submit {';
			$vw_cleaning_company_custom_css .='display: none;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_comment_width = get_theme_mod('vw_cleaning_company_single_blog_comment_width');
	if($vw_cleaning_company_comment_width != false){
		$vw_cleaning_company_custom_css .='#comments textarea{';
			$vw_cleaning_company_custom_css .='width: '.esc_attr($vw_cleaning_company_comment_width).';';
		$vw_cleaning_company_custom_css .='}';
	}

	// featured image dimention
	$vw_cleaning_company_blog_post_featured_image_dimension = get_theme_mod('vw_cleaning_company_blog_post_featured_image_dimension', 'default');
	$vw_cleaning_company_blog_post_featured_image_custom_width = get_theme_mod('vw_cleaning_company_blog_post_featured_image_custom_width',250);
	$vw_cleaning_company_blog_post_featured_image_custom_height = get_theme_mod('vw_cleaning_company_blog_post_featured_image_custom_height',250);
	if($vw_cleaning_company_blog_post_featured_image_dimension == 'custom'){
		$vw_cleaning_company_custom_css .='.box-image img{';
			$vw_cleaning_company_custom_css .='width: '.esc_attr($vw_cleaning_company_blog_post_featured_image_custom_width).'; height: '.esc_attr($vw_cleaning_company_blog_post_featured_image_custom_height).';';
		$vw_cleaning_company_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_cleaning_company_footer_widgets_heading = get_theme_mod( 'vw_cleaning_company_footer_widgets_heading','Left');
    if($vw_cleaning_company_footer_widgets_heading == 'Left'){
		$vw_cleaning_company_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$vw_cleaning_company_custom_css .='text-align: left;';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_footer_widgets_heading == 'Center'){
		$vw_cleaning_company_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_cleaning_company_custom_css .='text-align: center;';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_footer_widgets_heading == 'Right'){
		$vw_cleaning_company_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_cleaning_company_custom_css .='text-align: right;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_footer_widgets_content = get_theme_mod( 'vw_cleaning_company_footer_widgets_content','Left');
    if($vw_cleaning_company_footer_widgets_content == 'Left'){
		$vw_cleaning_company_custom_css .='#footer .widget{';
		$vw_cleaning_company_custom_css .='text-align: left;';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_footer_widgets_content == 'Center'){
		$vw_cleaning_company_custom_css .='#footer .widget{';
			$vw_cleaning_company_custom_css .='text-align: center;';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_footer_widgets_content == 'Right'){
		$vw_cleaning_company_custom_css .='#footer .widget{';
			$vw_cleaning_company_custom_css .='text-align: right;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_footer_background_color = get_theme_mod('vw_cleaning_company_footer_background_color');
	if($vw_cleaning_company_footer_background_color != false){
		$vw_cleaning_company_custom_css .='#footer{';
			$vw_cleaning_company_custom_css .='background-color: '.esc_attr($vw_cleaning_company_footer_background_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_copyright_font_size = get_theme_mod('vw_cleaning_company_copyright_font_size');
	if($vw_cleaning_company_copyright_font_size != false){
		$vw_cleaning_company_custom_css .='.copyright p{';
			$vw_cleaning_company_custom_css .='font-size: '.esc_attr($vw_cleaning_company_copyright_font_size).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_copyright_padding_top_bottom = get_theme_mod('vw_cleaning_company_copyright_padding_top_bottom');
	if($vw_cleaning_company_copyright_padding_top_bottom != false){
		$vw_cleaning_company_custom_css .='#footer-2{';
			$vw_cleaning_company_custom_css .='padding-top: '.esc_attr($vw_cleaning_company_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_cleaning_company_copyright_padding_top_bottom).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_copyright_alignment = get_theme_mod('vw_cleaning_company_copyright_alignment');
	if($vw_cleaning_company_copyright_alignment != false){
		$vw_cleaning_company_custom_css .='.copyright p{';
			$vw_cleaning_company_custom_css .='text-align: '.esc_attr($vw_cleaning_company_copyright_alignment).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_footer_padding = get_theme_mod('vw_cleaning_company_footer_padding');
	if($vw_cleaning_company_footer_padding != false){
		$vw_cleaning_company_custom_css .='#footer{';
			$vw_cleaning_company_custom_css .='padding: '.esc_attr($vw_cleaning_company_footer_padding).' 0;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_footer_icon = get_theme_mod('vw_cleaning_company_footer_icon');
	if($vw_cleaning_company_footer_icon == false){
		$vw_cleaning_company_custom_css .='.copyright p{';
			$vw_cleaning_company_custom_css .='width:100%; text-align:center; float:none;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_footer_background_image = get_theme_mod('vw_cleaning_company_footer_background_image');
	if($vw_cleaning_company_footer_background_image != false){
		$vw_cleaning_company_custom_css .='#footer{';
			$vw_cleaning_company_custom_css .='background: url('.esc_attr($vw_cleaning_company_footer_background_image).');';
		$vw_cleaning_company_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_cleaning_company_scroll_to_top_font_size = get_theme_mod('vw_cleaning_company_scroll_to_top_font_size');
	if($vw_cleaning_company_scroll_to_top_font_size != false){
		$vw_cleaning_company_custom_css .='.scrollup i{';
			$vw_cleaning_company_custom_css .='font-size: '.esc_attr($vw_cleaning_company_scroll_to_top_font_size).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_scroll_to_top_padding = get_theme_mod('vw_cleaning_company_scroll_to_top_padding');
	$vw_cleaning_company_scroll_to_top_padding = get_theme_mod('vw_cleaning_company_scroll_to_top_padding');
	if($vw_cleaning_company_scroll_to_top_padding != false){
		$vw_cleaning_company_custom_css .='.scrollup i{';
			$vw_cleaning_company_custom_css .='padding-top: '.esc_attr($vw_cleaning_company_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_cleaning_company_scroll_to_top_padding).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_scroll_to_top_width = get_theme_mod('vw_cleaning_company_scroll_to_top_width');
	if($vw_cleaning_company_scroll_to_top_width != false){
		$vw_cleaning_company_custom_css .='.scrollup i{';
			$vw_cleaning_company_custom_css .='width: '.esc_attr($vw_cleaning_company_scroll_to_top_width).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_scroll_to_top_height = get_theme_mod('vw_cleaning_company_scroll_to_top_height');
	if($vw_cleaning_company_scroll_to_top_height != false){
		$vw_cleaning_company_custom_css .='.scrollup i{';
			$vw_cleaning_company_custom_css .='height: '.esc_attr($vw_cleaning_company_scroll_to_top_height).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_scroll_to_top_border_radius = get_theme_mod('vw_cleaning_company_scroll_to_top_border_radius');
	if($vw_cleaning_company_scroll_to_top_border_radius != false){
		$vw_cleaning_company_custom_css .='.scrollup i{';
			$vw_cleaning_company_custom_css .='border-radius: '.esc_attr($vw_cleaning_company_scroll_to_top_border_radius).'px;';
		$vw_cleaning_company_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_cleaning_company_social_icon_font_size = get_theme_mod('vw_cleaning_company_social_icon_font_size');
	if($vw_cleaning_company_social_icon_font_size != false){
		$vw_cleaning_company_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_cleaning_company_custom_css .='font-size: '.esc_attr($vw_cleaning_company_social_icon_font_size).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_social_icon_padding = get_theme_mod('vw_cleaning_company_social_icon_padding');
	if($vw_cleaning_company_social_icon_padding != false){
		$vw_cleaning_company_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_cleaning_company_custom_css .='padding: '.esc_attr($vw_cleaning_company_social_icon_padding).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_social_icon_width = get_theme_mod('vw_cleaning_company_social_icon_width');
	if($vw_cleaning_company_social_icon_width != false){
		$vw_cleaning_company_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_cleaning_company_custom_css .='width: '.esc_attr($vw_cleaning_company_social_icon_width).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_social_icon_height = get_theme_mod('vw_cleaning_company_social_icon_height');
	if($vw_cleaning_company_social_icon_height != false){
		$vw_cleaning_company_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_cleaning_company_custom_css .='height: '.esc_attr($vw_cleaning_company_social_icon_height).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_social_icon_border_radius = get_theme_mod('vw_cleaning_company_social_icon_border_radius');
	if($vw_cleaning_company_social_icon_border_radius != false){
		$vw_cleaning_company_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_cleaning_company_custom_css .='border-radius: '.esc_attr($vw_cleaning_company_social_icon_border_radius).'px;';
		$vw_cleaning_company_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_cleaning_company_related_product_show_hide = get_theme_mod('vw_cleaning_company_related_product_show_hide',true);
	if($vw_cleaning_company_related_product_show_hide != true){
		$vw_cleaning_company_custom_css .='.related.products{';
			$vw_cleaning_company_custom_css .='display: none;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_products_padding_top_bottom = get_theme_mod('vw_cleaning_company_products_padding_top_bottom');
	if($vw_cleaning_company_products_padding_top_bottom != false){
		$vw_cleaning_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_cleaning_company_custom_css .='padding-top: '.esc_attr($vw_cleaning_company_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_cleaning_company_products_padding_top_bottom).'!important;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_products_padding_left_right = get_theme_mod('vw_cleaning_company_products_padding_left_right');
	if($vw_cleaning_company_products_padding_left_right != false){
		$vw_cleaning_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_cleaning_company_custom_css .='padding-left: '.esc_attr($vw_cleaning_company_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_cleaning_company_products_padding_left_right).'!important;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_products_box_shadow = get_theme_mod('vw_cleaning_company_products_box_shadow');
	if($vw_cleaning_company_products_box_shadow != false){
		$vw_cleaning_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_cleaning_company_custom_css .='box-shadow: '.esc_attr($vw_cleaning_company_products_box_shadow).'px '.esc_attr($vw_cleaning_company_products_box_shadow).'px '.esc_attr($vw_cleaning_company_products_box_shadow).'px #ddd;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_products_border_radius = get_theme_mod('vw_cleaning_company_products_border_radius', 0);
	if($vw_cleaning_company_products_border_radius != false){
		$vw_cleaning_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_cleaning_company_custom_css .='border-radius: '.esc_attr($vw_cleaning_company_products_border_radius).'px;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_products_btn_padding_top_bottom = get_theme_mod('vw_cleaning_company_products_btn_padding_top_bottom');
	if($vw_cleaning_company_products_btn_padding_top_bottom != false){
		$vw_cleaning_company_custom_css .='.woocommerce a.button{';
			$vw_cleaning_company_custom_css .='padding-top: '.esc_attr($vw_cleaning_company_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vw_cleaning_company_products_btn_padding_top_bottom).' !important;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_products_btn_padding_left_right = get_theme_mod('vw_cleaning_company_products_btn_padding_left_right');
	if($vw_cleaning_company_products_btn_padding_left_right != false){
		$vw_cleaning_company_custom_css .='.woocommerce a.button{';
			$vw_cleaning_company_custom_css .='padding-left: '.esc_attr($vw_cleaning_company_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vw_cleaning_company_products_btn_padding_left_right).' !important;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_products_button_border_radius = get_theme_mod('vw_cleaning_company_products_button_border_radius', 0);
	if($vw_cleaning_company_products_button_border_radius != false){
		$vw_cleaning_company_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$vw_cleaning_company_custom_css .='border-radius: '.esc_attr($vw_cleaning_company_products_button_border_radius).'px;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_woocommerce_sale_position = get_theme_mod( 'vw_cleaning_company_woocommerce_sale_position','right');
    if($vw_cleaning_company_woocommerce_sale_position == 'left'){
		$vw_cleaning_company_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_cleaning_company_custom_css .='left: -10px; right: auto;';
		$vw_cleaning_company_custom_css .='}';
	}else if($vw_cleaning_company_woocommerce_sale_position == 'right'){
		$vw_cleaning_company_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_cleaning_company_custom_css .='left: auto; right: 0;';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_woocommerce_sale_font_size = get_theme_mod('vw_cleaning_company_woocommerce_sale_font_size');
	if($vw_cleaning_company_woocommerce_sale_font_size != false){
		$vw_cleaning_company_custom_css .='.woocommerce span.onsale{';
			$vw_cleaning_company_custom_css .='font-size: '.esc_attr($vw_cleaning_company_woocommerce_sale_font_size).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_woocommerce_sale_padding_top_bottom = get_theme_mod('vw_cleaning_company_woocommerce_sale_padding_top_bottom');
	if($vw_cleaning_company_woocommerce_sale_padding_top_bottom != false){
		$vw_cleaning_company_custom_css .='.woocommerce span.onsale{';
			$vw_cleaning_company_custom_css .='padding-top: '.esc_attr($vw_cleaning_company_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_cleaning_company_woocommerce_sale_padding_top_bottom).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_woocommerce_sale_padding_left_right = get_theme_mod('vw_cleaning_company_woocommerce_sale_padding_left_right');
	if($vw_cleaning_company_woocommerce_sale_padding_left_right != false){
		$vw_cleaning_company_custom_css .='.woocommerce span.onsale{';
			$vw_cleaning_company_custom_css .='padding-left: '.esc_attr($vw_cleaning_company_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($vw_cleaning_company_woocommerce_sale_padding_left_right).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_woocommerce_sale_border_radius = get_theme_mod('vw_cleaning_company_woocommerce_sale_border_radius', 0);
	if($vw_cleaning_company_woocommerce_sale_border_radius != false){
		$vw_cleaning_company_custom_css .='.woocommerce span.onsale{';
			$vw_cleaning_company_custom_css .='border-radius: '.esc_attr($vw_cleaning_company_woocommerce_sale_border_radius).'px;';
		$vw_cleaning_company_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	// Site title Font Size
	$vw_cleaning_company_site_title_font_size = get_theme_mod('vw_cleaning_company_site_title_font_size');
	if($vw_cleaning_company_site_title_font_size != false){
		$vw_cleaning_company_custom_css .='h1.site-title a, h1.site-title, p.site-title, p.site-title a{';
			$vw_cleaning_company_custom_css .='font-size: '.esc_attr($vw_cleaning_company_site_title_font_size).';';
		$vw_cleaning_company_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_cleaning_company_site_tagline_font_size = get_theme_mod('vw_cleaning_company_site_tagline_font_size');
	if($vw_cleaning_company_site_tagline_font_size != false){
		$vw_cleaning_company_custom_css .='p.site-description{';
			$vw_cleaning_company_custom_css .='font-size: '.esc_attr($vw_cleaning_company_site_tagline_font_size).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_logo_padding = get_theme_mod('vw_cleaning_company_logo_padding');
	if($vw_cleaning_company_logo_padding != false){
		$vw_cleaning_company_custom_css .='.logo{';
			$vw_cleaning_company_custom_css .='padding: '.esc_attr($vw_cleaning_company_logo_padding).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_logo_margin = get_theme_mod('vw_cleaning_company_logo_margin');
	if($vw_cleaning_company_logo_margin != false){
		$vw_cleaning_company_custom_css .='.logo{';
			$vw_cleaning_company_custom_css .='margin: '.esc_attr($vw_cleaning_company_logo_margin).';';
		$vw_cleaning_company_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$vw_cleaning_company_preloader_bg_color = get_theme_mod('vw_cleaning_company_preloader_bg_color');
	if($vw_cleaning_company_preloader_bg_color != false){
		$vw_cleaning_company_custom_css .='#preloader{';
			$vw_cleaning_company_custom_css .='background-color: '.esc_attr($vw_cleaning_company_preloader_bg_color).';';
		$vw_cleaning_company_custom_css .='}';
	}

	$vw_cleaning_company_preloader_border_color = get_theme_mod('vw_cleaning_company_preloader_border_color');
	if($vw_cleaning_company_preloader_border_color != false){
		$vw_cleaning_company_custom_css .='.loader-line{';
			$vw_cleaning_company_custom_css .='border-color: '.esc_attr($vw_cleaning_company_preloader_border_color).'!important;';
		$vw_cleaning_company_custom_css .='}';
	}
