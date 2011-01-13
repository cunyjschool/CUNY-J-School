<?php
/*
Template Name: Page - Admissions
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">

		<?php get_sidebar('admissions'); ?>
          
	<div class="content left-sidebar" id="page-admissions-content">

	<?php if ( have_posts()) : while (have_posts()) : the_post(); ?>
    	
		<div class="page" id="page-<?php the_ID(); ?>">

			<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>

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

      		<div class="entry">
				<?php the_content(); ?>
      		</div>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    	
		</div><!-- END - .page -->
		
	<?php endwhile; endif; ?>

  	</div><!-- END - .content -->

	<div style="clear:both;"></div>

</div>

</div>


<?php get_footer(); ?>







