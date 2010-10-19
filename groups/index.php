<?php get_header(); ?>

<div class="wrap">
	
	<div id="buddypress">
		
	<?php include (TEMPLATEPATH . '/sidebar-search.php'); ?>
	
	<div id="groups_directory" class="content directory">
		
		<div id="primary-search">
			<?php include (TEMPLATEPATH . '/groups/searchform.php'); ?>
		</div>

		<form action="" method="post" id="groups-directory-form" class="dir-form">

			<?php do_action( 'bp_before_directory_groups_content' ) ?>

			<div id="primary-nav" class="item-list-tabs">
				<ul>
					<?php if ( !$cunyj->is_search_page() ) : ?>					
					<li class="selected" id="groups-all"><a href="<?php bp_root_domain() ?>"><?php printf( __( 'All Groups (%s)', 'buddypress' ), bp_get_total_group_count() ) ?></a></li>

					<?php if ( is_user_logged_in() && bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) : ?>
						<li id="groups-personal"><a href="<?php echo bp_loggedin_user_domain() . BP_GROUPS_SLUG . '/my-groups/' ?>"><?php printf( __( 'My Groups (%s)', 'buddypress' ), bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) ?></a></li>
					<?php endif; ?>

					<?php do_action( 'bp_groups_directory_group_types' ) ?>
					<?php endif;  // END - !$cunyj->is_search_page() ?>					

					<li id="groups-order-select" class="last filter">

						<?php _e( 'Order By:', 'buddypress' ) ?>
						<select>
							<option value="active"><?php _e( 'Last Active', 'buddypress' ) ?></option>
							<option value="popular"><?php _e( 'Most Members', 'buddypress' ) ?></option>
							<option value="newest"><?php _e( 'Newly Created', 'buddypress' ) ?></option>
							<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ) ?></option>

							<?php do_action( 'bp_groups_directory_order_options' ) ?>
						</select>
					</li>
				</ul>
			</div><!-- .item-list-tabs -->

			<div id="groups-dir-list" class="groups dir-list">
				<?php locate_template( array( 'groups/groups-loop.php' ), true ) ?>
			</div><!-- #groups-dir-list -->

			<?php do_action( 'bp_directory_groups_content' ) ?>

			<?php wp_nonce_field( 'directory_groups', '_wpnonce-groups-filter' ) ?>

		</form><!-- #groups-directory-form -->

		<?php do_action( 'bp_after_directory_groups_content' ) ?>

	</div><!-- /.content -->
	
	<div style="clear:right;"></div>	
	
	</div>
	
</div><!-- /.wrap -->

<?php get_footer(); ?>