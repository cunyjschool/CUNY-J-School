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
					<h3 class="latest-headlines-title"><a href="#">Latest Headlines</a></h3>
					<ul class="latest-headlines">
					<?php if ( $homepage_headlines->have_posts() ) : ?>
					<?php while ( $homepage_headlines->have_posts() ) : $homepage_headlines->the_post(); ?>
				  		<li><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></li>
					<?php endwhile; else: ?>
						<li>There aren't any stories currently.</li>
					<?php endif; ?>
					</ul>
				
					<h3><a href="#">How to Apply</a></h3>
				
				
				</div>
			
				<div class="homepage-headlines-gallery">
				
					<div class="homepage-headlines-excerpt">
						This is sample text that will appear as an overlay on the image. We can include a sentence or two, and then link to the story.
					</div>
				
					<img src="http://www.danielbachhuber.com/screenshots/20110424-newsgaminghack_db-1241_-_Version_2-20110426-144649.jpg" height="400px" width="600px" />
				
				</div>
			
			</div><!-- .home-page-item#homepage-headlines-section -->
			
			<div class="row">
				
				<div id="home-page-item-events" class="home-page-item">
					
				
				</div>
				
			</div>
		
		</div><!-- END .content -->
		
	</div><!-- END .wrap -->
	
	<div class="clear-both"></div>
	
</div><!-- END .main -->
	
<?php get_footer(); ?>
