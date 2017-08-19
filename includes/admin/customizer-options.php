<?php

// Adding Larry's theme options to the theme customizer

function larry_customizer( $wp_customize ) {

	$wp_customize->add_section(
		'larry_theme_options',
		array(
			'title' => 'Larry Theme Options',
			'description' => '',
			'priority' => 35,
		)
	);


	// $wp_customize->add_setting( 'larry_show_admin_bar', array(
	//   'capability' => 'edit_theme_options',
	//   'sanitize_callback' => 'larry_sanitize_checkbox',
	// ) );
	//
	// $wp_customize->add_control( 'larry_show_admin_bar', array(
	//   'type' => 'checkbox',
	//   'section' => 'larry_section_one', // Add a default or your own section
	//   'label' => __( 'WP Admin Bar' ),
	//   'description' => __( 'Show WP Admin bar in front end?' ),
	// ) );


	$wp_customize->add_setting( 'larry_admin_bar', array(
		'capability' 				=> 'edit_theme_options',
		'default'           => 'default',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'larry_admin_bar', array(
		'label'             => 'Show WP Admin Bar?',
		'description'       => 'Show WordPress admin bar in front end when logged in? Hidden by default.',
		'section'           => 'larry_theme_options',
		'type'              => 'checkbox',
		'priority'		      => 14,
		'choices'           => array(
      'Hide'     => 'Show admin bar',
		),
	) );


	// Text Box
	$wp_customize->add_setting(
		'konrad_textbox',
		array(
			'default' => 'Hallo Konrad',
		)
	);

	$wp_customize->add_control(
		'konrad_textbox',
		array(
			'label' => 'Hallo Konrad',
			'section' => 'larry_section_one',
			'type' => 'text',
		)
	);



	// Colors

	$wp_customize->add_setting( 'larry_branding_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'           => 'default',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'larry_branding_color', array(
		'label'    => 'Branding Color',
		'section'  => 'colors',
		'settings' => 'larry_branding_color',
		'priority' => 14,
	) ) );





}
add_action( 'customize_register', 'larry_customizer' );
