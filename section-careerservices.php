<?php
/*
Template Name: Section - Career Services
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

  <div id="sidebar">
<ul id="sidebar-nav">
  <li><h4><a href="<?php bloginfo('url'); ?>/career-services/">Career Services</a></h4></li>
  <li><a href="<?php bloginfo('url'); ?>/career-services/news-events/">News & Events</a></li>
  <li><a href="<?php bloginfo('url'); ?>/category/career-services/internships/">Internship Listings</a></li>
  <li><a href="<?php bloginfo('url'); ?>/career-services/freelance-community-publications/">Freelance: Community Publications</a></li>
  <li><a href="<?php bloginfo('url'); ?>/career-services/job-hunting-career-info-links/">Job-Hunting & Career-Info Links</a></li>
  <li><a href="<?php bloginfo('url'); ?>/career-services/professional-organizations/">Professional Organizations</a></li>
  <li><a href="<?php bloginfo('url'); ?>/career-services/for-employers/">For Employers</a></li>
  <li><a href="<?php bloginfo('url'); ?>/career-services/where-our-alumni-are-working/">Where Our Alumni Are Working</a></li>
</ul>

<ul id="sidebar-nav" style="margin-top: 20px;">
  <li><h4>Job-Search Tips</h4></li>
  <li><a href="<?php bloginfo('url'); ?>/job-search-tips/resume/">Resume</a></li>
  <li><a href="<?php bloginfo('url'); ?>/job-search-tips/cover-letter/">Cover Letter</a></li>
  <li><a href="<?php bloginfo('url'); ?>/job-search-tips/references/">References</a></li>
  <li><a href="<?php bloginfo('url'); ?>/job-search-tips/clips-tapes/">Clips &amp; Tapes</a></li>
  <li><a href="<?php bloginfo('url'); ?>/job-search-tips/search-strategies/">Search Strategies</a></li>
  <li><a href="<?php bloginfo('url'); ?>/job-search-tips/interview-salary-negotiation/">Interview &amp; Salary Negotiation</a></li>
</ul>

<h3>Contact Us</h3>

<p><strong>Deborah Stead</strong><br />
Director of Career Services<br />
646-758-7732<br />
<a href="mailto:deborah.stead@journalism.cuny.edu">deborah.stead@journalism.cuny.edu</a></p>

<p><strong>Lili Grossman</strong><br />
Career Services Coordinator<br />
646-758-7727<br />
<a href="mailto:lili.grossman@journalism.cuny.edu">lili.grossman@journalism.cuny.edu</a></p>

<p><strong>Office Hours</strong><br />
9 a.m.-5 p.m., Monday-Friday</p>
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







