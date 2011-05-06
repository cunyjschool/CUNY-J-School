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
    border-left:3px solid #eeeeee;
}

.news-feed ul.feed li {
    border-bottom:1px solid #eee;
    padding:10px 20px;
    width:295px;
    background:#fff;
}

.news-feed ul.feed {
    margin-top:64px;
    height:1000px;
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
                        
            </div><!-- END .featured -->
                
        </div><!-- END .content -->
            
        <div class="news-feed right">

            <h3 class="header">CUNY J-School News Feed</h3>
            <ul class="feed">

        		<?php
        			$args = array(
        				'category_name' => 'news',
        				'showposts' => -1
        			);
        			$news_posts = new WP_Query( $args ); ?>

          		<?php if ( $news_posts->have_posts() ) : ?>
        		<?php while ( $news_posts->have_posts() ) : $news_posts->the_post(); ?>
        			<li class="news-item">
        				
    				    <div class="item-source left">
    				    
    				        <span class="source">NYCity News Service</span><br />
    				        <span class="date"><?php the_date('M j, Y') ?></span>
    				    
    				    </div>
    				    <div class="item-content right">
    				        
    				        <?php if ( has_post_thumbnail()) { 	   
        					   the_post_thumbnail(  array(60,60), array('class' => 'avatar')); 
        					}?>
        					
        					<img src="http://farm6.static.flickr.com/5006/5285876471_06ff1d64fe_s.jpg" />
    				        
    				        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    				    
    				    </div>
    				    
    				    <div class="clear"></div>
        				
        			</li>
            	<?php endwhile; else: ?>
        			<li>There are currently no stories.</li>
        		<?php endif; ?>

            </ul>
        
        </div><!-- END .news-feed -->
    
        <div class="clear"></div>
        
    </div><!-- END .main -->

</div><!-- END .wrap -->

<?php get_footer(); ?>