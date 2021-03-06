<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_sticky() ) { ?>
		<div class="larry-sticky-pin">
			<i class="fa fa-bolt"></i>
			<i class="larry-sticky-triangle"></i>
		</div>
	<?php } ?>

	<div class="row">
		<?php if ( has_post_thumbnail() ) { ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="Read more">
					<?php if ( get_theme_mod( 'larry_blog_thumbnail_height' ) == fixed ) { ?>
						<div class="entry-content-thumbnail entry-content-thumbnail-grid hidden-xs" style="background: #000 url('<?php the_post_thumbnail_url( 'large' ); ?>') 0 0 scroll no-repeat; background-size: cover;">
						</div>
					<?php } ?>
					<div class="entry-content-thumbnail <?php if ( get_theme_mod( 'larry_blog_thumbnail_height' ) == fixed ) { ?>hidden-sm hidden-md hidden-lg<?php } ?>">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Read more"><?php the_post_thumbnail( 'large' ); ?></a>
					</div>
				</a>
		<?php } ?>

		<div class="entry-content-wrap col-xs-12">

			<?php if ( 'post' == get_post_type() ) : ?>

				<div class="post-date entry-meta">
					<?php
							/* translators: used between list items, there is a space after the comma */
							$categories_list = get_the_category_list( __( ', ', 'larry' ) ); ?>

						<div class="cat-links" style="text-transform: uppercase;">
							<i class="fa fa-copy" style="margin-right: 4px; display: none;"></i>
							<?php

							if ( $categories_list && _tk_categorized_blog() ) :
								printf( __( '%1$s', 'larry' ), $categories_list );
							else:
								echo 'UNCATEGORISED';
							endif; // End if categories

							?>
						</div>

						<?php tk_posted_on(); ?>
				</div>

			<?php endif; ?>

			<header>
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Read more"><?php the_title(); ?></a></h1>
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

			<p class="readmore"><a class="btn btn-primary btn-small" title="Read More" href="<?php the_permalink(); ?>"><i class="fa fa-plus-circle"></i> &nbsp;Read More</a></p>

			<!-- <footer class="entry-meta">

				<?php // if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
					<span><small class="comments-link"><?php // comments_popup_link( __( 'Leave a comment', 'larry' ), __( '1 Comment', 'larry' ), __( '% Comments', 'larry' ) ); ?></small></span>
				<?php // endif; ?>

				<?php // edit_post_link( __( 'Edit', 'larry' ), '<span class="edit-link">', '</span>' ); ?>
			</footer>
			-->

		</div>
	</div><!-- .row -->
</article><!-- #post-## -->
