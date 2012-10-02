<?php get_header(); ?>

<div class="wrap">
	
	<!-- Pingdom check -->
	
	<div class="main" id="home">
	
	 <div class="content">
		
		<?php
		if ( isset( $cunyj->options['enable_announcement'] ) && $cunyj->options['enable_announcement'] ) {
			echo '<div id="home-alert">' . $cunyj->options['homepage_announcement'] . '</div>';
		} 
		?>

<!-- Start Slideshow and Nav -->
  <div id="home-slideshow">
		<?php echo do_shortcode('[SlideDeck2 id=16724]'); ?>
  </div>
  
<div id="nav-items">
	
    <div id="ad-ac">
	<ul id="acad">
  		<li><h3><a href="<?php bloginfo('url'); ?>/academics/">Academics</a></h3></li>
		<li><a href="<?php bloginfo('url'); ?>/academics/subject-concentrations/">Subjects</a></li>
		<li><a href="<?php bloginfo('url'); ?>/academics/course-descriptions/">Course Descriptions</a></li>
		<li><a href="<?php bloginfo('url'); ?>/academics/entrepreneurial-journalism/">Entrepreneurial Journalism</a></li>		
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

	<div id="ad-social">
		<ul>
			<li><a class="facebook" href="http://facebook.com/cunyjschool">Fan us on Facebook</a></li>
			<li><a class="twitter" href="http://twitter.com/cunyjschool">Follow us on Twitter</a></li>
		</ul>
	</div>

</div>
  
<!-- End Slideshow and Nav -->

	<div class="section">

	<div id="news-home">
		<div id="news">
			<h3>News <a href="<?php bloginfo('url'); ?>/category/news/feed/"><img src="<?php bloginfo('template_directory'); ?>/images/icons/feed_s16.png" height="16px" width="16px" alt="News Feed" class="feed" /></a></h3>

		<?php
			$args = array(
				'category_name' => 'featured-news',
				'showposts' => 5
			);
			$news_posts = new WP_Query( $args ); ?>
		<ul>
  		<?php if ( $news_posts->have_posts() ) : ?>
		<?php while ( $news_posts->have_posts() ) : $news_posts->the_post(); ?>
			<li class="news-item">
				<a href="<?php the_permalink(); ?>">
				<h4><?php the_title(); ?></h4>
				</a>
			</li>
    	<?php endwhile; else: ?>
			<li>There are currently no stories.</li>
		<?php endif; ?>
		</ul>
		
      	<div class="morelinks"><a href="<?php bloginfo('url'); ?>/category/news/">More News</a></div>

		</div>

	</div><!-- /#news-home -->
	
	<div id="featured-home">
		
		<a href="http://nycitynewsservice.com/">
		<div class="fh-inner" id="nycitynewsservice">
        	<p class="description">Student-powered wire service</p>
    	</div>
		</a>

		<a href="http://fort-greene.thelocal.nytimes.com/">
		<div class="fh-inner" id="nytlocal">
			<p class="description">CUNY Graduate School of Journalism<br>with <img height="25" src="<?php bloginfo('template_directory'); ?>/images/logos/nytlogo379x64.gif" class="nyt-logo" alt="NYT logo" /></p>
		</div></a>

		<a href="http://voicesofny.org/">
		    <div class="fh-inner" id="voicesofny">
		    </div>
		</a>
		<a href="http://towknight.org/">
		    <div class="fh-inner" id="towknight">
		    </div>
		</a>
		
	</div><!-- /#featured-home -->

    <div id="events-home">
		<h3>Events <a href="<?php bloginfo('url'); ?>/feed/?post_type=cunyj_event"><img src="<?php bloginfo('template_directory'); ?>/images/icons/feed_s16.png" height="16px" width="16px" alt="News Feed" class="feed" /></a></h3>

		<?php 
		$args = array( 	'post_type'=>'cunyj_event',
						'showposts'=>5,
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

		<div class="morelinks" style="margin-top: 10px;"><a href="<?php bloginfo('url'); ?>/events/">All Events</a> | <a href="<?php bloginfo('url'); ?>/admissions/information-sessions/">Info Sessions</a> | <a href="http://tech.journalism.cuny.edu/room-reservation-request/">Room Request</a></div>
	</div><!-- /#events-home -->
	
	<div style="clear:both;"></div>

</div><!-- /.section -->

  
	<div class="clearfix" id="jnet">
  
	<h3 class="section-title">Student Work</h3>
    
    <div class="jsite" id="nycity-news-service-posts">
		<a href="http://nycitynewsservice.com/"><img src="<?php bloginfo('template_directory'); ?>/images/pages/home/nycns.png" width="230px" /></a>
		<h3 id="nycns"><a href="http://nycitynewsservice.com/">NYCity News Service</a></h3>
		<h5>Student-Powered Wire Service</h5>
		<?php /* Content is loaded dynamically with jQuery */ ?>
	</div>
    
    <div class="jsite" id="video-storytelling-web-posts">
		<a href="http://vsw.journalism.cuny.edu/"><img src="<?php bloginfo('template_directory'); ?>/images/pages/home/vsw.png" width="230px" /></a>
		<h3 id="vsw"><a href="http://vsw.journalism.cuny.edu/">Video Storytelling for Web</a></h3>
		<h5>Character-Driven Visual Narratives</h5>
		<ul>
			<li><a href="http://vsw.journalism.cuny.edu/new-york-stories-of-amazing-people-spring-2012/">New York Stories of Amazing People</a></li>
			<li><a href="http://vsw.journalism.cuny.edu/new-york-stories-of-fascinating-issues-fall-2011/">New York Stories of Fascinating Issues</a></li>
			<li><a href="http://vsw.journalism.cuny.edu/new-york-stories-of-interesting-places-fall-2011/">New York Stories of Interesting Places</a></li>
			<li><a href="http://vsw.journalism.cuny.edu/blog/">What's New?</a></li>
		</ul>
	</div>

	<div class="jsite third" id="219-tv-magazine-posts">
		<a href="http://219tvmagazine.journalism.cuny.edu/"><img src="<?php bloginfo('template_directory'); ?>/images/pages/home/219tv.png" width="230px" /></a>
		<h3 id="mag"><a href="http://219tvmagazine.journalism.cuny.edu/">219 West TV Magazine</a></h3>
		<h5>Covering Stories Around NYC</h5>
		<?php /* Content is loaded dynamically with jQuery */ ?>
	</div>
	
	</div><!-- END - #jnet -->
  
	</div>

	</div>

</div>

<script type="text/javascript">
	
	/**
	 * cunyj_replace_primary_video()
	 */
	function cunyj_replace_primary_video( url ) {
		
		var request_url = 'http://vimeo.com/api/oembed.json?';
		request_url += 'url=' + url + '&maxwidth=550&byline=false&title=false&portrait=false';
		jQuery.ajax({
			url: request_url,
			dataType: 'jsonp',
			success: function( data ) {
				var html = '';
				html += data.html;
				html += '<h3><a href="' + url + '">' + data.title + '</a></h3>';
				jQuery('#featured-videos .primary-video').empty().html( html );
			},
		});
		
	} // END cunyj_replace_primary_video()

	// Dynamically load network content on the homepage
	cunyj_load_blog_posts( 'http://nycitynewsservice.com/', 4, 'nycity-news-service-posts' );	
	cunyj_load_blog_posts( 'http://219tvmagazine.journalism.cuny.edu/', 4, '219-tv-magazine-posts' );

</script>
	
<?php get_footer(); ?>
