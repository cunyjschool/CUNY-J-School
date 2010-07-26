<?php
/*
Template Name: Section - Current Students
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

  <div id="sidebar">
<ul id="sidebar-nav">
  <li><h4><a href="<?php bloginfo('url'); ?>/current-students/">Current Students</a></h4></li>
  <li><a href="<?php bloginfo('url'); ?>/current-students/academic-calendar/">Academic Calendar</a></li>
  <li><a href="<?php bloginfo('url'); ?>/career-services/">Career Services</a></li>
  <li><a href="<?php bloginfo('url'); ?>/current-students/class-schedule/">Class Schedule</a></li>
  <li><a href="<?php bloginfo('url'); ?>/current-students/commencement-guide">Commencement Guide</a></li>
  <li><a href="<?php bloginfo('url'); ?>/current-students/registration/">Registration</a></li>
  <li><a href="<?php bloginfo('url'); ?>/research-center/">Research Center</a></li>
  <li><a href="http://help.journalism.cuny.edu">Technical Support</a></li>
</ul>
	</div>
          
  <div id="right">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">

	<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>
    
    
      <div class="entry">
      
      	<?php if(get_post_meta($post->ID, page_image, true) != "") { ?>
        <div id="page-image">
<img src="<?php echo get_post_meta( $post->ID,"page_image", $single=true ) ; ?>" />
        </div>
  		<?php } ?>

<?php if(get_post_meta($post->ID, page_image_wide, true) != "") { ?>
        <div id="page-image-wide">
<img src="<?php echo get_post_meta( $post->ID,"page_image_wide", $single=true ) ; ?>" />
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







