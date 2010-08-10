<?php do_action( 'bp_before_member_header' ) ?>

<?php $curauth = get_userdata(bp_displayed_user_id()); ?>

<div id="item-header-content">
  
  <div id="item-meta">

    <h2 class="fn"><span id="item-buttons"><?php if ( is_user_logged_in() && !bp_is_my_profile() && function_exists( 'bp_send_private_message_link' ) ) : ?>
					<div class="generic-button" id="send-private-message">
						<a href="<?php bp_send_private_message_link() ?>" title="<?php _e( 'Send a private message to this user.', 'buddypress' ) ?>"><?php _e( 'Send Private Message', 'buddypress' ) ?></a>
					</div>
				<?php endif; ?><?php if ( function_exists( 'bp_add_friend_button' ) ) : ?>
			<?php bp_add_friend_button() ?>
		<?php endif; ?></span><?php bp_displayed_user_fullname(); ?></h2>

	<?php do_action( 'bp_before_member_header_meta' ) ?>

		<?php
		 /***
		  * If you'd like to show specific profile fields here use:
		  * bp_profile_field_data( 'field=About Me' ); -- Pass the name of the field
		  * <?php if ( function_exists( 'bp_activity_latest_update' ) ) : ?>
				<div id="latest-update">
					<?php bp_activity_latest_update( bp_displayed_user_id() ) ?>
				</div>
			<?php endif; ?>
		  */
		?>

		<?php do_action( 'bp_profile_header_meta' ) ?>

	</div><!-- #item-meta -->

</div><!-- #item-header-content -->

<?php do_action( 'bp_after_member_header' ) ?>

<?php do_action( 'template_notices' ) ?>