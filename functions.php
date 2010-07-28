<?php

// Let us use jQuery on the front-end
wp_enqueue_script('jquery');

include_once('php/cunyj_events.php');

class cunyj
{
	
	function __construct() {
		global $wpdb;
		
		$this->events = new cunyj_events();
		
	}
	
}

global $cunyj;
$cunyj = new cunyj();

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

/**
 * Modify the primary navigation menu with the admin
 */ 
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'primary_navigation' => 'Primary Navigation'
			)
		);
}

?>