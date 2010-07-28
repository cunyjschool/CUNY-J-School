<?php

class cunyj_events
{
	
	function __construct() {
		
		// Add Event post type
		add_action('init', array(&$this, 'create_post_type'));
		
		// Set up metabox and related actions
		add_action('admin_menu', array(&$this, 'add_post_meta_box'));
		add_action('save_post', array(&$this, 'save_post_meta_box'));
		add_action('edit_post', array(&$this, 'save_post_meta_box'));
		add_action('publish_post', array(&$this, 'save_post_meta_box'));
		
		// Load necessary scripts and stylesheets
		add_action('admin_enqueue_scripts', array(&$this, 'add_admin_scripts'));
		
	}
	
	function create_post_type() {

		if (function_exists('register_post_type')) {
			register_post_type('cunyj_event',
		    array(
		      'labels' => array(
		        'name' => 'Events',
		        'singular_name' => 'Event',
						'add_new_item' => 'Add New Event',
						'edit_item' => 'Edit Event',
						'new_item' => 'New Event',
						'view' => 'View Event',
						'view_item' => 'View Event',
						'search_items' => 'Search Events',
						'not_found' => 'No events found',
						'not_found_in_trash' => 'No events found in Trash',
						'parent' => 'Parent Event'
		      ),
					'menu_position' => 10,
		      'public' => true,
					'rewrite' => array(
						'slug' => 'events'
					),
					'supports' => array(
						'title',
						'editor',
						'comments',
						'excerpt',
						'thumbnail'
					),
					'taxonomies' => array(
						'post_tag'
					)
		    )
		  );
		}
	}
	
	// Loads scripts 
	function add_admin_scripts() {
		global $pagenow;
		
		if ($pagenow == 'post.php' || $pagenow == 'post-new.php' || $pagenow == 'page.php') {
			wp_enqueue_script('cunyj_events', '/wp-content/themes/CUNY-J-School/js/cunyj_events.js', array('jquery'), false, true);
			wp_enqueue_style('cunyj_events-styles', '/wp-content/themes/CUNY-J-School/css/cunyj_events.css', false, false, 'all');
		}
		
	}
	
	function add_post_meta_box() {
		global $cunyj;
		
		if (function_exists('add_meta_box')) {
			add_meta_box('cunyj-events', __('Event', 'cunyj-events'), array(&$this, 'post_meta_box'), 'cunyj_event', 'normal', 'high');
		}
	}
	
