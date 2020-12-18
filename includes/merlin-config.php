<?php
/**
 * Merlin WP configuration file.
 *
 * @package @@pkg.name
 * @version @@pkg.version
 * @author  @@pkg.author
 * @license @@pkg.license
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and other settings for Merlin WP.
 */
$wizard = new Merlin(
	// Configure Merlin with custom settings.
	$config = array(
		'directory'			=> '',						// Location where the 'merlin' directory is placed.
		'demo_directory'		=> 'demo/',					// Location where the theme demo files exist.
		'merlin_url'			=> 'merlin',					// Customize the page URL where Merlin WP loads.
		'child_action_btn_url'		=> 'https://codex.wordpress.org/Child_Themes',  // The URL for the 'child-action-link'.
		'help_mode'			=> false,					// Set to true to turn on the little wizard helper.
		'dev_mode'			=> false,					// Set to true if you're testing or developing.
		'branding'			=> false,					// Set to false to remove Merlin WP's branding.
	),
	// Text strings.
	$strings = array(
		'admin-menu' 			=> esc_html__( 'Theme Setup' , 'larry' ),
		'title%s%s%s%s' 		=> esc_html__( '%s%s Themes &lsaquo; Theme Setup: %s%s' , 'larry' ),

		'return-to-dashboard' 		=> esc_html__( 'Return to the dashboard' , 'larry' ),

		'btn-skip' 			=> esc_html__( 'Skip' , 'larry' ),
		'btn-next' 			=> esc_html__( 'Next' , 'larry' ),
		'btn-start' 			=> esc_html__( 'Start' , 'larry' ),
		'btn-no' 			=> esc_html__( 'Cancel' , 'larry' ),
		'btn-plugins-install' 		=> esc_html__( 'Install' , 'larry' ),
		'btn-child-install' 		=> esc_html__( 'Install' , 'larry' ),
		'btn-content-install' 		=> esc_html__( 'Install' , 'larry' ),
		'btn-import' 			=> esc_html__( 'Import' , 'larry' ),
		'btn-license-activate' 		=> esc_html__( 'Activate' , 'larry' ),

		'welcome-header%s' 		=> esc_html__( 'Welcome to %s' , 'larry' ),
		'welcome-header-success%s' 	=> esc_html__( 'Hi. Welcome back' , 'larry' ),
		'welcome%s' 			=> esc_html__( 'This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.' , 'larry' ),
		'welcome-success%s' 		=> esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.' , 'larry' ),

		'child-header' 			=> esc_html__( 'Install Child Theme' , 'larry' ),
		'child-header-success' 		=> esc_html__( 'You\'re good to go!' , 'larry' ),
		'child' 			=> esc_html__( 'Let’s build & activate a child theme so you may easily make theme changes.' , 'larry' ),
		'child-success%s' 		=> esc_html__( 'Your child theme has already been installed and is now activated — if it wasn\'t already.' , 'larry' ),
		'child-action-link' 		=> esc_html__( 'Learn about child themes' , 'larry' ),
		'child-json-success%s' 		=> esc_html__( 'Awesome. Your child theme has already been installed and is now activated.' , 'larry' ),
		'child-json-already%s' 		=> esc_html__( 'Awesome. Your child theme has been created and is now activated.' , 'larry' ),

		'plugins-header' 		=> esc_html__( 'Install Plugins' , 'larry' ),
		'plugins-header-success' 	=> esc_html__( 'You\'re up to speed!' , 'larry' ),
		'plugins' 			=> esc_html__( 'Let’s install some essential WordPress plugins to get your site up to speed.' , 'larry' ),
		'plugins-success%s' 		=> esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.' , 'larry' ),
		'plugins-action-link' 		=> esc_html__( 'Advanced' , 'larry' ),

		'import-header' 		=> esc_html__( 'Import Content' , 'larry' ),
		'import' 			=> esc_html__( 'Let’s import content to your website, to help you get familiar with the theme.' , 'larry' ),
		'import-action-link' 		=> esc_html__( 'Advanced' , 'larry' ),

		'license-header%s' 		=> esc_html__( 'Activate %s' , 'larry' ),
		'license' 			=> esc_html__( 'Add your license key to activate one-click updates and theme support.' , 'larry' ),
		'license-action-link' 		=> esc_html__( 'More info' , 'larry' ),

		'license-link-1'            	=> wp_kses( sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://wordpress.org/support/', esc_html__( 'Explore WordPress', 'larry' ) ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ),
		'license-link-2'            	=> wp_kses( sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://themebeans.com/contact/', esc_html__( 'Get Theme Support', 'larry' ) ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ),
		'license-link-3'           	=> wp_kses( sprintf( '<a href="'.admin_url( 'customize.php' ).'" target="_blank">%s</a>', esc_html__( 'Start Customizing', 'larry' ) ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ),

		'ready-header' 			=> esc_html__( 'All done. Have fun!' , 'larry' ),
		'ready%s' 			=> esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.' , 'larry' ),
		'ready-action-link' 		=> esc_html__( 'Extras' , 'larry' ),
		'ready-big-button' 		=> esc_html__( 'View your website' , 'larry' ),

		'ready-link-1'            	=> wp_kses( sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://wordpress.org/support/', esc_html__( 'Explore WordPress', 'larry' ) ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ),
		'ready-link-2'            	=> wp_kses( sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://themebeans.com/contact/', esc_html__( 'Get Theme Support', 'larry' ) ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ),
		'ready-link-3'           	=> wp_kses( sprintf( '<a href="'.admin_url( 'customize.php' ).'" target="_blank">%s</a>', esc_html__( 'Start Customizing', 'larry' ) ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ),
	)
);
