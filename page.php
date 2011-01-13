<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="page-main">

  <?php get_sidebar( 'default_page' ); ?>
  
	<div class="content left-sidebar" id="page-content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
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

    </div>
		<?php endwhile; endif; ?>
  </div>

	<div style="clear:left;"></div>

	</div>
</div>


<?php get_footer(); ?>