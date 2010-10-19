<?php get_header() ?>

<div class="wrap">
	
	<div id="buddypress">
		
	<?php include (TEMPLATEPATH . '/sidebar-search.php'); ?>		
	
	<div id="blogs_directory" class="content directory">

		<form action="" method="post" id="blogs-directory-form" class="dir-form">

			<?php do_action( 'bp_before_directory_blogs_content' ) ?>
			
			<div id="primary-search">
				<?php include (TEMPLATEPATH . '/blogs/searchform.php'); ?>
			</div>

			<div id="primary-nav" class="item-list-tabs">
				<ul>
					<li class="selected" id="blogs-all"><a href="<?php bp_root_domain() ?>"><?php printf( __( 'All Blogs (%s)', 'buddypress' ), bp_get_total_blog_count() ) ?></a></li>

					<?php if ( is_user_logged_in() && bp_get_total_blog_count_for_user( bp_loggedin_user_id() ) ) : ?>
						<li id="blogs-personal"><a href="<?php echo bp_loggedin_user_domain() . BP_BLOGS_SLUG . '/my-blogs/' ?>"><?php printf( __( 'My Blogs (%s)', 'buddypress' ), bp_get_total_blog_count_for_user( bp_loggedin_user_id() ) ) ?></a></li>
					<?php endif; ?>

					<?php do_action( 'bp_blogs_directory_blog_types' ) ?>

					<li id="blogs-order-select" class="last filter">

						<?php _e( 'Order By:', 'buddypress' ) ?>
						<select>
							<option value="active"><?php _e( 'Last Active', 'buddypress' ) ?></option>
							<option value="newest"><?php _e( 'Newest', 'buddypress' ) ?></option>
							<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ) ?></option>

							<?php do_action( 'bp_blogs_directory_order_options' ) ?>
						</select>
					</li>
				</ul>
			</div><!-- .item-list-tabs -->

			<div id="blogs-dir-list" class="blogs dir-list">
				<?php locate_template( array( 'blogs/blogs-loop.php' ), true ) ?>
			</div><!-- #blogs-dir-list -->

			<?php do_action( 'bp_after_directory_blogs_content' ) ?>

			<?php wp_nonce_field( 'directory_blogs', '_wpnonce-blogs-filter' ) ?>

		</form><!-- #blogs-directory-form -->
		
		</div>
		
		<div style="clear:right;"></div>

		</div>
		
	</div><!-- #container -->

<?php get_footer() ?>