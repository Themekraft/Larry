<?php
/**
 * The sidebar for the product single view
 *
 * @package Marketplace-Pro
 */
?>



	<div class="sidebar col-xs-12 col-md-4 col-lg-4">

		<div class="sidebar-padder">

			<?php do_action( 'before_sidebar' ); ?>

			<?php do_action( 'tk_single_product_sidebar_first' ); ?>

			<?php if ( ! dynamic_sidebar( 'sidebar-product' ) ) : ?>
			<?php endif; ?>

      <?php do_action( 'tk_single_product_sidebar_last' ); ?>

		</div><!-- close .sidebar-padder -->

	</div>
