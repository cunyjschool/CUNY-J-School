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
		
		// Add Capstone post type
		add_action( 'init', array(&$this, 'create_post_type') );
		add_action( 'init', array(&$this, 'create_taxonomies') );		
			
		// Set up metabox and related actions
		add_action('admin_menu', array(&$this, 'add_post_meta_box'));
		add_action('save_post', array(&$this, 'save_post_meta_box'));
		add_action('edit_post', array(&$this, 'save_post_meta_box'));
		add_action('publish_post', array(&$this, 'save_post_meta_box'));
		
	}
	
	/**
	 * Register the capstone post type with WordPress
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
				'has_archive' => true,
				'rewrite' => array(
					'slug' => 'capstones'
				),
				'supports' => array(
					'title',
					'author',
					'editor',
					'excerpt',						
					'thumbnail',
				),
				'taxonomies' => array(
					'cunyj_capstone_media_types',
					'cunyj_concentrations',
				),
		    )
		  );
		}
		
	} // END create_post_type()
	
	/**
	 * Register the 'media types' and 'concentration' taxonomy we're associating with our capstones
	 */
	function create_taxonomies() {
		
		// Media type taxonomy
		$args = array(	'label' => 'Media Type',	
						'show_tagcloud' => false,
						'hierarchical' => true,
						);
		register_taxonomy( 'cunyj_capstone_media_types', 'cunyj_capstone', $args );
		
		// Concentration taxonomy
		$args = array(	'label' => 'Concentration',	
						'show_tagcloud' => false,
						'hierarchical' => true,
						);
		register_taxonomy( 'cunyj_concentrations', 'cunyj_capstone', $args );
		
		
	}

	/**
	 * add_post_meta_box()
	 * Add metadata post meta box for capstones
	 */
	function add_post_meta_box() {
		
		if ( function_exists('add_meta_box') ) {
			add_meta_box( 'cunyj-capstones', __( 'Metadata', 'cunyj-capstones' ), array(&$this, 'post_meta_box'), 'cunyj_capstone', 'side', 'high' );
		}
		
	} // END add_post_meta_box()
	
	/**
	 * post_meta_box()
	 * The HTML representation of our meta box. Allows user to save the
	 * media type, author, concentration, year and advisor
	 */
	function post_meta_box() {
		global $post, $cunyj;
		
		$capstone_year = get_post_meta( $post->ID, '_cunyj_capstones_capstone_year', true );
		$capstone_advisor = get_post_meta( $post->ID, '_cunyj_capstones_capstone_advisor', true );
		$capstone_url = get_post_meta( $post->ID, '_cunyj_capstones_capstone_url', true );
		$capstone_video = get_post_meta( $post->ID, '_cunyj_capstones_capstone_video', true );
		
		?>
		
		<div class="inner" id="cunyj_database">
			
			<p><label for="cunyj_capstone-capstone_year">Pub. Year:</label>
				<input type="text" id="cunyj_capstones-capstone_year" name="cunyj_capstones-capstone_year" value="<?php echo $capstone_year; ?>" size="40" />
			</p>
            
            <p><label for="cunyj_capstone-capstone_advisor">Capstone Advisor:</label>
				<input type="text" id="cunyj_capstones-capstone_advisor" name="cunyj_capstones-capstone_advisor" value="<?php echo $capstone_advisor; ?>" size="40" />
			</p>
            
            <p><label for="cunyj_capstone-capstone_url">Website URL:</label>
				<input type="text" id="cunyj_capstones-capstone_url" name="cunyj_capstones-capstone_url" value="<?php echo $capstone_url; ?>" size="40" />
                <br /><span class="description">(Interactive only)</span>
			</p>
            <p><label for="cunyj_capstone-capstone_video">Video URL:</label>
				<input type="text" id="cunyj_capstones-capstone_video" name="cunyj_capstones-capstone_video" value="<?php echo $capstone_video; ?>" size="40" />
                <br /><span class="description">(Broadcast only)</span>
			</p>
            
			<input type="hidden" name="cunyj_capstones-nonce" id="cunyj_capstones-nonce" value="<?php echo wp_create_nonce('cunyj_capstones-nonce'); ?>" />
			
		</div>
		
		<?php
		
	} // END post_meta_box()
	
	/**
	 * save_post_meta_box()
	 * Save new values entered by the user
	 */
	function save_post_meta_box( $post_id ) {
		global $cunyj, $post;
		
		if ( !wp_verify_nonce( $_POST['cunyj_capstones-nonce'], 'cunyj_capstones-nonce')) {
			return $post_id;  
		}
		
		if( !wp_is_post_revision( $post ) && !wp_is_post_autosave( $post ) ) {
			
			// Save the author, media type, concentration, year and advisor
			update_post_meta( $post_id, '_cunyj_capstones_capstone_year', esc_html($_POST['cunyj_capstones-capstone_year']) );
			update_post_meta( $post_id, '_cunyj_capstones_capstone_advisor', esc_html($_POST['cunyj_capstones-capstone_advisor']) );
			update_post_meta( $post_id, '_cunyj_capstones_capstone_url', esc_html($_POST['cunyj_capstones-capstone_url']) );
			update_post_meta( $post_id, '_cunyj_capstones_capstone_video', esc_html($_POST['cunyj_capstones-capstone_video']) );
		
		}	
	
		
	} // END save_post_meta_box()
	
} // END class cunyj_capstones()
	
	
} // END if ( !class_exists('cunyj_capstones') )

?>