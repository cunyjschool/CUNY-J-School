<?php
/*
Template Name: Page - 2011 Orientation
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div id="main">
	
	
	
	<div id="orientation2010">
		
	<div id="cunyj_event-sidebar" class="sidebar right large">
		
		<h3><a href="/events/faststart-orientation-for-the-class-of-2011/">FastStart Orientation Schedule</a></h3>
		<?php 
		$current_time = date_i18n('U', time());		
		$args = array( 	'post_type'=>'cunyj_event',
						'showposts'=>5,
						'meta_key'=>'_cunyj_events_start_date',
						'order'=>'ASC',
						'orderby'=>'meta_value',
						'meta_compare' => '>',
						'meta_value' => $current_time,
						'taxonomy'=>'cunyj_event_category',
						'term'=>'class-of-2011-orientation'
					);
		$upcoming_events = new WP_Query($args);
		?>
		<ul>
  			<?php if ( $upcoming_events->have_posts() ) : while ( $upcoming_events->have_posts() ) : $upcoming_events->the_post(); ?>
			<li class="event"><a href="<?php the_permalink(); ?>">			
			<?php
			$start_date = get_post_meta( $post->ID,"_cunyj_events_start_date", true );
			$end_date = get_post_meta( $post->ID,"_cunyj_events_end_date", true );
			$location = get_post_meta( $post->ID,"_location", true );
			?>
			<div class="calendar-date">
	        	<span class="month"><?php echo date_i18n('M', $start_date) ; ?></span>
	        	<span class="day"><?php echo date_i18n('d', $start_date); ?><?php if (date_i18n('d', $start_date) != date_i18n('d', $end_date)) { echo '-' . date_i18n('d', $end_date); } ?></span>
		</div> 

		<h5><?php the_title(); ?></h5>
		<p class="location"><?php echo $location; ?></p>
		<div style="clear:left;"></div>
	</a></li>
    <?php endwhile; else: ?>
	
	<li>Check back soon for more upcoming events.</li>
	
	<?php endif;?>
</ul>
		
	</div>
	
	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	    	<div class="page" id="page-<?php the_ID(); ?>">
			
				<h2><?php the_title(); ?></h2>
    
				<div class="entry">
      
					<?php the_content(); ?>
		
				</div>
		
			</div>

		<?php endwhile; endif; ?>
		
		<?php if ( function_exists( 'get_flickrRSS' ) ) : ?>
		<div id="orientation2010-flickr">
			
			<h3><span class="tip">Add your own by uploading to Flickr and tagging with 'cunyj2011'</span>Photostream</h3>
			
			<?php $flickr_args = array( 'num_items' => 16,
			 							'type' => 'public'
								);
			?>
			<?php get_flickrRSS( $flickr_args ); ?>
		</div>
		<?php endif; ?>
	
	</div>
	
	</div>
	
	</div>
		
</div>


<?php get_footer(); ?>