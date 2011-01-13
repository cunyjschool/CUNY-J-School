<?php
/*
Template Name: Page - Faculty
*/
?>
<?php get_header(); ?>

<div class="wrap">

	<div class="main">
		
		<h2><?php the_title(); ?><?php edit_post_link( 'Edit', '<span class="edit">', '</span>' ); ?></h2>

  <?php get_sidebar('faculty'); ?>
      
  <div class="content left-sidebar">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
	<div class="page" id="page-<?php the_ID(); ?>">
    
    
      <div class="entry">
      
      	<?php if(get_post_meta($post->ID, 'page_image', true) != "") { ?>
        <div id="page-image">
<img src="<?php echo get_post_meta( $post->ID,"page_image", $single=true ) ; ?>" />
        </div>
  		<?php } ?>

<?php if(get_post_meta($post->ID, 'page_image_wide', true) != "") { ?>
        <div id="page-image-wide">
<img src="<?php echo get_post_meta( $post->ID,"page_image_wide", $single=true ) ; ?>" />
        </div>
  		<?php } ?>


<ul>
<?php
	$pages = get_pages('child_of='.$post->ID.'');
	foreach($pages as $page) 
	{
		$faculty_excerpt = get_post_meta($page->ID, 'faculty-excerpt', true);
		echo "<li><a href=\"".get_page_link($page->ID)."\">$page->post_title</a><br />";
		echo $faculty_excerpt;
		echo "</li>";

}
?>
</ul>

 
      </div>
    </div>
<?php endwhile; endif; ?>
        

  </div>

	<div style="clear:both;"></div>

</div>
</div>


<?php get_footer(); ?>