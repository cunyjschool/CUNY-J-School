<?php get_header(); ?>

<div class="wrap">
	
	<!-- Pingdom check -->
	
	<div class="main" id="home">
	
	 <div class="content">
		
		<?php /* <div id="home-alert">
			<strong>Today and tomorrow:</strong> SABEW's 2010 Fall Conference, happening at the J-School. <a href="http://cunyatsabew.com/">Follow the coverage</a> or <a href="http://www.journalism.cuny.edu/live/">watch the livestream</a>.
		</div> */ ?>
	

<!-- Start Slideshow and Nav -->
  <div id="home-slideshow">
		<?php echo do_shortcode('[nggallery id=1 template="galleryview" images=0]'); ?>
  </div>
  
  <div id="nav-items">
	
    <div id="ad-ac">
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
		<a href="<?php bloginfo('url'); ?>/admissions/how-to-apply/">How to Apply</a>
    </div>
    
    <div id="ad-info">
		<a href="https://cunyjschool.wufoo.com/forms/information-request-form/">Request Info</a>
    </div>
  </div>
  
<!-- End Slideshow and Nav -->

	<div class="section">

	<div id="news-home">
		<div id="news">
			<h3>News <a href="<?php bloginfo('url'); ?>/category/news/feed/"><img src="<?php bloginfo('template_directory'); ?>/images/icons/feed_s16.png" height="16px" width="16px" alt="News Feed" class="feed" /></a></h3>

		<?php $news_posts = new WP_Query(array('category_name'=>'news','showposts'=>4)); ?>
  		<?php if ( $news_posts->have_posts() ) : while ( $news_posts->have_posts() ) : $news_posts->the_post(); ?>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

    	<?php endwhile; else: ?><p>There are currently no stories.</p>
		<?php endif; ?>
		
      	<div class="morelinks"><a href="<?php bloginfo('url'); ?>/category/news/">More News</a></div>

		</div>

	</div><!-- /#news-home -->

	
  	<div id="featured-home">
      <div id="fh-inner"><a href="http://www.nycitynewsservice.com/"><img src="<?php bloginfo('template_directory'); ?>/images/projects/nycitynewsservice_h200.png" height="50px" width="200px" alt="NY City News Service" /></a>
        <p><a href="http://www.nycitynewsservice.com/">Student-powered wire service</a></p>
      
    <?php
/* if (function_exists('SimplePieWP')) {
echo SimplePieWP('http://nycitynewsservice.com/category/top-stories/feed/', array(
	'items' => 4,
	'cache_duration' => 1800
	));
} */
	?>
    
    </div> 

<div id="fh-inner"><a href="http://fort-greene.thelocal.nytimes.com/"><img src="<?php bloginfo('template_directory'); ?>/images/projects/fort-greene_h200.jpg" height="50px" width="200px" alt="The Local" /></a>
<p><a href="http://fort-greene.thelocal.nytimes.com/">CUNY Graduate School of Journalism<br>with <img height="25" src="<?php bloginfo('template_directory'); ?>/images/logos/nytlogo379x64.gif" class="nyt-logo" alt="NYT logo" /></a></p>
</div>

    </div><!-- /#featured-home -->

    <div id="events-home">
		<h3>Events</h3>

		<?php 
		$args = array( 	'post_type'=>'cunyj_event',
						'showposts'=>4,
						'meta_key'=>'_cunyj_events_start_date',
						'order'=>'ASC',
						'orderby'=>'meta_value',
						'taxonomy'=>'cunyj_event_category',
						'term'=>'featured'
					);
		$events = new WP_Query($args);
		?>
		<ul>
		<?php if ( $events->have_posts() ) : while ( $events->have_posts() ) : $events->the_post(); ?>
		<li class="event"><a href="<?php the_permalink(); ?>">
			<?php 
			$start_date = get_post_meta( $post->ID,"_cunyj_events_start_date", true );
			$end_date = get_post_meta( $post->ID,"_cunyj_events_end_date", true );
			?>
			<div class="calendar-date">
		        <span class="month"><?php echo date_i18n('M', $start_date) ; ?></span>
		        <span class="day"><?php echo date_i18n('d', $start_date); ?><?php if (date_i18n('d', $start_date) != date_i18n('d', $end_date)) { echo '-' . date_i18n('d', $end_date); } ?></td>
		      </span>
			</div> 
			<h5><?php the_title(); ?></h5>
		</a></li>
		<?php endwhile; else: ?>
		<li>Check back soon for more upcoming events.</li>
		<?php endif; ?>
		</ul>

		<div class="morelinks" style="margin-top: 10px;"><a href="http://tech.journalism.cuny.edu/calendars/">Calendars</a> | <a href="<?php bloginfo('url'); ?>/admissions/information-sessions/">Info Sessions</a> | <a href="<?php bloginfo('url'); ?>/about/room-request/">Room Request</a></div>
	</div><!-- /#events-home -->
	
	<div style="clear:both;"></div>

