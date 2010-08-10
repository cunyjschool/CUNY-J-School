<?php /* Querystring is set via AJAX in _inc/ajax.php - bp_dtheme_object_filter() */ ?>

<?php do_action( 'bp_before_groups_loop' ) ?>

<?php if ( bp_has_groups( bp_ajax_querystring( 'groups' ) ) ) : ?>

	<ul id="groups-list" class="item-list">
	<?php while ( bp_groups() ) : bp_the_group(); ?>

		<li>
			<div class="item-avatar">
				<a href="<?php bp_group_permalink() ?>"><?php bp_group_avatar( 'width=80&height=80' ) ?></a>
			</div>

			<div class="item">
				
				<div class="item-title">
					<h4><a href="<?php bp_group_permalink() ?>"><?php bp_group_name() ?></a></h4>		
				</div>
			
				<div class="item-desc">
					<?php bp_group_description_excerpt() ?>
				</div>
				
				<div class="item-meta"><span class="item-info"><?php bp_group_type() ?> / <?php bp_group_member_count() ?></span> /  <span class="activity"><?php printf( __( 'active %s ago', 'buddypress' ), bp_get_group_last_active() ) ?></span></div>

				<?php do_action( 'bp_directory_groups_item' ) ?>
				
			</div>

			<div class="action">
				<?php bp_group_join_button() ?>

				<?php do_action( 'bp_directory_groups_actions' ) ?>
			</div>

			<div class="clear"></div>
		</li>

	<?php endwhile; ?>
	</ul>

	<?php do_action( 'bp_after_groups_loop' ) ?>
	
	<div class="pagination">

		<div class="pag-count" id="group-dir-count">
			<?php bp_groups_pagination_count() ?>
		</div>

		<div class="pagination-links" id="group-dir-pag">
			<?php bp_groups_pagination_links() ?>
		</div>

	</div>
	

<?php else: ?>

	<div class="message alert">
		<p>There were no groups found.</p>
	</div>

<?php endif; ?>