	function post_meta_box() {
		global $post, $cunyj;
		
		$all_months = array(
				'January',
				'February',
				'March',
				'April',
				'May',
				'June',
				'July',
				'August',
				'September',
				'October',
				'November',
				'December');
		
		$featured = get_post_meta($post->ID, '_cunyj_events_featured', true);
		if (!$featured) {
			$featured = 'off';
		}
				
		$all_day = get_post_meta($post->ID, '_cunyj_events_all_day', true);
		if (!$all_day) {
			$all_day = 'on';
		}		
		
		$start_date = get_post_meta($post->ID, '_cunyj_events_start_date', true);
		// Use today's date as start date if start date doesn't exist yet
		if (!$start_date) {
			$start_date = false;
		}
		$start_date_month = date_i18n('F', $start_date);
		$start_date_day = date_i18n('j', $start_date);
		$start_date_year = date_i18n('Y', $start_date);
		$start_date_hour = date_i18n('g', $start_date);
		$start_date_minute = date_i18n('i', $start_date);
		$start_date_ampm = date_i18n('A', $start_date);
			
		$end_date = get_post_meta($post->ID, '_cunyj_events_end_date', true);
		// Use today's date as end date if end date doesn't exist yet
		if (!$end_date) {
			$end_date = false;
		}
		$end_date_month = date_i18n('F', $end_date);
		$end_date_day = date_i18n('j', $end_date);
		$end_date_year = date_i18n('Y', $end_date);
		// @todo adjust hour plus one
		$end_date_hour = date_i18n('g', $end_date);
		$end_date_minute = date_i18n('i', $end_date);
		$end_date_ampm = date_i18n('A', $end_date);
		
		?>
		
		<div id="intro">
		
			<p><label for="cunyj_events-featured">Should this be featured?</label><input type="checkbox" id="cunyj_events-featured" name="cunyj_events-featured"<?php if ($featured == 'on') { echo ' checked="checked"'; } ?> /></p>
		
		</div>
		
		<div id="inner">
		
		<div id="time-date">
		
			<h4 class="buttonize">Date &amp; Time</h4>
			
			<div class="sub">
			
			<p><label for="cunyj_events-all_day">All day event?</label><input type="checkbox" id="cunyj_events-all_day" name="cunyj_events-all_day"<?php if ($all_day == 'on') { echo ' checked="checked"'; } ?> /></p>
			
			<p><label>From:</label>
				<select id="cunyj_events-start_date_month" name="cunyj_events-start_date_month">
					<?php foreach( $all_months as $month ) : ?>
						<option<?php if ($start_date_month == $month) echo ' selected="selected"'; ?>><?php echo $month; ?></option>
					<?php endforeach; ?>
				</select>
				<input type="text" id="cunyj_events-start_date_day" name="cunyj_events-start_date_day" value="<?php echo $start_date_day; ?>" size="2" maxlength="2" autocomplete="off" />
				<input type="text" id="cunyj_events-start_date_year" name="cunyj_events-start_date_year" value="<?php echo $start_date_year; ?>" size="4" maxlength="4" autocomplete="off" />
				<span class="event_date_time<?php if ($all_day == 'on') { echo ' hidden'; } ?>">
					<span class="inline">at</span>
					<input type="text" id="cunyj_events-start_date_hour" name="cunyj_events-start_date_hour" value="<?php echo $start_date_hour; ?>" size="2" maxlength="2" autocomplete="off" />
					<input type="text" id="cunyj_events-start_date_minute" name="cunyj_events-start_date_minute" value="<?php echo $start_date_minute; ?>" size="2" maxlength="2" autocomplete="off" />
					<select id="cunyj_events-start_date_ampm" name="cunyj_events-start_date_ampm">
							<option<?php if ($start_date_ampm == 'AM') echo ' selected="selected"'; ?>>AM</option>
							<option<?php if ($start_date_ampm == 'PM') echo ' selected="selected"'; ?>>PM</option>							
					</select>
				</span>
			</p>
			
			<p><label>To:</label>
				<select id="cunyj_events-end_date_month" name="cunyj_events-end_date_month">
					<?php foreach( $all_months as $month ) : ?>
						<option<?php if ($end_date_month == $month) echo ' selected="selected"'; ?>><?php echo $month; ?></option>
					<?php endforeach; ?>
				</select>
				<input type="text" id="cunyj_events-end_date_day" name="cunyj_events-end_date_day" value="<?php echo $end_date_day; ?>" size="2" maxlength="2" autocomplete="off" />
				<input type="text" id="cunyj_events-end_date_year" name="cunyj_events-end_date_year" value="<?php echo $end_date_year; ?>" size="4" maxlength="4" autocomplete="off" />
				<span class="event_date_time<?php if ($all_day == 'on') { echo ' hidden'; } ?>">
					<span class="inline">at</span>
					<input type="text" id="cunyj_events-end_date_hour" name="cunyj_events-end_date_hour" value="<?php echo $end_date_hour; ?>" size="2" maxlength="2" autocomplete="off" />
					<input type="text" id="cunyj_events-end_date_minute" name="cunyj_events-end_date_minute" value="<?php echo $end_date_minute; ?>" size="2" maxlength="2" autocomplete="off" />
					<select id="cunyj_events-end_date_ampm" name="cunyj_events-end_date_ampm">
							<option<?php if ($end_date_ampm == 'AM') echo ' selected="selected"'; ?>>AM</option>
							<option<?php if ($end_date_ampm == 'PM') echo ' selected="selected"'; ?>>PM</option>							
					</select>
				</span>
			</p>
			
			</div>
		
		</div>
		
		<div id="details">
			
			<h4>Details</h4>
			
			<div class="sub">
				
			</div>
			
		</div>

		<div id="contact">
			
			<h4>Contact</h4>
			
			<div class="sub">
			
				Coming soon
				
			</div>
			
		</div>
		
		<div id="related-links">
			
			<h4>Related Links</h4>
			
			<div class="sub">
				
				Coming soon
				
			</div>
			
		</div>
		
		</div>
		
		<input type="hidden" name="cunyj_events-nonce" id="cunyj_events-nonce" value="<?php echo wp_create_nonce('cunyj_events-nonce'); ?>" />
		
		<?php 
		
	}
	
