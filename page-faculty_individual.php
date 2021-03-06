<?php
/*
Template Name: Page - Faculty Individual
*/
?>
<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">

	<?php get_sidebar('faculty'); ?>
      
  <div class="content left-sidebar">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="page" id="post-<?php the_ID(); ?>">
    
		<h2><?php the_title(); ?><?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h2>
    
    <div class="entry">
      
		<?php if(get_post_meta($post->ID, "faculty-photo", true) != "") { ?>
			<div id="faculty-photo">
				<img src="<?php echo get_post_meta( $post->ID,"faculty-photo", $single=true ) ; ?>" height="200px" alt=""></a>
			</div>
		<?php } ?>

		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

      </div>
    </div>
		<?php endwhile; endif; ?>
  </div>

	<div style="clear:both;"></div>
</div>
</div>


<?php get_footer(); ?>