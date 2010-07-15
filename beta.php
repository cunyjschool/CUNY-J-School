<?php
/*
Template Name: Homepage - Beta
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

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
  <li><h3><a href="/academics/">Academics</a></h3></li>
  <li><a href="/academics/subject-concentrations/">Subjects</a></li>
  <li><a href="/academics/course-descriptions/">Course Descriptions</a></li>
  <li><a href="/academics/summer-internship/">Summer Internship</a></li>
</ul>

<ul id="admiss">
  <li><h3><a href="/admissions/">Admissions</a></h3></li>
  <li id="profile"><a href="/admissions/frequently-asked-questions/">FAQs</a></li>
  <li id="sessions"><a href="/admissions/information-sessions/">Info Sessions</a></li>
  <li id="tuition"><a href="/admissions/tuition-and-fees/">Tuition & Fees</a></li>
</ul>
  

    </div>
    
    <div id="ad-app">
    <h3><a href="/admissions/how-to-apply/">How to Apply</a></h3>
    </div>
    
    <div id="ad-info">
    <h3><a href="https://cunyjschool.wufoo.com/forms/information-request-form/">Request Info</a></h3>
    </div>
  </div>
  
  

  
  <div class="clearfix" id="news-home">
    <div id="news">
  <h3>News <img src="<?php bloginfo('template_directory'); ?>/img/icons/feed.png" alt="News Feed" class="feed" /></a></h3>
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

      <div class="morelinks" style="margin-top: 15px;"><a href="/category/news/">More News</a> | <a href="">In The News</a>
      </div>
    </div>
  
  
    <div id="events-home">
  <h3>Events <a href="http://www.journalism.cuny.edu/category/events/feed/"><img src="<?php bloginfo('template_directory'); ?>/img/icons/feed.png" alt="Events Feed" class="feed" /></a></h3>
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
    <?php endwhile; else: ?><p>Check back soon for more upcoming events.</p>
<?php endif; ?>

      <div class="morelinks" style="margin-top: 10px;"><a href="/category/events/">More Events</a> | <a href="http://tech.journalism.cuny.edu/calendars/">Calendars</a> | <a href="/admissions/information-sessions/">Info Sessions</a> | <a href="/about/room-request/">Room Request</a>
      </div>
    </div>
    
    <div id="featured-home">
      <div id="fh-inner"><a href="http://www.nycitynewsservice.com/"><img src="<?php bloginfo('template_directory'); ?>/img/news-service.jpg" alt="NYCity News Service" /></a>
        <div style="color: #999; font-size: 11px; text-transform: uppercase; margin: 3px 0 5px 0;">Student-powered wire service</div>
      
    <?php
echo SimplePieWP('http://nycitynewsservice.com/category/top-stories/feed/', array(
	'items' => 5,
	'cache_duration' => 1800
	));
	?>
    
    </div> 
    </div>
  </div>
  
  
  
  <div class="clearfix" id="soc">
    <div style="float: left; width: 400px;">
  <object type="application/x-shockwave-flash" width="400" height="300" data="http://vimeo.com/hubnut/?user_id=cunyjschool&amp;color=00adef&amp;background=000000&amp;fullscreen=1&amp;slideshow=0&amp;stream=uploaded_videos&amp;id=&amp;server=vimeo.com">	<param name="quality" value="best" />		<param name="allowfullscreen" value="true" />		<param name="allowscriptaccess" value="always" />	<param name="scale" value="showAll" />	<param name="movie" value="http://vimeo.com/hubnut/?user_id=cunyjschool&amp;color=00adef&amp;background=000000&amp;fullscreen=1&amp;slideshow=0&amp;stream=uploaded_videos&amp;id=&amp;server=vimeo.com" /></object>
    </div>
    
    <div id="flick-twit">
      <div id="flick">
<a href="http://flickr.com/photos/cunyjschool/"><img src="<?php bloginfo('template_directory'); ?>/img/icon-flickr.png" alt="CUNY J-School on Flickr" id="flickr-icon" /></a>
	  <div>
<?php get_flickrRSS(array(
    'num_items' => 4)); 
			?>
        </div>
      </div>
    
      <div id="twit">
      <a href="http://twitter.com/cunyjschool"><img src="<?php bloginfo('template_directory'); ?>/img/icon-twitter.png" alt="CUNY J-School on Twitter" /></a>

<?php
echo SimplePieWP('http://twitter.com/statuses/user_timeline/14345137.rss', array(
	'items' => 1,
	'cache_duration' => 1800
	));
?>

      </div>
    </div>
  </div>
  
  
  <div class="clearfix" id="socialnet">
<ul>
  <li id="hfacebook"><a href="http://www.facebook.com/home.php#/pages/New-York-NY/CUNY-Graduate-School-of-Journalism/17117865082?ref=ts">Facebook</a></li>
  <li id="htwitter"><a href="http://twitter.com/cunyjschool/">Twitter</a></li>
  <li id="hyoutube"><a href="http://www.youtube.com/user/cunyjschool">YouTube</a></li>
  <li id="hvimeo"><a href="http://vimeo.com/cunyjschool/">Vimeo</a></li>
  <li id="hlinkedin"><a href="http://www.linkedin.com/groups?gid=130402">LinkedIn</a></li>
  <li id="hflickr"><a href="http://www.flickr.com/photos/cunyjschool/">Flickr</a></li>
</ul>
  </div>


  
  <div class="clearfix" id="jnet">
  
<h4 style="float: left; padding-bottom: 20px;">CUNY J-School Network</h4>

<h4 style="float: right;">View All Recent Activity on the <a href="/wire/">Wire &raquo;</a></h4>

    <div class="jsite" style="clear: both;">
    <h3 id="ns"><a href="http://nycitynewsservice.com/">NYCity News Service</a></h3>
       <h5>Student-powered, multi-media wire service</h5>
      <?php
echo SimplePieWP('http://nycitynewsservice.com/category/top-stories/feed/', array(
	'items' => 5,
	'cache_duration' => 1800
	));
	?>
    </div>
    
    
    <div class="jsite">
    <h3 id="bsb"><a href="http://boxscorebeat.com/">BoxScoreBeat</a></h3>
       <h5>A look at sports journalism</h5>
      <?php
echo SimplePieWP('http://boxscorebeat.com/feed/', array(
	'items' => 4,
	'cache_duration' => 1800
	));
	?>
    </div>
    
    
    <div class="jsite third">
    <h3 id="rt"><a href="http://roadtrip.journalism.cuny.edu/">RoadTrip</a></h3>
      <h5>Visit us on the road</h5>
      <?php
echo SimplePieWP('http://roadtrip.journalism.cuny.edu/feed/', array(
	'items' => 3,
	'cache_duration' => 1800
	));
	?>  
    </div>
    
    
    <div class="jsite">
    <h3 id="clips"><a href="http://www.journalism.cuny.edu/category/student-work/">Clips of the Week</a></h3>
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
echo SimplePieWP('http://newsinnovation.com/feed/', array(
	'items' => 4,
	'cache_duration' => 1800
	));
	?>
    </div>
    
    
    <div class="jsite third">
	<h3 id="ws"><a href="http://blogs.journalism.cuny.edu/writestuff/">The Write Stuff</a></h3>
      <h5>tips to improve your writing</h5>
      <?php
echo SimplePieWP('http://blogs.journalism.cuny.edu/writestuff/feed/', array(
	'items' => 4,
	'cache_duration' => 1800
	));
?>
    </div>
    
    
    <div class="jsite">
	<h3 id="mh"><a href="http://motthavenherald.com/">Mott Haven Herald</a></h3>
      <h5>Local news in the Bronx</h5>
      <?php
echo SimplePieWP('http://motthavenherald.com/feed/', array(
	'items' => 3,
	'cache_duration' => 1800
	));
?>
    </div>
    
    
    <div class="jsite">
	<h3 id="dnj"><a href="http://digitalnewsjournalist.com/">Digital News Journalist</a></h3>
      <h5>Tips, tools & resources</h5>
      <?php
echo SimplePieWP('http://digitalnewsjournalist.com/feed/', array(
	'items' => 3,
	'cache_duration' => 1800
	));
?>
    </div>
    
    <div class="jsite third">
	<h3 id="mag"><a href="http://219mag.com/">219 Mag</a></h3>
      <h5>A journal of issues & ideas</h5>
      <?php
echo SimplePieWP('http://219mag.com/feed/', array(
	'items' => 3,
	'cache_duration' => 1800
	));
?>
    </div>
  </div>
  
  <div class="clearfix" id="row3">
    <div id="dc">
        <h3>Dean's Corner</h3>
<a href="/about/deans-corner/"><img src="http://www.journalism.cuny.edu/wp-content/themes/cunyjschool/img/dean-shepard.jpg"></a>
Stephen B. Shepard is the founding dean of the Graduate School of Journalism at the City University of New York. From 1984 to 2005, he was editor-in-chief of Business Week, the largest business magazine in the world. <a href="/about/deans-corner/">More &raquo;</a>
        <div class="morelinks" style="margin-top: 10px;"><a href="/about/deans-corner/">About Dean Shepard</a> | <a href="/docs/nieman-article.pdf">Nieman Reports Article</a> [PDF]
        </div>
      </div>
      
      <div style="float: left; width: 300px;">
<h3>Office of Admissions and Student Affairs</h3>
For more information about the programs offered or how to apply to the Graduate School of Journalism, contact us at:
<h1>(646) 758-7700</h1>
<h3><a href="mailto:admissions@journalism.cuny.edu">admissions@journalism.cuny.edu</a></h3>
      </div>
    </div>
 
  </div>
</div>
	
<?php get_footer(); ?>
