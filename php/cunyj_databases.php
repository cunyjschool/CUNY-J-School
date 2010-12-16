<?php
/**
 * Database custom post type for the CUNY J-School Research Center
 * @author danielbachhuber
 * @since 1.2.1
 */

if ( !class_exists('cunyj_databases') ) {
	
class cunyj_databases
{
	
	function __construct() {
		
		add_action( 'init', array(&$this, 'create_post_type') );
		add_action( 'init', array(&$this, 'create_taxonomies') );		
		
	}
	
	/**
	 * Register the database post type with WordPress
	 */
	function create_post_type() {
		
		if ( function_exists('register_post_type') ) {
			register_post_type('cunyj_database',
		    array(
		      'labels' => array(
		        'name' => 'Databases',
		        'singular_name' => 'Database',
						'add_new_item' => 'Add New Database',
						'edit_item' => 'Edit Database',
						'new_item' => 'New Database',
						'view' => 'View Database',
						'view_item' => 'View Database',
						'search_items' => 'Search Databases',
						'not_found' => 'No databases found',
						'not_found_in_trash' => 'No databases found in Trash',
						'parent' => 'Parent Database'
		      ),
					'menu_position' => 11,
		      'public' => true,
					'rewrite' => array(
						'slug' => 'databases'
					),
					'supports' => array(
						'title',
						'editor',
						'excerpt',
					),
					'taxonomies' => array(
						'cunyj_database_topics',
					)
		    )
		  );
		}
		
	} // END - create_post_type()
	
	function create_taxonomies() {
		
		$args = array(	'label' => 'Topics',	
						'show_tagcloud' => false,
						);
		
		register_taxonomy('cunyj_database_topics', 'cunyj_database', $args);
		
		
	}
	
}	
	
	
}


?>