<?php do_action( 'bp_before_group_header' ) ?>


<div id="item-header-avatar">
	<a href="<?php bp_group_permalink() ?>" title="<?php bp_group_name() ?>">
		<?php bp_group_avatar() ?>
	</a>
</div><!-- #item-header-avatar -->

<div id="item-header-content">
	
	<h2><span class="meta"><?php bp_group_type() ?></span><?php bp_group_name() ?></h2>

	<?php do_action( 'bp_before_group_header_meta' ) ?>

	<div id="item-meta">
		<div id="item-buttons">
			<?php bp_group_join_button() ?>
		</div>
		<?php bp_group_description() ?>

		<?php do_action( 'bp_group_header_meta' ) ?>
	</div>
</div><!-- #item-header-content -->

<?php do_action( 'bp_after_group_header' ) ?>

<?php do_action( 'template_notices' ) ?>