<?php
/**
 * Designer Artist Theme Customizer
 *
 * @package Designer Artist
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function designer_artist_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'designer_artist_custom_controls' );

function designer_artist_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'designer_artist_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'designer_artist_Customize_partial_blogdescription',
	));

	//Homepage Settings
	$wp_customize->add_panel( 'designer_artist_homepage_panel', array(
		'title' => esc_html__( 'Homepage Settings', 'designer-artist' ),
		'panel' => 'designer_artist_panel_id',
		'priority' => 20,
	));

	//Topbar
	$wp_customize->add_section( 'designer_artist_header_section' , array(
  	'title' => __( 'Header Section', 'designer-artist' ),
	'panel' => 'designer_artist_homepage_panel'
	) );

 	// Header Background color
	$wp_customize->add_setting('designer_artist_header_background_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_header_background_color', array(
		'label'    => __('Header Background Color', 'designer-artist'),
		'section'  => 'header_image',
	)));

	$wp_customize->add_setting('designer_artist_header_img_position',array(
	  'default' => 'center top',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_header_img_position',array(
		'type' => 'select',
		'label' => __('Header Image Position','designer-artist'),
		'section' => 'header_image',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'designer-artist' ),
			'center top'   => esc_html__( 'Top', 'designer-artist' ),
			'right top'   => esc_html__( 'Top Right', 'designer-artist' ),
			'left center'   => esc_html__( 'Left', 'designer-artist' ),
			'center center'   => esc_html__( 'Center', 'designer-artist' ),
			'right center'   => esc_html__( 'Right', 'designer-artist' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'designer-artist' ),
			'center bottom'   => esc_html__( 'Bottom', 'designer-artist' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'designer-artist' ),
		),
	));

	//Sticky Header
	$wp_customize->add_setting( 'designer_artist_sticky_header',array(
	  'default' => 0,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'designer_artist_switch_sanitization'
	) );
	$wp_customize->add_control( new designer_artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_sticky_header',array(
	  'label' => esc_html__( 'Sticky Header','designer-artist' ),
	  'section' => 'designer_artist_header_section'
	)));

	$wp_customize->add_setting('designer_artist_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
	        'placeholder' => __( '10px', 'designer-artist' ),
	    ),
		'section'=> 'designer_artist_header_section',
		'type'=> 'text'
	));


	$wp_customize->add_setting( 'designer_artist_topbar_hide_show',array(
	    'default' => 0,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'designer_artist_switch_sanitization'
  	));
  	$wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_topbar_hide_show',array(
      'label' => esc_html__( 'Show / Hide Topbar','designer-artist' ),
      'section' => 'designer_artist_header_section'
  	)));

	$wp_customize->add_setting('designer_artist_email_address',array(
	    'default'=> '',
	    'sanitize_callback' => 'sanitize_email'
	));
	$wp_customize->add_control('designer_artist_email_address',array(
    'label' => esc_html__('Email Address','designer-artist'),
    'input_attrs' => array(
            'placeholder' => esc_html__( 'example@gmail.com', 'designer-artist' ),
        ),
    'section'=> 'designer_artist_header_section',
    'type'=> 'Email'
 	));

	$wp_customize->add_setting('designer_artist_email_icon',array(
		'default'	=> 'fas fa-envelope-open',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new designer_artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_email_icon',array(
		'label'	=> __('Add Email Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_header_section',
		'setting'	=> 'designer_artist_email_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('designer_artist_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'designer_artist_sanitize_phone_number'
	));
	$wp_customize->add_control('designer_artist_phone_number',array(
		'label'	=> esc_html__('Add Phone Number','designer-artist'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '1234567890', 'designer-artist' ),
    ),
		'section'=> 'designer_artist_header_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_phone_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new designer_artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_phone_icon',array(
		'label'	=> __('Add Email Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_header_section',
		'setting'	=> 'designer_artist_phone_icon',
		'type'		=> 'icon'
	)));


	$wp_customize->add_setting('designer_artist_cart_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_cart_button_text',array(
		'label'	=> esc_html__('Add Button Text','designer-artist'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Cart', 'designer-artist' ),
    ),
		'section'=> 'designer_artist_header_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_cart_icon',array(
		'default'	=> 'fas fa-shopping-bag',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new designer_artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_cart_icon',array(
		'label'	=> __('Add Cart Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_header_section',
		'setting'	=> 'designer_artist_cart_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('designer_artist_cart_button_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('designer_artist_cart_button_link',array(
		'label'	=> esc_html__('Add Button Link','designer-artist'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'www.example-info.com', 'designer-artist' ),
    ),
		'section'=> 'designer_artist_header_section',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'designer_artist_search_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'designer_artist_switch_sanitization'
    ));
    $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_search_hide_show',array(
      'label' => esc_html__( 'Show / Hide Search','designer-artist' ),
      'section' => 'designer_artist_header_section'
    )));

 	$wp_customize->add_setting('designer_artist_searchopen_topbar_section',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new designer_artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_searchopen_topbar_section',array(
		'label'	=> __('Add Search Open Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_header_section',
		'setting'	=> 'designer_artist_searchopen_topbar_section',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting('designer_artist_searchclose_topbar_section',array(
		'default'	=> 'fas fa-window-close',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new designer_artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_searchclose_topbar_section',array(
		'label'	=> __('Add Search Close Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_header_section',
		'setting'	=> 'designer_artist_searchclose_topbar_section',
		'type'		=> 'icon'
	)));

 	//Menus Settings
	$wp_customize->add_section( 'designer_artist_menu_section' , array(
    'title' => __( 'Menus Settings', 'designer-artist' ),
		'panel' => 'designer_artist_homepage_panel'
	));

	$wp_customize->add_setting('designer_artist_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_navigation_menu_font_weight',array(
	  'default' => 600,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_navigation_menu_font_weight',array(
    'type' => 'select',
    'label' => __('Menus Font Weight','designer-artist'),
    'section' => 'designer_artist_menu_section',
    'choices' => array(
    	'100' => __('100','designer-artist'),
        '200' => __('200','designer-artist'),
        '300' => __('300','designer-artist'),
        '400' => __('400','designer-artist'),
        '500' => __('500','designer-artist'),
        '600' => __('600','designer-artist'),
        '700' => __('700','designer-artist'),
        '800' => __('800','designer-artist'),
        '900' => __('900','designer-artist'),
    ),
	));

	// text trasform
	$wp_customize->add_setting('designer_artist_menu_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menus Text Transform','designer-artist'),
		'choices' => array(
      'Uppercase' => __('Uppercase','designer-artist'),
      'Capitalize' => __('Capitalize','designer-artist'),
      'Lowercase' => __('Lowercase','designer-artist'),
      ),
		'section'=> 'designer_artist_menu_section',
	));

	$wp_customize->add_setting('designer_artist_menus_item_style',array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_menus_item_style',array(
    'type' => 'select',
    'section' => 'designer_artist_menu_section',
		'label' => __('Menu Item Hover Style','designer-artist'),
		'choices' => array(
            'None' => __('None','designer-artist'),
            'Zoom In' => __('Zoom In','designer-artist'),
        ),
	) );

	$wp_customize->add_setting('designer_artist_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_header_menus_color', array(
		'label'    => __('Menus Color', 'designer-artist'),
		'section'  => 'designer_artist_menu_section',
	)));

	$wp_customize->add_setting('designer_artist_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'designer-artist'),
		'section'  => 'designer_artist_menu_section',
	)));

	$wp_customize->add_setting('designer_artist_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'designer-artist'),
		'section'  => 'designer_artist_menu_section',
	)));

	$wp_customize->add_setting('designer_artist_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'designer-artist'),
		'section'  => 'designer_artist_menu_section',
	)));

	//Slider
	$wp_customize->add_section( 'designer_artist_slidersettings' , array(
  	'title'      => __( 'Slider Settings', 'designer-artist' ),
  	'description' => __('Free theme has 3 slides options, For unlimited slides and more options </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/designer-portfolio-wordpress-theme/">GET PRO</a>','designer-artist'),
	'panel' => 'designer_artist_homepage_panel'
	) );

	$wp_customize->add_setting( 'designer_artist_slider_hide_show',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'designer_artist_switch_sanitization'
	));
	$wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_slider_hide_show',array(
	'label' => esc_html__( 'Show / Hide Slider','designer-artist' ),
	'section' => 'designer_artist_slidersettings'
	)));

  	$wp_customize->add_setting('designer_artist_slider_type',array(
        'default' => 'Default slider',
        'sanitize_callback' => 'designer_artist_sanitize_choices'
	) );
	$wp_customize->add_control('designer_artist_slider_type', array(
        'type' => 'select',
        'label' => __('Slider Type','designer-artist'),
        'section' => 'designer_artist_slidersettings',
        'choices' => array(
            'Default slider' => __('Default slider','designer-artist'),
            'Advance slider' => __('Advance slider','designer-artist'),
        ),
	));

	$wp_customize->add_setting('designer_artist_advance_slider_shortcode',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_advance_slider_shortcode',array(
		'label'	=> __('Add Slider Shortcode','designer-artist'),
		'section'=> 'designer_artist_slidersettings',
		'type'=> 'text',
		'active_callback' => 'designer_artist_advance_slider'
	));


   	//Selective Refresh
 	$wp_customize->selective_refresh->add_partial('designer_artist_slider_hide_show',array(
		'selector'        => '.slider-btn a',
		'render_callback' => 'designer_artist_customize_partial_designer_artist_slider_hide_show',
	));

	for ( $count = 1; $count <= 3; $count++ ) {
		$wp_customize->add_setting( 'designer_artist_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'designer_artist_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'designer_artist_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'designer-artist' ),
			'description' => __('Slider image size (1400 x 550)','designer-artist'),
			'section'  => 'designer_artist_slidersettings',
			'type'     => 'dropdown-pages',
			'active_callback' => 'designer_artist_default_slider'
		) );
	}

	$wp_customize->add_setting('designer_artist_slider_button_text',array(
		'default'=> 'Explore Now',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_slider_button_text',array(
		'label'	=> __('Add Slider Button Text','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( 'Explore Now', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_slidersettings',
		'type'=> 'text',
		'active_callback' => 'designer_artist_default_slider'
	));

	$wp_customize->add_setting('designer_artist_top_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('designer_artist_top_button_url',array(
		'label'	=> __('Add Button URL','designer-artist'),
		'section'	=> 'designer_artist_slidersettings',
		'setting'	=> 'designer_artist_top_button_url',
		'type'	=> 'url',
		'active_callback' => 'designer_artist_default_slider'
	));

   //Slider content padding
    $wp_customize->add_setting('designer_artist_slider_content_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_slider_content_padding_top_bottom',array(
		'label'	=> __('Slider Content Padding Top Bottom','designer-artist'),
		'description'	=> __('Enter a value in %. Example:20%','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '50%', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_slidersettings',
		'type'=> 'text',
		'active_callback' => 'designer_artist_default_slider'
	));

	$wp_customize->add_setting('designer_artist_slider_content_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_slider_content_padding_left_right',array(
		'label'	=> __('Slider Content Padding Left Right','designer-artist'),
		'description'	=> __('Enter a value in %. Example:20%','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '50%', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_slidersettings',
		'type'=> 'text',
		'active_callback' => 'designer_artist_default_slider'
	));

    //Slider excerpt
	$wp_customize->add_setting( 'designer_artist_slider_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','designer-artist' ),
		'section'     => 'designer_artist_slidersettings',
		'type'        => 'range',
		'settings'    => 'designer_artist_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),'active_callback' => 'designer_artist_default_slider'
	) );

	$wp_customize->add_setting( 'designer_artist_slider_speed', array(
		'default'  => 4000,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'designer_artist_slider_speed', array(
		'label' => esc_html__('Slider Transition Speed','designer-artist'),
		'section' => 'designer_artist_slidersettings',
		'type'  => 'text',
		'active_callback' => 'designer_artist_default_slider'
	) );

	//Slider height
	$wp_customize->add_setting('designer_artist_slider_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_slider_height',array(
		'label'	=> __('Slider Height','designer-artist'),
		'description'	=> __('Specify the slider height (px).','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '500px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_slidersettings',
		'type'=> 'text',
		'active_callback' => 'designer_artist_default_slider'
	));

	//Opacity
	$wp_customize->add_setting('designer_artist_slider_opacity_color',array(
      'default'              => 0.5,
      'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control( 'designer_artist_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','designer-artist' ),
		'section'     => 'designer_artist_slidersettings',
		'type'        => 'select',
		'settings'    => 'designer_artist_slider_opacity_color',
		'choices' => array(
			'0' =>  esc_attr('0','designer-artist'),
			'0.1' =>  esc_attr('0.1','designer-artist'),
			'0.2' =>  esc_attr('0.2','designer-artist'),
			'0.3' =>  esc_attr('0.3','designer-artist'),
			'0.4' =>  esc_attr('0.4','designer-artist'),
			'0.5' =>  esc_attr('0.5','designer-artist'),
			'0.6' =>  esc_attr('0.6','designer-artist'),
			'0.7' =>  esc_attr('0.7','designer-artist'),
			'0.8' =>  esc_attr('0.8','designer-artist'),
			'0.9' =>  esc_attr('0.9','designer-artist')
	),'active_callback' => 'designer_artist_default_slider'
	));

	$wp_customize->add_setting( 'designer_artist_slider_image_overlay',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'designer_artist_switch_sanitization'
  ));
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_slider_image_overlay',array(
    	'label' => esc_html__( 'Slider Image Overlay','designer-artist' ),
    	'section' => 'designer_artist_slidersettings',
    	'active_callback' => 'designer_artist_default_slider'
  )));

  $wp_customize->add_setting('designer_artist_slider_image_overlay_color', array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_slider_image_overlay_color', array(
		'label'    => __('Slider Image Overlay Color', 'designer-artist'),
		'section'  => 'designer_artist_slidersettings',
		'active_callback' => 'designer_artist_default_slider'
	)));

	//content layout
	$wp_customize->add_setting('designer_artist_slider_content_option',array(
        'default' => 'Center',
        'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control(new designer_artist_Image_Radio_Control($wp_customize, 'designer_artist_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','designer-artist'),
        'section' => 'designer_artist_slidersettings',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/slider-content1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/slider-content2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/slider-content3.png',
    ),
    	'active_callback' => 'designer_artist_default_slider'
	)));

	$wp_customize->add_setting( 'designer_artist_slider_arrow_hide_show',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'designer_artist_switch_sanitization'
	));
	$wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_slider_arrow_hide_show',array(
		'label' => esc_html__( 'Show / Hide Slider Arrows','designer-artist' ),
		'section' => 'designer_artist_slidersettings',
		'active_callback' => 'designer_artist_default_slider'
	))); 

	$wp_customize->add_setting('designer_artist_slider_prev_icon',array(
		'default'	=> 'fas fa-angle-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_slider_prev_icon',array(
		'label'	=> __('Add Slider Prev Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_slidersettings',
		'setting'	=> 'designer_artist_slider_prev_icon',
		'type'		=> 'icon',
		'active_callback' => 'designer_artist_default_slider'
	)));

	$wp_customize->add_setting('designer_artist_slider_next_icon',array(
		'default'	=> 'fas fa-angle-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_slider_next_icon',array(
		'label'	=> __('Add Slider Next Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_slidersettings',
		'setting'	=> 'designer_artist_slider_next_icon',
		'type'		=> 'icon',
		'active_callback' => 'designer_artist_default_slider'
	)));

	//features Section
	$wp_customize->add_section('designer_artist_features', array(
		'title'       => __('Features Section', 'designer-artist'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','designer-artist'),
		'priority'    => null,
		'panel'       => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting('designer_artist_features_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_features_text',array(
		'description' => __('<p>1. More options for features section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for features section.</p>','designer-artist'),
		'section'=> 'designer_artist_features',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('designer_artist_features_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_features_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=designer_artist_guide') ." '>More Info</a>",
		'section'=> 'designer_artist_features',
		'type'=> 'hidden'
	));

	//Work Section
	$wp_customize->add_section('designer_artist_work', array(
		'title'       => __('Work Section', 'designer-artist'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','designer-artist'),
		'priority'    => null,
		'panel'       => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting('designer_artist_work_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_work_text',array(
		'description' => __('<p>1. More options for work section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for work section.</p>','designer-artist'),
		'section'=> 'designer_artist_work',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('designer_artist_work_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_work_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=designer_artist_guide') ." '>More Info</a>",
		'section'=> 'designer_artist_work',
		'type'=> 'hidden'
	));

	//about us Section
	$wp_customize->add_section('designer_artist_about_us', array(
		'title'       => __('About Us Section', 'designer-artist'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','designer-artist'),
		'priority'    => null,
		'panel'       => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting('designer_artist_about_us_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_about_us_text',array(
		'description' => __('<p>1. More options for about us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for about us section.</p>','designer-artist'),
		'section'=> 'designer_artist_about_us',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('designer_artist_about_us_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_about_us_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=designer_artist_guide') ." '>More Info</a>",
		'section'=> 'designer_artist_about_us',
		'type'=> 'hidden'
	));

	// Products Section
	$wp_customize->add_section( 'designer_artist_product_section' , array(
    	'title'      => __( 'Products Section', 'designer-artist' ),
    	'description' => __('For more options of Products section</br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/designer-portfolio-wordpress-theme/">GET PRO</a>','designer-artist'),
		'priority'   => null,
		'panel' => 'designer_artist_homepage_panel'
	) );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'designer_artist_product_settings', array(
		'selector' => '#bakery-product h2',
		'render_callback' => 'designer_artist_customize_partial_designer_artist_product_settings',
	));

	$wp_customize->add_setting( 'designer_artist_product_hide_show',array(
	    'default' => 0,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'designer_artist_switch_sanitization'
	));
	$wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_product_hide_show',array(
		'label' => esc_html__( 'Show / Hide Product Section','designer-artist' ),
		'section' => 'designer_artist_product_section'
	)));

	$wp_customize->add_setting('designer_artist_product_heading_product',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_product_heading_product',array(
		'label'	=> __('Add Text','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( 'Add Heading Text', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_product_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_product_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_product_title',array(
		'label'	=> __('Add Text','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( 'Add Small Text', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_product_section',
		'type'=> 'text'
	));

	$args = array(
		'type'         => 'product',
		'child_of'     => 0,
		'parent'       => '',
		'orderby'      => 'term_group',
		'order'        => 'ASC',
		'hide_empty'   => false,
		'hierarchical' => 1,
		'number'       => '',
		'taxonomy'     => 'product_cat',
		'pad_counts'   => false
	);
 	$categories = get_categories( $args );
	$cat_posts = array();
	$i = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('designer_artist_product_settings',array(
		'default'	=> 'select',
		'sanitize_callback' => 'designer_artist_sanitize_choices',
	));
	$wp_customize->add_control('designer_artist_product_settings',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display Products','designer-artist'),
		'section' => 'designer_artist_product_section',
	));

	//events Section
	$wp_customize->add_section('designer_artist_events', array(
		'title'       => __('Events Section', 'designer-artist'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','designer-artist'),
		'priority'    => null,
		'panel'       => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting('designer_artist_events_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_events_text',array(
		'description' => __('<p>1. More options for events section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for events section.</p>','designer-artist'),
		'section'=> 'designer_artist_events',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('designer_artist_events_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_events_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=designer_artist_guide') ." '>More Info</a>",
		'section'=> 'designer_artist_events',
		'type'=> 'hidden'
	));

	//Records Section
	$wp_customize->add_section('designer_artist_records', array(
		'title'       => __('Records Section', 'designer-artist'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','designer-artist'),
		'priority'    => null,
		'panel'       => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting('designer_artist_records_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_records_text',array(
		'description' => __('<p>1. More options for records section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for records section.</p>','designer-artist'),
		'section'=> 'designer_artist_records',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('designer_artist_records_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_work_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=designer_artist_guide') ." '>More Info</a>",
		'section'=> 'designer_artist_work',
		'type'=> 'hidden'
	));

	//team Section
	$wp_customize->add_section('designer_artist_team', array(
		'title'       => __('Team Section', 'designer-artist'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','designer-artist'),
		'priority'    => null,
		'panel'       => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting('designer_artist_team_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_team_text',array(
		'description' => __('<p>1. More options for team section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for team section.</p>','designer-artist'),
		'section'=> 'designer_artist_team',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('designer_artist_team_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_team_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=designer_artist_guide') ." '>More Info</a>",
		'section'=> 'designer_artist_team',
		'type'=> 'hidden'
	));

	//painting-category Section
	$wp_customize->add_section('designer_artist_painting_category', array(
		'title'       => __('Painting Category Section', 'designer-artist'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','designer-artist'),
		'priority'    => null,
		'panel'       => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting('designer_artist_painting_category_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_painting_category_text',array(
		'description' => __('<p>1. More options for painting category section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for painting category section.</p>','designer-artist'),
		'section'=> 'designer_artist_painting_category',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('designer_artist_painting_category_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_painting_category_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=designer_artist_guide') ." '>More Info</a>",
		'section'=> 'designer_artist_painting_category',
		'type'=> 'hidden'
	));

	//clients Section
	$wp_customize->add_section('designer_artist_clients', array(
		'title'       => __('Clients Section', 'designer-artist'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','designer-artist'),
		'priority'    => null,
		'panel'       => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting('designer_artist_clients_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_clients_text',array(
		'description' => __('<p>1. More options for clients section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for clients section.</p>','designer-artist'),
		'section'=> 'designer_artist_clients',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('designer_artist_clients_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_clients_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=designer_artist_guide') ." '>More Info</a>",
		'section'=> 'designer_artist_clients',
		'type'=> 'hidden'
	));

	//blogs Section
	$wp_customize->add_section('designer_artist_blogs', array(
		'title'       => __('Blogs Section', 'designer-artist'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','designer-artist'),
		'priority'    => null,
		'panel'       => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting('designer_artist_blogs_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_blogs_text',array(
		'description' => __('<p>1. More options for blogs section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for blogs section.</p>','designer-artist'),
		'section'=> 'designer_artist_blogs',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('designer_artist_blogs_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_blogs_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=designer_artist_guide') ." '>More Info</a>",
		'section'=> 'designer_artist_blogs',
		'type'=> 'hidden'
	));

	//instagram Section
	$wp_customize->add_section('designer_artist_instagram', array(
		'title'       => __('Instagram Section', 'designer-artist'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','designer-artist'),
		'priority'    => null,
		'panel'       => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting('designer_artist_instagram_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_instagram_text',array(
		'description' => __('<p>1. More options for instagram section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for instagram section.</p>','designer-artist'),
		'section'=> 'designer_artist_instagram',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('designer_artist_instagram_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_instagram_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=designer_artist_guide') ." '>More Info</a>",
		'section'=> 'designer_artist_instagram',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('designer_artist_footer',array(
		'title'	=> esc_html__('Footer Settings','designer-artist'),
		'description' => __('For more options of Products section</br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/designer-portfolio-wordpress-theme/">GET PRO</a>','designer-artist'),
		'panel' => 'designer_artist_homepage_panel',
	));

	$wp_customize->add_setting( 'designer_artist_footer_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'designer_artist_switch_sanitization'
	));
	$wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_footer_hide_show',array(
		'label' => esc_html__( 'Show / Hide Footer','designer-artist' ),
		'section' => 'designer_artist_footer'
	)));

	// font size
	$wp_customize->add_setting('designer_artist_button_footer_font_size',array(
		'default'=> 30,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','designer-artist'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'designer_artist_footer',
	));

	$wp_customize->add_setting('designer_artist_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','designer-artist'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'designer_artist_footer',
	));

	// text trasform
	$wp_customize->add_setting('designer_artist_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','designer-artist'),
		'choices' => array(
      'Uppercase' => __('Uppercase','designer-artist'),
      'Capitalize' => __('Capitalize','designer-artist'),
      'Lowercase' => __('Lowercase','designer-artist'),
    ),
		'section'=> 'designer_artist_footer',
	));

	$wp_customize->add_setting('designer_artist_footer_heading_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_footer_heading_weight',array(
        'type' => 'select',
        'label' => __('Heading Font Weight','designer-artist'),
        'section' => 'designer_artist_footer',
        'choices' => array(
        	'100' => __('100','designer-artist'),
            '200' => __('200','designer-artist'),
            '300' => __('300','designer-artist'),
            '400' => __('400','designer-artist'),
            '500' => __('500','designer-artist'),
            '600' => __('600','designer-artist'),
            '700' => __('700','designer-artist'),
            '800' => __('800','designer-artist'),
            '900' => __('900','designer-artist'),
        ),
	) );

	$wp_customize->add_setting('designer_artist_footer_template',array(
		'default'	=> esc_html('designer_artist-footer-one'),
		'sanitize_callback'	=> 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_footer_template',array(
	  'label'	=> esc_html__('Footer style','designer-artist'),
	  'section'	=> 'designer_artist_footer',
	  'setting'	=> 'designer_artist_footer_template',
	  'type' => 'select',
	  'choices' => array(
	      'designer_artist-footer-one' => esc_html__('Style 1', 'designer-artist'),
	      'designer_artist-footer-two' => esc_html__('Style 2', 'designer-artist'),
	      'designer_artist-footer-three' => esc_html__('Style 3', 'designer-artist'),
	      'designer_artist-footer-four' => esc_html__('Style 4', 'designer-artist'),
	      'designer_artist-footer-five' => esc_html__('Style 5', 'designer-artist'),
	      )
	));

	$wp_customize->add_setting('designer_artist_footer_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_footer_background_color', array(
		'label'    => __('Footer Background Color', 'designer-artist'),
		'section'  => 'designer_artist_footer',
	)));

	$wp_customize->add_setting('designer_artist_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'designer_artist_footer_background_image',array(
        'label' => __('Footer Background Image','designer-artist'),
        'section' => 'designer_artist_footer'
	)));

	$wp_customize->add_setting('designer_artist_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','designer-artist'),
		'section' => 'designer_artist_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'designer-artist' ),
			'center top'   => esc_html__( 'Top', 'designer-artist' ),
			'right top'   => esc_html__( 'Top Right', 'designer-artist' ),
			'left center'   => esc_html__( 'Left', 'designer-artist' ),
			'center center'   => esc_html__( 'Center', 'designer-artist' ),
			'right center'   => esc_html__( 'Right', 'designer-artist' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'designer-artist' ),
			'center bottom'   => esc_html__( 'Bottom', 'designer-artist' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'designer-artist' ),
		),
	)); 

	// Footer
	$wp_customize->add_setting('designer_artist_img_footer',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_img_footer',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','designer-artist'),
		'choices' => array(
      'fixed' => __('fixed','designer-artist'),
      'scroll' => __('scroll','designer-artist'),
      ),
		'section'=> 'designer_artist_footer',
	));

	$wp_customize->add_setting('designer_artist_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','designer-artist'),
    'section' => 'designer_artist_footer',
    'choices' => array(
    	'Left' => __('Left','designer-artist'),
        'Center' => __('Center','designer-artist'),
        'Right' => __('Right','designer-artist')
      ),
	) );

	$wp_customize->add_setting('designer_artist_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','designer-artist'),
    'section' => 'designer_artist_footer',
    'choices' => array(
    	'Left' => __('Left','designer-artist'),
        'Center' => __('Center','designer-artist'),
        'Right' => __('Right','designer-artist')
        ),
	) );

	// footer padding
	$wp_customize->add_setting('designer_artist_footer_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_footer_padding',array(
		'label'	=> __('Footer Top Bottom Padding','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'designer-artist' ),
    ),
		'section'=> 'designer_artist_footer',
		'type'=> 'text'
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('designer_artist_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'designer_artist_Customize_partial_designer_artist_footer_text',
	));

	$wp_customize->add_setting( 'designer_artist_copyright_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'designer_artist_switch_sanitization'
    ));
    $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_copyright_hide_show',array(
      'label' => esc_html__( 'Show / Hide Copyright','designer-artist' ),
      'section' => 'designer_artist_footer'
    )));

	$wp_customize->add_setting('designer_artist_copyright_background_color', array(
		'default'           => '#dd3333',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'designer-artist'),
		'section'  => 'designer_artist_footer',
	)));

	$wp_customize->add_setting('designer_artist_copyright_text_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_copyright_text_color', array(
		'label'    => __('Copyright Text Color', 'designer-artist'),
		'section'  => 'designer_artist_footer',
	)));

	$wp_customize->add_setting('designer_artist_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_footer_text',array(
		'label'	=> esc_html__('Copyright Text','designer-artist'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Copyright 2021, .....', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_copyright_font_weight',array(
	  'default' => 400,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_copyright_font_weight',array(
	    'type' => 'select',
	    'label' => __('Copyright Font Weight','designer-artist'),
	    'section' => 'designer_artist_footer',
	    'choices' => array(
	    	'100' => __('100','designer-artist'),
	        '200' => __('200','designer-artist'),
	        '300' => __('300','designer-artist'),
	        '400' => __('400','designer-artist'),
	        '500' => __('500','designer-artist'),
	        '600' => __('600','designer-artist'),
	        '700' => __('700','designer-artist'),
	        '800' => __('800','designer-artist'),
	        '900' => __('900','designer-artist'),
    ),
	));

	$wp_customize->add_setting('designer_artist_copyright_alingment',array(
        'default' => 'center',
        'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control(new Designer_Artist_Image_Radio_Control($wp_customize, 'designer_artist_copyright_alingment', array(
        'type' => 'select',
        'label' => esc_html__('Copyright Alignment','designer-artist'),
        'section' => 'designer_artist_footer',
        'settings' => 'designer_artist_copyright_alingment',
        'choices' => array(
            'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
            'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
            'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
    ))));

	$wp_customize->add_setting( 'designer_artist_hide_show_scroll',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
	));
	$wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_hide_show_scroll',array(
		'label' => esc_html__( 'Show / Hide Scroll to Top','designer-artist' ),
		'section' => 'designer_artist_footer'
	)));

    //Selective Refresh
	$wp_customize->selective_refresh->add_partial('designer_artist_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'designer_artist_Customize_partial_designer_artist_scroll_to_top_icon',
	));

    $wp_customize->add_setting('designer_artist_scroll_to_top_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_scroll_to_top_icon',array(
		'label'	=> __('Add Scroll to Top Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_footer',
		'setting'	=> 'designer_artist_scroll_to_top_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('designer_artist_scroll_to_top_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_scroll_to_top_font_size',array(
		'label'	=> __('Icon Font Size','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_scroll_to_top_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_scroll_to_top_padding',array(
		'label'	=> __('Icon Top Bottom Padding','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_scroll_to_top_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_scroll_to_top_width',array(
		'label'	=> __('Icon Width','designer-artist'),
		'description'	=> __('Enter a value in pixels Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_scroll_to_top_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_scroll_to_top_height',array(
		'label'	=> __('Icon Height','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'designer_artist_scroll_to_top_border_radius', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_scroll_to_top_border_radius', array(
		'label'       => esc_html__( 'Icon Border Radius','designer-artist' ),
		'section'     => 'designer_artist_footer',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );


  	$wp_customize->add_setting('designer_artist_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control(new Designer_Artist_Image_Radio_Control($wp_customize, 'designer_artist_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','designer-artist'),
    'section' => 'designer_artist_footer',
    'settings' => 'designer_artist_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
    ))));

	//Blog Post
	$wp_customize->add_panel( 'designer_artist_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'designer-artist' ),
		'panel' => 'designer_artist_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'designer_artist_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'designer-artist' ),
		'panel' => 'designer_artist_blog_post_parent_panel',
	));

	//Blog layout
	$wp_customize->add_setting('designer_artist_blog_layout_option',array(
		'default' => 'Default',
		'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control(new Designer_Artist_Image_Radio_Control($wp_customize, 'designer_artist_blog_layout_option', array(
		'type' => 'select',
		'label' => __('Blog Post Layouts','designer-artist'),
		'section' => 'designer_artist_post_settings',
		'choices' => array(
		    'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
		    'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
		    'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
	))));

 	$wp_customize->add_setting('designer_artist_theme_options',array(
	    'default' => 'Right Sidebar',
	    'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_theme_options',array(
	    'type' => 'select',
	    'label' => esc_html__('Post Sidebar Layout','designer-artist'),
	    'description' => esc_html__('Here you can change the sidebar layout for posts. ','designer-artist'),
	    'section' => 'designer_artist_post_settings',
	    'choices' => array(
	        'Left Sidebar' => esc_html__('Left Sidebar','designer-artist'),
	        'Right Sidebar' => esc_html__('Right Sidebar','designer-artist'),
	        'One Column' => esc_html__('One Column','designer-artist'),
           	'Three Columns' => __('Three Columns','designer-artist'),
            'Four Columns' => __('Four Columns','designer-artist'),
	        'Grid Layout' => esc_html__('Grid Layout','designer-artist')
	      ),
	) );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('designer_artist_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'designer_artist_Customize_partial_designer_artist_toggle_postdate',
	));

  	$wp_customize->add_setting('designer_artist_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_post_settings',
		'setting'	=> 'designer_artist_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'designer_artist_toggle_postdate',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'designer_artist_switch_sanitization'
	) );
	$wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_toggle_postdate',array(
	  'label' => esc_html__( 'Show / Hide Post Date','designer-artist' ),
	  'section' => 'designer_artist_post_settings'
	)));

  	$wp_customize->add_setting('designer_artist_toggle_author_icon',array(
		'default'	=> 'far fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_post_settings',
		'setting'	=> 'designer_artist_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'designer_artist_toggle_author',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_toggle_author',array(
	'label' => esc_html__( 'Show / Hide Author','designer-artist' ),
	'section' => 'designer_artist_post_settings'
  )));

   $wp_customize->add_setting('designer_artist_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_post_settings',
		'setting'	=> 'designer_artist_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'designer_artist_toggle_comments',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_toggle_comments',array(
	'label' => esc_html__( 'Show / Hide Comments','designer-artist' ),
	'section' => 'designer_artist_post_settings'
  )));

  $wp_customize->add_setting('designer_artist_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_post_settings',
		'setting'	=> 'designer_artist_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'designer_artist_toggle_time',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_toggle_time',array(
	'label' => esc_html__( 'Show / Hide Time','designer-artist' ),
	'section' => 'designer_artist_post_settings'
  )));

  $wp_customize->add_setting( 'designer_artist_featured_image_hide_show',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'designer_artist_switch_sanitization'
	));
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_featured_image_hide_show', array(
	'label' => esc_html__( 'Show / Hide Featured Image','designer-artist' ),
	'section' => 'designer_artist_post_settings'
  )));

$wp_customize->add_setting( 'designer_artist_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','designer-artist' ),
		'section'     => 'designer_artist_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'designer_artist_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','designer-artist' ),
		'section'     => 'designer_artist_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('designer_artist_blog_post_featured_image_dimension',array(
       'default' => 'default',
       'sanitize_callback'	=> 'designer_artist_sanitize_choices'
	));
  	$wp_customize->add_control('designer_artist_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','designer-artist'),
		'section'	=> 'designer_artist_post_settings',
		'choices' => array(
		'default' => __('Default','designer-artist'),
		'custom' => __('Custom Image Size','designer-artist'),
      ),
  	));

	$wp_customize->add_setting('designer_artist_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('designer_artist_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'designer-artist' ),),
		'section'=> 'designer_artist_post_settings',
		'type'=> 'text',
		'active_callback' => 'designer_artist_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('designer_artist_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'designer-artist' ),),
		'section'=> 'designer_artist_post_settings',
		'type'=> 'text',
		'active_callback' => 'designer_artist_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'designer_artist_toggle_tags',array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'designer_artist_switch_sanitization'
	));
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_toggle_tags', array(
	'label' => esc_html__( 'Show / Hide Tags','designer-artist' ),
	'section' => 'designer_artist_post_settings'
  )));

  $wp_customize->add_setting( 'designer_artist_excerpt_number', array(
	'default'              => 30,
	'type'                 => 'theme_mod',
	'transport' 		   => 'refresh',
	'sanitize_callback'    => 'designer_artist_sanitize_number_range',
	'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'designer_artist_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','designer-artist' ),
		'section'     => 'designer_artist_post_settings',
		'type'        => 'range',
		'settings'    => 'designer_artist_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('designer_artist_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','designer-artist'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','designer-artist'),
		'section'=> 'designer_artist_post_settings',
		'type'=> 'text'
	));

    $wp_customize->add_setting('designer_artist_excerpt_settings',array(
        'default' => 'Excerpt',
        'transport' => 'refresh',
        'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_excerpt_settings',array(
        'type' => 'select',
        'label' => esc_html__('Post Content','designer-artist'),
        'section' => 'designer_artist_post_settings',
        'choices' => array(
        	'Content' => esc_html__('Content','designer-artist'),
            'Excerpt' => esc_html__('Excerpt','designer-artist'),
            'No Content' => esc_html__('No Content','designer-artist')
        ),
	) );

   $wp_customize->add_setting('designer_artist_blog_page_posts_settings',array(
        'default' => 'Into Blocks',
        'transport' => 'refresh',
        'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_blog_page_posts_settings',array(
        'type' => 'select',
        'label' => __('Display Blog Posts','designer-artist'),
        'section' => 'designer_artist_post_settings',
        'choices' => array(
        	'Into Blocks' => __('Into Blocks','designer-artist'),
            'Without Blocks' => __('Without Blocks','designer-artist')
        ),
	) );

	$wp_customize->add_setting( 'designer_artist_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
    ));
    $wp_customize->add_control( new designer_artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','designer-artist' ),
		'section' => 'designer_artist_post_settings'
    )));

	$wp_customize->add_setting( 'designer_artist_blog_pagination_type', array(
        'default'			=> 'blog-page-numbers',
        'sanitize_callback'	=> 'designer_artist_sanitize_choices'
    ));
    $wp_customize->add_control( 'designer_artist_blog_pagination_type', array(
        'section' => 'designer_artist_post_settings',
        'type' => 'select',
        'label' => __( 'Blog Pagination', 'designer-artist' ),
        'choices'		=> array(
            'blog-page-numbers'  => __( 'Numeric', 'designer-artist' ),
            'next-prev' => __( 'Older Posts/Newer Posts', 'designer-artist' ),
    )));

  // Button Settings
	$wp_customize->add_section( 'designer_artist_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'designer-artist' ),
		'panel' => 'designer_artist_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('designer_artist_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'designer_artist_Customize_partial_designer_artist_button_text',
	));

    $wp_customize->add_setting('designer_artist_button_text',array(
		'default'=> esc_html__('Read More','designer-artist'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_button_text',array(
		'label'	=> esc_html__('Add Button Text','designer-artist'),
		'input_attrs' => array(
        'placeholder' => esc_html__( 'Read More', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('designer_artist_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_button_font_size',array(
		'label'	=> __('Button Font Size','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'designer-artist' ),
    ),
    	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'designer_artist_button_settings',
	));

	$wp_customize->add_setting( 'designer_artist_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'designer_artist_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','designer-artist' ),
		'section'     => 'designer_artist_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('designer_artist_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_button_padding_top_bottom',array(
		'label'	=> esc_html__('Padding Top Bottom','designer-artist'),
		'description' => esc_html__('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => esc_html__( '10px', 'designer-artist' ),
        ),
		'section' => 'designer_artist_button_settings',
		'type' => 'text'
	));

	$wp_customize->add_setting('designer_artist_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_button_padding_left_right',array(
		'label'	=> esc_html__('Padding Left Right','designer-artist'),
		'description' => esc_html__('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => esc_html__( '10px', 'designer-artist' ),
        ),
		'section' => 'designer_artist_button_settings',
		'type' => 'text'
	));

	$wp_customize->add_setting('designer_artist_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'designer-artist' ),
    ),
    	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'designer_artist_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('designer_artist_button_text_transform',array(
		'default'=> 'Uppercase',
		'sanitize_callback'	=> 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','designer-artist'),
		'choices' => array(
            'Uppercase' => __('Uppercase','designer-artist'),
            'Capitalize' => __('Capitalize','designer-artist'),
            'Lowercase' => __('Lowercase','designer-artist'),
        ),
		'section'=> 'designer_artist_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'designer_artist_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'designer-artist' ),
		'panel' => 'designer_artist_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('designer_artist_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'designer_artist_Customize_partial_designer_artist_related_post_title',
	));

  $wp_customize->add_setting( 'designer_artist_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_related_post',array(
		'label' => esc_html__( 'Show / Hide Related Post','designer-artist' ),
		'section' => 'designer_artist_related_posts_settings'
  )));

  $wp_customize->add_setting('designer_artist_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','designer-artist'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Related Post', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('designer_artist_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'designer_artist_sanitize_number_absint'
	));
	$wp_customize->add_control('designer_artist_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','designer-artist'),
		'input_attrs' => array(
    'placeholder' => esc_html__( '3', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'designer_artist_related_posts_excerpt_number', array(
		'default'              => 30,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','designer-artist' ),
		'section'     => 'designer_artist_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'designer_artist_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Single Posts Settings
	$wp_customize->add_section( 'designer_artist_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'designer-artist' ),
		'panel' => 'designer_artist_blog_post_parent_panel',
	));

	$wp_customize->add_setting('designer_artist_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_single_blog_settings',
		'setting'	=> 'designer_artist_single_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'designer_artist_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_single_postdate',array(
        'label' => esc_html__( 'Show / Hide Post Date','designer-artist' ),
        'section' => 'designer_artist_single_blog_settings'
  )));

	$wp_customize->add_setting('designer_artist_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_single_author_icon',array(
		'label'	=> __('Add Author Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_single_blog_settings',
		'setting'	=> 'designer_artist_single_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'designer_artist_single_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_single_author',array(
		'label' => esc_html__( 'Show / Hide Author','designer-artist' ),
		'section' => 'designer_artist_single_blog_settings'
  )));

 	$wp_customize->add_setting('designer_artist_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_single_blog_settings',
		'setting'	=> 'designer_artist_single_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'designer_artist_single_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_single_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','designer-artist' ),
		'section' => 'designer_artist_single_blog_settings'
  )));

 	$wp_customize->add_setting('designer_artist_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_single_time_icon',array(
		'label'	=> __('Add Time Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_single_blog_settings',
		'setting'	=> 'designer_artist_single_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'designer_artist_single_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_single_time',array(
		'label' => esc_html__( 'Show / Hide Time','designer-artist' ),
		'section' => 'designer_artist_single_blog_settings'
  )));

	$wp_customize->add_setting( 'designer_artist_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
    ) );
	$wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','designer-artist' ),
		'section' => 'designer_artist_single_blog_settings'
	)));

	// Single Posts Category
 	$wp_customize->add_setting( 'designer_artist_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
	$wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','designer-artist' ),
		'section' => 'designer_artist_single_blog_settings'
 	)));

	$wp_customize->add_setting( 'designer_artist_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
	));
    $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','designer-artist' ),
		'section' => 'designer_artist_single_blog_settings'
  )));

	$wp_customize->add_setting( 'designer_artist_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
	));
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_single_blog_post_navigation_show_hide', array(
		'label' => esc_html__( 'Post Navigation','designer-artist' ),
		'section' => 'designer_artist_single_blog_settings'
  )));

 	$wp_customize->add_setting('designer_artist_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','designer-artist'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','designer-artist'),
		'section'=> 'designer_artist_single_blog_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('designer_artist_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','designer-artist'),
		'description'	=> __('Enter a value in %. Example:50%','designer-artist'),
		'input_attrs' => array(
    'placeholder' => __( '100%', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_single_blog_settings',
		'type'=> 'text'
	));

	//navigation text
	$wp_customize->add_setting('designer_artist_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','designer-artist'),
		'input_attrs' => array(
    'placeholder' => __( 'PREVIOUS', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','designer-artist'),
		'input_attrs' => array(
    'placeholder' => __( 'NEXT', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('designer_artist_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','designer-artist'),
		'input_attrs' => array(
    'placeholder' => __( 'Leave a Reply', 'designer-artist' ),
    	),
		'section'=> 'designer_artist_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('designer_artist_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','designer-artist'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_single_blog_settings',
		'type'=> 'text'
	));

 	// Grid layout setting
	$wp_customize->add_section( 'designer_artist_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'designer-artist' ),
		'panel' => 'designer_artist_blog_post_parent_panel',
	));

	$wp_customize->add_setting('designer_artist_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_grid_layout_settings',
		'setting'	=> 'designer_artist_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'designer_artist_grid_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'designer_artist_switch_sanitization'
    ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','designer-artist' ),
    'section' => 'designer_artist_grid_layout_settings'
 	)));

	$wp_customize->add_setting('designer_artist_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_grid_author_icon',array(
		'label'	=> __('Add Author Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_grid_layout_settings',
		'setting'	=> 'designer_artist_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'designer_artist_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
    ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','designer-artist' ),
		'section' => 'designer_artist_grid_layout_settings'
  )));

	$wp_customize->add_setting('designer_artist_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_grid_layout_settings',
		'setting'	=> 'designer_artist_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'designer_artist_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','designer-artist' ),
		'section' => 'designer_artist_grid_layout_settings'
  )));

   	$wp_customize->add_setting('designer_artist_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','designer-artist'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','designer-artist'),
		'section'=> 'designer_artist_grid_layout_settings',
		'type'=> 'text'
	)); 

  	$wp_customize->add_setting('designer_artist_grid_button_text',array(
		'default'=> esc_html__('Read More','designer-artist'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','designer-artist'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Read More', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_grid_layout_settings',
		'type'=> 'text'
	)); 

    $wp_customize->add_setting('designer_artist_display_grid_posts_settings',array(
        'default' => 'Into Blocks',
        'transport' => 'refresh',
        'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_display_grid_posts_settings',array(
        'type' => 'select',
        'label' => __('Display Grid Posts','designer-artist'),
        'section' => 'designer_artist_grid_layout_settings',
        'choices' => array(
        	'Into Blocks' => __('Into Blocks','designer-artist'),
            'Without Blocks' => __('Without Blocks','designer-artist')
        ),
	) );

  	$wp_customize->add_setting('designer_artist_grid_button_text',array(
		'default'=> esc_html__('Read More','designer-artist'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','designer-artist'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Read More', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '[...]', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_grid_layout_settings',
		'type'=> 'text'
	));

    $wp_customize->add_setting('designer_artist_grid_excerpt_settings',array(
        'default' => 'Excerpt',
        'transport' => 'refresh',
        'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_grid_excerpt_settings',array(
        'type' => 'select',
        'label' => esc_html__('Grid Post Content','designer-artist'),
        'section' => 'designer_artist_grid_layout_settings',
        'choices' => array(
        	'Content' => esc_html__('Content','designer-artist'),
            'Excerpt' => esc_html__('Excerpt','designer-artist'),
            'No Content' => esc_html__('No Content','designer-artist')
        ),
	) );

    $wp_customize->add_setting( 'designer_artist_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','designer-artist' ),
		'section'     => 'designer_artist_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'designer_artist_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','designer-artist' ),
		'section'     => 'designer_artist_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Others Settings
	$wp_customize->add_panel( 'designer_artist_others_panel', array(
		'title' => esc_html__( 'Others Settings', 'designer-artist' ),
		'panel' => 'designer_artist_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'designer_artist_left_right', array(
  	'title' => esc_html__('General Settings', 'designer-artist'),
		'panel' => 'designer_artist_others_panel'
	));

	$wp_customize->add_setting('designer_artist_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control(new Designer_Artist_Image_Radio_Control($wp_customize, 'designer_artist_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','designer-artist'),
    'description' => esc_html__('Here you can change the width layout of Website.','designer-artist'),
    'section' => 'designer_artist_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
    ))));

	$wp_customize->add_setting('designer_artist_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','designer-artist'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','designer-artist'),
    'section' => 'designer_artist_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','designer-artist'),
        'Right_Sidebar' => esc_html__('Right Sidebar','designer-artist'),
        'One_Column' => esc_html__('One Column','designer-artist')
    ),
	) );

  $wp_customize->add_setting( 'designer_artist_single_page_breadcrumb',array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_single_page_breadcrumb',array(
	'label' => esc_html__( 'Show / Hide Page Breadcrumb','designer-artist' ),
	'section' => 'designer_artist_left_right'
  )));

  //Wow Animation
	$wp_customize->add_setting( 'designer_artist_animation',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'designer_artist_switch_sanitization'
  ));
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_animation',array(
    'label' => esc_html__( 'Show / Hide Animations','designer-artist' ),
    'description' => __('Here you can disable overall site animation effect','designer-artist'),
    'section' => 'designer_artist_left_right'
  )));

  // Pre-Loader
	$wp_customize->add_setting( 'designer_artist_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_loader_enable',array(
      'label' => esc_html__( 'Show / Hide Pre-Loader','designer-artist' ),
      'section' => 'designer_artist_left_right'
  )));

	$wp_customize->add_setting('designer_artist_preloader_bg_color', array(
		'default'           => '#f8c273',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'designer-artist'),
		'section'  => 'designer_artist_left_right',
	)));

	$wp_customize->add_setting('designer_artist_preloader_border_color', array(
		'default'           => '#e04539',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'designer-artist'),
		'section'  => 'designer_artist_left_right',
	)));

	$wp_customize->add_setting('designer_artist_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'designer_artist_preloader_bg_img',array(
        'label' => __('Preloader Background Image','designer-artist'),
        'section' => 'designer_artist_left_right'
	)));

	//Responsive Media Settings
	$wp_customize->add_section('designer_artist_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','designer-artist'),
		'panel' => 'designer_artist_others_panel',
	));

	$wp_customize->add_setting('designer_artist_resp_menu_toggle_btn_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'designer_artist_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'designer-artist'),
		'section'  => 'designer_artist_responsive_media',
	)));

  $wp_customize->add_setting( 'designer_artist_resp_slider_hide_show',array(
  	'default' => 1,
   	'transport' => 'refresh',
    	'sanitize_callback' => 'designer_artist_switch_sanitization'
  ));
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_resp_slider_hide_show',array(
  	'label' => esc_html__( 'Show / Hide Slider','designer-artist' ),
  	'section' => 'designer_artist_responsive_media'
  )));

  $wp_customize->add_setting( 'designer_artist_sidebar_hide_show',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'designer_artist_switch_sanitization'
  ));
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_sidebar_hide_show',array(
  	'label' => esc_html__( 'Show / Hide Sidebar','designer-artist' ),
  	'section' => 'designer_artist_responsive_media'
  )));

  $wp_customize->add_setting( 'designer_artist_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
  ));
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_resp_scroll_top_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Scroll To Top','designer-artist' ),
    	'section' => 'designer_artist_responsive_media'
  )));

	$wp_customize->add_setting('designer_artist_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_responsive_media',
		'setting'	=> 'designer_artist_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('designer_artist_res_menu_close_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Designer_Artist_Fontawesome_Icon_Chooser(
        $wp_customize,'designer_artist_res_menu_close_icon',array(
		'label'	=> __('Add Close Menu Icon','designer-artist'),
		'transport' => 'refresh',
		'section'	=> 'designer_artist_responsive_media',
		'setting'	=> 'designer_artist_res_menu_close_icon',
		'type'		=> 'icon'
	)));

    //404 Page Setting
	$wp_customize->add_section('designer_artist_404_page',array(
		'title'	=> __('404 Page Settings','designer-artist'),
		'panel' => 'designer_artist_others_panel',
	));

	$wp_customize->add_setting('designer_artist_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('designer_artist_404_page_title',array(
		'label'	=> __('Add Title','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('designer_artist_404_page_content',array(
		'label'	=> __('Add Text','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_404_page_button_text',array(
		'label'	=> __('Add Button Text','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( 'GO BACK', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('designer_artist_no_results_page',array(
		'title'	=> __('No Results Page Settings','designer-artist'),
		'panel' => 'designer_artist_others_panel',
	));

	$wp_customize->add_setting('designer_artist_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('designer_artist_no_results_page_title',array(
		'label'	=> __('Add Title','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('designer_artist_no_results_page_content',array(
		'label'	=> __('Add Text','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('designer_artist_social_icon_settings',array(
		'title'	=> __('Social Icons Settings','designer-artist'),
		'panel' => 'designer_artist_others_panel',
	));

	$wp_customize->add_setting('designer_artist_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_social_icon_padding',array(
		'label'	=> __('Icon Padding','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_social_icon_width',array(
		'label'	=> __('Icon Width','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_social_icon_height',array(
		'label'	=> __('Icon Height','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_social_icon_settings',
		'type'=> 'text'
	));

  //Woocommerce settings
	$wp_customize->add_section('designer_artist_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'designer-artist'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

  //Shop Page Featured Image
	$wp_customize->add_setting( 'designer_artist_shop_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_shop_featured_image_border_radius', array(
		'label'       => esc_html__( 'Shop Page Featured Image Border Radius','designer-artist' ),
		'section'     => 'designer_artist_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'designer_artist_shop_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_shop_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Shop Page Featured Image Box Shadow','designer-artist' ),
		'section'     => 'designer_artist_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'designer_artist_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'designer_artist_customize_partial_designer_artist_woocommerce_shop_page_sidebar', ) );

  // Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'designer_artist_woocommerce_shop_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
    ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','designer-artist' ),
		'section' => 'designer_artist_woocommerce_section'
  )));

  $wp_customize->add_setting('designer_artist_shop_page_layout',array(
      'default' => 'Right Sidebar',
      'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_shop_page_layout',array(
      'type' => 'select',
      'label' => __('Shop Page Sidebar Layout','designer-artist'),
      'section' => 'designer_artist_woocommerce_section',
      'choices' => array(
          'Left Sidebar' => __('Left Sidebar','designer-artist'),
          'Right Sidebar' => __('Right Sidebar','designer-artist'),
        ),
	) );

  // Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'designer_artist_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'designer_artist_customize_partial_designer_artist_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'designer_artist_woocommerce_single_product_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'designer_artist_switch_sanitization'
    ) );
    $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','designer-artist' ),
		'section' => 'designer_artist_woocommerce_section'
    )));

   	$wp_customize->add_setting('designer_artist_single_product_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_single_product_layout',array(
        'type' => 'select',
        'label' => __('Single Product Sidebar Layout','designer-artist'),
        'section' => 'designer_artist_woocommerce_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','designer-artist'),
            'Right Sidebar' => __('Right Sidebar','designer-artist'),
        ),
	) );

	//Products padding
	$wp_customize->add_setting('designer_artist_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'designer_artist_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','designer-artist' ),
		'section'     => 'designer_artist_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'designer_artist_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','designer-artist' ),
		'section'     => 'designer_artist_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('designer_artist_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('designer_artist_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'designer_artist_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','designer-artist' ),
		'section'     => 'designer_artist_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products Sale Badge
	$wp_customize->add_setting('designer_artist_woocommerce_sale_position',array(
        'default' => 'right',
        'sanitize_callback' => 'designer_artist_sanitize_choices'
	));
	$wp_customize->add_control('designer_artist_woocommerce_sale_position',array(
        'type' => 'select',
        'label' => __('Sale Badge Position','designer-artist'),
        'section' => 'designer_artist_woocommerce_section',
        'choices' => array(
            'left' => __('Left','designer-artist'),
            'right' => __('Right','designer-artist'),
        ),
	) );

	$wp_customize->add_setting('designer_artist_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('designer_artist_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','designer-artist'),
		'description'	=> __('Enter a value in pixels. Example:20px','designer-artist'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'designer-artist' ),
        ),
		'section'=> 'designer_artist_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'designer_artist_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'designer_artist_sanitize_number_range'
	) );
	$wp_customize->add_control( 'designer_artist_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','designer-artist' ),
		'section'     => 'designer_artist_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

  // Related Product
  $wp_customize->add_setting( 'designer_artist_related_product_show_hide',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'designer_artist_switch_sanitization'
  ) );
  $wp_customize->add_control( new Designer_Artist_Toggle_Switch_Custom_Control( $wp_customize, 'designer_artist_related_product_show_hide',array(
      'label' => esc_html__( 'Show / Hide Related product','designer-artist' ),
      'section' => 'designer_artist_woocommerce_section'
  )));


}

add_action( 'customize_register', 'designer_artist_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Designer_Artist_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Designer_Artist_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Designer_Artist_Customize_Section_Pro( $manager,'designer_artist_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'DESIGNER ARTIST PRO', 'designer-artist' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'designer-artist' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/designer-portfolio-wordpress-theme/'),
		) )	);

		// Register sections.
		$manager->add_section(new Designer_Artist_Customize_Section_Pro($manager,'designer_artist_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'designer-artist' ),
			'pro_text' => esc_html__( 'DOCS', 'designer-artist' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-designer-portfolio/'),
		)));
	}


	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'designer-artist-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'designer-artist-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Designer_Artist_Customize::get_instance();
