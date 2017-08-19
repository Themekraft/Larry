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
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_larry_admin_bar'
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

	// checkbox sanitization function
	function sanitize_larry_admin_bar( $input ){
			//returns true if checkbox is checked
			return ( isset( $input ) ? true : false );
	}


	// Brand Color

	$wp_customize->add_setting( 'larry_link_color', array(
	 'sanitize_callback' => 'sanitize_hex_color',
	 'default'           => 'default',
	 'transport'         => 'refresh',
	 'default'						=> '#09b1cc'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	 'label'    => __('Link Color', 'larry'),
	 'description' => __('Used for all your links. For example your brand color.', 'larry'),
	 'section'  => 'colors',
	 'settings' => 'larry_link_color',
	 'priority' => 20
	) ) );


	// Brand Logo

	$wp_customize->add_setting( 'larry_site_logo', array(
		'transport'					=> 'refresh',
		'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control(
     new WP_Customize_Image_Control( $wp_customize, 'larry_site_logo', array(
       'label'      	=> __( 'Site Logo', 'larry' ),
			 'description'  => __( 'Upload your site logo. Used in top navigation.', 'larry' ),
       'section'    	=> 'title_tagline',
       'settings'   	=> 'larry_site_logo',
			 'priority' 		=> 40
	 ) ) );


	 // Hide Site Title

 	$wp_customize->add_setting( 'larry_hide_site_title', array(
 		'capability' 				=> 'edit_theme_options',
 		'transport'         => 'refresh',
 	) );

 	$wp_customize->add_control( 'larry_hide_site_title', array(
 		'label'             => __('Hide the site title in top menu?', 'larry'),
 		'section'           => 'title_tagline',
 		'type'              => 'checkbox',
 		'priority'		      => 42
 	) );




}
add_action( 'customize_register', 'larry_customizer' );
