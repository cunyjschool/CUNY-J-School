<?php get_header(); ?>

<div class="main">
	
	<div class="wrap">
		
		<div class="content">
			
			<div id="homepage-headlines-section" class="section">
				
			<?php
			$args = array(
				'category_name' => 'featured-news',
				'showposts' => 5,
			);
			$homepage_headlines = new WP_Query( $args );
			?>
		
			<div class="float-right homepage-headlines">
				<h3><a href="#">Headlines</a></h3>
				<ul>
				<?php if ( $homepage_headlines->have_posts() ) : ?>
				<?php while ( $homepage_headlines->have_posts() ) : $homepage_headlines->the_post(); ?>
			  		<li><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></li>
				<?php endwhile; else: ?>
				<li>There are currently no stories.</li>
				<?php endif; ?>
				</ul>
			</div>
			
			<div class="homepage-headlines-gallery">
				
				
			</div>
			
			</div><!-- .section#homepage-headlines-section -->
			
			<div class="section">
				
			</div>
		
		</div><!-- END .content -->
		
	</div><!-- END .wrap -->
	
	<div class="clear-both"></div>
	
</div><!-- END .main -->
	
<?php get_footer(); ?>
