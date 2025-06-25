<?php
/**
 * Header Options
 *
 * @package sports_accessories
 */

// ---------------------------------------- GENERAL OPTIONBS ----------------------------------------------------
// ---------------------------------------- PRELOADER ----------------------------------------------------

$wp_customize->add_section(
	'sports_accessories_general_options',
	array(
		'panel' => 'sports_accessories_theme_options',
		'title' => esc_html__( 'General Options', 'sports-accessories' ),
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'sports_accessories_preloader_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Sports_Accessories_Separator_Custom_Control( $wp_customize, 'sports_accessories_preloader_separator', array(
	'label' => __( 'Enable / Disable Site Preloader Section', 'sports-accessories' ),
	'section' => 'sports_accessories_general_options',
	'settings' => 'sports_accessories_preloader_separator',
) ) );


// General Options - Enable Preloader.
$wp_customize->add_setting(
	'sports_accessories_enable_preloader',
	array(
		'sanitize_callback' => 'sports_accessories_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Sports_Accessories_Toggle_Switch_Custom_Control(
		$wp_customize,
		'sports_accessories_enable_preloader',
		array(
			'label'   => esc_html__( 'Enable Preloader', 'sports-accessories' ),
			'section' => 'sports_accessories_general_options',
		)
	)
);

// Preloader Style Setting
$wp_customize->add_setting(
	'sports_accessories_preloader_style',
	array(
		'default'           => 'style1',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'sports_accessories_preloader_style',
	array(
		'type'     => 'select',
		'label'    => esc_html__('Select Preloader Styles', 'sports-accessories'),
		'active_callback' => 'sports_accessories_is_preloader_style',
		'section'  => 'sports_accessories_general_options',
		'choices'  => array(
			'style1' => esc_html__('Style 1', 'sports-accessories'),
			'style2' => esc_html__('Style 2', 'sports-accessories'),
			'style3' => esc_html__('Style 3', 'sports-accessories'),
		),
	)
);


// ---------------------------------------- PAGINATION ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'sports_accessories_pagination_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Sports_Accessories_Separator_Custom_Control( $wp_customize, 'sports_accessories_pagination_separator', array(
	'label' => __( 'Enable / Disable Pagination Section', 'sports-accessories' ),
	'section' => 'sports_accessories_general_options',
	'settings' => 'sports_accessories_pagination_separator',
) ) );

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'sports_accessories_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'sports_accessories_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Sports_Accessories_Toggle_Switch_Custom_Control(
		$wp_customize,
		'sports_accessories_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'sports-accessories' ),
			'section'  => 'sports_accessories_general_options',
			'settings' => 'sports_accessories_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'sports_accessories_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'sports_accessories_sanitize_select',
	)
);

$wp_customize->add_control(
	'sports_accessories_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'sports-accessories' ),
		'section'         => 'sports_accessories_general_options',
		'settings'        => 'sports_accessories_pagination_type',
		'active_callback' => 'sports_accessories_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'sports-accessories' ),
			'numeric' => __( 'Numeric', 'sports-accessories' ),
		),
	)
);

// ---------------------------------------- BREADCRUMB ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'sports_accessories_breadcrumb_separators', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Sports_Accessories_Separator_Custom_Control( $wp_customize, 'sports_accessories_breadcrumb_separators', array(
	'label' => __( 'Enable / Disable Breadcrumb Section', 'sports-accessories' ),
	'section' => 'sports_accessories_general_options',
	'settings' => 'sports_accessories_breadcrumb_separators',
)));

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'sports_accessories_enable_breadcrumb',
	array(
		'sanitize_callback' => 'sports_accessories_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Sports_Accessories_Toggle_Switch_Custom_Control(
		$wp_customize,
		'sports_accessories_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'sports-accessories' ),
			'section' => 'sports_accessories_general_options',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'sports_accessories_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'sports_accessories_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'sports-accessories' ),
		'active_callback' => 'sports_accessories_is_breadcrumb_enabled',
		'section'         => 'sports_accessories_general_options',
	)
);

// ---------------------------------------- Website layout ----------------------------------------------------


