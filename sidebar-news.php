<div id="news" class="sidebar right medium">
    <div id="admiss-links">
      <h3><a href="/admissions/">Admissions</a></h3>
      <ul>
        <li><a href="/admissions/how-to-apply/">How to Apply</a></li>
        <li><a href="https://cunyjschool.wufoo.com/forms/information-request-form/">Request Info</a></li>
      </ul>
    </div>
    
     
	<div id="latest-news">
		<h3>Latest News</h3>
		<ul>
	<?php 
	$args = array(	'category_name' => 'news',
					'showposts' =>3
				);
	$latest_news = new WP_Query($args);
 	?>
  	<?php if ( $latest_news->have_posts() ) : while ( $latest_news->have_posts() ) : $latest_news->the_post(); ?>
  		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  
    	<?php endwhile; else: ?><p>There are currently no stories.</p>
	<?php endif; ?>
		</ul>
    </div>
    
    <div id="upcoming-events">
		<h3>Upcoming Events</h3>
		<?php 
		$args = array( 	'post_type'=>'cunyj_event',
						'showposts'=>4,
						'meta_key'=>'_cunyj_events_start_date',
						'order'=>'ASC',
						'orderby'=>'meta_value',
						'taxonomy'=>'cunyj_event_category',
						'term'=>'featured'
					);
		$upcoming_events = new WP_Query($args);
		?>
		<ul>
  			<?php if ( $upcoming_events->have_posts() ) : while ( $upcoming_events->have_posts() ) : $upcoming_events->the_post(); ?>
			<li class="event"><a href="<?php the_permalink(); ?>">			
			<?php
			$start_date = get_post_meta( $post->ID,"_cunyj_events_start_date", true );
			$end_date = get_post_meta( $post->ID,"_cunyj_events_end_date", true );
			?>
			<div class="calendar-date">
	        	<span class="month"><?php echo date_i18n('M', $start_date) ; ?></span>
	        	<span class="day"><?php echo date_i18n('d', $start_date); ?><?php if (date_i18n('d', $start_date) != date_i18n('d', $end_date)) { echo '-' . date_i18n('d', $end_date); } ?></span>
		</div> 

		<h5><?php the_title(); ?></h5>
		<div style="clear:left;"></div>
	</a></li>
    <?php endwhile; else: ?>
	
	<li>Check back soon for more upcoming events.</li>
	
	<?php endif;?>
</ul>
</div>
    
    <div id="cats-archives">
      <div id="category-list">
<h3>More News</h3>
<ul>
<?php wp_list_categories('child_of=19&title_li=&exclude=13'); ?>
</ul>
      </div>
     
      <div id="archives">
<h3>Archives</h3>
<ul>
<?php wp_get_archives('type=yearly'); ?>
</ul>
      </div>
	
	<div style="clear:both;"></div>

    </div>
</div>
