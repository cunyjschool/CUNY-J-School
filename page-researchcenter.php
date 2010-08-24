<?php
/*
Template Name: Page - Research Center
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div id="main">

  <div id="sidebar">
<ul class="navigation">
  <li><a href="<?php bloginfo('url'); ?>/research-center/">Research Center</a>
<ul class="children">
  <li><a href="<?php bloginfo('url'); ?>/research-center/about-us/">About Us</a>
    <ul class="children">
      <li><a href="<?php bloginfo('url'); ?>/research-center/about-us/collections/">Collections</a></li>
      <li><a href="<?php bloginfo('url'); ?>/research-center/about-us/mission-and-goals/">Mission &amp; Goals</a></li>
      <li><a href="<?php bloginfo('url'); ?>/research-center/about-us/hours-and-schedules/">Hours &amp; Schedules</a></li>
      <li><a href="<?php bloginfo('url'); ?>/research-center/about-us/staff/">Staff</a></li>
      <li><a href="<?php bloginfo('url'); ?>/research-center/about-us/code-of-conduct/">Code of Conduct</a></li>
      <li><a href="<?php bloginfo('url'); ?>/research-center/about-us/access-borrowing/">Access &amp; Borrowing</a></li>
    </ul>
  </li>
  <li><a href="<?php bloginfo('url'); ?>/research-center/search-tools/">Search Tools</a></li>
  <li><a href="<?php bloginfo('url'); ?>/research-center/services/">Services</a></li>
  <li><a href="http://journalism.cuny.bepress.com/">MediaWorks</a></li>
</ul></li>
</ul>

    <div style="margin-top: 20px;">
<h3 style="margin: 0 0 10px 0;"><a href="<?php bloginfo('url'); ?>/research-center/ask-a-librarian/">Ask a Librarian</a></h3>
<embed src="http://widget.meebo.com/mm.swf?RQPbTHsvoL" type="application/x-shockwave-flash" wmode="transparent" height="275" width="200">

<h3 style="margin: 20px 0 10px 0;">Poll</h3>

    
    <?php $my_query = new WP_Query('cat=272&showposts=1');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID;?>
<?php the_content(); ?>  
<?php endwhile; ?>

<a href="<?php bloginfo('url'); ?>/category/research-center/research-center-polls/">View past polls &raquo;</a>
    </div>

<h4 style="margin-top: 40px;">Contact Us</h4>
Send questions, comments or suggestions to: <a href="mailto:research@journalism.cuny.edu">research@journalism.cuny.edu</a>.
  </div>
          
  <div id="content" class="right small">


<?php if (have_posts()) : while (have_posts()) : the_post(); 
  if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
    <div class="page" id="page-<?php the_ID(); ?>">

			<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>
    
    <?php if(is_page('210') ) { ?>
    <img src="<?php bloginfo('url'); ?>/files/2008/09/research-center-wide.jpg" alt="Research Center entrance" style="border: 10px solid #eee;" />
   	<?php } ?>

    
      <div class="entry">
      
		<?php if(is_page('210') ) { ?>
        <div style="width: 280px; float: left; margin-right: 20px;">
        
<ul style="width: 280px; margin-bottom: 0; padding-bottom: 0;">
	<li id="research-blog"><strong>Research Center Blog</strong></li>
</ul>


<?php
if (function_exists('SimplePieWP')) {
echo SimplePieWP('http://researchcenter.journalism.cuny.edu/feed/', array(
	'items' => 4,
	'cache_duration' => 900
	));
}
?>

        </div>
        
        
        <div style="width: 280px; float: left;">
        
<style type="text/css" media="screen"> .gr_grid_container { /* customize grid container div here. eg: width: 500px; */ } .gr_grid_book_container { /* customize book cover container div here */ float: left; width: 39px; height: 60px; margin: 5px; border: 3px solid #eee; overflow: hidden; } 
       #gr_grid_widget_1236291550 h2 {
	    margin-top: 10px;
		padding-top: 0;
	   	font-size: 100%; }
        </style>
        
        <div id="gr_grid_widget_1236291550"><!-- Show static html as a placeholder in case js is not enabled - javascript include will override this if things work --> 
    <h2><a href="http://www.goodreads.com/user/show/2095476-CUNYGSJRESEARCH?utm_medium=api&amp;utm_source=grid_widget" style="text-decoration: none;">Featured Books</a></h2>
  <div class="gr_grid_container">
          <div class="gr_grid_book_container">
      <a href="http://www.goodreads.com/book/show/2505550.Covering_the_Environment_How_Journalists_Work_the_Green_Beat?utm_medium=api&amp;utm_source=grid_widget" title="Covering the Environment: How Journalists Work the Green Beat (Lea's Communication)"><img alt="Covering the Environment: How Journalists Work the Green Beat" border="0" src="http://ecx.images-amazon.com/images/I/41jy1olU3%2BL._SL75_.jpg" width="39" /></a>
    </div>
          <div class="gr_grid_book_container">
      <a href="http://www.goodreads.com/book/show/2866279.The_War_Within_A_Secret_White_House_History_2006_2008?utm_medium=api&amp;utm_source=grid_widget" title="The War Within: A Secret White House History 2006-2008"><img alt="The War Within: A Secret White House History 2006-2008" border="0" src="http://ecx.images-amazon.com/images/I/41Oytp650IL._SL75_.jpg" width="39" /></a>
    </div>
          <div class="gr_grid_book_container">
      <a href="http://www.goodreads.com/book/show/5038938.Encyclopedia_of_The_First_Amendment?utm_medium=api&amp;utm_source=grid_widget" title="Encyclopedia of The First Amendment"><img alt="Encyclopedia of The First Amendment" border="0" src="http://ecx.images-amazon.com/images/I/61cQEAPjIxL._SL75_.jpg" width="39" /></a>
    </div>
          <div class="gr_grid_book_container">
      <a href="http://www.goodreads.com/book/show/2558258.Standing_Up_To_the_Madness_Ordinary_Heroes_In_Extraordinary_Times?utm_medium=api&amp;utm_source=grid_widget" title="Standing Up To the Madness: Ordinary Heroes In Extraordinary Times"><img alt="Standing Up To the Madness: Ordinary Heroes In Extraordinary Times" border="0" src="http://ecx.images-amazon.com/images/I/517N7QpMwSL._SL75_.jpg" width="39" /></a>
    </div>
          <div class="gr_grid_book_container">
      <a href="http://www.goodreads.com/book/show/1839930.Landmark_Decisions_of_the_United_States_Supreme_Court?utm_medium=api&amp;utm_source=grid_widget" title="Landmark Decisions of the United States Supreme Court"><img alt="Landmark Decisions of the United States Supreme Court" border="0" src="http://ecx.images-amazon.com/images/I/4185oIslq1L._SL75_.jpg" width="39" /></a>
    </div>
    <br style="clear: both"/><br/>
  <a href="http://www.goodreads.com/user/new?utm_medium=api&amp;utm_source=grid_widget" class="gr_grid_branding" style="font-size: .9em; color: #382110; text-decoration: none; float: right; clear: both">Powered by Goodreads.com</a>
  </div>
</div><script src="http://www.goodreads.com/review/grid_widget/2095476.Featured%20Books?num_books=20&amp;order=d&amp;shelf=read&amp;sort=date_added&amp;widget_id=1236291550" type="text/javascript" charset="utf-8"></script>



        </div>
		<?php } ?>


      
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

	<div style="clear:both;"></div>

</div>

</div>


<?php get_footer(); ?>







