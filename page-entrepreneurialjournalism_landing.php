<?php
/*
Template Name: Page - Entrepreneurial Journalism landing
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="entrepreneurial-journalism">
		
		<h2 class="banner"><?php the_title(); ?></h2>
		
	<div class="sidebar right standard">

	<?php
		$args = array(
					'theme_location' => 'entrepreneurial_journalism',
					'menu_class' => 'navigation default',
					'menu_id' => 'entrepreneurial-journalism-navigation',
					'fallback_cb' => false,
			);

		wp_nav_menu( $args );

		echo '<ul class="widgets">';
		dynamic_sidebar( 'entrepreneurial_journalism' );
		echo '</ul>'; ?>

	</div><!-- END .sidebar -->
          
	<div class="content">
	
	<div class="page left">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
	
		<div class="entry">
    
			<?php the_content(); ?>
			
			<?php

				$args = array(	'post_type' => 'attachment',
								'post_parent' => get_the_id(),
								'post_mime_type' => 'image',
						);
				$post_images =& get_children( $args );

				if ( empty($images) ) {
					// no attachments here
				} else {
					foreach ( $images as $attachment_id => $attachment ) {
						echo wp_get_attachment_image( $attachment_id, 'full' );
					}
				}

				if ( !empty( $post_images ) ) {			
					echo '<div class="thumbnails">';
					foreach ( $post_images as $attachment_id => $attachment ) {
						$image = wp_get_attachment_image( $attachment_id, '64px-thumb' );
						if ( $image ) { echo '<a href="' . get_permalink( $attachment_id ) . '">' . $image . '</a>'; }
					}
					echo '</div>';
				}

			?>
			
			<?php wp_link_pages(); ?>
			
			<?php edit_post_link( 'Edit page', '<div class="edit-link">', '</div>' ); ?>
      	
		</div><!-- END .entry -->
		
		<div id="news-innovation-blog">
			<h4><a href="http://newsinnovation.com/">News Innovation</a></h4>
			
		</div>
	
	<?php endwhile; endif; ?>
		
	</div><!-- END .page -->

	<div style="clear:both;"></div>

</div><!-- END .main -->

</div><!-- END .wrap -->

<script type="text/javascript">
	jQuery(document).ready(function() {

		/**
		 * Dynamically load blog posts for the Research Center
		 */
		cunyj_load_blog_posts( 'http://newsinnovation.com/', 4, 'news-innovation-blog' );

	});
</script>
<?php get_footer(); ?>