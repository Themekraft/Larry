<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>


<div class="main-content">
  <div class="container">
    <div class="row">

			<div id="content" class="main-content-inner col-xs-12 col-md-8 col-lg-8">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

          <?php wp_link_pages( array(
      				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
      				'after'  => '</div>',
      			) ); ?>

					<div class="row">
            <?php _tk_content_nav( 'nav-below' ); ?>
          </div>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>

				<?php endwhile; // end of the loop. ?>

      </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
