<?php
/*
Template Name: Section - Alumni
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

  <div id="sidebar">
<ul id="sidebar-nav">
  <li><h4><a href="<?php bloginfo('url'); ?>/alumni/">Alumni</a></h4></li>
  <li><a href="<?php bloginfo('url'); ?>/career-services/">Career Services</a></li>
  <li><a href="<?php bloginfo('url'); ?>/continuing-education/">Continuing Education</a></li>
  <li><a href="<?php bloginfo('url'); ?>/alumni/update-your-contact-information/">Update Your Contact Information</a></li>
  <li><a href="<?php bloginfo('url'); ?>/career-services/where-our-alumni-are-working/">Where Our Alumni Are Working</a></li>
  <li><a href="<?php bloginfo('url'); ?>/donate/">Give</a></li>
</ul>


<div id="sidebar-nav" style="margin-top: 20px; margin-left: 5px;">
  <ul><li><h4 style="margin: 0 0 10px 0;">Networks</h4></li></a>
<li><a href="http://www.linkedin.com/groups?home=&gid=130402"><img src="http://www.journalism.cuny.edu/wp-content/uploads/2010/04/linkedin.png" />   LinkedIn</li>
<li><a href="http://www.facebook.com/pages/New-York-NY/CUNY-Graduate-School-of-Journalism/17117865082"><img src="http://www.journalism.cuny.edu/wp-content/uploads/2010/04/facebook.png" />   Facebook</a></li>
<li><a href="http://twitter.com/cunyjschool"><img src="http://www.journalism.cuny.edu/wp-content/uploads/2010/04/twitter.png" />   Twitter</a></li>
  </ul>
</div>

<div id="sidebar-nav" style="margin-top: 20px; margin-left: 5px;">
  <ul><li><h4 style="margin: 0 0 10px 0;">News & Events</h4></li></a>
<li><a href="<?php bloginfo('url'); ?>/category/featured-news//">School News</li>
<li><a href="<?php bloginfo('url'); ?>/category/featured-events/">Upcoming Events</a></li>
<li><a href="<?php bloginfo('url'); ?>/career-services/news-events/">Career Services Events</a></li>
  </ul>
</div>
	


</div><!-- end sidebar -->

          
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

		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
    </div>
		<?php endwhile; endif; ?>
  </div>
</div>


<?php get_footer(); ?>







