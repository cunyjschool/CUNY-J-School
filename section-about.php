<?php
/*
Template Name: Section - About
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

  <div id="sidebar">
<ul id="sidebar-nav">
  <li><h4><a href="<?php bloginfo('url'); ?>/about/">About</a></h4></li>
  <li><a href="<?php bloginfo('url'); ?>/about/deans-corner/">Dean's Corner</a></li>
  <li><a href="<?php bloginfo('url'); ?>/about/board-of-advisers/">Board of Advisers</a></li>
  <li><a href="<?php bloginfo('url'); ?>/about/code-of-ethics/">Code of Ethics</a></li>
  <li><a href="<?php bloginfo('url'); ?>/about/campus-facilities/">Campus and Facilities</a>
    <ul>
      <li><a href="<?php bloginfo('url'); ?>/about/campus-facilities/campus-safety/">Campus Safety</a></li>
      <li><a href="<?php bloginfo('url'); ?>/about/campus-facilities/hours-of-operation/">Hours of Operation</a></li>
    </ul>
  </li>
  <li><a href="<?php bloginfo('url'); ?>/about/cuny-tv/">CUNY TV</a></li>
  <li><a href="<?php bloginfo('url'); ?>/about/guest-information/">Guest Information</a>
    <ul>
      <li><a href="<?php bloginfo('url'); ?>/about/guest-information/map-and-directions/">Map and Directions</a></li>    
    </ul>
  </li>
  <li><a href="<?php bloginfo('url'); ?>/about/logo-and-graphics-standards/">Logos and Graphics Standards</a></li>
  <li><a href="<?php bloginfo('url'); ?>/about/undergraduate-programs-events/">Undergraduate Programs &amp; Events</a></li>
  <li><a href="<?php bloginfo('url'); ?>/about/room-request/">Room Request</a></li>
	<li><a href="<?php bloginfo('url'); ?>/about/freedom-of-information-law-notice/">Freedom of Information Law Notice</a></li>
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
        
        <?php if(is_page(59)) { ?>  	
<?php include( TEMPLATEPATH . '/includes/deans-corner.php' ); ?>
  		<?php } ?>
        

		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        		
		<?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>