</div><!-- /.section -->
    
  
  <div class="clearfix" id="soc">
    <div id="vimeo-player">
  		<object type="application/x-shockwave-flash" width="400" height="300" data="http://vimeo.com/hubnut/?user_id=cunyjschool&amp;color=00adef&amp;background=000000&amp;fullscreen=1&amp;slideshow=0&amp;stream=channel&amp;id=143532&amp;server=vimeo.com">	<param name="quality" value="best" />		<param name="allowfullscreen" value="true" />		<param name="allowscriptaccess" value="always" />	<param name="scale" value="showAll" />	<param name="movie" value="http://vimeo.com/hubnut/?user_id=cunyjschool&amp;color=00adef&amp;background=000000&amp;fullscreen=1&amp;slideshow=0&amp;stream=channel&amp;id=143532&amp;server=vimeo.com" /></object>
    </div>
    
    <div id="flick-twit">
		<div id="flick">
			<?php 
			if ( function_exists('get_flickrRSS') ) {
				$args = array(	'num_items' => 12,
								'type' => 'user',
								'id' => '12817495@N03',
								'do_cache' => true,
							);
				get_flickrRSS( $args ); 
			}
			?>
		</div>
	</div>
	
  </div><!-- END - #soc -->
  
  
  <div class="clearfix" id="socialnet">
<ul>
  <li id="hfacebook"><a href="http://www.facebook.com/cunyjschool">Facebook</a></li>
  <li id="htwitter"><a href="http://twitter.com/cunyjschool/">Twitter</a></li>
  <li id="htwitter"><a href="<?php bloginfo('url'); ?>/twitter-lists/">Twitter Lists</a></li>
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
    
    <div class="jsite" id="clips-of-the-week" style="clear: both;">
		<h3 id="clips"><a href="<?php bloginfo('url'); ?>/category/student-work/">Clips of the Week</a></h3>
		<h5>Student work</h5>
		<ul>
		<?php
		$args = array(	'category_name'=>'clips-of-the-week',
						'showposts'=>3
				);
		$student_clips = new WP_Query( $args ); ?>
		<?php if ( $student_clips->have_posts() ) : while ( $student_clips->have_posts() ) : $student_clips->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
		<?php endwhile; else: ?>
			<li>There are currently no stories.</li>
		<?php endif; ?>
		</ul>
	</div>
    
    <div class="jsite dynamic-content-load" id="news-innovation-posts">
		<h3 id="ni"><a href="http://newsinnovation.com/">NewsInnovation</a></h3>
		<h5>New Business Models For News</h5>
		<?php /* Content is loaded dynamically with jQuery */ ?>
	</div>
    
    <div class="jsite third" id="write-stuff-posts">
		<h3 id="ws"><a href="http://writestuff.journalism.cuny.edu/">The Write Stuff</a></h3>
		<h5>Tips to Improve Your Writing</h5>
		<?php /* Content is loaded dynamically with jQuery */ ?>
    </div>
    
    
    <div class="jsite" id="mott-haven-herald-posts">
		<h3 id="mh"><a href="http://motthavenherald.com/">Mott Haven Herald</a></h3>
		<h5>Local News in the Bronx</h5>
		<?php /* Content is loaded dynamically with jQuery */ ?>		
	</div>
    
    <div class="jsite" id="digital-news-journalist-posts">
		<h3 id="dnj"><a href="http://digitalnewsjournalist.com/">Digital News Journalist</a></h3>
		<h5>Tips, Tools &amp; Resources</h5>
		<?php /* Content is loaded dynamically with jQuery */ ?>
    </div>
    
	<div class="jsite third" id="219-mag-posts">
		<h3 id="mag"><a href="http://219mag.com/">219 Mag</a></h3>
		<h5>A Journal of Issues &amp; Ideas</h5>
		<?php /* Content is loaded dynamically with jQuery */ ?>
	</div>
	
  </div><!-- END - #jnet -->
  
	<div class="clearfix" id="row3">
	
    <div id="dc">
		<h3><a href="<?php bloginfo('url'); ?>/about/deans-corner/">Dean's Corner</a></h3>
		<p><a href="<?php bloginfo('url'); ?>/about/deans-corner/"><img src="<?php bloginfo('template_directory'); ?>/images/dean-shepard.jpg"></a>
Stephen B. Shepard is the founding dean of the Graduate School of Journalism at the City University of New York. From 1984 to 2005, he was editor-in-chief of Business Week, the largest business magazine in the world. <a href="<?php bloginfo('url'); ?>/about/deans-corner/">More &raquo;</a></p>

		<ul>
		<?php $deans_corner = new WP_Query( array('category_name'=>"Dean's Corner",'showposts'=>3) ); ?>
		<?php if ( $deans_corner->have_posts() ) : while ( $deans_corner->have_posts() ) : $deans_corner->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
		<?php endwhile; else: ?>
			<li>There are currently no stories.</li>
		<?php endif; ?>
		</ul>
    </div>
      
	<div id="inside-story">
		<?php $inside_story = new WP_Query( array('category_name'=>'Inside Story','showposts'=>1 ) ); ?>
		<?php if ( $inside_story->have_posts() ) : while ( $inside_story->have_posts() ) : $inside_story->the_post(); ?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if ( $inside_story_thumb = get_post_meta( $post->ID, 'inside_story_thumb', true ) ) { ?>
				<a href="<?php the_permalink(); ?>"><img src="<?php echo $inside_story_thumb; ?>" height="250px" alt="" class="photo"></a>
			<?php } ?>
		<?php endwhile; else: ?>
				<p>There are currently no stories.</p>
		<?php endif; ?>
    </div>
      
    <div id="admissions-student-affairs" style="float: left; width: 260px;">
		<h3><a href="<?php bloginfo('url'); ?>/admissions/">Admissions and Student Affairs</a></h3>
		<p>For more information about the programs offered or how to apply to the Graduate School of Journalism, contact us at:</p>
		<ul>
			<li>(646) 758-7700</li>
			<li><a href="mailto:admissions@journalism.cuny.edu">admissions@journalism.cuny.edu</a></li>
		</ul>
    </div>
	
	</div>

  </div>

	</div>

</div>
	
<?php get_footer(); ?>
