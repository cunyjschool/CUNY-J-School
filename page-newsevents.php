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
    color:#ff9900;
    font-weight:bold;
}

.item-content {
    width:200;
}

</style>

<?php get_header(); ?>

<div class="wrap news-events">
	
    <div class="main">
        
        <div class="content left">
            
            <div class="featured left">
                
                Main content stuff.
        
            </div><!-- END .featured -->
                
        </div><!-- END .content -->
            
        <div class="news-feed right">

            <h3 class="header">The News Feed!</h3>
            <ul class="feed">

        		<?php
        			$args = array(
        				'category_name' => 'featured-news',
        				'showposts' => -1
        			);
        			$news_posts = new WP_Query( $args ); ?>
        		<ul>
          		<?php if ( $news_posts->have_posts() ) : ?>
        		<?php while ( $news_posts->have_posts() ) : $news_posts->the_post(); ?>
        			<li class="news-item">
        				
    				    <div class="item-source left">
    				    
    				        <span class="source">NYCity News Service</span>
    				    
    				    </div>
    				    <div class="item-content right">
    				        
    				        <?php if ( has_post_thumbnail()) { 	   
        					   the_post_thumbnail(  array(60,60), array('class' => 'avatar')); 
        					}?>
    				        
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