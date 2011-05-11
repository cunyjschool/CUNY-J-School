<?php
/*
Template Name: Page - News & Events
*/
?>
<style>
.content {
    width:512px;
}

.news-feed {
    width:350px;
    margin:-20px -20px -40px 0;
    border-left:1px solid #eeeeee;
}

.news-feed ul.feed li {
    border-bottom:1px solid #eee;
    padding:10px 20px;
    width:295px;
    background:#fff;
}

.news-feed ul.feed {
    margin-top:64px;
    height:1500px;
    overflow-y:scroll;
}

.news-feed h3.header {
    padding:20px;
    margin:0;
    width:310px;
    border-bottom:1px solid #eee;
    position:absolute;
    background: #f9f9f9;
}

.item-source {
    width:75px;
}

.item-source .source {
    color:#ff9900;
    font-weight:bold;
}

.item-source .date {
    color:#ccc;
}

.item-content a {
    color:#444;
}

.item-content {
    width:200px;
}

.item-content img {
    float:right;
    width:60px;
    margin-left:10px;
    border:1px solid #ccc;
}

.two-column {
    width:532px;
}

.two-column-item {
    width:246px;
    float:left;
    margin:10px 20px 0 0;
}

hr {
    width:512px;
    height:1px;
    margin:20px 0;
    border-top:0;
    border-left:0;
    border-right:0;
    border-bottom:1px dashed #eee;
}

.content a, .content a:hover {
    color:#0066CC;
}

.morelinks{
    margin-top:10px;
}

.video-thumbnails {
    width:512px !important;
    float:none!important;
}
.video-thumbnail{
    margin:10px 15px 0 0!important;
}

</style>

<?php get_header(); ?>

<div class="wrap news-events">
	
    <div class="main">
        
        <div class="content left">
            
            <h2>Featured News</h2>
            
            <div class="single-column">
                
                <div class="single-column-item">
                
                    <?php
            			$args = array(
            				'category_name' => 'featured-news',
            				'showposts' => 1
            			);
            			$featured_posts = new WP_Query( $args ); ?>

              		<?php if ( $featured_posts->have_posts() ) : ?>
            		<?php while ( $featured_posts->have_posts() ) : $featured_posts->the_post(); ?>

                        <div>
                        
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                            <?php the_excerpt(); ?>
                            
                        </div>
                    
                        <?php endwhile; else: ?><p>There are currently no stories.</p>
                
                    <?php endif; ?>
                
                </div><!-- END .single-column-item -->
            
            </div><!-- END .single-column -->
                
            <div class="two-column news-block">
                
                <?php
        			$args = array(
        				'category_name' => 'featured-news',
        				'showposts' => 2,
        				'offset' => 1
        			);
        			$featured_posts = new WP_Query( $args ); ?>

          		<?php if ( $featured_posts->have_posts() ) : ?>
        		<?php while ( $featured_posts->have_posts() ) : $featured_posts->the_post(); ?>

                    <div class="two-column-item">
                    
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                        <?php the_excerpt(); ?>
                        
                    </div>
                
                    <?php endwhile; else: ?><p>There are currently no stories.</p>
            
                <?php endif; ?>
                
                <div class="clear"></div>
                
                <div class="morelinks"><a href="<?php bloginfo('url'); ?>/category/featured-news/">More Featured News</a> | <a href="<?php bloginfo('url'); ?>/category/news/">All News</a></div>
            
            </div><!-- END .two-column -->
            
            <hr />
                
            <div class="single-column news-block">
                
                <h3>Video</h3>

                <div class="clearfix" id="featured-videos">

            		<div class="primary-video"></div>
            		
            		<div class="video-thumbnails"></div>
            		
            	</div>
            
            </div><!-- END .single-column -->
            
            <hr />
                
            <div class="two-column news-block">
                            
                <h3>Events</h3>                
                                
                <div class="two-column-item">

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

            		<div class="morelinks"><a href="<?php bloginfo('url'); ?>/events/">All Events</a> | <a href="<?php bloginfo('url'); ?>/admissions/information-sessions/">Info Sessions</a> | <a href="<?php bloginfo('url'); ?>/about/room-request/">Room Request</a></div>
            	</div>

            	<div style="clear:both;"></div>     

            </div><!-- END .two-column -->
                                        
        </div><!-- END .content -->
            
        <div class="news-feed right">

            <h3 class="header">CUNY J-School News Wire</h3>
            
            <?php
            if (function_exists('SimplePieWP')) {
                echo SimplePieWP(
                    array(
                    	'http://nycitynewsservice.com/category/top-stories/feed/',
                    	'http://journalism.cuny.edu/category/news/feed/',
                    	'http://roadtrip.journalism.cuny.edu/feed/',
                    	'http://newsinnovation.com/feed/',
                    	'http://boxscorebeat.com/feed/',
                    	'http://twitter.com/statuses/user_timeline/14345137.rss',
                    	'http://isnapny.com/feed/',
                        'http://219mag.com/feed/',
                        'http://www.motthavenherald.com/feed/',
                        'http://fort-greene.thelocal.nytimes.com/feed/',
                        'http://digitalnewsjournalist.com/feed/'
                    ), 
                    array(
                    	'items' => 50,
                    	'cache_duration' => 1800,
                    	'date_format' => 'j M Y',
                    	'template' => 'wire'
                    )
                );
            }

            ?>
        
        </div><!-- END .news-feed -->
    
        <div class="clear"></div>
        
    </div><!-- END .main -->

</div><!-- END .wrap -->

<?php get_footer(); ?>

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
					
					if ( key <= 3 ) {
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
		request_url += 'url=' + url + '&maxwidth=472&byline=false&title=false&portrait=false';
		jQuery.ajax({
			url: request_url,
			dataType: 'jsonp',
			success: function( data ) {
				var html = '';
				html += data.html;
				html += '<h4><a href="' + url + '">' + data.title + '</a></h4>';
				jQuery('#featured-videos .primary-video').empty().html( html );
			},
		});
		
	} // END cunyj_replace_primary_video()

	// Dynamically load the featured video viewer
	cunyj_load_featured_videos( 'http://vimeo.com/api/v2/channel/cunyjschool/videos.json' );

</script>