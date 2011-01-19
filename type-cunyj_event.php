<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/cunyj_events.css" media="screen" />

<div class="wrap">

<div class="main" id="cunyj-events">

<?php 

global $wpdb, $m, $monthnum, $year, $wp_locale, $posts;

$key = md5( $m . $monthnum . $year );
if ( $cache = wp_cache_get( 'get_calendar_custom', 'calendar_custom' ) ) {
	if ( isset( $cache[ $key ] ) ) {
		echo $cache[ $key ];
		return;
	}
}

ob_start();
// Quick check. If we have no posts at all, abort!
if ( !$posts ) {
	$gotsome = $wpdb->get_var("SELECT ID from $wpdb->posts WHERE post_type = 'cunyj_event' AND post_status = 'publish' ORDER BY post_date DESC LIMIT 1");
	if ( !$gotsome )
		return;
}

if ( isset($_GET['w']) )
	$w = ''.intval($_GET['w']);

// week_begins = 0 stands for Sunday
$week_begins = intval(get_option('start_of_week'));

// Let's figure out when we are
if ( !empty($monthnum) && !empty($year) ) {
	$thismonth = ''.zeroise(intval($monthnum), 2);
	$thisyear = ''.intval($year);
} elseif ( !empty($w) ) {
	// We need to get the month from MySQL
	$thisyear = ''.intval(substr($m, 0, 4));
	$d = (($w - 1) * 7) + 6; //it seems MySQL's weeks disagree with PHP's
	$thismonth = $wpdb->get_var("SELECT DATE_FORMAT((DATE_ADD('${thisyear}0101', INTERVAL $d DAY) ), '%m')");
} elseif ( !empty($m) ) {
	$thisyear = ''.intval(substr($m, 0, 4));
	if ( strlen($m) < 6 )
			$thismonth = '01';
	else
			$thismonth = ''.zeroise(intval(substr($m, 4, 2)), 2);
} else {
	$thisyear = gmdate('Y', current_time('timestamp'));
	$thismonth = gmdate('m', current_time('timestamp'));
}

$unixmonth = mktime(0, 0 , 0, $thismonth, 1, $thisyear);

echo '<div id="calendar_wrap">
<table id="wp-calendar" summary="' . __('Calendar') . '">
<caption>' . sprintf(_c('%1$s %2$s|Used as a calendar caption'), $wp_locale->get_month($thismonth), date('Y', $unixmonth)) . '</caption>
<thead>
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
$dyp_sql = "SELECT DISTINCT DAYOFMONTH(post_date)
	FROM $wpdb->posts 

	LEFT JOIN $wpdb->term_relationships ON($wpdb->posts.ID = $wpdb->term_relationships.object_id) 
	LEFT JOIN $wpdb->term_taxonomy ON($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id) 
	
	WHERE MONTH(post_date) = '$thismonth' 
	AND YEAR(post_date) = '$thisyear' 
	AND post_type = 'cunyj_event' AND post_status = 'publish' 
	AND post_date < '" . current_time('mysql') . "'";
	
$dayswithposts = $wpdb->get_results($dyp_sql, ARRAY_N);

if ( $dayswithposts ) {
	foreach ( (array) $dayswithposts as $daywith ) {
		$daywithpost[] = $daywith[0];
	}
} else {
	$daywithpost = array();
}

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false || strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'camino') !== false || strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'safari') !== false)
	$ak_title_separator = "\n";
else
	$ak_title_separator = ', ';

$ak_titles_for_day = array();
$ak_post_titles = $wpdb->get_results("SELECT post_title, DAYOFMONTH(post_date) as dom "
	."FROM $wpdb->posts "
	
	."LEFT JOIN $wpdb->term_relationships ON($wpdb->posts.ID = $wpdb->term_relationships.object_id) "
	."LEFT JOIN $wpdb->term_taxonomy ON($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id) "
	
	."WHERE YEAR(post_date) = '$thisyear' "

	."AND MONTH(post_date) = '$thismonth' "
	."AND post_date < '".current_time('mysql')."' "
	."AND post_type = 'cunyj_event' AND post_status = 'publish'"
);
if ( $ak_post_titles ) {
	foreach ( (array) $ak_post_titles as $ak_post_title ) {

			$post_title = apply_filters( "the_title", $ak_post_title->post_title );
			$post_title = str_replace('"', '&quot;', wptexturize( $post_title ));

			if ( empty($ak_titles_for_day['day_'.$ak_post_title->dom]) )
				$ak_titles_for_day['day_'.$ak_post_title->dom] = '';
			if ( empty($ak_titles_for_day["$ak_post_title->dom"]) ) // first one
				$ak_titles_for_day["$ak_post_title->dom"] = $post_title;
			else
				$ak_titles_for_day["$ak_post_title->dom"] .= $ak_title_separator . $post_title;
	}
}


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
	if ( $day == gmdate('j', (time() + (get_option('gmt_offset') * 3600))) && $thismonth == gmdate('m', time()+(get_option('gmt_offset') * 3600)) && $thisyear == gmdate('Y', time()+(get_option('gmt_offset') * 3600)) )
		echo '<td id="today">';
	else
		echo '<td>';

	echo '<div class="cal-day">'.$day.'</div>';
	if ( in_array($day, $daywithpost) ) // any posts today?
		echo '<a href="' . get_day_link($thisyear, $thismonth, $day) . "\" >$ak_titles_for_day[$day]</a>";
	else
		echo '&nbsp;';
	echo '</td>';

	if ( 6 == calendar_week_mod(date('w', mktime(0, 0 , 0, $thismonth, $day, $thisyear))-$week_begins) )
		$newrow = true;
}

$pad = 7 - calendar_week_mod(date('w', mktime(0, 0 , 0, $thismonth, $day, $thisyear))-$week_begins);
if ( $pad != 0 && $pad != 7 )
	echo "\n\t\t".'<td class="pad" colspan="'.$pad.'">&nbsp;</td>';

echo "\n\t</tr>\n\t</tbody>\n\t</table></div>";

$args = array(	'order' => 'ASC',	'nopaging' => true,	'posts_per_page' => '-1',	'post_type' => 'cunyj_event');
$events = new WP_Query( $args );

if ( $events->have_posts()) : while ( $events->have_posts() ) : $events->the_post();
		$link = get_permalink();
		$title = the_title(NULL,NULL,FALSE);
		$content = get_the_excerpt();
		$start_date = get_post_meta($post->ID, '_cunyj_events_start_date', true);
		$event_date = date_i18n('M j, Y', $start_date);
		$post_id = $post->ID;
		$results[] = Array('id' => $post_id, 'title' => $title, 'link' => $link, 'date' => $event_date, 'content' => $content);
		
		endwhile; endif;
		
echo '<h2 class="cal-title">Upcoming Events</h2>';

if ($results) {
	foreach ( $results as $result ) {
		echo '<div class="feature">';
		echo '<h2><a href="'.$result['link'].'" title="'.$result['title'].'">'.$result['date'].' - '.$result['title'].'</a></h2>';
		echo $result['content'];
		echo '<div class="clear"></div></div>';
	}
}

?>

</div>

</div>

<?php get_footer(); ?>
