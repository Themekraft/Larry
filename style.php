<?php
/*
 * All the CSS styles from larry's customizer options - easy, let's do it
 *
 */

function larry_add_customizer_CSS() {

 ?><style>

    /* Show Admin Bar */
    <?php if ( get_theme_mod( 'larry_admin_bar' ) == true ): ?>
      html, #topnav {
        margin-top: 46px;
      }
      @media (max-width: 991px) {
        #topnav .tk-extra-nav {
          top: 46px;
        }
      }
      @media (min-width: 782px) {
        html, #topnav {
          margin-top: 32px;
        }
        @media (max-width: 991px) {
          #topnav .tk-extra-nav {
            top: 32px;
          }
        }
      }
    <?php endif; ?>


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




  </style><?php

}

add_filter( 'wp_head', 'larry_add_customizer_CSS', 9999 );
