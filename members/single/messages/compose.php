<div class="settings">

<form action="<?php bp_messages_form_action('compose') ?>" method="post" id="send_message_form" class="standard-form">

	<?php do_action( 'bp_before_messages_compose_content' ) ?>

	<fieldset class="standard">
	<label for="send-to-input"><?php _e("Send To (Username or Friend's Name)", 'buddypress') ?> &nbsp; <span class="ajax-loader"></span></label>
	<ul class="first acfb-holder">
		<li>
			<?php bp_message_get_recipient_tabs() ?>
			<input type="text" name="send-to-input" class="send-to-input" id="send-to-input" />
		</li>
	</ul>
	</fieldset>

	<?php if ( is_site_admin() ) : ?>
		<fieldset class="standard">
		<input type="checkbox" id="send-notice" name="send-notice" value="1" /> <?php _e( "This is a notice to all users.", "buddypress" ) ?>
		</fieldset>
	<?php endif; ?>

	<fieldset class="standard">
	<label for="subject"><?php _e( 'Subject', 'buddypress') ?></label>
	<input type="text" name="subject" id="subject" class="large" value="<?php bp_messages_subject_value() ?>" />
	</fieldset>

	<fieldset class="standard">
	<label for="content"><?php _e( 'Message', 'buddypress') ?></label>
	<textarea name="content" class="large" id="message_content" rows="15" cols="40"><?php bp_messages_content_value() ?></textarea>
	</fieldset>

	<input type="hidden" name="send_to_usernames" id="send-to-usernames" value="<?php bp_message_get_recipient_usernames(); ?>" class="<?php bp_message_get_recipient_usernames() ?>" />

	<?php do_action( 'bp_after_messages_compose_content' ) ?>

	<div class="submit">
		<input class="button primary" type="submit" value="<?php _e( "Send Message", 'buddypress' ) ?> &rarr;" name="send" id="send" />
		<span class="ajax-loader"></span>
	</div>

	<?php wp_nonce_field( 'messages_send_message' ) ?>
</form>

</div>

<script type="text/javascript">
	document.getElementById("send-to-input").focus();
</script>

