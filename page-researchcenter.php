<?php
/*
Template Name: Page - Research Center
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="research-center">
		
		<h2><span class="social-links right"><a href="http://facebook.com/cunygsjresearch"><img src="<?php bloginfo('template_directory'); ?>/images/icons/facebook_32.png" alt="Facebook" height="32px" width="32px" /></a><a href="http://twitter.com/cunygsjresearch"><img src="<?php bloginfo('template_directory'); ?>/images/icons/twitter_32.png" alt="Twitter" height="32px" width="32px" /></a></span><?php the_title(); ?></h2>
	
		<img class="ribbon" src="<?php bloginfo('template_directory'); ?>/images/pages/researchcenter_h850.jpg" alt="Research Center entrance" height="100px" width="850px" />
		
	<div class="sidebar left standard">

		<?php

		$args = array(
					'theme_location' => 'research_center',
					'menu_class' => 'navigation default',
					'menu_id' => 'research-center-navigation',
					'fallback_cb' => false,
			);

		wp_nav_menu( $args );

		echo '<ul class="widgets">';
		dynamic_sidebar( 'research_center' );
		echo '</ul>';

		?>

	</div>	
          
	<div class="content">
	
	<div class="page right">
		
	<?php if ( is_page( 'research-center' ) ) : ?>
	
	<div id="research-center-blog" class="research-center-info-zone">
		<h4><a href="http://researchcenter.journalism.cuny.edu/">Research Center Blog</a></h4>
		<ul>
			<li>Loading...</li>
		</ul>
	</div>

	<div id="research-center-goodreads" class="research-center-info-zone">

	<style type="text/css" media="screen"> .gr_grid_container { /* customize grid container div here. eg: width: 500px; */ } .gr_grid_book_container { /* customize book cover container div here */ float: left; width: 39px; height: 60px; margin: 5px; border: 3px solid #eee; overflow: hidden; } 
	       #gr_grid_widget_1236291550 h2 {
		    margin-top: 10px;
			padding-top: 0;
		   	font-size: 100%; }
	        </style>

	<div id="gr_grid_widget_1236291550"><!-- Show static html as a placeholder in case js is not enabled - javascript include will override this if things work --> 
	    <h4><a href="http://www.goodreads.com/user/show/2095476-CUNYGSJRESEARCH?utm_medium=api&amp;utm_source=grid_widget">Featured Books</a></h4>
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
		
	<?php endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="entry">
    
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
    </div>
		<?php endwhile; endif; ?>
		
	</div>

	<div style="clear:both;"></div>

</div>

</div>

<?php get_footer(); ?>







