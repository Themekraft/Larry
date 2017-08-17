<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Marketplace-Pro
 */
?>

	</div><!-- close .main-content-inner -->

	<div class="sidebar col-xs-12 col-md-4 col-lg-4">

		<div class="sidebar-padder">

			<?php do_action( 'before_sidebar' ); ?>

					<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
					<?php endif; ?>

		</div><!-- close .sidebar-padder -->
