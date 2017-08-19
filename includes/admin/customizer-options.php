<?php

// Adding Larry's theme options to the theme customizer

function larry_customizer( $wp_customize ) {

	$wp_customize->add_section(
		'larry_section_one',
		array(
			'title' => 'Larry Theme Options',
			'description' => 'This is a settings section.',
			'priority' => 35,
		)
	);


	$wp_customize->add_setting( 'larry_show_admin_bar', array(
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'larry_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'larry_show_admin_bar', array(
	  'type' => 'checkbox',
	  'section' => 'larry_section_one', // Add a default or your own section
	  'label' => __( 'WP Admin Bar' ),
	  'description' => __( 'Show WP Admin bar in front end?' ),
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


}
add_action( 'customize_register', 'larry_customizer' );
