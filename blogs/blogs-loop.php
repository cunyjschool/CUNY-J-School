<?php /* Querystring is set via AJAX in _inc/ajax.php - bp_dtheme_object_filter() */ ?>

<?php do_action( 'bp_before_blogs_loop' ) ?>

<?php if ( bp_has_blogs( bp_ajax_querystring( 'blogs' ) ) ) : ?>

	<ul id="blogs-list" class="item-list">
	<?php while ( bp_blogs() ) : bp_the_blog(); ?>

		<li>
			<div class="item no-margin">
				<div class="item-title">
					<h4><a href="<?php bp_blog_permalink() ?>"><?php bp_blog_name() ?></a></h4>
				</div>
				<div class="item-desc">
					<p><span class="label">Description:</span><?php bp_blog_description() ?></p>
					<p class="latest-post"><?php bp_blog_latest_post() ?></p>
				</div>

				<?php do_action( 'bp_directory_blogs_item' ) ?>
			</div>

			<div class="action">
				<div class="generic-button blog-button visit">
					<a href="<?php bp_blog_permalink() ?>" class="visit" title="Visit">Visit</a>
				</div>

				<?php do_action( 'bp_directory_blogs_actions' ) ?>
			</div>
			
		</li>

	<?php endwhile; ?>
	</ul>

	<?php do_action( 'bp_after_directory_blogs_list' ) ?>

	<?php bp_blog_hidden_fields() ?>
	
	<div class="pagination">

		<div class="pag-count" id="blog-dir-count">
			<?php bp_blogs_pagination_count() ?>
		</div>

		<div class="pagination-links" id="blog-dir-pag">
			<?php bp_blogs_pagination_links() ?>
		</div>

	</div>

<?php else: ?>

	<div class="message info">
		<p><?php _e( 'Sorry, there were no blogs found.', 'buddypress' ) ?></p>
	</div>

<?php endif; ?>

<?php do_action( 'bp_after_blogs_loop' ) ?>
