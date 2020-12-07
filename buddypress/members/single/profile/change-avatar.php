<h4><?php _e( 'Change Avatar', 'larry' ); ?></h4>

<?php do_action( 'bp_before_profile_avatar_upload_content' ); ?>

<?php if ( !(int)bp_get_option( 'bp-disable-avatar-uploads' ) ) : ?>

	<!-- <p><?php // _e( 'Here you can upload a profile image from your computer.', 'larry' ); ?></p> -->

	<form action="" method="post" id="avatar-upload-form" class="standard-form" enctype="multipart/form-data">

		<?php if ( 'upload-image' == bp_get_avatar_admin_step() ) : ?>

			<?php wp_nonce_field( 'bp_avatar_upload' ); ?>
			<p><small>Click "Choose File" to select an image first, then click "Upload Image" to proceed.</small></p>

			<p id="avatar-upload">
				<input type="file" name="file" id="file" />
				<input class="btn btn-primary" type="submit" name="upload" id="upload" value="<?php esc_attr_e( 'Upload Image', 'larry' ); ?>" />
				<input type="hidden" name="action" id="action" value="bp_avatar_upload" />
			</p>
      <p id="allowed-formats-bp"><small>Formats: JPG, GIF or PNG</small></p>

      <?php if ( bp_get_user_has_avatar() ) : ?>
				<!-- <p><?php //  _e( "If you'd like to delete your current avatar without uploading a new one, please use the delete avatar button.", 'larry' ); ?></p> -->
				<!-- <h4>Delete Avatar</h4> -->
				<p><a class="btn btn-small btn-delete" href="<?php bp_avatar_delete_link(); ?>" title="<?php esc_attr_e( 'Delete Avatar', 'larry' ); ?>"><?php _e( 'Delete My Avatar', 'larry' ); ?></a></p>
			<?php endif; ?>

		<?php endif; ?>

		<?php if ( 'crop-image' == bp_get_avatar_admin_step() ) : ?>

			<h5><?php _e( 'Crop Your New Avatar', 'larry' ); ?></h5>

			<img src="<?php bp_avatar_to_crop(); ?>" id="avatar-to-crop" class="avatar" alt="<?php esc_attr_e( 'Avatar to crop', 'larry' ); ?>" />

			<div id="avatar-crop-pane">
				<img src="<?php bp_avatar_to_crop(); ?>" id="avatar-crop-preview" class="avatar" alt="<?php esc_attr_e( 'Avatar preview', 'larry' ); ?>" />
			</div>

			<input class="btn btn-primary" type="submit" name="avatar-crop-submit" id="avatar-crop-submit" value="<?php esc_attr_e( 'Crop Image', 'larry' ); ?>" />

			<input type="hidden" name="image_src" id="image_src" value="<?php bp_avatar_to_crop_src(); ?>" />
			<input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />

			<?php wp_nonce_field( 'bp_avatar_cropstore' ); ?>

		<?php endif; ?>

	</form>

<?php else : ?>

	<p><?php _e( 'Your avatar will be used on your profile and throughout the site. To change your avatar, please create an account with <a href="http://gravatar.com">Gravatar</a> using the same email address as you used to register with this site.', 'larry' ); ?></p>

<?php endif; ?>

<?php do_action( 'bp_after_profile_avatar_upload_content' ); ?>
