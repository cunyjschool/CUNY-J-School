<?php

class cunyj_events
{
	
	function __construct() {
		
		// Add Event post type
		add_action('init', array(&$this, 'create_post_type'));
		
		// Set up metabox and related actions
		//add_action('admin_menu', array(&$this, 'add_post_meta_box'));
		//add_action('save_post', array(&$this, 'save_post_meta_box'));
		//add_action('edit_post', array(&$this, 'save_post_meta_box'));
		//add_action('publish_post', array(&$this, 'save_post_meta_box'));
		
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
	
	function post_meta_box() {
		global $post, $cunyj;
		
	}
	
	
}


?>