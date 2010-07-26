<?php
/*
Template Name: Page - Giving
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

  <div id="sidebar">

<ul id="give-now">
<li><h4><a href="https://cunyjschool.wufoo.com/forms/q7p7r3/">DONATE NOW!</a></li>
</ul>

<ul id="sidebar-nav">
	<li><h4><a href="<?php bloginfo('url'); ?>/donate/">Donate</a></h4></li>
	<li><a href="<?php bloginfo('url'); ?>/donate/ways-to-give/">Ways to Give</a></li>
	<li><a href="<?php bloginfo('url'); ?>/donate/planned-giving/">Planned Giving</a></li>
	<li><a href="<?php bloginfo('url'); ?>/donate/matching-gifts/">Matching Gifts</a></li>
	<li><a href="<?php bloginfo('url'); ?>/donate/program-enhancements-and-projects/">Program Enhancements and Projects</a></li>
	<li><h3 style="margin-top: 10px;">Established Funds</h3></li>
	<li><a href="<?php bloginfo('url'); ?>/donate/alumni-fund/">Alumni Fund</a></li>
  <li><a href="<?php bloginfo('url'); ?>/donate/future-journalists-fund/">Future Journalists Fund</a></li>
  <li><a href="<?php bloginfo('url'); ?>/donate/annual-fund/">Annual Fund</a></li>
  <li><a href="<?php bloginfo('url'); ?>/donate/named-funds-special-programs-prizes-and-awards/">Named Funds, Special Programs, Prizes, and Awards</a></li>
  <li><h3 style="margin-top: 10px;">Stay Connected</h3></li>
  <li><a href="<?php bloginfo('url'); ?>/donate/special-events/">Special Events</a></li>
	<li><a href="<?php bloginfo('url'); ?>/donate/sign-up-to-receive-our-newsletter/">Sign Up for our Newsletter</a></li>
<li><a href="<?php bloginfo('url'); ?>/donate/update-your-contact-information/">Update Your Contact Information</a></li>
 <li><a href="<?php bloginfo('url'); ?>/donate/institutional-advancement-staff/">Institutional Advancement Staff</a></li>
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

		<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
    </div>
		<?php endwhile; endif; ?>
  </div>
</div>


<?php get_footer(); ?>







