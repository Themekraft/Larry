<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head <?php do_action( 'add_head_attributes' ); ?>>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>


<div id="slidenav-wrap">

	<?php if ( class_exists( 'BuddyPress' ) ) { ?>
		<div class="slidenav-welcome">
			<p class="slidenav-avatar">
				<a href="<?php bp_loggedin_user_link(); ?>" title="<?php echo bp_core_get_user_displayname( bp_loggedin_user_id() ); ?>">
					<?php bp_loggedin_user_avatar( 'type=full' ); ?>
					<span class="slidenav-profile-link">
						<?php do_action( 'slidenav_avatar_before_username' ); ?>
						<?php echo bp_core_get_user_displayname( bp_loggedin_user_id() ); ?>
					</span>
				</a>
			</p>
		</div>
	<?php } ?>

	<!-- The Slide Nav -->
	<?php wp_nav_menu(
		array(
			'theme_location' 	=> 'slide-nav',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'slidenav',
			'menu_class' 		=> 'nav navbar-nav',
			'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
			'menu_id'			=> 'main-menu',
			'walker' 			=> new wp_bootstrap_navwalker()
		)); ?>

</div>



<!-- <header id="topnav-mini">
	<div class="container nopad">
		<div class="row">
			<div class="col-xs-12">

				<?php // The Top Nav Mini ?>
				<?php wp_nav_menu(
					array(
						'theme_location' 	=> 'topnav-mini',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'topnav-mini',
						'menu_class' 		=> 'nav navbar-nav',
						'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
						'menu_id'			=> 'main-menu',
						'walker' 			=> new wp_bootstrap_navwalker()
					)); ?>


			</div>
		</div>
	</div>
</header> -->



<header id="topnav">
	<div class="container nopad">
		<div class="row">
			<div class="col-xs-12">

				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="home" rel="home">
					<?php if ( get_theme_mod( 'larry_site_logo' ) ) : ?>
					    <div id="topnav-logo">
					        <img src='<?php echo esc_url( get_theme_mod( 'larry_site_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
					    </div>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'larry_hide_site_title' ) != true ) : ?>
						<div id="topnav-title">
							<?php bloginfo( 'name' ); ?>
						</div>
					<?php endif; ?>
				</a>

				<div class="tk-menu-group">

					<?php if ( class_exists( 'BuddyPress' ) || class_exists( 'WooCommerce' ) ) { ?>

						<!-- The TK Icon Nav -->
						<ul class="tk-extra-nav navbar-nav nav">


							<?php if ( class_exists( 'BuddyPress' ) && is_user_logged_in() ) { ?>

								<?php global $bp; ?>

								<?php if ( bp_is_active( 'messages' ) ) { ?>
									<li class="tk-messages-li">
										<a class="tk-messages <?php if ( messages_get_unread_count() > 0 ) { echo ' new '; } ?>" href="<?php bp_loggedin_user_link(); ?>messages">
											<i class="fa fa-comment"></i>
											<span class="tk-marker <?php if ( messages_get_unread_count() > 0 ) { echo ' new '; } ?>"></span>
										</a>
									</li>
								<?php } ?>

								<?php if ( bp_is_active( 'notifications' ) ) { ?>
								<li class="tk-notifications-li">
									<a class="tk-notifications <?php if ( bp_has_notifications() ) { echo ' new '; } ?>" href="<?php bp_loggedin_user_link(); ?>notifications">
										<i class="fa fa-bell"></i>
										<span class="tk-marker <?php if ( bp_has_notifications() ) { echo ' new '; } ?>"></span>
									</a>
								</li>
								<?php } ?>

							<?php } ?>

							<?php if ( class_exists( 'WooCommerce' ) ) { ?>

								<?php global $woocommerce; ?>

								<li class="tk-cart-li">
									<a class="tk-cart <?php if ( WC()->cart->get_cart_contents_count() != 0 ) { echo ' new '; } ?>" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
										<i class="fa fa-shopping-cart"></i>
										<span class="tk-marker <?php if ( WC()->cart->get_cart_contents_count() != 0 ) { echo ' new '; } ?>"></span>
									</a>
								</li>

							<?php } ?>


							<?php if ( class_exists( 'BuddyPress' ) && is_user_logged_in() ) { ?>

								<li class="tk-profile-li menu-item-has-children dropdown">
									<a class="tk-profile dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true">
										<?php bp_loggedin_user_avatar( 'type=full' ); ?>
									</a>
									<ul role="menu" class="dropdown-menu">

										<?php do_action( 'tk_dropdown_first' ); ?>


										<!-- The BuddyPress TopNav Drop Down -->
										<?php wp_nav_menu(
											array(
												'theme_location' 	=> 'bp-topnav',
												'depth'             => 2,
												'container'         => '',
												'container_class'   => '',
												'menu_class' 		=> '',
												'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
												'menu_id'			=> 'bp-topnav-dropdown',
												'walker' 			=> new wp_bootstrap_navwalker()
											)); ?>




										<li><a href="<?php bp_loggedin_user_link(); ?>" class="lighter" title="">My Profile</a></li>

										<li><a href="<?php bp_loggedin_user_link(); ?>settings" class="lighter" title="">Account Settings</a></li>
										<?php do_action( 'tk_dropdown_before_logout' ); ?>
										<li><a href="<?php echo wp_logout_url( home_url() ); ?>" class="lighter" title="">Logout</a></li>

										<?php do_action( 'tk_dropdown_last' ); ?>

									</ul>
								</li>

							<?php } ?>

						</ul>

					<?php } ?>


					<?php if ( !is_user_logged_in() ) { ?>

						<!-- <div id="af-fb-nav">
							<div class="new-fb-btn new-fb-4 new-fb-default-anim"><div class="new-fb-4-1"><div class="new-fb-4-1-1">Login with Facebook</div></div></div>
						</div> -->

					<?php } ?>


					<!-- The Primary Nav - Top Nav -->
					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => '',
							'menu_class' 		=> 'nav navbar-nav',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ?>


				</div>

			</div>
		</div>
	</div>


	<a class="tf-burger"><span></span></a>

</header>

<div id="sitewrap">

	<div id="mainwrap">

			<?php do_action( 'tk_after_header' ); ?>
