<?php
/**
 * @package _tk
 */
?>


<!-- <div id="single-post-img-wrap">
	<div class="container-flex">
		<?php // if ( has_post_thumbnail() ) : ?>
					<div class="entry-content-thumbnail featured-img-single-fixed" style="background: #000 url('<?php // the_post_thumbnail_url(); ?>') 0 0 scroll no-repeat; background-size: cover;">
					</div>
		<?php // endif; ?>
	</div>
</div> -->


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-content-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>

				<?php if ( 'post' == get_post_type() ) : ?>
					<div class="post-date entry-meta">
						<?php
								/* translators: used between list items, there is a space after the comma */
								$categories_list = get_the_category_list( __( ', ', 'larry' ) ); ?>

							<small class="cat-links" style="text-transform: uppercase;">
								<?php

								if ( $categories_list && _tk_categorized_blog() ) :
									printf( __( '%1$s', 'larry' ), $categories_list );
								else:
									echo 'UNCATEGORISED';
								endif; // End if categories

								?>
							</small>

							<?php tk_posted_on(); ?>
					</div>
				<?php endif; ?>

				<h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->


				<footer class="entry-meta">

					<small class="tag-links">
							<?php

								/* translators: used between list items, there is a space after the comma */
								$tag_list = get_the_tag_list( '', __( ', ', '_tk' ) );

								if ( ! _tk_categorized_blog() ) {
									// This blog only has 1 category so we just need to worry about tags in the meta text
									if ( '' != $tag_list ) {
										$meta_text = __( '<i class="fa fa-tags" style="margin-right: 4px;"></i> Tagged %2$s.', '_tk' );
									}

								} else {
									// But this blog has loads of categories so we should probably display them here
									if ( '' != $tag_list ) {
										$meta_text = __( '<i class="fa fa-tags" style="margin-right: 4px;"></i> Tagged %2$s. ', '_tk' );
									} else {
										// $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
									}

								} // end check for categories on this blog

								printf(
									$tag_list,
									get_permalink(),
									the_title_attribute( 'echo=0' )
								);
							?>
						</i>
					</small>

					<?php edit_post_link( __( 'Edit', '_tk' ), '<p style="margin: 20px 0;"><small class="edit-link">', '</small></p>' ); ?>

				</footer><!-- .entry-meta -->


			</article><!-- article -->
