<?php get_header(); 

function generate_calendar($year, $month, $days = array(), $day_name_length = 4, $month_href = NULL, $first_day = 0, $pn = array()){
    $first_of_month = gmmktime(0,0,0,$month,1,$year);
		$pn = array('&laquo;'=>'/events/', '&raquo;'=>'/events/');
    $day_names = array(); #generate all the day names according to the current locale
    for($n=0,$t=(3+$first_day)*86400; $n<7; $n++,$t+=86400) #January 4, 1970 was a Sunday
        $day_names[$n] = ucfirst(gmstrftime('%A',$t)); #%A means full textual day name

    list($month, $year, $month_name, $weekday) = explode(',',gmstrftime('%m,%Y,%B,%w',$first_of_month));
    $weekday = ($weekday + 7 - $first_day) % 7; #adjust for $first_day
    $title   = htmlentities(ucfirst($month_name)).'&nbsp;'.$year;  #note that some locales don't capitalize month and day names

    @list($p, $pl) = each($pn); @list($n, $nl) = each($pn); #previous and next links, if applicable
    if($p) $p = '<span class="calendar-prev">'.($pl ? '<a href="'.htmlspecialchars($pl).'">'.$p.'</a>' : $p).'</span>&nbsp;';
    if($n) $n = '&nbsp;<span class="calendar-next">'.($nl ? '<a href="'.htmlspecialchars($nl).'">'.$n.'</a>' : $n).'</span>';
    $calendar = '<table class="calendar">'."\n".
        '<caption class="calendar-month">'.$p.($month_href ? '<a href="'.htmlspecialchars($month_href).'">'.$title.'</a>' : $title).$n."</caption>\n<tr>";

    if($day_name_length){
        foreach($day_names as $d)
            $calendar .= '<th abbr="'.htmlentities($d).'">'.htmlentities($day_name_length < 4 ? substr($d,0,$day_name_length) : $d).'</th>';
        $calendar .= "</tr>\n<tr>";
    }

    if($weekday > 0) $calendar .= '<td class="empty-days" colspan="'.$weekday.'">&nbsp;</td>'; #initial 'empty' days
    for($day=1,$days_in_month=gmdate('t',$first_of_month); $day<=$days_in_month; $day++,$weekday++){
        if($weekday == 7){
            $weekday   = 0; #start a new week
            $calendar .= "</tr>\n<tr>";
        }
				@list($link, $classes, $content) = $days[$day];
				$calendar .= 
					'<td>
						<div class="cal-day '.$classes.'">'.$day.'</div>
						<div class="cal-events"><a href='.$link.'>'.$content.'</a></div>
					</td>';

    }
    if($weekday != 7) $calendar .= '<td class="empty-days" colspan="'.(7-$weekday).'">&nbsp;</td>'; #remaining "empty" days

    return $calendar."</tr>\n</table>\n";
}

?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/cunyj_events.css" media="screen" />

<div class="wrap">

<div class="main" id="cunyj-events">
	
<?php
	$time = time();
	$today = date('j',$time);
	$days = array(
		// 4=>array('URL', NULL, 'Stuff'),
		$today=>array('URL', 'cal-today', 'Foobar'),
	);
	echo generate_calendar(date('Y', $time), date('n', $time), $days,	4, NULL, 0, $pn); 	

	$args = array(	'order' => 'ASC',
					'nopaging' => true,
					'posts_per_page' => '-1',
					'post_type' => 'cunyj_event',
					);
	$events = new WP_Query( $args );

	if ( $events->have_posts()) : while ( $events->have_posts() ) : $events->the_post();
			$post_id = get_the_id();
			$event_link = get_permalink( $post_id );
			$event_title = get_the_title( $post_id );
			$start_date = get_post_meta($post->ID, '_cunyj_events_start_date', true);
			$the_day = date('j',$start_date);
			
			echo '<a href='.$event_link.'>'.$event_title.'</a><br />';
		
	endwhile; endif;

?>


</div>

</div>

<?php get_footer(); ?>
