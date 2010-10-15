<?php

// Let us use jQuery on the front-end
wp_enqueue_script('jquery');

//define( 'CUNYJ_THEME_URL' , themes_url(themes_basename(dirname(__FILE__)).'/') );
define( 'CUNYJ_PREFIX' , 'cunjy_' );

include_once('php/cunyj_events.php');

class cunyj
{
	
	function __construct() {
		global $wpdb;
		
		$this->events = new cunyj_events();
		
		add_action('init', array(&$this, 'init'));
	}
	
	function init() {
		$details = get_theme_data(get_bloginfo('template_directory') . '/style.css');
		$version = $details['Version'];
		
		if ( !is_admin() ) {
			// Enqueue our stylesheets
			wp_enqueue_style( 'cunyj_primary', get_bloginfo('template_directory') . '/style.css', false, $version);
			wp_enqueue_style( 'cunyj_sidebar', get_bloginfo('template_directory') . '/css/sidebar.css', array('cunyj_primary'), $version);
			wp_enqueue_style( 'cunyj_buddypress', get_bloginfo('template_directory') . '/css/buddypress.css', array('cunyj_primary'), $version);
			
			wp_enqueue_style( 'cunyj_home', get_bloginfo('template_directory') . '/css/home.css', array('cunyj_primary'), $version);
			wp_enqueue_style( 'cunyj_nextgen_gallery', get_bloginfo('template_directory') . '/css/nextgen_gallery.css', array('cunyj_primary'), $version);
		}
	}
	
	/**
	 * Check whether the current page has a large search box on it
	 * @return bool $is_search_page Whether it's a search page or not
	 */
	function is_search_page() {
		global $pagenow, $bp;
		
		if ( is_search() ) {
			return 'posts';
		} else if ( $bp->current_component == 'members' ) {
			return 'members';
		} else if ( $bp->current_component == 'groups' ) {
			return 'groups';
		}
		return false;
	}
	
}

global $cunyj;
$cunyj = new cunyj();

function cunyj_get_member_profile_data( $args = '' ) {
	global $members_template;

	if ( !function_exists( 'xprofile_install' ) )
		return false;

	$defaults = array(
		'field' => false, // Field name
		'user_id' => $members_template->member->id
	);

	$r = wp_parse_args( $args, $defaults );
	extract( $r, EXTR_SKIP );

	// Populate the user if it hasn't been already.
	if ( empty( $members_template->member->profile_data ) && method_exists( 'BP_XProfile_ProfileData', 'get_all_for_user' ) )
		$members_template->member->profile_data = BP_XProfile_ProfileData::get_all_for_user( $r['user_id'] );

	$data = xprofile_format_profile_field( $members_template->member->profile_data[$field]['field_type'], $members_template->member->profile_data[$field]['field_data'] );

	return apply_filters( 'bp_get_member_profile_data', $data );
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
	
		register_sidebar( 'about' );
		register_sidebar( 'admissions' );
		register_sidebar( 'alumni' );
		register_sidebar( 'careerservices_left' );
		register_sidebar( 'careerservices_internships' );
		register_sidebar( 'cunyj_event' );
		register_sidebar( 'default_page' );
		register_sidebar( 'faculty' );
		register_sidebar( 'giving' );
		
}

/**
 * Modify the primary navigation menu with the admin
 */ 
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'primary_navigation' => 'Primary Navigation',
			'currentstudents' => 'Current Students',
			'about' => 'About'
			)
		);
}

?>