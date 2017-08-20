<?php
/**
 * The sidebar for the WooCommerce archive view
 *
 * @package larry
 */
?>

	</div><!-- close shop loop wrap -->

	<div class="sidebar sidebar-shop col-xs-12 col-md-4">

		<div class="sidebar-padder">

			<?php do_action( 'before_sidebar' ); ?>

			<?php do_action( 'tk_single_product_sidebar_first' ); ?>

			<?php if ( ! dynamic_sidebar( 'sidebar-shop' ) ) : ?>
					<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
					<?php endif; ?>
			<?php endif; ?>

      <?php do_action( 'tk_single_product_sidebar_last' ); ?>

		</div><!-- close .sidebar-padder -->

	</div>
