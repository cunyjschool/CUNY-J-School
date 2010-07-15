<?php
/*
Template Name: Page - Faculty Individual
*/
?>
<?php get_header(); ?>

<div class="wrap clearfix" id="content">

<?php get_sidebar(); ?>
      
  <div id="right">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
    
    <?php edit_post_link('Edit this entry', '<ul><li class="edit">', '</li></ul>'); ?>


	<h2><?php the_title(); ?></h2>
    
    
      <div class="entry">
      
              	<?php if(get_post_meta($post->ID, "faculty-photo", true) != "") { ?>
        <div id="faculty-photo">
        <img src="http://www.journalism.cuny.edu/scripts/timthumb.php?src=<?php echo get_post_meta( $post->ID,"faculty-photo", $single=true ) ; ?>&h=200&zc=1&q=100" alt=""></a>
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