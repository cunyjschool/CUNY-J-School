<?php get_header(); ?>

<div class="main">
	
	<div class="wrap">
		
		<div class="content">
			
			<div id="home-page-item-headlines" class="home-page-item row">
				
				<?php
				$args = array(
					'category_name' => 'featured-news',
					'showposts' => 4,
				);
				$homepage_headlines = new WP_Query( $args );
				?>
		
				<div class="homepage-headlines">
					<h3 class="latest-headlines-title button"><a href="#">J-School Headlines</a></h3>
					<ul class="latest-headlines">
					<?php if ( $homepage_headlines->have_posts() ) : ?>
					<?php while ( $homepage_headlines->have_posts() ) : $homepage_headlines->the_post(); ?>
				  		<li><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></li>
					<?php endwhile; else: ?>
						<li>There aren't any stories currently.</li>
					<?php endif; ?>
					</ul>
					
					<h3 class="button"><a href="<?php bloginfo('url'); ?>/admissions/how-to-apply/">How to Apply</a></h3>
					<ul class="academic-resources">
						<li class="academic-subjects">
							<a href="#">Academics</a>
							<ul class="sub-navigation">
								<li><a href="#">Subjects</a></li>
								<li><a href="#">Course Descriptions</a></li>								
								<li><a href="#">Summer Internship</a></li>
								<li><a class="highlight" href="#">Entrepreneurial Journalism</a></li>
							</ul>															
						</li>
						<li class="course-descriptions">
							<a href="#">Admissions</a>
							<ul class="sub-navigation">
								<li><a href="#">FAQs</a></li>								
								<li><a href="#">Info Sessions</a></li>								
								<li><a href="#">Tuition &amp; Fees</a></li>
							</ul>															
						</li>	
					</ul>
				
				</div>
				
				<div class="homepage-how-to-apply">
					<h3 class="button"><a href="#">Sign up for updates</a></h3>
				</div>
			
				<div class="homepage-headlines-gallery">
				
					<div class="homepage-headlines-excerpt">
						This is sample text that will appear as an overlay on the image. We can include a sentence or two, and then link to the story.
					</div>
				
					<img src="http://www.danielbachhuber.com/screenshots/20110424-newsgaminghack_db-1241_-_Version_2-20110426-144649.jpg" height="400px" width="600px" />
				
				</div><!-- END .homepage-headlines-gallery -->
			
			</div><!-- .home-page-item#homepage-headlines-section -->
			
			<div class="row">
				
				<div id="home-page-item-events" class="home-page-item">
					
					<div class="home-page-featured-event float-left home-page-event">
					
					<?php 
						$args = array( 	
							'post_type' => 'cunyj_event',
							'showposts' => 1,
							'meta_key' => '_cunyj_events_start_date',
							'order' => 'ASC',
							'orderby' => 'meta_value',
							'taxonomy' => 'cunyj_event_category',
							'term' => 'featured'
						);
						$featured_event = new WP_Query( $args );
					?>
					
					<?php if ( $featured_event->have_posts() ) : while ( $featured_event->have_posts() ) : $featured_event->the_post(); ?>				
					<?php 
						$start_date = get_post_meta( get_the_ID(),"_cunyj_events_start_date", true );
						$end_date = get_post_meta( get_the_ID(),"_cunyj_events_end_date", true );
					?>
					<div class="event-item">
						<div class="event-item-date">
				        	<span class="event-item-month"><?php echo date_i18n('M', $start_date) ; ?></span>
					        <span class="event-item-day"><?php echo date_i18n('d', $start_date); ?><?php if (date_i18n('d', $start_date) != date_i18n('d', $end_date)) { echo '-' . date_i18n('d', $end_date); } ?></span>
						</div> 
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="entry"><?php the_excerpt(); ?></div>
					</div>
					<?php endwhile; else: ?>
						<div class="message info">There is no lead featured event at this time.</div>
					<?php endif; ?>
					
					</div><!-- END .home-page-featured-event -->
					
					<div class="home-page-all-events float-right">
						
					<?php 
						$args = array( 	
							'post_type' => 'cunyj_event',
							'showposts' => 4,
							'offset' => 1,
							'meta_key' => '_cunyj_events_start_date',
							'order' => 'ASC',
							'orderby' => 'meta_value',
							'taxonomy' => 'cunyj_event_category',
							'term' => 'featured'
						);
						$all_events = new WP_Query( $args );
					?>
					
					<ul>
					<?php if ( $all_events->have_posts() ) : while ( $all_events->have_posts() ) : $all_events->the_post(); ?>				
					<?php 
						$start_date = get_post_meta( get_the_ID(),"_cunyj_events_start_date", true );
						$end_date = get_post_meta( get_the_ID(),"_cunyj_events_end_date", true );
					?>
					<li class="event-item">
					<div class="event-item-date float-left">
				        <span class="event-item-month"><?php echo date_i18n('M', $start_date) ; ?></span>
				        <span class="event-item-day"><?php echo date_i18n('d', $start_date); ?><?php if (date_i18n('d', $start_date) != date_i18n('d', $end_date)) { echo '-' . date_i18n('d', $end_date); } ?></span>
					</div> 
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="clear-both"></div>
					</li>
					<?php endwhile; else: ?>
						<li><div class="message info">There is no lead featured event at this time.</div></li>
					<?php endif; ?>
					</ul>
					
					</div><!-- END .home-page-featured-event -->
					
					<div class="clear-both"></div>
					
				</div><!-- END .home-page-item-events -->
				
			</div>
		
		</div><!-- END .content -->
		
	</div><!-- END .wrap -->
	
	<div class="clear-both"></div>
	
</div><!-- END .main -->
	
<?php get_footer(); ?>
