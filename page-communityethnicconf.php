<?php
/*
Template Name: Community and Ethnic Media Conference
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">
		
		<h2><?php the_title(); ?><?php edit_post_link( 'Edit', '<span class="edit">', '</span>' ); ?></h2>

  <div id="sidebar">
  
<ul id="sidebar-nav">
  <li><h4><a href="/community-and-ethnic-news-conference/">Community and Ethnic Media Conference</a></h4></li>

  <li><a href="/community-and-ethnic-news-conference/agenda/">Agenda</a></li>
  <li><a href="/community-and-ethnic-news-conference/rsvp/">RSVP</a></li>
  <li><a href="/community-and-ethnic-news-conference/survey/">Survey</a></li>
</ul><!-- end Sidebar-nav -->

<div style="margin-top: 20px; margin-left: 5px;">
  <ul><li><h4 style="margin: 0 0 10px 0;">Co-Sponsors</h4></li>
  <li><a href="http://www.citylimits.org/"><img src="http://www.journalism.cuny.edu/wp-content/uploads/2010/04/CITYLIMITS_HORZ-210x110px.png" /></a></li>
  <li><a href="http://www.hillmanfoundation.org/"><img src="http://www.journalism.cuny.edu/wp-content/uploads/2010/04/SHF_LogoLckup_LgSymb_2Crgb-210x110px.png" /></a></li>
  <li><a href="http://www.indypressny.org/nycma/voices/418/"><img src="http://www.journalism.cuny.edu/wp-content/uploads/2010/04/NYCMA-LOGO-210x110px.png" /></a></li>

  <li><a href="http://www.newyorkpressassociation.com/home.aspx"><img src="http://www.journalism.cuny.edu/wp-content/uploads/2010/04/NYPA_logo-210x113px.png" /></a></li>
</ul>
</div>

</div><!-- end sidebar -->

  <div id="content" class="right small">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page" id="page-<?php the_ID(); ?>">
    
    
      <div class="entry">
      
      	<?php if(get_post_meta($post->ID, page_image, true) != "") { ?>
        <div id="page-image">
<img src="<?php echo get_post_meta( $post->ID,"page_image", $single=true ) ; ?>" />
        </div><!-- end page-image -->
  		<?php } ?>

		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div><!-- end entry -->
    </div><!-- end post -->
		<?php endwhile; endif; ?>
</div><!-- end wrap right -->

<div style="clear:both;"></div>
</div><!-- end wrap clearfix -->

</div>


<?php get_footer(); ?>