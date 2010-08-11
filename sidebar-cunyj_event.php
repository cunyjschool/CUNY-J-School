<div class="sidebar right large" id="cunyj_event-sidebar">
	
	<h3>Upcoming Events</h3>

	<?php $upcoming_events = new WP_Query(array('post_type'=>'cunyj_event','showposts'=>8,'meta_key'=>'_cunyj_events_start_date','order'=>'ASC','orderby'=>'meta_value')); ?>
	<ul>
	  <?php if ( $upcoming_events->have_posts() ) : while ( $upcoming_events->have_posts() ) : $upcoming_events->the_post(); ?>
		<li class="event">
		<?php $start_date = get_post_meta( $post->ID,"_cunyj_events_start_date", $single=true ); ?>
		<?php $end_date = get_post_meta( $post->ID,"_cunyj_events_end_date", $single=true ); ?>
			<div class="calendar-date">
		        <span class="month"><?php echo date_i18n('M', $start_date) ; ?></span>
		        <span class="day"><?php echo date_i18n('d', $start_date); ?><?php if (date_i18n('d', $start_date) != date_i18n('d', $end_date)) { echo '-' . date_i18n('d', $end_date); } ?></td>
		      </span>
			</div> 

			<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			<div style="clear:left;"></div>
		</li>
	    <?php endwhile; else: ?>
		
		<li>Check back soon for more upcoming events.</li>
		
		<?php endif;?>
	</ul>
	
</div>