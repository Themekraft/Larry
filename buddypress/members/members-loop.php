<?php
/**
 * BuddyPress - Members Loop
 *
 * Querystring is set via AJAX in _inc/ajax.php - bp_legacy_theme_object_filter()
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

/**
 * Fires before the display of the members loop.
 *
 * @since 1.2.0
 */
do_action( 'bp_before_members_loop' ); ?>

<?php if ( bp_get_current_member_type() ) : ?>
	<p class="current-member-type"><?php bp_current_member_type_message() ?></p>
<?php endif; ?>

<?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : ?>

	<div id="pag-top" class="pagination">

		<div class="pag-count" id="member-dir-count-top">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="member-dir-pag-top">

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

	<?php

	/**
	 * Fires before the display of the members list.
	 *
	 * @since 1.1.0
	 */
	do_action( 'bp_before_directory_members_list' ); ?>

	<div class="row">

		<ul id="members-list" class="item-list">

		<?php while ( bp_members() ) : bp_the_member(); ?>

			<li <?php bp_member_class(); ?>>
				<div class="member-loop-grid-item col-sm-4 col-md-3 col-lg-2">
					<div class="item-avatar">
						<a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar( 'type=full' ); ?></a>
					</div>

					<div class="item">
						<div class="item-title">
							<a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
						</div>

						<?php do_action( 'tk_member_loop_after_username' ); ?>

						<div class="item-meta"><span class="activity"><?php bp_member_last_active(); ?></span></div>

						<?php

						/**
						 * Fires inside the display of a directory member item.
						 *
						 * @since 1.1.0
						 */
						do_action( 'bp_directory_members_item' ); ?>

						<?php
						 /***
						  * If you want to show specific profile fields here you can,
						  * but it'll add an extra query for each member in the loop
						  * (only one regardless of the number of fields you show):
						  *
						  * bp_member_profile_data( 'field=the field name' );
						  */
						?>
					</div>

					<div class="action">

						<?php

						/**
						 * Fires inside the members action HTML markup to display actions.
						 *
						 * @since 1.1.0
						 */
						do_action( 'bp_directory_members_actions' ); ?>

					</div>

					<div class="clear"></div>

				</div>
			</li>

		<?php endwhile; ?>

		</ul>

	</div><!-- .row -->

	<?php

	/**
	 * Fires after the display of the members list.
	 *
	 * @since 1.1.0
	 */
	do_action( 'bp_after_directory_members_list' ); ?>

	<?php bp_member_hidden_fields(); ?>

	<div id="pag-bottom" class="pagination">

		<div class="pag-count" id="member-dir-count-bottom">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="member-dir-pag-bottom">

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

<?php else: ?>

	<div id="message" class="info">
		<p><?php _e( "Sorry, no members were found.", 'larry' ); ?></p>
	</div>

<?php endif; ?>

<?php

/**
 * Fires after the display of the members loop.
 *
 * @since 1.2.0
 */
do_action( 'bp_after_members_loop' ); ?>
