<?php get_header(); ?>

<div class="wrap">

<div class="main" id="cunyj-events">
	
<?php 

global $wpdb, $m, $monthnum, $year, $wp_locale;

// week_begins = 0 stands for Sunday
$week_begins = intval( get_option( 'start_of_week' ) );
if ( empty( $year ) && empty( $monthnum ) ) {
	$currentyear = gmdate( 'Y' , current_time( 'timestamp' ) );
	$currentmonth = gmdate( 'm' , current_time( 'timestamp' ) );
} else {
	$currentyear = $year;
	$currentmonth = $monthnum;
}
$currentmonth_timestamp = strtotime( $currentyear . '-' . $currentmonth . '-1' );

$unixmonth = mktime( 0, 0 , 0, $currentmonth, 1, $currentyear );
$prevmonth = gmdate( 'F', strtotime( '-1 months', $currentmonth_timestamp ) );
$prevmonthlink = gmdate( 'Y/m', strtotime( '-1 months', $currentmonth_timestamp ) );
$nextmonth = gmdate( 'F', strtotime( '+1 months', $currentmonth_timestamp ) );
$nextmonthlink = gmdate( 'Y/m' , strtotime( '+ 1 months', $currentmonth_timestamp ) );

echo '<div id="calendar_wrap">';
echo '<span class="prev-month left"><a href="/events/' . $prevmonthlink . '/">« ' . $prevmonth .'</a></span>';
echo '<span class="next-month right"><a href="/events/' . $nextmonthlink . '/">' . $nextmonth .' »</a></span>';
echo '<h2 class="calendar-title">' . $wp_locale->get_month( $currentmonth ) .' ' . gmdate( 'Y', $unixmonth ) . '</h2>';
echo '<table id="wp-calendar" summary="' . __('Calendar') . '">';
echo '<thead>
		<tr>';

$myweek = array();

for ( $wdcount=0; $wdcount<=6; $wdcount++ ) {
	$myweek[] = $wp_locale->get_weekday(($wdcount+$week_begins)%7);
}

foreach ( $myweek as $wd ) {
	$day_name = $wp_locale->get_weekday_abbrev($wd);
	echo "\n\t\t<th abbr=\"$wd\" scope=\"col\" title=\"$wd\">$day_name</th>";
}

echo '
</tr>
</thead>

<tbody>
<tr>';

// Get days with posts

$args = array(	'order' => 'ASC',
				'nopaging' => true,
				'posts_per_page' => '-1',
				'post_type' => 'cunyj_event',
				'meta_key' => '_cunyj_events_start_date',
				'meta_value' => $currentmonth_timestamp,
				'meta_compare' => '>='
			);
$events = new WP_Query( $args );

// Put all of the events into an array sorted by month day
$all_events = array();
if ( $events->have_posts() ) {
	
	while ( $events->have_posts() ) {
		$events->the_post();
		$post_id = get_the_id();
		$start_date = get_post_meta( $post_id, '_cunyj_events_start_date', true );
		$all_day = get_post_meta( $post->ID, '_cunyj_events_all_day', true );
		$end_date = get_post_meta( $post->ID, '_cunyj_events_end_date', true );
		$venue = get_post_meta( $post->ID, '_cunyj_events_venue', true );
		$street = get_post_meta( $post->ID, '_cunyj_events_street', true );
		$city = get_post_meta( $post->ID, '_cunyj_events_city', true );
		$state = get_post_meta( $post->ID, '_cunyj_events_state', true );
		$zipcode = get_post_meta( $post->ID, '_cunyj_events_zipcode', true );
		// Calculate the days this event should be placed in
		$start_date_day = date_i18n( 'j', $start_date );
		$end_date_day = date_i18n( 'j', $end_date );
		$total_day_span = $end_date_day - $start_date_day;
		$event_days = array();
		for ( $i = 0; $i <= $total_day_span; $i++ ) {
			$event_days[] = $start_date_day + $i;
		}
		// Don't include events that start in other months
		if ( date_i18n( 'm', $start_date ) != $currentmonth ) {
			continue;
		}
		// Is it multi-day or not?
		if ( count( $event_days ) > 1 ) {
			$multi_day = true;
		} else {
			$multi_day = false;
		}
		
		// Place the event on every day it is in our array
		foreach( $event_days as $event_day ) {
			$all_events[$event_day][$post_id]['permalink'] = get_permalink();
			$all_events[$event_day][$post_id]['title'] = get_the_title();
			$all_events[$event_day][$post_id]['excerpt'] = get_the_excerpt();
			$all_events[$event_day][$post_id]['event_date'] = date_i18n('M j, Y', $start_date);
			$all_events[$event_day][$post_id]['all_day'] = $all_day;
			$all_events[$event_day][$post_id]['multi_day'] = $multi_day;				
			$all_events[$event_day][$post_id]['start_date'] = $start_date;
			$all_events[$event_day][$post_id]['end_date'] = $end_date;
			$all_events[$event_day][$post_id]['venue'] = $venue;
			$all_events[$event_day][$post_id]['street'] = $street;
			$all_events[$event_day][$post_id]['city'] = $city;
			$all_events[$event_day][$post_id]['state'] = $state;
			$all_events[$event_day][$post_id]['zipcode'] = $zipcode;
		}
		
	} // END while ( $events->have_posts() )
	
} // END if ( $events->have_posts() )

