<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tk
 */

get_header(); ?>

<div class="main-content">
  <div class="container">
    <div class="row">

			<div id="content" class="main-content-inner col-xs-12">

				<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
				<section class="content-padder error-404 not-found">

					<header>
						<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', 'larry' ); ?></h2>
					</header><!-- .page-header -->

					<div class="page-content">

						<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', 'larry' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->

				</section><!-- .content-padder -->

      </div>

<?php get_footer(); ?>