// Add Separator Custom Control
$wp_customize->add_setting( 'sports_accessories_layuout_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Sports_Accessories_Separator_Custom_Control( $wp_customize, 'sports_accessories_layuout_separator', array(
	'label' => __( 'Website Layout Setting', 'sports-accessories' ),
	'section' => 'sports_accessories_general_options',
	'settings' => 'sports_accessories_layuout_separator',
)));


$wp_customize->add_setting(
	'sports_accessories_website_layout',
	array(
		'sanitize_callback' => 'sports_accessories_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Sports_Accessories_Toggle_Switch_Custom_Control(
		$wp_customize,
		'sports_accessories_website_layout',
		array(
			'label'   => esc_html__('Boxed Layout', 'sports-accessories'),
			'section' => 'sports_accessories_general_options',
		)
	)
);

$wp_customize->add_setting('sports_accessories_layout_width_margin', array(
	'default'           => 50,
	'sanitize_callback' => 'sports_accessories_sanitize_range_value',
));

$wp_customize->add_control(new Sports_Accessories_Customize_Range_Control($wp_customize, 'sports_accessories_layout_width_margin', array(
		'label'       => __('Set Width', 'sports-accessories'),
		'description' => __('Adjust the width around the website layout by moving the slider. Use this setting to customize the appearance of your site to fit your design preferences.', 'sports-accessories'),
		'section'     => 'sports_accessories_general_options',
		'settings'    => 'sports_accessories_layout_width_margin',
		'active_callback' => 'sports_accessories_is_layout_enabled',
		'input_attrs' => array(
			'min'  => 0,
			'max'  => 130,
			'step' => 1,
		),
)));

// ---------------------------------------- HEADER OPTIONS ----------------------------------------------------	

// Header Options
$wp_customize->add_section(
	'sports_accessories_header_options',
	array(
		'panel' => 'sports_accessories_theme_options',
		'title' => esc_html__( 'Header Options', 'sports-accessories' ),
	)
);

// Add setting for sticky header
$wp_customize->add_setting(
	'sports_accessories_enable_sticky_header',
	array(
		'sanitize_callback' => 'sports_accessories_sanitize_switch',
		'default'           => false,
	)
);

// Add control for sticky header setting
$wp_customize->add_control(
	new Sports_Accessories_Toggle_Switch_Custom_Control(
		$wp_customize,
		'sports_accessories_enable_sticky_header',
		array(
			'label'   => esc_html__( 'Enable Sticky Header', 'sports-accessories' ),
			'section' => 'sports_accessories_header_options',
		)
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'sports_accessories_enable_header_search_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'sports_accessories_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Sports_Accessories_Toggle_Switch_Custom_Control(
		$wp_customize,
		'sports_accessories_enable_header_search_section',
		array(
			'label'    => esc_html__( 'Enable Search Section', 'sports-accessories' ),
			'section'  => 'sports_accessories_header_options',
			'settings' => 'sports_accessories_enable_header_search_section',
		)
	)
);

// Banner Section - Button Label.
$wp_customize->add_setting(
	'sports_accessories_header_button_label_',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'sports_accessories_header_button_label_',
	array(
		'label'           => esc_html__( 'Button Label', 'sports-accessories'  ),
		'section'         => 'sports_accessories_header_options',
		'settings'        => 'sports_accessories_header_button_label_',
		'type'            => 'text',
	)
);

// Banner Section - Button Link.
$wp_customize->add_setting(
	'sports_accessories_banner_button_link_',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'sports_accessories_banner_button_link_',
	array(
		'label'           => esc_html__( 'Button Link', 'sports-accessories' ),
		'section'         => 'sports_accessories_header_options',
		'settings'        => 'sports_accessories_banner_button_link_',
		'type'            => 'url',
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'sports_accessories_menu_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Sports_Accessories_Separator_Custom_Control( $wp_customize, 'sports_accessories_menu_separator', array(
	'label' => __( 'Menu Settings', 'sports-accessories' ),
	'section' => 'sports_accessories_header_options',
	'settings' => 'sports_accessories_menu_separator',
))); 

$wp_customize->add_setting( 'sports_accessories_menu_font_size', array(
    'default'           => 16,
    'sanitize_callback' => 'absint',
) );

