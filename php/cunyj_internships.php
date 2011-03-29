<?php
/**
 * Internship custom post type for the CUNY J-School Career Center
 * @author danielbachhuber
 * @since 1.3.2
 */

if ( !class_exists('cunyj_internships') ) {
	
class cunyj_internships
{
	
	/**
	 * __construct()
	 */
	function __construct() {
		
		// Add Intership post type
		add_action( 'init', array(&$this, 'create_post_type') );
		add_action( 'init', array(&$this, 'create_taxonomies') );
		
		// Set up metabox and related actions
		add_action('admin_menu', array(&$this, 'add_post_meta_box'));
		add_action('save_post', array(&$this, 'save_post_meta_box'));
		add_action('edit_post', array(&$this, 'save_post_meta_box'));
		add_action('publish_post', array(&$this, 'save_post_meta_box'));		
		
	} // END __construct()
	
	/**
	 * create_post_type()
	 * Register the internship post type with WordPress
	 */
	function create_post_type() {
		
		if ( function_exists('register_post_type') ) {
			register_post_type( 'cunyj_internship',
		    array(
				'labels' => array(
		        	'name' => 'Internships',
		        	'singular_name' => 'Internship',
					'add_new_item' => 'Add New Internship',
					'edit_item' => 'Edit Internship',
					'new_item' => 'New Internship',
					'view' => 'View Internship',
					'view_item' => 'View Internship',
					'search_items' => 'Search Internships',
					'not_found' => 'No internships found',
					'not_found_in_trash' => 'No internships found in Trash',
					'parent' => 'Parent Internship'
		      	),
				'menu_position' => 12,
				'public' => true,
				'has_archive' => true,
				'rewrite' => array(
					'slug' => 'internships'
				),
				'supports' => array(
					'title',
					'editor',
					'excerpt',
					'revisions',
				),
				'taxonomies' => array()
		    )
		  );
		}
		
	} // END - create_post_type()
	
	/**
	 * create_taxonomies()
	 * Register internship custom post type-specific taxonomies
	 */
	function create_taxonomies() {
		
		
	} // END create_taxonomies()
	
	/**
	 * add_post_meta_box()
	 */
	function add_post_meta_box() {
		
		if ( function_exists('add_meta_box') ) {
			add_meta_box( 'cunyj-internships', __( 'Metadata', 'cunyj-internships' ), array( &$this, 'post_meta_box' ), 'cunyj_internship', 'side', 'high' );
		}
		
	} // END add_post_meta_box()
	
	/**
	 * post_meta_box()
	 * The HTML representation of our meta box.
	 */
	function post_meta_box() {
		global $post, $cunyj;
		
		?>
		
		
		<?php
		
	} // END post_meta_box()
	
	/**
	 * save_post_meta_box()
	 * Save new values entered by the user
	 */
	function save_post_meta_box( $post_id ) {
		global $cunyj, $post;
	
	} // END save_post_meta_box()
	
} // END class cunyj_internships
	
	
}


?>