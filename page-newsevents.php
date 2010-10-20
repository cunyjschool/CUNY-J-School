<?php
/*
Template Name: Page - News & Events
*/
?>
<?php get_header(); ?>

  <div class="wrap news-events">
	
	<div class="main">
	
    <div id="news-left">
    
<h2>Featured News</h2>

<?php query_posts('category_name=News&showposts=1'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if(get_post_meta($post->ID, 'photo', true) != "") { ?>
<a href="<?php the_permalink(); ?>"><img src="http://www.journalism.cuny.edu/scripts/timthumb.php?src=<?php echo get_post_meta( $post->ID,"photo", $single=true ) ; ?>&h=300&w=500&zc=1&q=100" alt="" class="photo"></a>
	<?php } ?>
    
      <div id="news-main-excerpt">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
 <?php the_excerpt(); ?> 
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
      </div>

<ul style="margin-top: 20px; padding-top: 20px; border-top: 1px dashed #eee; padding-bottom: 20px;" class="clearfix">
<?php query_posts('category_name=News&showposts=2&offset=1'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li>
	<?php if(get_post_meta($post->ID, photo, true) != "") { ?>
<a href="<?php the_permalink(); ?>"><img src="http://www.journalism.cuny.edu/scripts/timthumb.php?src=<?php echo get_post_meta( $post->ID,"photo", $single=true ) ; ?>&h=100&w=200&zc=1&q=100" alt="" class="photo"></a>
	<?php } ?>
       
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
  </li>
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul>


    </div>
  
    <div id="more-headlines">
<h2>More News</h2>

<ul>
<?php query_posts('category_name=News&showposts=5&offset=3'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li>     
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
  </li>
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul>


<h2>Events</h2>

<ul id="up-events">
<?php
$events = get_posts('cat=11&meta_key=event_date&orderby=meta_value&numberposts=4&order=asc');
  $count = 0;
	foreach($events as $post) :
	  if ($count >= 3) {
	    break;
	  }
		setup_postdata($post);
		//check the dates
		$todays_date = date("Y-m-d", strtotime('-1 day'));
		$event_date = get_post_meta($post->ID, 'event_date', $single = true);
		if(strtotime($event_date) > strtotime($todays_date)) {
			?>
    
  <li>
  
    <table class="cal">
      <tr>
        <td class="month"><?php echo get_post_meta( $post->ID,"event_month", $single=true ) ; ?></td>
        <td class="daynumber"><?php echo get_post_meta( $post->ID,"event_day", $single=true ) ; ?></td>
      </tr>
    </table> 
    
  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
  </li>
	
			<?php
			$count += 1;
		} //end date check ?>
<?php endforeach; ?>
</ul>

    </div>
  
    <div style="clear: both; border-top: 1px solid #eee; padding-top: 20px;">
      <div id="news-social-left">
        <div id="news-twitter">
      <a href="http://twitter.com/cunyjschool"><img src="<?php bloginfo('template_directory'); ?>/images/icon-twitter.png" alt="CUNY J-School on Twitter" /></a>

<?php
echo SimplePieWP('http://feeds2.feedburner.com/cunyjschool', array(
	'items' => 3,
	'cache_duration' => 1800
	));
?>
          </div>
        
          <div id="news-flickr">
          <a href="http://flickr.com/photos/cunyjschool/"><img src="<?php bloginfo('template_directory'); ?>/images/icon-flickr.jpg" alt="CUNY J-School on Flickr" style="margin: 20px 0;" /></a>
            <div id="news-flickr-photos">
            <?php get_flickrRSS(array(
    'num_items' => 9)); 
			?>
            </div>
          </div> 
        </div>       
        
        
        <div id="news-social-right">
  <object type="application/x-shockwave-flash" width="500" height="400" data="http://vimeo.com/hubnut/?user_id=cunyjschool&amp;color=00adef&amp;background=000000&amp;fullscreen=1&amp;slideshow=0&amp;stream=uploaded_videos&amp;id=&amp;server=vimeo.com">	<param name="quality" value="best" />		<param name="allowfullscreen" value="true" />		<param name="scale" value="showAll" />	<param name="movie" value="http://vimeo.com/hubnut/?user_id=cunyjschool&amp;color=00adef&amp;background=000000&amp;fullscreen=1&amp;slideshow=0&amp;stream=uploaded_videos&amp;id=&amp;server=vimeo.com" /></object>
  
        <div id="news-video">
        <h2>Videos</h2>
        <?php
echo SimplePieWP('http://vimeo.com/cunyjschool/videos/rss', array(
	'items' => 6,
	'cache_duration' => 1800
	));
?>
        
        </div>
        
        <div id="news-social-more">
        <a href="http://www.facebook.com/cunyjschool"><img src="<?php bloginfo('template_directory'); ?>/images/find-us-on-facebook.gif" alt="Find Us On Facebook" /></a>
        <a href="http://www.youtube.com/user/cunyjschool"><img src="<?php bloginfo('template_directory'); ?>/images/watch-youtube.jpg" alt="Watch Us On YouTube" /></a>         
        </div>
      </div>
    </div>
    
    <div id="news-digests">
      <div id="news-clips">
      <h3>Clips of the Week</h3>
	    <ul>
<?php query_posts('cat=332&showposts=3'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul>
    </div>
  
    <div id="news-faculty">
    <h3>Faculty News</h3>
	  <ul>
<?php query_posts('cat=35&showposts=3'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul> 
    </div>
    
    <div id="news-alumni">
    <h3>Alumni News</h3>
	  <ul>
<?php query_posts('cat=30&showposts=3'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul> 
    </div>
  </div>

	<div style="clear:both;"></div>

	</div>

</div>

<?php get_footer(); ?>