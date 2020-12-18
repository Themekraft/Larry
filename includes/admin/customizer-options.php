<?php

// Adding Larry's theme options to the theme customizer

function larry_customizer( $wp_customize ) {


	// Add Extras Section

	$wp_customize->add_section(
		'larry_extras',
		array(
			'title' 	  => __('Extras', 'larry'),
			'description' => '',
			'priority' 	  => 190
		)
	);


	// Add Menu Styling Section

	$wp_customize->add_section(
		'larry_menu_styling',
		array(
			'title' 	  => __('Menu Styling', 'larry'),
			'description' => __('Theme options for your menu styling.', 'larry'),
			'panel' 	  => 'nav_menus',
			'priority' 	  => 8,
		)
	);

	// Add Blog Section

	$wp_customize->add_section(
		'larry_blog',
		array(
			'title' 	  => __('Blog', 'larry'),
			'description' => __('Theme options for your blog styling.', 'larry'),
			'priority' 	  => 80,
		)
	);


	// Menu Style

	$wp_customize->add_setting( 'larry_menu_style', array(
		'capability'  		=> 'edit_theme_options',
		'transport'   		=> 'refresh',
		'default'  		 	=> 'light',
		'sanitize_callback' => 'larry_saniatize_radio'
	) );

	$wp_customize->add_control( 'larry_menu_style', array(
		'label'             => __('Menu Style', 'larry'),
		'description'       => __('Dark or light menu?', 'larry'),
		'section'           => 'larry_menu_styling',
		'priority'		    => 40,
		'type'        		=> 'radio',
		'choices'     		=> array(
			'light' => __('Light top menu', 'larry'),
			'dark'  => __('Dark top menu', 'larry')
		)
	) );


	// Top menu fixed?

	$wp_customize->add_setting( 'larry_fixed_top_nav', array(
		'capability' 		=> 'edit_theme_options',
		'transport'         => 'refresh',
		'default'			=> true,
		'sanitize_callback' => 'larry_saniatize_checkbox'
	) );

	$wp_customize->add_control( 'larry_fixed_top_nav', array(
		'label'             => __('Top menu fixed?', 'larry'),
		'section'           => 'larry_menu_styling',
		'type'              => 'checkbox',
		'priority'		    => 20
	) );


	// Brand Color

	$wp_customize->add_setting( 'larry_link_color', array(
	 'sanitize_callback' => 'sanitize_hex_color',
	 'default'           => 'default',
	 'transport'         => 'refresh',
	 'default'			 => '#09b1cc'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	 'label'    		=> __('Link Color', 'larry'),
	 'description' 		=> __('Used for all your links. For example your brand color.', 'larry'),
	 'section'  		=> 'colors',
	 'settings' 		=> 'larry_link_color',
	 'priority' 		=> 1
	) ) );


	// Background Color

	$wp_customize->add_setting( 'larry_bg_color', array(
		'capability' 		=> 'edit_theme_options',
		'transport'         => 'refresh',
		'default'			=> false,
		'sanitize_callback' => 'larry_saniatize_checkbox',
	) );

	$wp_customize->add_control( 'larry_bg_color', array(
		'label'             => __('White background', 'larry'),
		'section'           => 'colors',
		'type'              => 'checkbox',
		'priority'		    => 2
	) );


	// Brand Logo

	$wp_customize->add_setting( 'larry_site_logo', array(
		'transport'			=> 'refresh',
		'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'larry_site_logo', array(
    	'label'      		=> __( 'Site Logo', 'larry' ),
		'description'  		=> __( 'Upload your site logo. Used in top navigation.', 'larry' ),
    	'section'    		=> 'title_tagline',
    	'settings'   		=> 'larry_site_logo',
		'priority' 			=> 40
	 ) ) );


	 // Hide Site Title

 	$wp_customize->add_setting( 'larry_hide_site_title', array(
 		'capability' 		=> 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'larry_saniatize_checkbox' 
 	) );

 	$wp_customize->add_control( 'larry_hide_site_title', array(
 		'label'             => __('Hide the site title in top menu?', 'larry'),
 		'section'           => 'title_tagline',
 		'type'              => 'checkbox',
 		'priority'		    => 42
 	) );


	// Blog Options

	// $wp_customize->add_setting( 'larry_blog_options', array() );

	// $wp_customize->add_control( new Prefix_Custom_Content( $wp_customize, 'larry_blog_options', array(
	// 	'section' 	=> 'larry_blog',
	// 	'priority' 	=> 10,
	// 	'label' 	=> __( 'Display sidebars', 'larry' ),
	// ) ) );


	// Blog Archive Sidebars

	$wp_customize->add_setting( 'larry_blog_archive_sidebars', array(
		'capability' 		=> 'edit_theme_options',
		'transport'         => 'refresh',
		'default'			=> false,
		'sanitize_callback' => 'larry_saniatize_checkbox'
	) );

	$wp_customize->add_control( 'larry_blog_archive_sidebars', array(
		'label'             => __('for blog archives', 'larry'),
		'section'           => 'larry_blog',
		'type'              => 'checkbox',
		'priority'		    => 20
	) );


	// Blog Single Post Sidebars

	$wp_customize->add_setting( 'larry_blog_single_post_sidebars', array(
		'capability' 		=> 'edit_theme_options',
		'transport'         => 'refresh',
		'default'			=> true,
		'sanitize_callback' => 'larry_saniatize_checkbox'
	) );

	$wp_customize->add_control( 'larry_blog_single_post_sidebars', array(
		'label'             => __('for single posts', 'larry'),
		'section'           => 'larry_blog',
		'type'              => 'checkbox',
		'priority'		    => 30
	) );


	// Blog Thumbnails

	// $wp_customize->add_setting( 'larry_blog_thumbnail_desc', array() );

	// $wp_customize->add_control( new Prefix_Custom_Content( $wp_customize, 'larry_blog_thumbnail_desc', array(
	// 	'section' 	=> 'larry_blog',
	// 	'priority' 	=> 40,
	// 	'label' 		=> __( 'Post Thumbnails', 'larry' ),
	// 	// 'description' 	=> __( 'Options for a smooth checkout process.', 'larry' )
	// ) ) );


	// Leave blog thumbnails in natural height?

	$wp_customize->add_setting( 'larry_blog_thumbnail_height', array(
		'capability' 		=> 'edit_theme_options',
		'transport'         => 'refresh',
		'default'  		 	=> 'fixed',
		'sanitize_callback' => 'larry_saniatize_radio'
	) );

	$wp_customize->add_control( 'larry_blog_thumbnail_height', array(
		'label'             => __('Blog thumbnails', 'larry'),
		'description'       => __('Fixed height or natural?', 'larry'),
		'section'           => 'larry_blog',
		'priority'		    => 50,
		'type'        		=> 'radio',
		'choices'     		=> array(
			'fixed'  	=> __('Crop all thumbnails to same ratio.', 'larry'),
			'natural'   => __('Leave all thumbnails in natural ratio. Each entry might have a different height.', 'larry'),
		)
	) );


	// WooCommerce Options

	if ( class_exists( 'WooCommerce' ) ) {


		// Add WooCommerce Panel

		$wp_customize->add_panel(
			'larry_wc',
			array(
				'title'       => __('WooCommerce', 'larry'),
				'description' => '',
				'priority' 	  => 180
			)
		);


		// Add Product Archives Section

		$wp_customize->add_section(
			'larry_wc_archives',
			array(
				'title'       => __('Product Archives', 'larry'),
				'description' => '',
				'panel' 	  => 'larry_wc',
				'priority'    => 10
			)
		);


		// Add Single Product Section

		$wp_customize->add_section(
			'larry_wc_single',
			array(
				'title'       => __('Single Products', 'larry'),
				'description' => '',
				'panel' 	  => 'larry_wc',
				'priority'    => 10
			)
		);


		// Add Checkout Section

		$wp_customize->add_section(
			'larry_wc_checkout',
			array(
				'title'       => __('Checkout', 'larry'),
				'description' => '',
				'panel' 	  => 'larry_wc',
				'priority'    => 100
			)
		);


		// Product Archives - Section Title

		// $wp_customize->add_setting( 'larry_wc_archives_desc', array() );

		// $wp_customize->add_control( new Prefix_Custom_Content( $wp_customize, 'larry_wc_archives_desc', array(
		// 	'section' 	=> 'larry_wc_archives',
		// 	'priority' 	=> 30,
		// 	'label' 		=> __( 'Product Archives', 'larry' ),
		// 	'description' 	=> __( 'Options for your shop homepage, and your shop\'s category and tags pages.', 'larry' )
		// ) ) );


		// Display Product Archive Sidebars

		$wp_customize->add_setting( 'larry_wc_archive_sidebars', array(
			'capability' 		=> 'edit_theme_options',
			'transport'         => 'refresh',
			'default'			=> true,
			'sanitize_callback' => 'larry_saniatize_checkbox'
		) );

		$wp_customize->add_control( 'larry_wc_archive_sidebars', array(
			'label'             => __('Display sidebars?', 'larry'),
			'section'           => 'larry_wc_archives',
			'type'              => 'checkbox',
			'priority'		    => 30
		) );


		// Hide cart buttons in loop

		$wp_customize->add_setting( 'larry_wc_loop_hide_cart_buttons', array(
			'capability' 		=> 'edit_theme_options',
			'transport'  		=> 'refresh',
			'default' 	 		=> false,
			'sanitize_callback' => 'larry_saniatize_checkbox'
		) );

		$wp_customize->add_control( 'larry_wc_loop_hide_cart_buttons', array(
			'label'    			=> __('Hide add-to-cart buttons?', 'larry'),
			'section'  			=> 'larry_wc_archives',
			'type'     			=> 'checkbox',
			'priority' 			=> 40
		) );


		// Hide catalog ordering

		$wp_customize->add_setting( 'larry_wc_loop_hide_catalog_ordering', array(
			'capability' 		=> 'edit_theme_options',
			'transport'  		=> 'refresh',
			'default' 	 		=> true,
			'sanitize_callback' => 'larry_saniatize_checkbox'
		) );

		$wp_customize->add_control( 'larry_wc_loop_hide_catalog_ordering', array(
			'label'     		=> __('Hide catalog ordering?', 'larry'),
			'section'   		=> 'larry_wc_archives',
			'type'      		=> 'checkbox',
			'priority'			=> 40
		) );


		// Display categories

		$wp_customize->add_setting( 'larry_wc_loop_add_cats', array(
			'capability' 		=> 'edit_theme_options',
			'transport'  		=> 'refresh',
			'default' 	 		=> false,
			'sanitize_callback' => 'larry_saniatize_checkbox'
		) );

		$wp_customize->add_control( 'larry_wc_loop_add_cats', array(
			'label'     		=> __('Display categories in each item?', 'larry'),
			'section'   		=> 'larry_wc_archives',
			'type'      		=> 'checkbox',
			'priority'			=> 50
		) );


		// Single Products - Section Title

		// $wp_customize->add_setting( 'larry_wc_single_desc', array() );

		// $wp_customize->add_control( new Prefix_Custom_Content( $wp_customize, 'larry_wc_single_desc', array(
		// 	'section' 	=> 'larry_wc_single',
		// 	'priority' 	=> 50,
		// 	'label' 		=> __( 'Single Products', 'larry' ),
		// 	'description' 	=> __( 'Options for your single product view.', 'larry' )
		// ) ) );


		// Display Single Product Sidebars

		$wp_customize->add_setting( 'larry_wc_single_sidebars', array(
			'capability' 		=> 'edit_theme_options',
			'transport'         => 'refresh',
			'default'			=> true,
			'sanitize_callback' => 'larry_saniatize_checkbox'
		) );

		$wp_customize->add_control( 'larry_wc_single_sidebars', array(
			'label'     		=> __('Display sidebars?', 'larry'),
			'section'   		=> 'larry_wc_single',
			'type'      		=> 'checkbox',
			'priority'			=> 60
		) );


		// Hide breadcrumbs

		$wp_customize->add_setting( 'larry_wc_hide_breadcrumbs', array(
			'capability' 		=> 'edit_theme_options',
			'transport'         => 'refresh',
			'default' 			=> false,
			'sanitize_callback' => 'larry_saniatize_checkbox'
		) );

		$wp_customize->add_control( 'larry_wc_hide_breadcrumbs', array(
			'label'     		=> __('Hide breadcrumbs in single product?', 'larry'),
			'section'   		=> 'larry_wc_single',
			'type'      		=> 'checkbox',
			'priority'			=> 70
		) );


		// Hide product meta in summary

		$wp_customize->add_setting( 'larry_wc_hide_meta_summary', array(
			'capability' 		=> 'edit_theme_options',
			'transport'  		=> 'refresh',
			'default' 	 		=> false,
			'sanitize_callback' => 'larry_saniatize_checkbox'
		) );

		$wp_customize->add_control( 'larry_wc_hide_meta_summary', array(
			'label'       		=> __('Hide extra data in product summary?', 'larry'),
			'description' 		=> __('Categories, tags, SKU... Got a simple shop? Then just remove it.', 'larry'),
			'section'     		=> 'larry_wc_single',
			'type'        		=> 'checkbox',
			'priority'	  		=> 80
		) );


		// Show cart in top menu?

		$wp_customize->add_setting( 'larry_wc_show_top_nav_cart', array(
			'capability' 		=> 'edit_theme_options',
			'transport'  		=> 'refresh',
			'default'  	 		=> 'always',
			'sanitize_callback' => 'larry_saniatize_radio'
		) );

		$wp_customize->add_control( 'larry_wc_show_top_nav_cart', array(
			'label'             => __('Show cart icon in top menu', 'larry'),
			'description'       => __('When to show the cart icon?', 'larry'),
			'section'           => 'larry_wc_checkout',
			'priority'		    => 70,
			'type'        		=> 'radio',
			'choices'     		=> array(
				'always'  	=> __('Always show', 'larry'),
				'never'   	=> __('Never show', 'larry'),
				'notempty'  => __('Just when items in cart', 'larry')
			)
		) );


		// Checkout - Section Title

		// $wp_customize->add_setting( 'larry_wc_checkout_desc', array() );

		// $wp_customize->add_control( new Prefix_Custom_Content( $wp_customize, 'larry_wc_checkout_desc', array(
		// 	'section' 	=> 'larry_wc_checkout',
		// 	'priority' 	=> 80,
		// 	'label' 		=> __( 'Direct Checkout', 'larry' ),
		// 	// 'description' 	=> __( 'Options for a smooth checkout process.', 'larry' )
		// ) ) );


		// Redirect to checkout after adding item to cart?

		$wp_customize->add_setting( 'larry_wc_redirect_to_checkout', array(
			'capability' 		=> 'edit_theme_options',
			'transport'  		=> 'refresh',
			'default' 	 		=> false,
			'sanitize_callback' => 'larry_saniatize_checkbox'
		) );

		$wp_customize->add_control( 'larry_wc_redirect_to_checkout', array(
			'label'             => __('Redirect to checkout after adding a product to cart?', 'larry'),
			'description'       => __('Use it wisely. It can help increase conversions a lot, but only useful for higher priced products or when your customers mostly just buy one product at a time anyway. ', 'larry'),
			'section'           => 'larry_wc_checkout',
			'type'              => 'checkbox',
			'priority'		    => 90
		) );



	}


	// BuddyPress Options

	if ( class_exists( 'BuddyPress' ) ) {

		$wp_customize->add_section(
			'larry_bp',
			array(
				'title'       => __('BuddyPress', 'larry'),
				'description' => '',
				'priority'    => 180
			)
		);


		// BP dropdown in top nav

		$wp_customize->add_setting( 'larry_bp_hide_top_nav_bp_dropdown', array(
			'capability' 		=> 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'larry_saniatize_checkbox'
		) );

		$wp_customize->add_control( 'larry_bp_hide_top_nav_bp_dropdown', array(
			'label'             => __('BP profile dropdown', 'larry'),
			'description'       => __('Hide BP profile dropdown nav in top menu?', 'larry'),
			'section'           => 'larry_bp',
			'type'              => 'checkbox',
			'priority'		    => 10
		) );


		// BP notifications icon in top menu

		if ( bp_is_active( 'notifications' ) ) {

			$wp_customize->add_setting( 'larry_bp_hide_top_nav_notifications', array(
				'capability' 		=> 'edit_theme_options',
				'transport'         => 'refresh',
				'sanitize_callback' => 'larry_saniatize_checkbox'
			) );

			$wp_customize->add_control( 'larry_bp_hide_top_nav_notifications', array(
				'label'             => __('BP notifications icon', 'larry'),
				'description'       => __('Hide BP notifications icon in top menu?', 'larry'),
				'section'           => 'larry_bp',
				'type'              => 'checkbox',
				'priority'		    => 20
			) );

		}


		// BP messages

		if ( bp_is_active( 'messages' ) ) {

			$wp_customize->add_setting( 'larry_bp_hide_top_nav_messages', array(
				'capability' 	    => 'edit_theme_options',
				'transport'         => 'refresh',
				'sanitize_callback' => 'larry_saniatize_checkbox'
			) );

			$wp_customize->add_control( 'larry_bp_hide_top_nav_messages', array(
				'label'             => __('BP messages icon', 'larry'),
				'description'       => __('Hide BP messages icon in top menu?', 'larry'),
				'section'           => 'larry_bp',
				'type'              => 'checkbox',
				'priority'		    => 30
			) );

		}


		// Extras - Disable Google Fonts

		$wp_customize->add_setting( 'larry_disable_google_fonts', array(
			'capability' 		=> 'edit_theme_options',
			'transport'         => 'refresh',
			'default'			=> false,
			'sanitize_callback' => 'larry_saniatize_checkbox',
		) );

		$wp_customize->add_control( 'larry_disable_google_fonts', array(
			'label'             => __('Don\'t load Google Fonts?', 'larry'),
			'description'       => __('Disable loading the 2 Google Fonts for this theme?', 'larry'),
			'section'           => 'larry_extras',
			'type'              => 'checkbox',
			'priority'		    => 10
		) );


	}


}
add_action( 'customize_register', 'larry_customizer' );


// Sanitizer

function larry_saniatize_checkbox( $input, $setting ) {
	return $input === true ? 1 : 0;
}

function larry_saniatize_radio( $input, $setting ) {
    $control = $setting->manager->get_control( $setting->id );
    return array_key_exists( $input, $control->choices ) ? $input : $setting->default;
}

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
