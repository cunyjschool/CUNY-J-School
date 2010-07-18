<?php get_header(); ?>

<div class="wrap clearfix" id="content">

<?php query_posts('cat=144&showposts=1'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="home-alert">
<strong><?php the_title(); ?></a></strong> <?php remove_filter ('the_content', 'wpautop'); ?><?php the_content(); ?>
  </div> 
    <?php endwhile; else: ?>
<?php endif; ?>


<!-- Start Slideshow and Nav -->
  <div style="width: 700px; height: 400px; background: #eee; padding: 10px; float: left;">
  
    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="700" height="400" id="homepage" align="middle">
	    <param name="movie" value="/home-slideshow.swf" />
	    <param name="base" value="." />
	    <embed base="." src="/home-slideshow.swf" quality="best" bgcolor="#666666" width="700" height="400" name="MediaPlayer" align="middle" allowScriptAccess="sameDomain"
      type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
    </object>

  </div>
  
  <div id="nav-items">
    <div class="clearfix" id="ad-ac">
  
<ul id="acad">
  <li><h3><a href="<?php bloginfo('url'); ?>/academics/">Academics</a></h3></li>
  <li><a href="<?php bloginfo('url'); ?>/academics/subject-concentrations/">Subjects</a></li>
  <li><a href="<?php bloginfo('url'); ?>/academics/course-descriptions/">Course Descriptions</a></li>
  <li><a href="<?php bloginfo('url'); ?>/academics/summer-internship/">Summer Internship</a></li>
</ul>

<ul id="admiss">
  <li><h3><a href="<?php bloginfo('url'); ?>/admissions/">Admissions</a></h3></li>
  <li id="profile"><a href="<?php bloginfo('url'); ?>/admissions/frequently-asked-questions/">FAQs</a></li>
  <li id="sessions"><a href="<?php bloginfo('url'); ?>/admissions/information-sessions/">Info Sessions</a></li>
  <li id="tuition"><a href="<?php bloginfo('url'); ?>/admissions/tuition-and-fees/">Tuition &amp; Fees</a></li>
</ul>
  

    </div>
    
    <div id="ad-app">
    <h3><a href="<?php bloginfo('url'); ?>/admissions/how-to-apply/">How to Apply</a></h3>
    </div>
    
    <div id="ad-info">
    <h3><a href="https://cunyjschool.wufoo.com/forms/information-request-form/">Request Info</a></h3>
    </div>
  </div>
  
  
<!-- End Slideshow and Nav -->


  
  <div class="clearfix" id="news-home">
    <div id="news">
  <h3>News <a href="<?php bloginfo('url'); ?>/category/news/feed/"><img src="<?php bloginfo('template_directory'); ?>/images/icons/feed_s16.png" height="16px" width="16px" alt="News Feed" class="feed" /></a></h3>
<?php query_posts('cat=9&showposts=1'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>

<?php query_posts('cat=9&showposts=3&offset=1'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>

      <div class="morelinks" style="margin-top: 15px;"><a href="<?php bloginfo('url'); ?>/category/news/">More News</a> | <a href="">In The News</a>
      </div>
    </div>
  
  
    <div id="events-home">
      <h3>Events <a href="<?php bloginfo('url'); ?>/category/events/feed/"><img src="<?php bloginfo('template_directory'); ?>/images/icons/feed_s16.png" height="16px" width="16px" alt="Events Feed" class="feed" /></a></h3>

  <?php query_posts('cat=15&showposts=4&meta_key=event_date&order=ASC&orderby=meta_value'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="event clearfix">    
	<table class="cal">
      <tr>
        <td class="month"><?php echo get_post_meta( $post->ID,"event_month", $single=true ) ; ?></td>
        <td class="daynumber"><?php echo get_post_meta( $post->ID,"event_day", $single=true ) ; ?></td>
      </tr>
	</table> 
    
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
      </div>
    <?php endwhile; else: ?>
	
	<p>Check back soon for more upcoming events.</p>
<?php endif; ?>

      <div class="morelinks" style="margin-top: 10px;"><a href="<?php bloginfo('url'); ?>/category/events/">More Events</a> | <a href="http://tech.journalism.cuny.edu/calendars/">Calendars</a> | <a href="<?php bloginfo('url'); ?>/admissions/information-sessions/">Info Sessions</a> | <a href="<?php bloginfo('url'); ?>/about/room-request/">Room Request</a>
      </div>
    </div>
    
    <div id="featured-home">
      <div id="fh-inner"><a href="http://www.nycitynewsservice.com/"><img src="<?php bloginfo('template_directory'); ?>/images/projects/nycitynewsservice_h200.png" height="50px" width="200px" alt="NY City News Service" /></a>
        <div style="color: #999; font-size: 11px; text-transform: uppercase; margin: 3px 0 5px 0;">Student-powered wire service</div>
      
    <?php
if (function_exists('SimplePieWP')) {
echo SimplePieWP('http://nycitynewsservice.com/category/top-stories/feed/', array(
	'items' => 4,
	'cache_duration' => 1800
	));
}
	?>
    
    </div> 

<div id="fh-inner"><a href="http://fort-greene.thelocal.nytimes.com/"><img src="<?php bloginfo('template_directory'); ?>/images/projects/fort-greene_h200.jpg" height="50px" width="200px" alt="The Local" /></a>
<div style="color: #999; font-size: 11px; text-transform: uppercase; margin: 3px 0 0 0;">Brooklyn-based citizen journalism</div>
</div>


    </div>

  </div>
  
  <div class="clearfix" id="soc">
    <div style="float: left; width: 400px;">
  <object type="application/x-shockwave-flash" width="400" height="300" data="http://vimeo.com/hubnut/?user_id=cunyjschool&amp;color=00adef&amp;background=000000&amp;fullscreen=1&amp;slideshow=0&amp;stream=uploaded_videos&amp;id=&amp;server=vimeo.com">	<param name="quality" value="best" />		<param name="allowfullscreen" value="true" />		<param name="allowscriptaccess" value="always" />	<param name="scale" value="showAll" />	<param name="movie" value="http://vimeo.com/hubnut/?user_id=cunyjschool&amp;color=00adef&amp;background=000000&amp;fullscreen=1&amp;slideshow=0&amp;stream=uploaded_videos&amp;id=&amp;server=vimeo.com" /></object>
    </div>
    
    <div id="flick-twit">
      <div id="flick">
<a href="http://flickr.com/photos/cunyjschool/"><img src="<?php bloginfo('template_directory'); ?>/images/icon-flickr.png" alt="CUNY J-School on Flickr" id="flickr-icon" /></a>
	  <div>
		
<?php 
if (function_exists('get_flickrRSS')) {
get_flickrRSS(array(
    'num_items' => 4)); 
}
			?>
        </div>
      </div>
    
      <div id="twit">
      <a href="http://twitter.com/cunyjschool"><img src="<?php bloginfo('template_directory'); ?>/images/icon-twitter.png" alt="CUNY J-School on Twitter" /></a>

<?php
if (function_exists('SimplePieWP')) {
echo SimplePieWP('http://twitter.com/statuses/user_timeline/14345137.rss', array(
	'items' => 1,
	'cache_duration' => 1800
	));
}
?>

      </div>
    </div>
  </div>
  
  
  <div class="clearfix" id="socialnet">
<ul>
  <li id="hfacebook"><a href="http://www.facebook.com/cunyjschool">Facebook</a></li>
  <li id="htwitter"><a href="http://twitter.com/cunyjschool/">Twitter</a></li>
  <li id="htwitter"><a href="/twitter-lists/">Twitter Lists</a></li>
  <li id="hyoutube"><a href="http://www.youtube.com/user/cunyjschool">YouTube</a></li>
  <li id="hvimeo"><a href="http://vimeo.com/cunyjschool/">Vimeo</a></li>
  <li id="hlinkedin"><a href="http://www.linkedin.com/groups?gid=130402">LinkedIn</a></li>
  <li id="hflickr"><a href="http://www.flickr.com/photos/cunyjschool/">Flickr</a></li>
  <li id="hfoursquare"><a href="http://foursquare.com/venue/216018">foursquare</a></li>
</ul>
  </div>


  
  <div class="clearfix" id="jnet">
  
<h4 style="float: left; padding-bottom: 20px;">CUNY J-School Network</h4>

<h4 style="float: right;">View All Recent Activity on the <a href="<?php bloginfo('url'); ?>/wire/">Wire &raquo;</a></h4> 
    
    <div class="jsite" style="clear: both;">
    <h3 id="clips"><a href="<?php bloginfo('url'); ?>/category/student-work/">Clips of the Week</a></h3>
      <h5>Student work</h5>
      <div>
<ul>
<?php query_posts('cat=17&showposts=2'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul>
      </div>
    </div>
    
    
    <div class="jsite">
    <h3 id="ni"><a href="http://newsinnovation.com/">NewsInnovation</a></h3>
      <h5>New business models for news</h5>
    <?php
if (function_exists('SimplePieWP')) {
echo SimplePieWP('http://newsinnovation.com/feed/', array(
	'items' => 4,
	'cache_duration' => 1800
	));
}
	?>
    </div>
    
    
    <div class="jsite third">
	<h3 id="ws"><a href="http://blogs.journalism.cuny.edu/writestuff/">The Write Stuff</a></h3>
      <h5>tips to improve your writing</h5>
      <?php
if (function_exists('SimplePieWP')) {
echo SimplePieWP('http://blogs.journalism.cuny.edu/writestuff/feed/', array(
	'items' => 4,
	'cache_duration' => 1800
	));
}
?>
    </div>
    
    
    <div class="jsite">
	<h3 id="mh"><a href="http://motthavenherald.com/">Mott Haven Herald</a></h3>
      <h5>Local news in the Bronx</h5>
      <?php
if (function_exists('SimplePieWP')) {
echo SimplePieWP('http://motthavenherald.com/feed/', array(
	'items' => 3,
	'cache_duration' => 1800
	));
}
?>
    </div>
    
    
    <div class="jsite">
	<h3 id="dnj"><a href="http://digitalnewsjournalist.com/">Digital News Journalist</a></h3>
      <h5>Tips, tools & resources</h5>
      <?php
if (function_exists('SimplePieWP')) {
echo SimplePieWP('http://digitalnewsjournalist.com/feed/', array(
	'items' => 3,
	'cache_duration' => 1800
	));
}
?>
    </div>
    
    <div class="jsite third">
	<h3 id="mag"><a href="http://219mag.com/">219 Mag</a></h3>
      <h5>A journal of issues & ideas</h5>
      <?php
if (function_exists('SimplePieWP')) {
echo SimplePieWP('http://219mag.com/feed/', array(
	'items' => 3,
	'cache_duration' => 1800
	));
}
?>
    </div>
  </div>
  
  <div class="clearfix" id="row3">
    <div id="dc">
        <h3>Dean's Corner</h3>
<a href="<?php bloginfo('url'); ?>/about/deans-corner/"><img src="<?php bloginfo('template_directory'); ?>/images/dean-shepard.jpg"></a>
Stephen B. Shepard is the founding dean of the Graduate School of Journalism at the City University of New York. From 1984 to 2005, he was editor-in-chief of Business Week, the largest business magazine in the world. <a href="<?php bloginfo('url'); ?>/about/deans-corner/">More &raquo;</a>

<ul style="padding: 10px 0 0 10px;">
<?php query_posts('cat=248&showposts=3'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul>
    </div>
      
    <div style="float: left; width: 240px; margin-right: 20px;">
<?php query_posts('cat=271&showposts=1'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php if(get_post_meta($post->ID, inside_story_thumb, true) != "") { ?>
<a href="<?php the_permalink(); ?>"><img src="/scripts/timthumb.php?src=<?php echo get_post_meta( $post->ID,"inside_story_thumb", $single=true ) ; ?>&h=250&w=200&zc=1&q=100" alt="" class="photo"></a>
<?php } ?>
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
    </div>
      
      
    <div style="float: left; width: 260px;">
<h3>Admissions and Student Affairs</h3>
For more information about the programs offered or how to apply to the Graduate School of Journalism, contact us at:
<h1>(646) 758-7700</h1>
<h3><a href="mailto:admissions@journalism.cuny.edu">admissions@journalism.cuny.edu</a></h3>
    </div>
  </div>
</div>
	
<?php get_footer(); ?>
