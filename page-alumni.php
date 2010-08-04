<?php
/*
Template Name: Page - Alumni
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

	<?php get_sidebar('alumni'); ?>
          
  <div id="right">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>
    
      <div class="entry">
      
      	<?php if(get_post_meta($post->ID, 'page_image', true) != "") { ?>
        <div id="page-image">
<img src="<?php echo get_post_meta( $post->ID, 'page_image', $single=true ) ; ?>" />
        </div>
  		<?php } ?>

		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
    </div>
		<?php endwhile; endif; ?>
  </div>
</div>


<?php get_footer(); ?>






