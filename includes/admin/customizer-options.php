<?php

// Adding Larry's theme options to the theme customizer

function larry_customizer( $wp_customize ) {

	$wp_customize->add_section(
		'extras',
		array(
			'title' => __('Extras', 'larry'),
			'description' => '',
			'priority' => 180
		)
	);


	// Admin Bar

	$wp_customize->add_setting( 'larry_admin_bar', array(
		'capability' 				=> 'edit_theme_options',
		'default'           => 'default',
		'transport'         => 'refresh'
	) );

	$wp_customize->add_control( 'larry_admin_bar', array(
		'label'             => __('Show WP Admin Bar?', 'larry'),
		'description'       => __('Show WordPress admin bar in front end when logged in? Hidden by default.', 'larry'),
		'section'           => 'extras',
		'type'              => 'checkbox',
		'priority'		      => 14,
		'choices'           => array(
      'Hide'   => 'Show admin bar'
		)
	) );


	// Brand Color

	$wp_customize->add_setting( 'larry_brand_color', array(
	 'sanitize_callback' => 'sanitize_hex_color',
	 'default'           => 'default',
	 'transport'         => 'refresh',
	 'default'						=> '#09b1cc'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'larry_brand_color', array(
	 'label'    => __('Brand Color', 'larry'),
	 'description' => __('Used for all your links. ', 'larry'),
	 'section'  => 'colors',
	 'settings' => 'larry_brand_color',
	 'priority' => 20
	) ) );


	// Brand Logo

	$wp_customize->add_setting( 'larry_brand_logo', array(
		'transport'		=> 'refresh',
	) );

	$wp_customize->add_control(
     new WP_Customize_Image_Control( $wp_customize, 'larry_brand_logo', array(
       'label'      	=> __( 'Brand Logo', 'larry' ),
			 'description'  => __( 'Upload your brand logo. Used in top navigation.', 'larry' ),
       'section'    	=> 'title_tagline',
       'settings'   	=> 'larry_brand_logo',
			 'priority' 		=> 40
	 ) ) );


}
add_action( 'customize_register', 'larry_customizer' );
