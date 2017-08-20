<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>


			</div><!-- close .row -->
		</div><!-- close .container -->
	</div>
</div> <!-- close #mainwrap -->

<?php do_action('after_main_content'); ?>

<footer id="footer" class="site-footer" role="contentinfo">

	<?php if( is_active_sidebar( 'footer-column-1' ) || is_active_sidebar( 'footer-column-2' ) || is_active_sidebar( 'footer-column-3' ) || is_active_sidebar( 'footer-column-4' ) ) : ?>

		<div id="footer-columns-wrap" class="footer-columns cc-footer">
			<div class="container">
				<div class="footer-columns-inner row">

					<div id="tk-footer-1" class="footer-column col-xs-12 col-sm-6 col-md-3">
						<div class="widgetarea">

							<?php if( !dynamic_sidebar( 'footer-column-1' ) ) { ?>
							<?php } ?>

						</div>
					</div>

					<div id="tk-footer-2" class="footer-column col-xs-12 col-sm-6 col-md-3">
						<div class="widgetarea">

							<?php if( !dynamic_sidebar( 'footer-column-2' ) ) { ?>
							<?php } ?>

						</div>
					</div>

					<div id="tk-footer-3" class="footer-column col-xs-12 col-sm-6 col-md-3">
						<div class="widgetarea">

							<?php if( !dynamic_sidebar( 'footer-column-3' ) ) { ?>
							<?php } ?>

						</div>
					</div>

					<div id="tk-footer-4" class="footer-column col-xs-12 col-sm-6 col-md-3">
						<div class="widgetarea">

							<?php if( !dynamic_sidebar( 'footer-column-4' ) ) { ?>
							<?php } ?>

						</div>
					</div>

				</div>
			</div>
		</div>

	<?php endif; ?>


	<div id="footer-last">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php echo get_bloginfo( 'name', 'display' ); ?>
					</a>

					<!-- The Footer Nav -->
					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'footer-nav',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'footernav',
							'menu_class' 		=> 'nav navbar-nav',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'footer-menu-last',
							'walker' 			=> new wp_bootstrap_navwalker()
						)); ?>

						
					<!-- Add your social media links here - with Font Awesome icons! See all icons in the "brand icons" section here http://fontawesome.io/icons/ -->
					<!-- <ul class="social navbar-nav nav">
						<li><a href="#" target="_new" title="Your Brand on Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" target="_new" title="Your Brand on Reddit"><i class="fa fa-behance"></i></a></li>
						<li><a href="#" target="_new" title="Your Brand on Spotify"><i class="fa fa-spotify"></i></a></li>
						<li><a href="#" target="_new" title="Your Brand on Spotify"><i class="fa fa-soundcloud"></i></a></li>
					</ul> -->

				</div>
			</div>
		</div>

	</div>

</footer><!-- close #colophon -->

</div><!-- #sitewrap -->

<?php wp_footer(); ?>

</body>
</html>
