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
      /* LifterLMS Buttons */
      .llms-button-action,
      .llms-next-lesson .llms-lesson-preview .llms-lesson-link {
        background: <?php echo get_theme_mod( 'larry_link_color' ); ?>;
      }
      /* BuddyPress Member Profile Header BG Color */
      #buddypress #header-cover-image {
        background-color: <?php echo get_theme_mod( 'larry_link_color' ); ?>;
      }



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
      /* LifterLMS Buttons */
      .llms-button-action:hover,
      .llms-button-action:focus,
      .llms-next-lesson .llms-lesson-preview .llms-lesson-link:hover,
      .llms-next-lesson .llms-lesson-preview .llms-lesson-link:focus {
        background: <?php echo $hover_color; ?>;
      }


    <?php endif; ?>




    /* White background */
    <?php if ( get_theme_mod( 'larry_bg_color' ) != true ): ?>

      body { background: #fbfbfb; }

      .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
          background: #fbfbfb;
          border-bottom-color: #fbfbfb;
      }

    <?php endif; ?>




    /* Menu Styling Options */

    /* Fixed top nav */
    <?php if ( get_theme_mod( 'larry_fixed_top_nav' ) != true ): ?>

      #topnav {
          position: absolute;
      }
      @media (max-width: 767px) {
        #topnav .tk-extra-nav {
            position: absolute;
            /*right: 3px;*/
        }
      }

    <?php endif; ?>


    /* Menu style */
    <?php if ( get_theme_mod( 'larry_menu_style' ) == 'dark' ): ?>

      #topnav {
          background: #3f3f3f;
          color: #999;
      }

      #topnav a,
      #topnav ul li a,
      #topnav .tk-extra-nav li a.new {
          color: #dfdfdf;
      }
      #topnav a:hover,
      #topnav a:focus {
          color: #dfdfdf;
      }
      #topnav ul li a:hover,
      #topnav ul li a:focus,
      #topnav .tk-extra-nav li a:hover,
      #topnav .tk-extra-nav li a:focus,
      #topnav li.active a,
      #topnav li.active a:hover,
      #topnav li.active a:focus {
          color: #dfdfdf;
          background: #2f2f2f;
      }
      .tf-burger span,
      .tf-burger span::after,
      .tf-burger span::before {
        background: #dfdfdf;
      }

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


    <?php // Max Height Featured Image ?>
    <?php $max_height_featured_image = get_post_meta( get_the_ID(), "larry-page-template-featured-image-max-height", true ); ?>

    <?php if( $max_height_featured_image != "" ) { ?>

      #featured-image-wrap {
          max-height: <?php echo $max_height_featured_image; ?>px;
          overflow: hidden;
      }

  	<?php } ?>


  </style><?php

}

add_filter( 'wp_head', 'larry_add_customizer_CSS', 9999 );
