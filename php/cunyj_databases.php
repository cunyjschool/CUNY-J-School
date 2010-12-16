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
		
		// Add Database post type
		add_action( 'init', array(&$this, 'create_post_type') );
		add_action( 'init', array(&$this, 'create_taxonomies') );		
		
		// Set up metabox and related actions
		add_action('admin_menu', array(&$this, 'add_post_meta_box'));
		add_action('save_post', array(&$this, 'save_post_meta_box'));
		add_action('edit_post', array(&$this, 'save_post_meta_box'));
		add_action('publish_post', array(&$this, 'save_post_meta_box'));		
		
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
	
	/**
	 * Register the 'topics' taxonomy we're associating with our databases
	 */
	function create_taxonomies() {
		
		$args = array(	'label' => 'Topics',	
						'show_tagcloud' => false,
						);
		
		register_taxonomy( 'cunyj_database_topics', 'cunyj_database', $args );
		
		
	}
	
	function add_post_meta_box() {
		
		if ( function_exists('add_meta_box') ) {
			add_meta_box( 'cunyj-databases', __( 'Metadata', 'cunyj-databases' ), array(&$this, 'post_meta_box'), 'cunyj_database', 'side', 'high' );
		}
		
	}
	
	/**
	 * The HTML representation of our meta box. Allows user to save the
	 * database and tutorial links
	 */
	function post_meta_box() {
		global $post, $cunyj;
		
		$database_link = get_post_meta( $post->ID, '_cunyj_databases_database_link', true );
		$tutorial_link = get_post_meta( $post->ID, '_cunyj_databases_tutorial_link', true );
		
		?>
		
		<div class="inner" id="cunyj_database">
			
			<p><label for="cunyj_database-database_link">Database URL:</label>
				<input type="text" id="cunyj_events-database_link" name="cunyj_events-database_link" value="<?php echo $database_link; ?>" size="40" />
				<br /><span class="description">Link this entry to a third-party database</span>
			</p>
			
			<p><label for="cunyj_database-tutorial_link">Tutorial URL:</label>
				<input type="text" id="cunyj_events-tutorial_link" name="cunyj_events-tutorial_link" value="<?php echo $tutorial_link; ?>" size="40" />
				<br /><span class="description">(Optional) Link this database with a tutorial</span>
			</p>
			
			<input type="hidden" name="cunyj_databases-nonce" id="cunyj_databases-nonce" value="<?php echo wp_create_nonce('cunyj_databases-nonce'); ?>" />
			
		</div>
		
		<?php
		
	}
	
	/**
	 * Save new values entered by the user
	 */
	function save_post_meta_box( $post_id ) {
		global $cunyj, $post;
		
		if ( !wp_verify_nonce( $_POST['cunyj_databases-nonce'], 'cunyj_databases-nonce')) {
			return $post_id;  
		}
		
		if( !wp_is_post_revision( $post ) && !wp_is_post_autosave( $post ) ) {
			
			// Save the database and tutorial links
			update_post_meta( $post_id, '_cunyj_databases_tutorial_link', esc_html($_POST['cunyj_events-tutorial_link']) );
			update_post_meta( $post_id, '_cunyj_databases_database_link', esc_html($_POST['cunyj_events-database_link']) );
		
		}		
	}
	
}	
	
	
}


?>