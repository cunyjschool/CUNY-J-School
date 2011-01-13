<?php
/*
Template Name: Page - Alumni
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">
		
		<h2><?php the_title(); ?><?php edit_post_link( 'Edit', '<span class="edit">', '</span>' ); ?></h2>

	<?php get_sidebar('alumni'); ?>
          
	<div class="content left-sidebar" id="page-alumni-content">

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

     	<div class="entry">
			<?php the_content(); ?>
     	</div>

    </div><!-- END - .page -->
	
	<?php endwhile; endif; ?>
		
	</div>
	
	<div style="clear:both;"></div>
	
  </div>
</div>


<?php get_footer(); ?>







