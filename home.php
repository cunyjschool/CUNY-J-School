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
		<?php echo do_shortcode('[nggallery id=1 template="galleryview" images=0]'); ?>
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

		<?php $news_posts = new WP_Query(array('category_name'=>'news','showposts'=>4)); ?>
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

		<div class="morelinks" style="margin-top: 10px;"><a href="<?php bloginfo('url'); ?>/events/">All Events</a> | <a href="<?php bloginfo('url'); ?>/admissions/information-sessions/">Info Sessions</a> | <a href="<?php bloginfo('url'); ?>/about/room-request/">Room Request</a></div>
	</div><!-- /#events-home -->
	
	<div style="clear:both;"></div>

</div><!-- /.section -->
    
	<div class="clearfix" id="featured-videos">
		
		<div class="video-thumbnails">
			
		</div>
		
		<div class="primary-video">
		 
    	</div>
    
	</div><!-- END div#soc -->

  
	<div class="clearfix" id="jnet">
  
	<h3 class="section-title">Student Work</h3>
    
    <div class="jsite" id="clips-of-the-week" style="clear: both;">
		<h3 id="clips"><a href="<?php bloginfo('url'); ?>/category/clips-of-the-week/">Clips of the Week</a></h3>
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
    
    <div class="jsite" id="mott-haven-herald-posts">
		<h3 id="mh"><a href="http://motthavenherald.com/">Mott Haven Herald</a></h3>
		<h5>Local News in the Bronx</h5>
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

<script type="text/javascript">

	/**
	 * cunyj_load_featured_videos()
	 * Generate a featured video player for the homepage
	 */
	function cunyj_load_featured_videos( vimeo_channel_url ) {
		
		jQuery.ajax({
			url: vimeo_channel_url,
			dataType: 'jsonp',
			success: function( data ) {
				jQuery.each( data, function( key, video ) {
					// Add the first video to the primary viewer
					if ( key == 0 ) {
						cunyj_replace_primary_video( video.url );
					}
					
					if ( key <= 7 ) {
						var html = '';
						html += '<div class="video-thumbnail';
						if ( key == 0 ) {
							html += ' active';
						}
						html += '" id="' + video.url + '"">';
						html += '<img src="' + video.thumbnail_small + '" height="75px" width="100px" />';
						html += '</div>';
						
						jQuery('#featured-videos .video-thumbnails').append( html );
					}
				});
				
				jQuery('#featured-videos .video-thumbnail').click(function() {
					jQuery('.video-thumbnail').removeClass('active');
					var url = jQuery(this).attr('id');
					cunyj_replace_primary_video( url );
					jQuery(this).addClass('active');
				});
				
				jQuery('#featured-videos').show();
			}, 
		});
		
	} // END cunyj_load_featured_videos()
	
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

	// Dynamically load the featured video viewer
	cunyj_load_featured_videos( 'http://vimeo.com/api/v2/channel/cunyjschool/videos.json' );

	// Dynamically load network content on the homepage
	cunyj_load_blog_posts( 'http://motthavenherald.com/', 4, 'mott-haven-herald-posts' );
	cunyj_load_blog_posts( 'http://219mag.com/', 4, '219-mag-posts' );

</script>
	
<?php get_footer(); ?>
