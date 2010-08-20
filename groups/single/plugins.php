<?php get_header() ?>

<div class="wrap">
	
	<div id="buddypress">
	
	<div id="groups_single" class="content">

			<?php if ( bp_has_groups() ) : while ( bp_groups() ) : bp_the_group(); ?>

			<?php do_action( 'bp_before_group_plugin_template' ) ?>

			<div id="left-sidebar">
				<div id="item-header-avatar">
					<a href="<?php bp_group_permalink() ?>" title="<?php bp_group_name() ?>">
						<?php bp_group_avatar() ?>
					</a>
				</div><!-- #item-header-avatar -->
				<div id="item-nav">
					<div class="item-list-tabs no-ajax" id="object-nav">
						<ul>
							<?php bp_get_options_nav() ?>

							<?php do_action( 'bp_group_options_nav' ) ?>
						</ul>
					</div>
				</div>
			</div>
			
			<div id="item-header">
				<?php locate_template( array( 'groups/single/group-header.php' ), true ) ?>
			</div>

			<div id="item-body">

				<?php do_action( 'bp_template_content' ) ?>

			</div><!-- #item-body -->

			<?php endwhile; endif; ?>

			<?php do_action( 'bp_after_group_plugin_template' ) ?>

		</div><!-- #content -->
	</div><!-- #container -->

	</div>
	
<?php get_footer() ?>