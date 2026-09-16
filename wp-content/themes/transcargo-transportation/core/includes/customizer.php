<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'transcargo_transportation_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'transcargo-transportation' ),
		'section'     => 'title_tagline',
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'transcargo-transportation' ),
		'section'     => 'title_tagline',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'transcargo-transportation' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'transcargo_transportation_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'transcargo-transportation' ),
	) );

	Kirki::add_section( 'transcargo_transportation_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'transcargo-transportation' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_all_headings_typography',
		'section'     => 'transcargo_transportation_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'transcargo_transportation_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'transcargo-transportation' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_body_content_typography',
		'section'     => 'transcargo_transportation_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'transcargo_transportation_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'transcargo-transportation' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

		// PANEL
	Kirki::add_panel( 'transcargo_transportation_panel_id_5', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Animations', 'transcargo-transportation' ),
	) );

	// ANIMATION SECTION
	Kirki::add_section( 'transcargo_transportation_section_animation', array(
	    'title'          => esc_html__( 'Animations', 'transcargo-transportation' ),
	    'priority'       => 2,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_section_animation',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_animation_enabled',
		'label'       => esc_html__( 'Turn To Show Animation', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_section_animation',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

	// PANEL
	Kirki::add_panel( 'transcargo_transportation_panel_id_2', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Dark Mode', 'transcargo-transportation' ),
	) );

	// DARK MODE SECTION
	Kirki::add_section( 'transcargo_transportation_section_dark_mode', array(
	    'title'          => esc_html__( 'Dark Mode', 'transcargo-transportation' ),
	    'priority'       => 3,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_section_dark_mode',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'transcargo_transportation_dark_colors',
	    'section'     => 'transcargo_transportation_section_dark_mode',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dark Appearance', 'transcargo-transportation' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_is_dark_mode_enabled',
		'label'       => esc_html__( 'Turn To Dark Mode', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_section_dark_mode',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );


	// PANEL
	Kirki::add_panel( 'transcargo_transportation_panel_id_3', array(
	    'priority'    => 10,
	    'title'       => esc_html__( '404 Settings / No Result', 'transcargo-transportation' ),
	) );

	// 404 SECTION
	Kirki::add_section( 'transcargo_transportation_section_404', array(
		'panel'          => 'transcargo_transportation_panel_id_3',
	    'title'          => esc_html__( '404 Settings', 'transcargo-transportation' ),
	    'priority'       => 3,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_section_404',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
		'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'transcargo_transportation_404_heading',
	    'section'     => 'transcargo_transportation_section_404',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Heading', 'transcargo-transportation' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_404_page_title',
		'section'  => 'transcargo_transportation_section_404',
		'default'  => esc_html__('404 Not Found', 'transcargo-transportation'),
		'priority' => 10,
	] );

		Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'transcargo_transportation_404_text',
	    'section'     => 'transcargo_transportation_section_404',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Content', 'transcargo-transportation' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_404_page_content',
		'section'  => 'transcargo_transportation_section_404',
		'default'  => esc_html__('Sorry, no posts matched your criteria.', 'transcargo-transportation'),
		'priority' => 10,
	] );

	// NO Result
	Kirki::add_section( 'transcargo_transportation_no_result', array(
		'panel'          => 'transcargo_transportation_panel_id_3',
	    'title'          => esc_html__( 'No Result Page Settings', 'transcargo-transportation' ),
	    'priority'       => 3,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_no_result',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
		'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'transcargo_transportation_not_found_heading',
	    'section'     => 'transcargo_transportation_no_result',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Search Result Heading', 'transcargo-transportation' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_no_results_page_title',
		'section'  => 'transcargo_transportation_no_result',
		'default'  => esc_html__('404 Not Found', 'transcargo-transportation'),
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'transcargo_transportation_not_found_text',
	    'section'     => 'transcargo_transportation_no_result',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Search Result Content', 'transcargo-transportation' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_no_results_page_content',
		'section'  => 'transcargo_transportation_no_result',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'transcargo-transportation'),
		'priority' => 10,
	] );

	// PANEL

	Kirki::add_panel( 'transcargo_transportation_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'transcargo-transportation' ),
	) );

	// Scroll Top

	Kirki::add_section( 'transcargo_transportation_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'transcargo-transportation' ),
	    'panel'          => 'transcargo_transportation_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'transcargo_transportation_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

		new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'transcargo_transportation_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'transcargo-transportation' ),
			'Center' => esc_html__( 'Center', 'transcargo-transportation' ),
			'Right'  => esc_html__( 'Right', 'transcargo-transportation' ),
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_transcargo_transportation',
		'label'       => esc_html__( 'Menus Text Transform', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'transcargo-transportation' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'transcargo-transportation' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'transcargo-transportation' ),

		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'transcargo_transportation_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'None' => __('None','transcargo-transportation'),
            'Zoominn' => __('Zoom Inn','transcargo-transportation'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'transcargo_transportation_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'transcargo_transportation_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'transcargo_transportation_preloader_type',
		'label'       => esc_html__( 'Preloader Type', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_additional_settings',
		'default' => 'four-way-loader',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'four-way-loader' => __('Type 1','transcargo-transportation'),
            'cube-loader' => __('Type 2','transcargo-transportation'),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'transcargo_transportation_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'transcargo_transportation_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','transcargo-transportation'),
            'Right Sidebar' => __('Right Sidebar','transcargo-transportation'),
            'One Column' => __('One Column','transcargo-transportation')
		],
	] );	

	// Woocommerce Settings

	if ( class_exists("woocommerce")){

	Kirki::add_section( 'transcargo_transportation_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'transcargo-transportation' ),
		'panel'          => 'transcargo_transportation_panel_id',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'transcargo_transportation_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'transcargo_transportation_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'transcargo_transportation_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
		[
			'settings' => 'transcargo_transportation_per_columns',
			'label'    => esc_html__( 'Product Per Row', 'transcargo-transportation' ),
			'section'  => 'transcargo_transportation_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'transcargo_transportation_product_per_page',
			'label'    => esc_html__( 'Product Per Page', 'transcargo-transportation' ),
			'section'  => 'transcargo_transportation_woocommerce_settings',
			'default'  => 9,
			'choices'  => [
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'custom_related_products_number_per_row',
			'label'    => esc_html__( 'Related Product Per Column', 'transcargo-transportation' ),
			'section'  => 'transcargo_transportation_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'custom_related_products_number',
			'label'    => esc_html__( 'Related Product Per Page', 'transcargo-transportation' ),
			'section'  => 'transcargo_transportation_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 10,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'transcargo_transportation_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','transcargo-transportation'),
            'Right Sidebar' => __('Right Sidebar','transcargo-transportation')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'transcargo_transportation_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','transcargo-transportation'),
            'Right Sidebar' => __('Right Sidebar','transcargo-transportation')
		],
	] );

		new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'transcargo_transportation_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'transcargo-transportation' ),
			'Center' => esc_html__( 'Center', 'transcargo-transportation' ),
			'Right'  => esc_html__( 'Right', 'transcargo-transportation' ),
		],
	]
	);
}

	Kirki::add_section( 'transcargo_transportation_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'transcargo-transportation' ),
	    'panel'          => 'transcargo_transportation_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

	new \Kirki\Field\Sortable(
	[
		'settings' => 'transcargo_transportation_archive_element_sortable',
		'label'    => __( 'Archive Post Page Element Reordering', 'transcargo-transportation' ),
		'description'    => esc_html__( 'This setting is not favorable with post format.', 'transcargo-transportation' ),
		'section'  => 'transcargo_transportation_section_post',
		'default'  => [ 'option1', 'option2', 'option3', 'option4', 'option5' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Image', 'transcargo-transportation' ),
			'option2' => esc_html__( 'Post Meta', 'transcargo-transportation' ),
			'option3' => esc_html__( 'Post Title', 'transcargo-transportation' ),
			'option4' => esc_html__( 'Post Content', 'transcargo-transportation' ),
			'option5' => esc_html__( 'Post Button', 'transcargo-transportation' ),
		],
	]
	);
	
	new \Kirki\Field\Select(
	[
		'settings'    => 'transcargo_transportation_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','transcargo-transportation'),
            'Right Sidebar' => __('Right Sidebar','transcargo-transportation'),
            'Three Column' => __('Three Column','transcargo-transportation'),
            'Four Column' => __('Four Column','transcargo-transportation'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','transcargo-transportation'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','transcargo-transportation'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','transcargo-transportation')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'transcargo_transportation_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','transcargo-transportation'),
            'Right Sidebar' => __('Right Sidebar','transcargo-transportation'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'transcargo_transportation_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','transcargo-transportation'),
            'Right Sidebar' => __('Right Sidebar','transcargo-transportation'),
            'Three Column' => __('Three Column','transcargo-transportation'),
            'Four Column' => __('Four Column','transcargo-transportation'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','transcargo-transportation'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','transcargo-transportation'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','transcargo-transportation')
		],
	] );


		// Breadcrumb
	Kirki::add_section( 'transcargo_transportation_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'transcargo-transportation' ),
	    'panel'          => 'transcargo_transportation_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_enable_breadcrumb_heading',
		'section'     => 'transcargo_transportation_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'transcargo_transportation_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'transcargo-transportation' ),
        'section'  => 'transcargo_transportation_bradcrumb',
    ] );

	//COLOR SECTION

	Kirki::add_section( 'transcargo_transportation_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'transcargo-transportation' ),
	    'panel'          => 'transcargo_transportation_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_global_colors',
		'section'     => 'transcargo_transportation_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'transcargo_transportation_first_color',
		'label'       => __( 'Choose Your First Color', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_section_color',
		'default'     => '#ff824a',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'transcargo_transportation_second_color',
		'label'       => __( 'Choose Your Second Color', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_section_color',
		'default'     => '#131f3c',
	] );

	// HEADER SECTION

	Kirki::add_section( 'transcargo_transportation_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'transcargo-transportation' ),
	    'panel'          => 'transcargo_transportation_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_enable_search',
		'section'     => 'transcargo_transportation_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_search_box_enable',
		'label'       => esc_html__( 'Search Enable / Disable Button', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_header_button_heading',
		'section'     => 'transcargo_transportation_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button Text & URL', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_header_button_text',
		'label'    => __( 'Button Text', 'transcargo-transportation' ),
		'section'  => 'transcargo_transportation_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'settings' => 'transcargo_transportation_header_button_url',
		'label'    => __( 'Button URL', 'transcargo-transportation' ),
		'section'  => 'transcargo_transportation_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_enable_button',
		'section'     => 'transcargo_transportation_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Button Box', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_button_box_enable',
		'label'       => esc_html__( 'Quote Enable / Disable Button', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

	// CONTACT INFORMATION

	Kirki::add_section( 'transcargo_transportation_section_contact', array(
	    'title'          => esc_html__( 'Contact Info Settings', 'transcargo-transportation' ),
	    'panel'          => 'transcargo_transportation_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_section_contact',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_phone_number_heading_1',
		'section'     => 'transcargo_transportation_section_contact',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'transcargo_transportation_dashicons_setting_1',
		'label'    => esc_html__( 'Select Appropriate Icon', 'transcargo-transportation' ),
		'section'  => 'transcargo_transportation_section_contact',
		'default'  => 'dashicons dashicons-phone',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_phone_number_heading',
		'section'     => 'transcargo_transportation_section_contact',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_header_phone_number',
		'section'  => 'transcargo_transportation_section_contact',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_phone_number_heading_2',
		'section'     => 'transcargo_transportation_section_contact',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'transcargo_transportation_dashicons_setting_2',
		'label'    => esc_html__( 'Select Appropriate Icon', 'transcargo-transportation' ),
		'section'  => 'transcargo_transportation_section_contact',
		'default'  => 'dashicons dashicons-email',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_email_address_heading',
		'section'     => 'transcargo_transportation_section_contact',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_header_email_address',
		'section'  => 'transcargo_transportation_section_contact',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'transcargo_transportation_dashicons_setting_3',
		'label'    => esc_html__( 'Select Appropriate Icon', 'transcargo-transportation' ),
		'section'  => 'transcargo_transportation_section_contact',
		'default'  => 'dashicons dashicons-clock',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_open_timings_heading',
		'section'     => 'transcargo_transportation_section_contact',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Timings', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_header_open_timings',
		'section'  => 'transcargo_transportation_section_contact',
		'default'  => '',
		'priority' => 10,
	] );

	// SLIDER SECTION

	Kirki::add_section( 'transcargo_transportation_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'transcargo-transportation' ),
        'panel'          => 'transcargo_transportation_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_enable_heading',
		'section'     => 'transcargo_transportation_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_slide_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_slide_text_unable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_slider_heading',
		'section'     => 'transcargo_transportation_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'transcargo_transportation_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'transcargo_transportation_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'transcargo-transportation' ),
		'priority'    => 10,
		'choices'     => transcargo_transportation_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_slider_text_heading',
		'section'     => 'transcargo_transportation_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Slider Text', 'transcargo-transportation' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'transcargo_transportation_excerpt_number',
		'label'       => esc_html__( 'Slide Content Range', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_blog_slide_section',
		'default'     => 10,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_slider_text_extra',
		'label'    => esc_html__( 'Slider Extra Heading', 'transcargo-transportation' ),
		'section'  => 'transcargo_transportation_blog_slide_section',	
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_slider_button_heading',
		'section'     => 'transcargo_transportation_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Button Text', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_slider_button_text',
		'section'  => 'transcargo_transportation_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_slider_button_heading_22',
		'section'     => 'transcargo_transportation_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content Alignment', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'transcargo_transportation_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'transcargo-transportation' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'transcargo-transportation' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'transcargo-transportation' ),

		],
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'transcargo_transportation_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_blog_slide_section',
		'default'     => '0.6',
		'placeholder' => esc_html__( 'Choose an option', 'transcargo-transportation' ),
		'choices'     => [
			'0' => esc_html__( '0', 'transcargo-transportation' ),
			'0.1' => esc_html__( '0.1', 'transcargo-transportation' ),
			'0.2' => esc_html__( '0.2', 'transcargo-transportation' ),
			'0.3' => esc_html__( '0.3', 'transcargo-transportation' ),
			'0.4' => esc_html__( '0.4', 'transcargo-transportation' ),
			'0.5' => esc_html__( '0.5', 'transcargo-transportation' ),
			'0.6' => esc_html__( '0.6', 'transcargo-transportation' ),
			'0.7' => esc_html__( '0.7', 'transcargo-transportation' ),
			'0.8' => esc_html__( '0.8', 'transcargo-transportation' ),
			'0.9' => esc_html__( '0.9', 'transcargo-transportation' ),
			'unset' => esc_html__( 'Unset', 'transcargo-transportation' ),
		],
	] );


	// ABOUT US SECTION

	Kirki::add_section( 'transcargo_transportation_about_us_section', array(
        'title'          => esc_html__( 'About Us Settings', 'transcargo-transportation' ),
        'panel'          => 'transcargo_transportation_panel_id',
        'priority'       => 160,
    ) );

     Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_about_us_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_about_us_section_enable_heading',
		'section'     => 'transcargo_transportation_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable About Us Section', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_about_us_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_about_us_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_about_us_section_title_heading',
		'section'     => 'transcargo_transportation_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Section Title', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_about_us_section_title',
		'section'  => 'transcargo_transportation_about_us_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_about_us_page_heading',
		'section'     => 'transcargo_transportation_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Page Dropdown', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'dropdown-pages',
		'settings'    => 'transcargo_transportation_about_us',
		'section'     => 'transcargo_transportation_about_us_section',
		'default'     => 42,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_about_excerpt_heading',
		'section'     => 'transcargo_transportation_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'transcargo_transportation_about_excerpt_number',
		'label'       => esc_html__( 'Number of text to show', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_about_us_section',
		'default'     => 60,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'transcargo_transportation_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'transcargo-transportation' ),
        'panel'          => 'transcargo_transportation_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'transcargo-transportation' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'transcargo-transportation' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'transcargo_transportation_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'transcargo-transportation' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_footer_text_heading',
		'section'     => 'transcargo_transportation_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transcargo_transportation_footer_text',
		'section'  => 'transcargo_transportation_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_footer_enable_heading',
		'section'     => 'transcargo_transportation_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transcargo_transportation_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transcargo-transportation' ),
			'off' => esc_html__( 'Disable', 'transcargo-transportation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'transcargo_transportation_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'transcargo-transportation' ),
		'section'     => 'transcargo_transportation_footer_section',
		'default'     => '#000000',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transcargo_transportation_enable_footer_socail_link',
		'section'     => 'transcargo_transportation_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'transcargo-transportation' ) . '</h3>',
		'priority'    => 11,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'transcargo_transportation_footer_section',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icon', 'transcargo-transportation' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'transcargo-transportation' ),
		'settings'     => 'transcargo_transportation_footer_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'transcargo-transportation' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'transcargo-transportation' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'transcargo-transportation' ),
				'description' => esc_html__( 'Add the social icon url here.', 'transcargo-transportation' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );
}

/*
 *  Customizer Notifications
 */

$transcargo_transportation_config_customizer = array(
    'recommended_plugins' => array( 
        'kirki' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the sections of the FrontPage, please install and activate %s plugin', 'transcargo-transportation' ), 
                '<strong>' . esc_html__( 'Kirki Customizer', 'transcargo-transportation' ) . '</strong>'
            ),
        ),
    ),
    'transcargo_transportation_recommended_actions'       => array(),
    'transcargo_transportation_recommended_actions_title' => esc_html__( 'Recommended Actions', 'transcargo-transportation' ),
    'transcargo_transportation_recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'transcargo-transportation' ),
    'transcargo_transportation_install_button_label'      => esc_html__( 'Install and Activate', 'transcargo-transportation' ),
    'transcargo_transportation_activate_button_label'     => esc_html__( 'Activate', 'transcargo-transportation' ),
    'transcargo_transportation_deactivate_button_label'   => esc_html__( 'Deactivate', 'transcargo-transportation' ),
);

Transcargo_Transportation_Customizer_Notify::init( apply_filters( 'transcargo_transportation_customizer_notify_array', $transcargo_transportation_config_customizer ) );