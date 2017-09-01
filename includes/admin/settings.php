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
	<div class="wrap">
	<div id="icon-themes" class="icon32"><br></div>
	<h2>Larry is here</h2>

        <a href="#" title="Meet Larry"><img src="http://themekraft.com/wp-content/uploads/2017/08/meet-larry-1024x768.jpg" alt="" width="750" height="563" class="alignnone size-large wp-image-19117" /></a>

        <img src="http://themekraft.com/wp-content/uploads/2017/08/larry-logos.jpg" alt="" width="1630" height="100" class="alignnone size-full wp-image-19118" />
        &nbsp;

        <h3>A clean and lightweight WordPress theme. </h3>

        Works perfect with BuddyPress, WooCommerce and LifterLMS.

        &nbsp;

        But let's check out the demo:

        &nbsp;


        <h1>See The Demo</h1>

        <p style="margin-bottom: 30px;">There are two demo sites:</p>

        <h3>Minimal setup - just WordPress</h3>

        <a href="/larry-demo/" title="View Larry's Minimal Demo" target="_blank"><img src="http://themekraft.com/wp-content/uploads/edd/2017/08/screenshot-blog-1-1024x574.jpg" alt="" width="750" height="420" class="alignnone size-large wp-image-19057" style="max-width: 600px; box-shadow: 0 0 2px rgba(0,0,0,0.3);" /></a>

        <a href="/larry-demo/" class="btn xbtn-large xbtn-primary" title="View Larry's Minimal Demo" target="_blank"><i class="fa fa-arrow-circle-right"></i> &nbsp; View The Minimal Demo</a>


        &nbsp;

        <h3>Full setup - with WooCommerce and BuddyPress</h3>

        <a href="/larry-demo-full" title="View Larry's Full Demo" target="_blank"><img src="http://themekraft.com/wp-content/uploads/2017/08/larry-screenshot-woocommerce-shop-1024x569.jpg" alt="" width="750" height="417" class="alignnone size-large wp-image-19095" style="max-width: 600px; box-shadow: 0 0 2px rgba(0,0,0,0.3);" /></a>

        <a href="/larry-demo-full/" class="btn xbtn-large xbtn-primary" title="View Larry's Full Demo" target="_blank"><i class="fa fa-arrow-circle-right"></i> &nbsp; View The Full Demo</a>
        &nbsp;
        &nbsp;
        



    </div><?php
}
