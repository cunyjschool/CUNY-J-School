<?php
/*
Template Name: Section - Faculty
*/
?>
<?php get_header(); ?>

<div class="wrap clearfix" id="content">

  <div id="sidebar">
<ul id="sidebar-nav">
  <li><h4><a href="/faculty/">Faculty</a></h4></li>
  <li><a href="/category/news/faculty-news/">Faculty in the News</a></li>
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

<?php if(get_post_meta($post->ID, page_image_wide, true) != "") { ?>
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
</div>


<?php get_footer(); ?>