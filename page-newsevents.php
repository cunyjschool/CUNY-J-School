<?php
/*
Template Name: Page - News & Events
*/
?>
<style>
.featured {
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
    height:100%;
    overflow-y:scroll;
}

.news-feed h3.header {
    padding:20px;
    margin:0;
    width:310px;
    border-bottom:1px solid #eee;
    position:absolute;
    background:#f9f9f9;
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
    width:200;
}

.item-content img {
    float:right;
    width:60px;
    margin-left:10px;
    border:1px solid #ccc;
}

.top-story {
    border-bottom:1px dashed #eee;
    padding-bottom:10px;
}

.featured-stories {
    margin-left:-20px;
}

.stories {
    width:246px;
    float:left;
    margin:10px 0 0 20px;
    padding-bottom:10px;
    border-bottom:1px dashed #eee;
}

</style>

<?php get_header(); ?>

<div class="wrap news-events">
	
    <div class="main">
        
        <div class="content left">
            
            <div class="featured left">
                
                <h2>Featured News</h2>

                <div class="top-story">
                
                    <?php
            			$args = array(
            				'category_name' => 'featured-news',
            				'showposts' => 1
            			);
            			$featured_posts = new WP_Query( $args ); ?>

              		<?php if ( $featured_posts->have_posts() ) : ?>
            		<?php while ( $featured_posts->have_posts() ) : $featured_posts->the_post(); ?>

                        <div>
                        
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                            <?php the_excerpt(); ?>
                            
                        </div>
                    
                        <?php endwhile; else: ?><p>There are currently no stories.</p>
                
                    <?php endif; ?>
                
                </div><!-- END .top-story -->
                
                <div class="featured-stories">
                    
                    <?php
            			$args = array(
            				'category_name' => 'featured-news',
            				'showposts' => 2,
            				'offset' => 1
            			);
            			$featured_posts = new WP_Query( $args ); ?>

              		<?php if ( $featured_posts->have_posts() ) : ?>
            		<?php while ( $featured_posts->have_posts() ) : $featured_posts->the_post(); ?>

                        <div class="stories">
                        
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                            <?php the_excerpt(); ?>
                            
                        </div>
                    
                        <?php endwhile; else: ?><p>There are currently no stories.</p>
                
                    <?php endif; ?>
                    
                    <div class="clear"></div>
                
                </div><!-- END .featured-stories -->
                
                <div class="video">
                                    
                    <div style="margin:20px 0;width:100%;background:#000;height:300px;"></div>
                    
                    <?php
                        $args = array(
                            'category_name' => 'news',
                            'category__not_in' => 'featured-news',
                            'showposts' => 10
                        );
                        $news_posts = new WP_Query( $args ); ?>

                    <?php if ( $news_posts->have_posts() ) : ?>
                    <?php while ( $news_posts->have_posts() ) : $news_posts->the_post(); ?>

                        <?php if ( has_post_thumbnail()) {     
                           the_post_thumbnail(  array(60,60), array('class' => 'avatar')); 
                        }?>

                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                        <div class="clear"></div>

                    <?php endwhile; else: ?>
                        <p>There are currently no stories.</p>
                    <?php endif; ?>        

                </div><!-- END .video -->
                        
            </div><!-- END .featured -->
                
        </div><!-- END .content -->
            
        <div class="news-feed right">

            <h3 class="header">CUNY J-School News Wire</h3>
            <?php
            if (function_exists('SimplePieWP')) {
                echo SimplePieWP(
                    array(
                    	'http://nycitynewsservice.com/category/top-stories/feed/',
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