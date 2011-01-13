<?php
/*
Template Name: Page - About
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">
		
		<h2><?php the_title(); ?><?php edit_post_link( 'Edit', '<span class="edit">', '</span>' ); ?></h2>

	<div class="sidebar left" id="page-about-sidebar">
		<?php wp_nav_menu(
					array(
						'menu' => 'About',
						'menu_class' => 'navigation'
						)
					); ?>
	</div>
	
	<div class="content left-sidebar" id="page-about-content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="page" id="page-<?php the_ID(); ?>">
    
    	  	<?php if ( $page_image = get_post_meta( $post->ID, 'page_image', true ) ) : ?>
				<div id="page-image">
					<img src="<?php echo $page_image; ?>" />
				</div>
	  		<?php endif; ?>

			<?php if ( $page_image_wide = get_post_meta( $post->ID, 'page_image_wide', true ) ) : ?>
	        	<div id="page-image-wide">
					<img src="<?php echo $page_image_wide; ?>" />
	        	</div>
	  		<?php endif; ?>

			      <?php if(is_page(59)) { ?>  	
			<?php include( TEMPLATEPATH . '/templates/deans-corner.php' ); ?>
			  		<?php } ?>

	  		<div class="entry">
				<?php the_content(); ?>
	  		</div>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        
		</div>
        		
		<?php endwhile; endif; ?>
		
		<div style="clear:both;"></div>
		
    </div><!-- END - .content -->

  </div>

</div>


<?php get_footer(); ?>