// See how much we should pad in the beginning
$pad = calendar_week_mod(date('w', $unixmonth)-$week_begins);
if ( 0 != $pad )
	echo "\n\t\t".'<td colspan="'.$pad.'" class="pad">&nbsp;</td>';
	
$daysinmonth = intval(date('t', $unixmonth));
for ( $day = 1; $day <= $daysinmonth; ++$day ) {
	if ( isset($newrow) && $newrow )
		echo "\n\t</tr>\n\t<tr>\n\t\t";
	$newrow = false;

	// Is today the day?
	if ( $day == gmdate('j', (time() + (get_option('gmt_offset') * 3600))) && $currentmonth == gmdate('m', time()+(get_option('gmt_offset') * 3600)) && $currentyear == gmdate('Y', time()+(get_option('gmt_offset') * 3600)) )
		echo '<td id="today">';
	else
		echo '<td>';

	echo '<div class="cal-day">' . $day . '</div>';
	if ( array_key_exists( $day, $all_events ) ) {
		echo '<ul>';
		
		foreach( $all_events[$day] as $post_id => $event ) {
			$event_classes = array();
			if ( $event['multi_day'] ) {
				$event_classes[] = 'multi-day';
				if ( $day == date_i18n( 'j', $event['start_date'] ) ) {
					$event_classes[] = 'start-day';
				} 
				if ( $day == date_i18n( 'j', $event['end_date'] ) ) {
					$event_classes[] = 'end-day';
				}
			}
			$event_classes_list = implode(" ", $event_classes);
			echo '<li class="' . $event_classes_list . '"><a href="' . $event['permalink'] . '">' . $event['title'] . '</a></li>';
		}
		echo '</ul>';
	} else {
		echo '&nbsp;';
	}
	echo '</td>';

	if ( 6 == calendar_week_mod(date('w', mktime(0, 0 , 0, $currentmonth, $day, $currentyear))-$week_begins) )
		$newrow = true;
}

$pad = 7 - calendar_week_mod(date('w', mktime(0, 0 , 0, $currentmonth, $day, $currentyear))-$week_begins);
if ( $pad != 0 && $pad != 7 )
	echo "\n\t\t".'<td class="pad" colspan="'.$pad.'">&nbsp;</td>';

echo "\n\t</tr>\n\t</tbody>\n\t</table></div>";

$current_month = gmdate('F', current_time('timestamp'));

// echo '<div class="ical-feed"><img src="' . get_bloginfo('template_directory') . '/images/icons/feed_s16.png" height="16px" width="16px" alt="Events Calendar Feed" /><a href="' . get_bloginfo('url') . '/events/?ical" class="feed">Subscribe to the Journalism School\'s Events Calendar</a></div>';

echo '<h2 class="upcoming-title">Upcoming Events in ' . $current_month . '</h2>';
if ( count( $all_events ) ) {

	// Sort the events by day (aka the key)
	ksort( $all_events );

	foreach ( $all_events as $key => $day ) {
		$timestamp = mktime( 0, 0 , 0, $currentmonth, $key, $currentyear );
		$heading = gmdate( 'l, F jS', $timestamp );
		echo '<h3 class="upcoming">' . $heading . '</h3>';
		foreach( $day as $post_id => $event ) {
			echo '<div class="feature">';
			echo '<h4 class="feature-title"><a href="' . $event['permalink'] . '">'. $event['title'] . '</a></h4>';
			echo '<p>' . $event['excerpt'] . '</p>';
			if ($event['venue']) {
				echo '<p class="event-location"><span class="label">Location: </span><span>' . $event['venue'];
				if ($event['street']) {
					echo '&nbsp;&mdash;&nbsp;' . $event['street'];
				}
				if ($event['city'] || $event['state'] || $event['zipcode']) {
					echo '&nbsp;&mdash;&nbsp;' . $event['city'] . ', ' . $event['state'];
					if ($event['zipcode']) {
						echo '&nbsp;' . $event['zipcode'];
					}
				}
				echo '</span></p>';
			}
			echo '<div class="clear"></div></div>';
		}
	}
	
} else {
	
	echo '<div class="info message">There are no upcoming events this month.</div>';
	
} // END if ( count( $all_events ) )

?>

</div>

</div>

<?php get_footer(); ?>