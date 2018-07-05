<div id="buddypress">

	<?php global $bp; ?>

	<?php if ( bp_is_my_profile() ) { ?>
	<?php } ?>

	<?php if ( $bp->current_component == 'profile' && $bp->current_action == 'public' ) { ?>

		<div id="item-header" role="complementary">


			<?php
			/**
			 * If the cover image feature is enabled, use a specific header
			 */
			if ( bp_displayed_user_use_cover_image_header() ) :
				bp_get_template_part( 'members/single/cover-image-header' );
			else :
				bp_get_template_part( 'members/single/member-header' );
			endif;
			?>

		</div><!-- #item-header -->

	<?php } ?>

	<div class="row tk-member-row">

		<div id="af-home-sidebar" class="col-xs-12 col-sm-4 col-md-3">

			<div id="profile-sidebar" class="af-dashboard-home-tile">

				<?php if ( bp_is_my_profile() && $bp->current_component != 'profile' && $bp->current_action != 'public' ) { ?>

					<div id="af-welcome-card-main" class="af-home-welcome-card">
						<div class="af-dashboard-avatar">
							<a href="<?php bp_displayed_user_link(); ?>" title="View my Profile">
								<?php bp_loggedin_user_avatar( 'type=full' ); ?>
							</a>
						</div>
						<div class="af-dashboard-username"><a href="<?php bp_loggedin_user_link(); ?>" title="View my Profile"><?php echo bp_get_user_firstname(); ?></a></div>
					</div>

				<?php } ?>

				<div id="item-nav">
					<div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
						<ul>
							<?php bp_get_displayed_user_nav(); ?>
							<?php do_action( 'bp_member_options_nav' ); ?>
						</ul>
					</div>
				</div><!-- #item-nav -->

			</div>

		</div>

		<div id="item-body" role="main" class="col-xs-12 col-sm-8 col-md-9">

			<?php

			/**
			 * Fires before the display of member body content.
			 *
			 * @since 1.2.0
			 */
			do_action( 'bp_before_member_body' );

			if ( bp_is_user_front() ) :
				bp_displayed_user_front_template_part();

			elseif ( bp_is_user_activity() ) :
				bp_get_template_part( 'members/single/activity' );

			elseif ( bp_is_user_blogs() ) :
				bp_get_template_part( 'members/single/blogs'    );

			elseif ( bp_is_user_friends() ) :
				bp_get_template_part( 'members/single/friends'  );

			elseif ( bp_is_user_groups() ) :
				bp_get_template_part( 'members/single/groups'   );

			elseif ( bp_is_user_messages() ) :
				bp_get_template_part( 'members/single/messages' );

			elseif ( bp_is_user_profile() ) :
				bp_get_template_part( 'members/single/profile'  );

			elseif ( bp_is_user_notifications() ) :
				bp_get_template_part( 'members/single/notifications' );

			elseif ( bp_is_user_settings() ) :
				bp_get_template_part( 'members/single/settings' );

			// If nothing sticks, load a generic template
			else :
				bp_get_template_part( 'members/single/plugins'  );

			endif;

			/**
			 * Fires after the display of member body content.
			 *
			 * @since 1.2.0
			 */
			do_action( 'bp_after_member_body' ); ?>

		</div><!-- #item-body -->

	</div>

</div><!-- #buddypress -->
