<?php
/*
Template Name: Page - News & Events
*/
?>
<style>
.featured {
    width:562px;
    height:500px;
    background:#eee !important;
    margin-bottom:20px;
}


.news-feed {
    width:295px;
    height:515px;
    margin-top:-20px;
    overflow-y:scroll;
    overflow-x:hidden;
    border-left:5px solid #eeeeee;
    border-bottom:5px solid #eeeeee;
}

.news-feed ul li {
    border-bottom:1px solid #eee;
    padding:10px 20px;
    width:100%;
    background:#fff;
}

.news-feed .header {
    padding:20px;
    margin:0;
    border-bottom:5px solid #eee;
}

</style>

<?php get_header(); ?>

<div class="wrap news-events">
	
    <div class="main">
        
        <div class="content left">
            
            <div class="featured left">
                
                Main content stuff.
        
            </div><!-- END .featured -->
            
            <div class="sidebar right standard">

                <div class="news-feed">                

                    <h3 class="header">The News Feed!</h3>
                    <ul>
                        <li>Item one!</li>
                        <li>Item two!</li>
                        <li>Item three blows.</li>
                        <li>Item one!</li>
                        <li>Item two!</li>
                        <li>Item three blows.</li>
                        <li>Item one!</li>
                        <li>Item two!</li>
                        <li>Item three blows.</li>
                        <li>Item one!</li>
                        <li>Item two!</li>
                        <li>Item three blows.</li>
                        <li>Item one!</li>
                        <li>Item two!</li>
                        <li>Item three blows.</li>
                    </ul>
                
                </div><!-- END .news-feed -->

            </div><!-- END .sidebar -->
        
            <div class="clear"></div>
            
            <div class="stuff-below">
                
                This is the stuff below!
                
            </div><!-- END .stuff-below -->
            
            <div class="clear"></div>       
        
        </div><!-- END .content -->
        
        <div class="clear"></div>
        
    </div><!-- END .main -->

</div><!-- END .wrap -->

<?php get_footer(); ?>