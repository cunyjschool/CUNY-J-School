<?php
/*
Template Name: Page - 2011 Orientation
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">
	
	<div id="2010orientation">
		
	<div id="events" class="right">
		
		<h3>Upcoming Events</h3>
		
		<ul>
		
	</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    	<div class="page" id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
    
			<div class="entry">
      
				<?php the_content(); ?>
		
			</div>
		
		</div>

	<?php endwhile; endif; ?>
	
	</div>	
		
</div>


<?php get_footer(); ?>