// Add control for site title size
$wp_customize->add_control( 'sports_accessories_menu_font_size', array(
    'type'        => 'number',
    'section'     => 'sports_accessories_header_options',
    'label'       => __( 'Menu Font Size ', 'sports-accessories' ),
    'input_attrs' => array(
        'min'  => 10,
        'max'  => 100,
        'step' => 1,
    ),
));

$wp_customize->add_setting( 'sports_accessories_menu_text_transform', array(
    'default'           => 'capitalize', // Default value for text transform
    'sanitize_callback' => 'sanitize_text_field',
) );

// Add control for menu text transform
$wp_customize->add_control( 'sports_accessories_menu_text_transform', array(
    'type'     => 'select',
    'section'  => 'sports_accessories_header_options', // Adjust the section as needed
    'label'    => __( 'Menu Text Transform', 'sports-accessories' ),
    'choices'  => array(
        'none'       => __( 'None', 'sports-accessories' ),
        'capitalize' => __( 'Capitalize', 'sports-accessories' ),
        'uppercase'  => __( 'Uppercase', 'sports-accessories' ),
        'lowercase'  => __( 'Lowercase', 'sports-accessories' ),
    ),
) );

// Menu Text Color 
$wp_customize->add_setting(
	'sports_accessories_menu_text_color', 
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, 
		'sports_accessories_menu_text_color', 
		array(
			'label' => __('Menu Color', 'sports-accessories'),
			'section' => 'sports_accessories_header_options',
		)
	)
);

// Sub Menu Text Color 
$wp_customize->add_setting(
	'sports_accessories_sub_menu_text_color', 
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, 
		'sports_accessories_sub_menu_text_color', 
		array(
			'label' => __('Sub Menu Color', 'sports-accessories'),
			'section' => 'sports_accessories_header_options',
		)
	)
);

// ----------------------------------------SITE IDENTITY----------------------------------------------------

// Site Title - Enable Setting.
$wp_customize->add_setting(
	'sports_accessories_enable_site_title_setting',
	array(
		'default'           => true,
		'sanitize_callback' => 'sports_accessories_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Sports_Accessories_Toggle_Switch_Custom_Control(
		$wp_customize,
		'sports_accessories_enable_site_title_setting',
		array(
			'label'    => esc_html__( 'Enable Site Title', 'sports-accessories' ),
			'section'  => 'title_tagline',
			'settings' => 'sports_accessories_enable_site_title_setting',
		)
	)
);

// Tagline - Enable Setting.
$wp_customize->add_setting(
	'sports_accessories_enable_tagline_setting',
	array(
		'default'           => false,
		'sanitize_callback' => 'sports_accessories_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Sports_Accessories_Toggle_Switch_Custom_Control(
		$wp_customize,
		'sports_accessories_enable_tagline_setting',
		array(
			'label'    => esc_html__( 'Enable Tagline', 'sports-accessories' ),
			'section'  => 'title_tagline',
			'settings' => 'sports_accessories_enable_tagline_setting',
		)
	)
);

$wp_customize->add_setting( 'sports_accessories_site_title_size', array(
    'default'           => 25, // Default font size in pixels
    'sanitize_callback' => 'absint', // Sanitize the input as a positive integer
) );

// Add control for site title size
$wp_customize->add_control( 'sports_accessories_site_title_size', array(
    'type'        => 'number',
    'section'     => 'title_tagline', // You can change this section to your preferred section
    'label'       => __( 'Site Title Font Size ', 'sports-accessories' ),
    'input_attrs' => array(
        'min'  => 10,
        'max'  => 100,
        'step' => 1,
    ),
) );

$wp_customize->add_setting('sports_accessories_site_logo_width', array(
    'default'           => 200,
    'sanitize_callback' => 'sports_accessories_sanitize_range_value',
));

$wp_customize->add_control(new Sports_Accessories_Customize_Range_Control($wp_customize, 'sports_accessories_site_logo_width', array(
    'label'       => __('Adjust Site Logo Width', 'sports-accessories'),
    'description' => __('This setting controls the Width of Site Logo', 'sports-accessories'),
    'section'     => 'title_tagline',
    'settings'    => 'sports_accessories_site_logo_width',
    'input_attrs' => array(
        'min'  => 0,
        'max'  => 400,
        'step' => 5,
    ),
)));