	function save_post_meta_box($post_id) {
		global $cunyj, $post;
		
		if ( !wp_verify_nonce( $_POST['cunyj_events-nonce'], 'cunyj_events-nonce')) {
			return $post_id;  
		}
		
		if( !wp_is_post_revision($post) && !wp_is_post_autosave($post) ) {
			
			$featured = $_POST['cunyj_events-featured'];
			if ($featured) {
				$featured = 'on';
			} else {
				$featured = 'off';
			}
			update_post_meta($post_id, '_cunyj_events_featured', $featured);
			
			$all_day = $_POST['cunyj_events-all_day'];
			if ($all_day) {
				$all_day = 'on';
			} else {
				$all_day = 'off';
			}
			update_post_meta($post_id, '_cunyj_events_all_day', $all_day);
			
			$default_time = ' 12:00 PM';
			
			$start_date_month = $_POST['cunyj_events-start_date_month'];
			$start_date_day = (int)$_POST['cunyj_events-start_date_day'];
			$start_date_year = (int)$_POST['cunyj_events-start_date_year'];
			$start_date_hour = (int)$_POST['cunyj_events-start_date_hour'];
			$start_date_minute = (int)$_POST['cunyj_events-start_date_minute'];
			$start_date_ampm = $_POST['cunyj_events-start_date_ampm'];
			$start_date = $start_date_month . ' ' . $start_date_day . ', ' . $start_date_year;
			if ($all_day == 'off') {
				$start_date .= ' ' . $start_date_hour . ':' . $start_date_minute . ' ' . $start_date_ampm;
			} else {
				$start_date .= ' ' . $default_time;
			}
			//$start_date = get_gmt_from_date($start_date); // @todo we should probably store this as unix timestamp
			$start_date = strtotime($start_date);
			update_post_meta($post_id, '_cunyj_events_start_date', $start_date);
			
			$end_date_month = $_POST['cunyj_events-end_date_month'];
			$end_date_day = (int)$_POST['cunyj_events-end_date_day'];
			$end_date_year = (int)$_POST['cunyj_events-end_date_year'];
			$end_date_hour = (int)$_POST['cunyj_events-end_date_hour'];
			$end_date_minute = (int)$_POST['cunyj_events-end_date_minute'];
			$end_date_ampm = $_POST['cunyj_events-end_date_ampm'];
			$end_date = $end_date_month . ' ' . $end_date_day . ', ' . $end_date_year;
			if ($all_day == 'off') {
				$end_date .= ' ' . $end_date_hour . ':' . $end_date_minute . ' ' . $end_date_ampm;
			} else {
				$end_date .= ' ' . $default_time;
			}
			//$end_date = get_gmt_from_date($end_date); // @todo we should probably store this as unix timestamp
			$end_date = strtotime($end_date);
			update_post_meta($post_id, '_cunyj_events_end_date', $end_date);
			
			// Save the data
		}		
	}
	
	
}


?>