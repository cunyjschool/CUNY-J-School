<?php get_header(); ?>

<div class="wrap clearfix" id="content">
	
  <div id="posts">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
	<div class="event" id="post-<?php the_ID(); ?>">

		<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>
		
			<?php
			
				$all_day = get_post_meta($post->ID, '_cunyj_events_all_day', true);
			
				$start_date = get_post_meta($post->ID, '_cunyj_events_start_date', true);
				$end_date = get_post_meta($post->ID, '_cunyj_events_end_date', true);
				
				$venue = get_post_meta($post->ID, '_cunyj_events_venue', true);
				$street = get_post_meta($post->ID, '_cunyj_events_street', true);
				$city = get_post_meta($post->ID, '_cunyj_events_city', true);
				$state = get_post_meta($post->ID, '_cunyj_events_state', true);
				$zipcode = get_post_meta($post->ID, '_cunyj_events_zipcode', true)
			
			?>
			
			<div class="event_details">
				<?php if ($start_date) : ?>
					<p class="event_date">
						<span class="label">Date &amp; Time</span>
						<?php if ($start_date == $end_date) {
							echo date_i18n('F j, Y', $start_date);
							if ($all_day == 'off') {
								echo ' at ' . date_i18n('g:i A', $start_date);
							}
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
						<span class="label">Location</span>
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


      <div class="entry">
				
				<?php the_content(); ?>
			
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

      </div>

			<div class="timestamp">Last updated <?php the_time('l, F jS, Y') ?> at <?php the_time() ?></div>

    </div>
    <?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
		
  </div>

</div>

<?php get_footer(); ?>

