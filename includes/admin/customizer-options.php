<?php

// Adding Larry's theme options to the theme customizer

function larry_customizer( $wp_customize ) {

	$wp_customize->add_section(
		'extras',
		array(
			'title' => __('Extras', 'larry'),
			'description' => '',
			'priority' => 190
		)
	);


	// Disable Google Fonts

	$wp_customize->add_setting( 'larry_disable_google_fonts', array(
		'capability' 				=> 'edit_theme_options',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'larry_disable_google_fonts', array(
		'label'             => __('Disable Google Fonts?', 'larry'),
		'description'       => __('Disable loading the 2 Google Fonts for this theme?', 'larry'),
		'section'           => 'extras',
		'type'              => 'checkbox',
		'priority'		      => 14
	) );



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




	// WooCommerce Options

	if ( class_exists( 'WooCommerce' ) ) {

		$wp_customize->add_section(
			'larry_wc',
			array(
				'title' => __('WooCommerce', 'larry'),
				'description' => '',
				'priority' => 180
			)
		);

		$wp_customize->add_setting( 'example-control', array() );

		$wp_customize->add_control( new Prefix_Custom_Content( $wp_customize, 'example-control', array(
			'section' 	=> 'larry_wc',
			'priority' 	=> 10,
			'label' 		=> __( 'Example Control', 'larry' ),
			'content' 	=> __( 'Content to output. Use <a href="#">HTML</a> if you like.', 'larry' ) . '</p>',
			// 'description' => __( 'Optional: Example Description.', 'textdomain' ),
		) ) );

		// Admin Bar

		$wp_customize->add_setting( 'larry_wc_loop_hide_cart_buttons', array(
			'capability' 				=> 'edit_theme_options',
			'transport'         => 'refresh',
		) );

		$wp_customize->add_control( 'larry_wc_loop_hide_cart_buttons', array(
			'label'             => __('Hide add-to-cart buttons in category views?', 'larry'),
			// 'description'       => __('Show WordPress admin bar in front end when logged in? Hidden by default.', 'larry'),
			'section'           => 'larry_wc',
			'type'              => 'checkbox',
			'priority'		      => 14
		) );

	}


	// BuddyPress Options

	if ( class_exists( 'BuddyPress' ) ) {

		$wp_customize->add_section(
			'larry_bp',
			array(
				'title' => __('BuddyPress', 'larry'),
				'description' => '',
				'priority' => 180
			)
		);

		// Admin Bar

		$wp_customize->add_setting( 'larry_bp_hide_top_nav_bp_dropdown', array(
			'capability' 				=> 'edit_theme_options',
			'transport'         => 'refresh',
		) );

		$wp_customize->add_control( 'larry_bp_hide_top_nav_bp_dropdown', array(
			'label'             => __('BP dropdown in top nav', 'larry'),
			'description'       => __('Hide  BP profile dropdown nav in top menu?', 'larry'),
			'section'           => 'larry_bp',
			'type'              => 'checkbox',
			'priority'		      => 14
		) );

	}


}
add_action( 'customize_register', 'larry_customizer' );



// Custom HTML ELement for Customizer
// Cheers Corey McKrill - https://wptheming.com/2015/07/customizer-control-arbitrary-html/
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Prefix_Custom_Content' ) ) :
	class Prefix_Custom_Content extends WP_Customize_Control {

		// Whitelist content parameter
		public $content = '';

		/**
		 * Render the control's content.
		 *
		 * Allows the content to be overriden without having to rewrite the wrapper.
		 *
		 * @since   1.0.0
		 * @return  void
		 */
		public function render_content() {
			if ( isset( $this->label ) ) {
				echo '<span class="customize-control-title">' . $this->label . '</span>';
			}
			if ( isset( $this->content ) ) {
				echo $this->content;
			}
			if ( isset( $this->description ) ) {
				echo '<span class="description customize-control-description">' . $this->description . '</span>';
			}
		}
	}
endif;
