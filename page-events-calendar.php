<?php
/*
Template Name: Page - Events Calendar
*/
?>

<style>



</style>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">
		
		<div id="content page-full-content">
			
			<div class="cunyj_event">
		
			<h3>Events Calendar</h3>

			<?php
			// Get current time so we only show events that are currently happening
			$current_time = date_i18n('U', time());
			$args = array(	'post_type'=>'cunyj_event',
							'showposts'=>10,
							'meta_key'=>'_cunyj_events_start_date',
							'meta_compare' => '>',
							'meta_value' => $current_time,
							'order'=>'ASC',
							'orderby'=>'meta_value'
						);
			$upcoming_events = new WP_Query($args);
			?>
			<ul>
			  <?php if ( $upcoming_events->have_posts() ) : while ( $upcoming_events->have_posts() ) : $upcoming_events->the_post(); ?>
				<li class="event">			
				<?php
				$all_day = get_post_meta($post->ID, '_cunyj_events_all_day', true);
			
				$start_date = get_post_meta($post->ID, '_cunyj_events_start_date', true);
				$end_date = get_post_meta($post->ID, '_cunyj_events_end_date', true);
				
				$venue = get_post_meta($post->ID, '_cunyj_events_venue', true);
				$street = get_post_meta($post->ID, '_cunyj_events_street', true);
				$city = get_post_meta($post->ID, '_cunyj_events_city', true);
				$state = get_post_meta($post->ID, '_cunyj_events_state', true);
				$zipcode = get_post_meta($post->ID, '_cunyj_events_zipcode', true);
				?>
					<div class="calendar-date">
				        <span class="month"><?php echo date_i18n('M', $start_date) ; ?></span>
				        <span class="day"><?php echo date_i18n('d', $start_date); ?><?php if (date_i18n('d', $start_date) != date_i18n('d', $end_date)) { echo '-' . date_i18n('d', $end_date); } ?></span>
					</div> 

					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					
							<div class="event_details">
								<?php if ($start_date) : ?>
									<p class="event_date">
										<span class="label">Date &amp; Time:</span>
										<?php if ($start_date == $end_date) {
											echo date_i18n('F j, Y', $start_date);
											if ($all_day == 'off') {
												echo ' at ' . date_i18n('g:i A', $start_date);
											}
										} else if (date_i18n('F j', $start_date) == date_i18n('F j', $end_date)) {
											echo 'From ' . date_i18n('g:i A', $start_date) . ' to ' . date_i18n('g:i A', $end_date);
											echo ' on ' . date_i18n('F j, Y', $start_date);
										} else {
											echo 'From ' . date_i18n('F j, Y', $start_date);
											if ($all_day == 'off') {
												echo ' at ' . date_i18n('g:i A', $start_date);
											}
											echo ' to ' . date_i18n('F j, Y', $end_date);
											if ($all_day == 'off') {
												echo ' at ' . date_i18n('g:i A', $end_date);
											}
										} ?>
									</p>
								<?php endif; ?>

								<?php if ($venue = get_post_meta($post->ID, '_cunyj_events_venue', true)) : ?>
									<p class="event_location">
										<span class="label">Location:</span>
										<?php echo $venue; ?>
										<?php if ($street) {
											echo '<br />' . $street;
										} ?>
										<?php if ($city || $state || $zipcode) {
											echo '<br />' . $city . ', ' . $state;
											if ($zipcode) {
												echo '&nbsp;&nbsp;&nbsp;' . $zipcode;
											}
										} ?>
									</p>
								<?php endif; ?>

							</div>


					<div class="entry event">

						<?php the_content(); ?>

						<p><?php the_tags( 'Tags: ', ', ', ''); edit_post_link('Edit event', ' | ', ''); ?></p>

					</div>
					
					
				</li>
			    <?php endwhile; else: ?>

				<li>Check back soon for more upcoming events.</li>

				<?php endif;?>
			</ul>

	<div style="clear:both;"></div>
			</div><!-- .cunyj-event -->
		
		</div><!-- /#content -->

	</div><!-- /#main -->

</div><!-- .wrap -->

<?php get_footer(); ?>