<?php
/*
 * All the CSS styles from larry's customizer options - easy, let's do it
 *
 */

function larry_add_customizer_CSS() {

 ?><style>

    /* Link Color */
    <?php if ( get_theme_mod( 'larry_link_color' ) ): ?>
      a,
      #buddypress ul.button-nav li a,
      .buddypress.widget #members-list .item-title a {
        color: <?php echo get_theme_mod( 'larry_link_color' ); ?>;
      }
      .btn-primary,
      #topnav .tk-marker.new,
      .bp-user #buddypress #item-nav ul li.current a,
      .bp-user #buddypress #item-nav ul li.selected a,
      body.buddypress.bp-default-cover div#item-header, .bp-default-cover #buddypress div#item-header {
        background: <?php echo get_theme_mod( 'larry_link_color' ); ?>;
      }
      /* BuddyPress Buttons */
      #buddypress .comment-reply-link,
      #buddypress .generic-button a,
      #buddypress a.button,
      #buddypress button[type="submit"],
      #buddypress input[type=button],
      #buddypress input[type=reset],
      #buddypress input[type=submit],
      a.bp-title-button {
        background: <?php echo get_theme_mod( 'larry_link_color' ); ?>;
      }
      /* WooCommerce Buttons */
      /*.woocommerce a.button.alt,
      .woocommerce input.button.alt,
      .woocommerce button.button.alt,
      .woocommerce .button.wc-forward,
      .woocommerce #respond input#submit.alt {
        background: <?php echo get_theme_mod( 'larry_link_color' ); ?>;
      }*/


      /* Link Hover Color */
      <?php $hover_color = adjustBrightness( get_theme_mod( 'larry_link_color' ), 30); ?>

      a:hover,
      a:focus {
        color: <?php echo $hover_color; ?>;
      }
      .btn-primary:hover,
      .btn-primary:focus {
        background: <?php echo $hover_color; ?>;
      }
      /* BuddyPress Buttons */
      #buddypress .comment-reply-link:hover,
      #buddypress a.button:focus,
      #buddypress a.button:hover,
      #buddypress button[type="submit"]:hover,
      #buddypress div.generic-button a:hover,
      #buddypress input[type=button]:hover,
      #buddypress input[type=reset]:hover,
      #buddypress input[type=submit]:hover {
        background: <?php echo $hover_color; ?>;
      }
      /* WooCommerce Buttons */
      /*.woocommerce a.button.alt:hover,
      .woocommerce input.button.alt:hover,
      .woocommerce button.button.alt:hover,
      .woocommerce .button.wc-forward:hover,
      .woocommerce #respond input#submit.alt:hover,
      .woocommerce a.button.alt:focus,
      .woocommerce input.button.alt:focus,
      .woocommerce button.button.alt:focus,
      .woocommerce .button.wc-forward:focus,
      .woocommerce #respond input#submit.alt:focus {
        background: <?php echo $hover_color; ?>;
      }*/

    <?php endif; ?>






    /* WooCommerce Options */

    /* Cart icon in top menu */
    <?php if ( get_theme_mod( 'larry_wc_show_top_nav_cart' ) == 'never' ): ?>

      .woocommerce ul.products li.product .button {
          display: none;
      }

    <?php endif; ?>


    /* Hide add to cart buttons in loop */
    <?php if ( get_theme_mod( 'larry_wc_loop_hide_cart_buttons' ) == true ): ?>

      .woocommerce ul.products li.product .button {
          display: none;
      }

    <?php endif; ?>


    /* Hide categories in loop */
    <?php if ( get_theme_mod( 'larry_wc_loop_add_cats' ) != true ): ?>

      .larry-wc-loop-cats {
          display: none;
      }

    <?php endif; ?>


    /* Hide catalog ordering in loop */
    <?php if ( get_theme_mod( 'larry_wc_loop_hide_catalog_ordering' ) == true ): ?>

      .woocommerce .woocommerce-ordering {
          display: none;
      }

    <?php endif; ?>


    /* Hide breadcrumbs in single product */
    <?php if ( get_theme_mod( 'larry_wc_hide_breadcrumbs' ) == true ): ?>

      .woocommerce .woocommerce-breadcrumb {
        display: none;
      }

    <?php endif; ?>


    /* Hide product meta in single product summary */
    <?php if ( get_theme_mod( 'larry_wc_hide_meta_summary' ) == true ): ?>

      .single-product .summary .product_meta {
          display: none;
      }

    <?php endif; ?>



  </style><?php

}

add_filter( 'wp_head', 'larry_add_customizer_CSS', 9999 );
