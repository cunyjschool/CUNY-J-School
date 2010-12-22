<?php
/*
Template Name: Page - Capstones Videos
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">

  <?php get_sidebar( 'default_page' ); ?>
  
	<div id="content" class="right small">
	
    <div class="page" id="page-<?php the_ID(); ?>">

			<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>

<object type="application/x-shockwave-flash" width="600" height="300" data="http://vimeo.com/hubnut/?user_id=user365647&amp;color=ff9933&amp;background=e6e6e6&amp;fullscreen=1&amp;slideshow=0&amp;stream=likes&amp;id=&amp;server=vimeo.com">	<param name="quality" value="best" />		<param name="allowfullscreen" value="true" />		<param name="allowscriptaccess" value="always" />	<param name="scale" value="showAll" />	<param name="movie" value="http://vimeo.com/hubnut/?user_id=user365647&amp;color=ff9933&amp;background=e6e6e6&amp;fullscreen=1&amp;slideshow=1&amp;stream=likes&amp;id=&amp;server=vimeo.com" /></object>


</div>  </div>

	<div style="clear:left;"></div>

	</div>
</div>


<?php get_footer(); ?>