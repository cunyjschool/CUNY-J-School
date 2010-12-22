<?php
/**
 * Capstone custom post type
 * @author danielbachhuber
 * @since 1.2.1
 */

if ( !class_exists('cunyj_capstones') ) {
	
class cunyj_capstones
{
	
	function __construct() {
		
		// Add Database post type
		add_action( 'init', array(&$this, 'create_post_type') );
		add_action( 'init', array(&$this, 'create_taxonomies') );		
			
		
	}
	
	/**
	 * Register the database post type with WordPress
	 */
	function create_post_type() {
		
		if ( function_exists('register_post_type') ) {
			register_post_type('cunyj_capstone',
		    array(
		      'labels' => array(
		        'name' => 'Capstones',
		        'singular_name' => 'Capstone',
						'add_new_item' => 'Add New Capstone',
						'edit_item' => 'Edit Capstone',
						'new_item' => 'New Capstone',
						'view' => 'View Capstone',
						'view_item' => 'View Capstone',
						'search_items' => 'Search Capstones',
						'not_found' => 'No capstones found',
						'not_found_in_trash' => 'No capstones found in Trash',
						'parent' => 'Parent Capstone'
		      ),
					'menu_position' => 12,
		      'public' => true,
					'rewrite' => array(
						'slug' => 'capstones'
					),
					'supports' => array(
						'title',
						'editor',
						'excerpt',						
						'thumbnail',
						'custom-fields',
					),
					'taxonomies' => array(
						'cunyj_capstone_media_types',
						'cunyj_concentrations',
					)
		    )
		  );
		}
		
	} // END - create_post_type()
	
	/**
	 * Register the 'topics' taxonomy we're associating with our databases
	 */
	function create_taxonomies() {
		
		// Media type taxonomy
		$args = array(	'label' => 'Media Types',	
						'show_tagcloud' => false,
						'hierarchical' => true,
						);
		register_taxonomy( 'cunyj_capstone_media_types', 'cunyj_capstone', $args );
		
		// Concentration taxonomy
		$args = array(	'label' => 'Concentrations',	
						'show_tagcloud' => false,
						'hierarchical' => true,
						);
		register_taxonomy( 'cunyj_concentrations', 'cunyj_capstone', $args );
		
		
	}

	
}	
	
	
}


?>