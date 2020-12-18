<?php
/**
 *
 * Template Name: Featured Image + Sidebar
 *
 */

get_header(); ?>

<?php if ( has_post_thumbnail() ) : ?>
  <div id="featured-image-wrap" class="conatiner-flex" style="background: #000 url('<?php the_post_thumbnail_url(); ?>') 0 0 scroll no-repeat; background-size: cover;">
    <div style="overflow: auto;">
      <div style="opacity: 0;">
        <?php the_post_thumbnail(); ?>
      </div>
      <?php $hide_pagetitle = get_post_meta( get_the_ID(), "tk-hide-page-title", true ); ?>
      <?php if( $hide_pagetitle != true ) { ?>
        <header class="page-title-header-featured-image">
          <h1 class="page-title-featured-image"><?php the_title(); ?></h1>
        </header><!-- .entry-header -->
      <?php } ?>
    </div>
  </div>
<?php endif; ?>


<div class="main-content">
  <div class="container">
    <div class="row">

			<div id="content" class="main-content-inner col-xs-12 col-md-8">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>

				<?php endwhile; // end of the loop. ?>

      </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
