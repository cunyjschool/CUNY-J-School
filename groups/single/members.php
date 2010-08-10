<?php if ( bp_group_has_members( 'exclude_admins_mods=0' ) ) : ?>

	<?php do_action( 'bp_before_group_members_content' ) ?>

	<?php do_action( 'bp_before_group_members_list' ) ?>

	<ul id="member-list" class="item-list">
		<?php while ( bp_group_members() ) : bp_group_the_member(); ?>

			<li>
				<div class="item-avatar">
					<a href="<?php bp_group_member_domain() ?>">
						<?php bp_group_member_avatar( 'width=60&height=60' ) ?>
					</a>
				</div>
				
				<?php if ( function_exists( 'friends_install' ) ) : ?>

					<div class="item-action">
						<?php bp_add_friend_button( bp_get_group_member_id(), bp_get_group_member_is_friend() ) ?>

						<?php do_action( 'bp_group_members_list_item_action' ) ?>
					</div>

				<?php endif; ?>
				
				<div class="item">
					<div class="item-title">
						<h4><?php bp_group_member_link() ?></h4>		
					</div>
					
					<div class="item-desc">
						<?php if ($title = bp_get_member_profile_data( 'field=Title' )) : ?>
						<p><span class="label">Title:</span><?php echo $title; ?></p>
						<?php endif; ?>
						<?php //if ($groups = bp_has_groups('user_id='.bp_user_id())) : ?>

						<?php //endif; ?>
					</div>
					
					<div class="item-meta"></div>
					
				</div>
				
				<div style="clear:left;"></div>

				<?php do_action( 'bp_group_members_list_item' ) ?>

			</li>

		<?php endwhile; ?>

	</ul>
	
	<div class="pagination no-ajax">

		<div id="member-count" class="pag-count">
			<?php bp_group_member_pagination_count() ?>
		</div>

		<div id="member-pagination" class="pagination-links">
			<?php bp_group_member_pagination() ?>
		</div>

	</div>

	<?php do_action( 'bp_after_group_members_content' ) ?>

<?php else: ?>

	<div id="message" class="info">
		<p><?php _e( 'This group has no members.', 'buddypress' ); ?></p>
	</div>

<?php endif; ?>
