<?php

add_action( 'admin_menu', 'larry_admin_menu' );
function larry_admin_menu() {
	add_theme_page( 'Larry', 'Larry', 'edit_theme_options', 'larry', 'larry_screen' );
}

/**
 * The Admin Page
 *
 * @author Sven Lehnert
 * @package TK Google Fonts
 * @since 1.0
 */

function larry_screen() { ?>
	<!-- <div id="icon-themes" class="icon32"><br></div> -->

	<!-- <h2 class="">Larry Settings</h2> -->


	<div class="wrap">



		<h3 class="larry-start-title">Larry is ready!</h3>
		<p class="larry-intro">Let's get you started.</p>
		<div class="larry-panel first">
			<div class="larry-panel-content">
				<div class="larry-panel-column-container">
					<div class="larry-col-small">
						<h3 class="larry-subtitle">First Step</h3>
						<p><a class="button button-primary button-larry" href="/wp-admin/customize.php" style=""><i class="dashicons dashicons-admin-appearance"></i> &nbsp; Customize Your Site</a></p>
						<!-- <p class="hide-if-no-customize">or <a href="http://localhost:8888/testing/wp-admin/themes.php">change your theme completely</a></p> -->
					</div>
					<div class="larry-col-small">
						<h3 class="larry-subtitle">Customize More</h3>
						<p><a href="#" class="">Create a child theme</a></p>
						<p><a href="#" class="">Use as starter theme</a></p>
						<p><a href="#" class="">Recommended plugins</a></p>

						<!-- <h3>Helpful Guides</h3>
						<p><a href="#" class="">Simple WordPress Site</a></p>
						<p><a href="#" class="">BuddyPress Site</a></p>
						<p><a href="#" class="">WooCommerce Store</a></p>
						<p><a href="#" class="">BuddyPress &amp; WooCommerce</a></p> -->
					</div>
					<div class="larry-col-big">
						<h3 class="larry-subtitle">Need Help?</h3>
						<p><a class="button xbutton-primary button-larry" href="#" style=""><i class="dashicons dashicons-admin-page"></i> &nbsp; View Documentation</a>
						<!-- </p>
						<p> -->
							<a class="button xbutton-primary button-larry" href="#" style=""><i class="dashicons dashicons-email"></i> &nbsp; Ask Support</a></p>

					</div>
				</div>

			</div>

		</div>







		<div class="larry-panel">
			<div class="larry-panel-content">

				<h3 class="larry-subtitle">See Demo Sites</h3>
				<div class="larry-panel-column-container">
					<div class="larry-col-small">
						<p class="larry-lead">A Simple WordPress Demo:</p>
						<!-- <p>See a minimal demo - just a WordPress install</p> -->
		        <p><a href="https://themekraft.com/larry-demo/" class="button button-primary button-larry" title="View Larry's Minimal Demo" target="_blank">View Simple Demo</a></p>
					</div>

					<div class="larry-col-big">
		        <p class="larry-lead">WooCommerce &amp; BuddyPress Demo:</p>
						<!-- <p>See the demo site with WooCommerce and BuddyPress</p> -->
		        <p><a href="https://themekraft.com/larry-demo-full/" class="button button-primary button-larry" title="View Larry's Full Demo" target="_blank">View Full Demo</a></p>
					</div>
				</div>

			</div>
		</div>




    </div><?php
}
