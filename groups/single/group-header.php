<?php do_action( 'bp_before_group_header' ) ?>


<div id="item-header-content">
	
	<h2><span id="item-buttons"<?php bp_group_join_button(); ?></span><?php bp_group_name() ?></h2>

	<?php do_action( 'bp_before_group_header_meta' ) ?>
	
		<?php //bp_group_description() ?>

		<?php //do_action( 'bp_group_header_meta' ) ?>

</div>

<?php do_action( 'bp_after_group_header' ) ?>

<?php do_action( 'template_notices' ) ?>