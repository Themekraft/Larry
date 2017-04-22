<?php

/*
Template Name: BuddyPress Dashboard

A Custom Page Template for User Dashboard (works only with BuddyPress activated)

Author: Konrad Sroka
Author URI: http://themekraft.com
*/

?>

<?php get_header(); ?>

<?php if ( ! class_exists( 'BuddyPress' ) ) : ?>

      <?php return; ?>

<?php elseif ( is_user_logged_in() ): ?>

<?php global $bp; ?>
<?php get_template_part('includes/quickdash-js'); ?>


<?php

  $all_meta_for_user = get_user_meta( bp_loggedin_user_id() );
  // print_r( $all_meta_for_user );

  $args = array( 'author' => bp_loggedin_user_id(), 'post_type'=> 'product', 'post_status'=> 'any' );

  $myproducts = get_posts( $args );

  $shop_slug = $all_meta_for_user['pv_shop_slug'][0];

?>


<?php // check if first store is ready to go or not
  if ( current_user_can( 'vendor' ) && empty( $myproducts ) ) : ?>

    <div class="fat fatblue">
      <div class="container" style="padding: 40px 0;">
        <div class="fat fatwhite fatbox textcenter" style="color: #3f3f3f; padding: 30px 30px; border: none;">
          <h1 style="margin-top: 50px;">Store Almost Ready!</h1>
          <p class="lead">Make sure you go through the shop settings and set up your first product! </p>
          <p><a href="<?php bp_loggedin_user_link(); ?>vendor-dashboard/vendor-dashboard-products/edit/" class="tile-btn btn btn-primary btn-large"><i style="margin-right: 10px;" class="fa fa-plus-circle"></i> Add Your First Product</a></p>
          <div class="progress" style="margin-top: 50px;">
            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
            </div>
          </div>
        </div>
      </div>
    </div>

<?php endif; ?>


    <div class="bp-user">

      <div id="buddypress">

          <div id="dashboard-main" class="homesection">
            <div class="container">
              <div class="row">

                <?php get_template_part('dashboard-nav'); ?>

                <div id="af-home-main" class="col-xs-12 col-sm-8 col-md-9">

                  <div id="homedashmain">

                    <?php if ( current_user_can( 'vendor' ) ): ?>
                      <div class="af-wc-vendor-dashboard-home af-dashboard-home-tile">
                        <h3>My Store</h3>
                        <p class="af-homedash-action">
                          <a class="btn btn-primary tile-btn" href="<?php bp_loggedin_user_link(); ?>vendor-dashboard/vendor-dashboard-products/edit/" title="Add Product"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add&nbsp;Product</a>
                          <a class="btn btn-grey tile-btn" href="<?php bp_loggedin_user_link(); ?>vendor-dashboard/vendor-dashboard-products/" title="My Products"><i class="fa fa-tags"></i>&nbsp;&nbsp;My&nbsp;Products</a>

                          <a class="btn tile-btn btn-grey" href="<?php bp_loggedin_user_link(); ?>vendor-dashboard/" title="Store Dashboard"><i class="fa fa-tachometer"></i>&nbsp;&nbsp;Store&nbsp;Dashboard</a>

                          <?php // check if has already a store url or not
                          if ( $shop_slug != "" ) : ?>
                            <a class="btn tile-btn btn-grey" href="<?php echo home_url(); ?>/vendors/<?php echo $shop_slug; ?>" title="My Store"><i class="fa fa-home"></i>&nbsp;&nbsp;My&nbsp;Public&nbsp;Store</a>
                          <?php endif; ?>

                        </p>
                        <div><?php echo do_shortcode('[wcv_vendor_dashboard]'); ?></div>
                        <!-- <div><?php // echo do_shortcode('[wcv_pro_dashboard]'); ?></div> -->
                      </div>
                    <?php endif; ?>

                    <?php if ( !current_user_can( 'vendor' ) && class_exists( 'WCV_Vendors') ): ?>
                      <div class="af-wc-vendor-start af-dashboard-home-tile">
                        <h3>Open Your Online Store</h3>
                        <p>Start adding your first product today. Takes only few clicks, and <b>it's free.</b> </p>
                        <p class="af-homedash-action"><a class="btn btn-primary tile-btn" href="<?php // echo home_url(); ?>#" title="Open Your Store - Become A Vendor"><i class="fa fa-money"></i>&nbsp;&nbsp;Open&nbsp;Your&nbsp;Store</a></p>
                      </div>
                    <?php endif; ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'page' ); ?>

              					<?php // If comments are open or we have at least one comment, load up the comment template
              						if ( comments_open() || '0' != get_comments_number() )
              							comments_template(); ?>

            				<?php endwhile; // end of the loop. ?>



                  </div>

                </div>



              </div>
            </div>
          </div>

        </div>
      </div>

<?php endif; ?>

<?php get_footer(); ?>
