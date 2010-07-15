<?php
/*
Template Name: Page - Continuing Education
*/
?>
<?php get_header(); ?>

<div class="wrap clearfix" id="content">


  <div id="sidebar">
<ul id="sidebar-nav">
  <li><h4><a href="/continuing-education/">Continuing Education</a></h4></li>
  <li><a href="/continuing-education/course-list/">Course List</a></li>
</ul>
	</div>
      
  <div id="right">   

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
    
    <?php edit_post_link('Edit this entry', '<ul><li class="edit">', '</li></ul>'); ?>


	<h2><?php the_title(); ?></h2>
    
    
      <div class="entry">
      

    
    
      
      	<?php if(get_post_meta($post->ID, page_image, true) != "") { ?>
        <div id="page-image">
<img src="<?php echo get_post_meta( $post->ID,"page_image", $single=true ) ; ?>" />
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