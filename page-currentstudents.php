<?php
/*
Template Name: Page - Current Students
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">

  <div id="sidebar">

			<?php wp_nav_menu(
						array(
							'menu' => 'Current Students',
							'menu_class' => 'navigation'
							)
						); ?>

	</div>
          
  <div id="content" class="right small">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page" id="page-<?php the_ID(); ?>">

	<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>
    
    
      <div class="entry">
      
      	<?php if(get_post_meta($post->ID, 'page_image', true) != "") { ?>
        <div id="page-image">
<img src="<?php echo get_post_meta( $post->ID,"page_image", $single=true ) ; ?>" />
        </div>
  		<?php } ?>

<?php if(get_post_meta($post->ID, 'page_image_wide', true) != "") { ?>
        <div id="page-image-wide">
<img src="<?php echo get_post_meta( $post->ID,"page_image_wide", $single=true ) ; ?>" width="600px" />
        </div>
  		<?php } ?>

		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
    </div>
		<?php endwhile; endif; ?>
  </div>

	<div style="clear:both;"></div>
	
</div>

</div>


<?php get_footer(); ?>







