<?php get_header(); ?>

	<div class="wrap">
		
	<div class="main" id="image-single">

	<div class="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="image" id="image-<?php the_ID(); ?>">
		
			<div class="parent-link"><a href="<?php echo get_permalink($post->post_parent); ?>">&larr; <?php echo get_the_title($post->post_parent); ?></a></div>
			<h2><?php the_title(); ?></h2>
			
			<div class="primary-image"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, array( 850, 850 ) ); ?></a></div>
			<?php if ( $img_meta = wp_get_attachment_metadata( $post->id ) ) {
				echo '<div class="image-meta">';
				$html = '';
				if ( $img_meta['image_meta']['credit'] ) {
					$html .= 'Photo by ' . $img_meta['image_meta']['credit'] . ' | ';
				}
				if ( $img_meta['image_meta']['aperture'] && $img_meta['image_meta']['shutter_speed'] ) {
					$html .= $img_meta['image_meta']['shutter_speed'] . ' shutter at f/' . $img_meta['image_meta']['aperture'] . ' and ISO ' . $img_meta['image_meta']['iso'];
				}
				echo rtrim( $html, '| ' );
				echo edit_post_link( 'Edit this image', ' | ', '' );
				echo '</div>';
			} ?>
			
			<?php if ( !empty( $post->post_excerpt ) ) : ?>
			<div class="image-caption"><?php the_excerpt(); ?></div>
			<?php endif; ?>
			
			<?php if ( !empty( $post->post_content ) ) : ?>			
			<div class="image-description"<?php the_content(); ?></div>
			<?php endif; ?>
			
			<div class="navigation">
				<div class="left-navigation navigation-link">
					<?php previous_image_link( array( 64, 64 ) ); ?><p><?php previous_image_link( false, '&larr; Previous' ); ?>
				</div>
				<div class="right-navigation navigation-link">
					<?php next_image_link( array( 64, 64 ) ); ?><p><?php next_image_link( false, 'Next &rarr;' ); ?>
				</div>
			</div>
			
			<div style="clear:both;"></div>

		</div><!-- END - .image -->

	<?php // comments_template(); ?>

	<?php endwhile; else: ?>

		<div class="message info">Sorry, no attachments matched your criteria.</div>

	<?php endif; ?>

	</div><!-- END - .content -->
	
	</div><!-- END - .main -->
	
</div><!-- END - .wrap -->

<?php get_footer(); ?>
