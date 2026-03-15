<?php

boldthemes_remove_customize_setting( 'accent_color' );
boldthemes_remove_customize_setting( 'alternate_color' );

BoldThemes_Customize_Default::$data['accent_color'] = '';
BoldThemes_Customize_Default::$data['alternate_color'] = '';

BoldThemes_Customize_Default::$data['buttons_shape'] = 'btHardRoundedButtons';

BoldThemes_Customize_Default::$data['events_settings_page_slug'] = '';

// ACCENT COLOR 1
if ( ! function_exists( 'boldthemes_customize_accent_color' ) ) {
	function boldthemes_customize_accent_color( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[accent_color]', array(
			'default'        	   => BoldThemes_Customize_Default::$data['accent_color'],
			'type'           	   => 'option',
			'capability'     	   => 'edit_theme_options',
			'sanitize_callback'    => 'sanitize_text_field'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
			'label'    => esc_html__( 'Accent Color 1', 'fitness-club' ),
			'section'  => BoldThemesFramework::$pfx . '_general_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[accent_color]',
			'priority' => 26,
			'context'  => BoldThemesFramework::$pfx . '_accent_color'
		)));
	}
}
add_action( 'customize_register', 'boldthemes_customize_accent_color' );

// ACCENT COLOR 2
BoldThemes_Customize_Default::$data['alternate_color'] = '';
if ( ! function_exists( 'boldthemes_customize_alternate_color' ) ) {
	function boldthemes_customize_alternate_color( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[alternate_color]', array(
			'default'        	   => BoldThemes_Customize_Default::$data['alternate_color'],
			'type'           	   => 'option',
			'capability'     	   => 'edit_theme_options',
			'sanitize_callback'    => 'sanitize_text_field'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'alternate_color', array(
			'label'    => esc_html__( 'Accent Color 2', 'fitness-club' ),
			'section'  => BoldThemesFramework::$pfx . '_general_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[alternate_color]',
			'priority' => 26,
			'context'  => BoldThemesFramework::$pfx . 'alternate_color'
		)));
	}
}
add_action( 'customize_register', 'boldthemes_customize_alternate_color' );

// EXTRA COLOR 1
BoldThemes_Customize_Default::$data['extra_color1'] = '';
if ( ! function_exists( 'boldthemes_customize_extra_color1' ) ) {
	function boldthemes_customize_extra_color1( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[extra_color1]', array(
			'default'        	   => BoldThemes_Customize_Default::$data['extra_color1'],
			'type'           	   => 'option',
			'capability'     	   => 'edit_theme_options',
			'sanitize_callback'    => 'sanitize_text_field'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'extra_color1', array(
			'label'    => esc_html__( 'Extra Color 1', 'fitness-club' ),
			'section'  => BoldThemesFramework::$pfx . '_general_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[extra_color1]',
			'priority' => 26,
			'context'  => BoldThemesFramework::$pfx . 'extra_color1'
		)));
	}
}
add_action( 'customize_register', 'boldthemes_customize_extra_color1' );

// EXTRA COLOR 2
BoldThemes_Customize_Default::$data['extra_color2'] = '';
if ( ! function_exists( 'boldthemes_customize_extra_color2' ) ) {
	function boldthemes_customize_extra_color2( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[extra_color2]', array(
			'default'        	   => BoldThemes_Customize_Default::$data['extra_color2'],
			'type'           	   => 'option',
			'capability'     	   => 'edit_theme_options',
			'sanitize_callback'    => 'sanitize_text_field'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'extra_color2', array(
			'label'    => esc_html__( 'Extra Color 2', 'fitness-club' ),
			'section'  => BoldThemesFramework::$pfx . '_general_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[extra_color2]',
			'priority' => 26,
			'context'  => BoldThemesFramework::$pfx . 'extra_color2'
		)));
	}
}
add_action( 'customize_register', 'boldthemes_customize_extra_color2' );

// EVENTS SECTION
if ( ! function_exists( 'boldthemes_events_customize_register' ) ) {
	function boldthemes_events_customize_register( $wp_customize ) {
		$wp_customize->add_section( BoldThemesFramework::$pfx . '_events_section' , array(
			'title'      => esc_html__( 'Events', 'fitness-club' ),
			'priority'   => 70
		));
	}
}
add_action( 'customize_register', 'boldthemes_events_customize_register' );

// EVENTS SETTINGS PAGE SLUG
BoldThemes_Customize_Default::$data['events_settings_page_slug'] = '';
if ( ! function_exists( 'boldthemes_customize_events_settings_page_slug' ) ) {
	function boldthemes_customize_events_settings_page_slug( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[events_settings_page_slug]', array(
			'default'           => BoldThemes_Customize_Default::$data['events_settings_page_slug'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'events_settings_page_slug', array(
			'label'    => esc_html__( 'Settings Page Slug', 'fitness-club' ),
			'section'  => BoldThemesFramework::$pfx . '_events_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[events_settings_page_slug]',
			'priority' => 10,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_events_settings_page_slug' );

boldthemes_add_mb( array( 'id' => 'tribe_events', 'title' => esc_html__( 'Settings', 'fitness-club' ), 'post_type' => 'tribe_events', 'autosave' => true ) );
boldthemes_add_mb_field( 
	array(
		'mb_id'    => 'tribe_events',
		'field_id' => 'override',
		'name'     => esc_html__( 'Override Global Settings', 'fitness-club' ),
		'type'     => 'boldthemestext',
		'clone'    => true
	)
);

add_filter( 'woocommerce_product_thumbnails_columns', 'boldthemes_product_thumbnails_columns' );
function boldthemes_product_thumbnails_columns() {
	return 3;
}