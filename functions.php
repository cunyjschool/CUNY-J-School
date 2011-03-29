<?php

//define( 'CUNYJ_THEME_URL' , themes_url(themes_basename(dirname(__FILE__)).'/') );
define( 'CUNYJ_PREFIX' , 'cunjy_' );
define( 'CUNYJ_VERSION', '1.3.1' );

include_once('php/cunyj_events.php');
include_once('php/cunyj_databases.php');
include_once('php/cunyj_capstones.php');

class cunyj
{
	
	var $options_group = 'cunyj_';
	var $options_group_name = 'cunyj_options';
	var $settings_page = 'cunyj_settings';
	
	function __construct() {
		global $wpdb;
		
		$this->events = new cunyj_events();
		$this->databases = new cunyj_databases();
		$this->capstones = new cunyj_capstones();				
		
		$this->options = get_option( $this->options_group_name );
		
		// Let us use jQuery on the front-end
		wp_enqueue_script('jquery');

		// Our theme needs to support post thumbnails
		add_theme_support( 'post-thumbnails' );
		
		add_action( 'init', array( &$this, 'init' ) );
		add_action( 'admin_init', array( &$this, 'admin_init' ) );
		add_action( 'wp_enqueue_scripts', array( &$this, 'enqueue_resources' ) ); 
	}
	
	function init() {

		if ( is_admin() ) {
			add_action( 'admin_menu', array(&$this, 'add_admin_menu_items') );
		}
		
		// Register all of our navigation menus
		register_nav_menus(
			array(
				'primary_navigation' => 'Primary Navigation',
				'currentstudents' => 'Current Students',
				'about' => 'About',
				'research_center' => 'Research Center',
				'entrepreneurial_journalism' => 'Entrepreneurial Journalism',
				'livestream_navigation' => 'CUNY J-School Live',			
				)
			);
			
		// Add theme support for post thumbnails and register sizes
		add_image_size( '600px-width', 600 );
		add_image_size( '520px-width', 520 );
		add_image_size( '64px-thumb', 64, 64, true );
		add_image_size( 'capstone-thumb', 230, 120, true );
		
		// Set up any metaboxes we need to add
		add_action( 'admin_menu', array( &$this, 'add_post_meta_box' ) );
		add_action( 'save_post', array( &$this, 'save_post_meta_box' ) );
		add_action( 'edit_post', array( &$this, 'save_post_meta_box' ) );
		add_action( 'publish_post', array( &$this, 'save_post_meta_box' ) );
		
		if ( is_admin_bar_showing() ) {			
			add_action( 'admin_bar_menu', array( &$this, 'add_admin_bar_items' ), 70 );
		}
		
		// Remove the "Settings" option from BuddyPress personal profile (also removes notification settings)
		bp_core_remove_nav_item( 'settings' );
		
	}
	
	/**
	 * admin_init()
	 * Items to initialize in the WordPress admin only
	 */
	function admin_init() {

		$this->register_settings();

	} // END admin_init()
	
	/**
	 * enqueue_resources()
	 * Enqueue any CSS or JS resources we need for public-facing views
	 */
	function enqueue_resources() {
		
		// Enqueue our stylesheets
		wp_enqueue_style( 'cunyj_primary_css', get_bloginfo('template_directory') . '/style.css', false, CUNYJ_VERSION );
		wp_enqueue_style( 'cunyj_sidebar_css', get_bloginfo('template_directory') . '/css/sidebar.css', array( 'cunyj_primary_css' ), CUNYJ_VERSION );
		wp_enqueue_style( 'cunyj_media_css', get_bloginfo('template_directory') . '/css/media.css', array( 'cunyj_primary_css' ), CUNYJ_VERSION );
		wp_enqueue_style( 'cunyj_buddypress_css', get_bloginfo('template_directory') . '/css/buddypress.css', array( 'cunyj_primary_css' ), CUNYJ_VERSION );
		
		wp_enqueue_style( 'cunyj_home_css', get_bloginfo('template_directory') . '/css/home.css', array( 'cunyj_primary_css' ), CUNYJ_VERSION );
		wp_enqueue_style( 'cunyj_nextgen_gallery_css', get_bloginfo('template_directory') . '/css/nextgen_gallery.css', array( 'cunyj_primary_css' ), CUNYJ_VERSION );
		
		wp_enqueue_style( 'cunyj_databases_css', get_bloginfo('template_directory') . '/css/databases.css', array( 'cunyj_primary_css' ), CUNYJ_VERSION );
		wp_enqueue_style( 'cunyj_events_css', get_bloginfo('template_directory') . '/css/events.css', array( 'cunyj_primary_css' ), CUNYJ_VERSION );
		wp_enqueue_style( 'cunyj_capstones_css', get_bloginfo('template_directory') . '/css/capstones.css', array( 'cunyj_primary_css' ), CUNYJ_VERSION );			
		
		// Load in header
		wp_enqueue_script( 'cunyj_main_js', get_bloginfo('template_directory') . '/js/main.js', array( 'jquery' ), CUNYJ_VERSION );

		// Only enqueue this on the live page
		if ( is_page( 'live' ) ) {
			wp_enqueue_script( 'cunyj_live_js', get_bloginfo('template_directory') . '/js/live.js', array( 'jquery' ), CUNYJ_VERSION, true );
		}
		
	} // END enqueue_resources()
	
	/**
	 * add_admin_menu_items()
	 * Any admin menu items we need
	 */
	function add_admin_menu_items() {

		add_submenu_page( 'themes.php', 'CUNY J-School Theme Options', 'Theme Options', 'manage_options', 'cunyj_options', array( &$this, 'options_page' ) );			

	} // END add_admin_menu_items()
	
	/**
	 * add_admin_bar_items()
	 * Custom items for the J-School theme to WordPress' admin bar
	 */
	function add_admin_bar_items() {
		global $wp_admin_bar;
		
		// Add a link to the theme's options for the users who can edit		
		if ( current_user_can('edit_theme_options') ) {
			$args = array(
				'title' => 'Theme Options',
				'href' => admin_url( 'themes.php?page=cunyj_options' ),
				'parent' => 'appearance',
			);
			$wp_admin_bar->add_menu( $args );
		}
		
	} // END add_admin_bar_items()
	
	/**
	 * add_post_meta_box()
	 * Add post meta boxes we may need
	 */
	function add_post_meta_box() {
		
		add_meta_box( 'cunyj_page_metabox', __( 'Page Options', 'cunyj' ), array( &$this, 'page_meta_box' ), 'page', 'normal', 'high' );
		
	} // END add_post_meta_box()
	
	/**
	 * page_meta_box()
	 * The HTML representation of our meta box. Allows user to save the
	 * media type, author, concentration, year and advisor
	 */
	function page_meta_box() {
		global $post;
		$template_file = get_post_meta( $post->ID, '_wp_page_template', TRUE );
		
		if ( $template_file == 'page-live.php' ) {
			
			$primary_stream = get_post_meta( $post->ID, '_cunyj_primary_stream', true );
			$secondary_stream = get_post_meta( $post->ID, '_cunyj_secondary_stream', true );
		
		?>

		<div class="inner cunyj-page-metabox" id="cunyj-page-live-metabox">

			<p id="cunyj-primary-stream">
				Primary stream:
				<select name="cunyj-primary-stream">
					<option value="no"<?php if ( $primary_stream == 'no' ) { echo ' selected="selected"'; } ?>>None</option>
					<option value="livestream"<?php if ( $primary_stream == 'livestream' ) { echo ' selected="selected"'; } ?>>Livestream</option>
					<option value="watershed"<?php if ( $primary_stream == 'watershed' ) { echo ' selected="selected"'; } ?>>Watershed</option>									
				</select>
			</p>
			
			<p id="cunyj-secondary-stream">
				Secondary stream:
				<select name="cunyj-secondary-stream">
					<option value="no"<?php if ( $secondary_stream == 'no' ) { echo ' selected="selected"'; } ?>>None</option>
					<option value="livestream"<?php if ( $secondary_stream == 'livestream' ) { echo ' selected="selected"'; } ?>>Livestream</option>
					<option value="watershed"<?php if ( $secondary_stream == 'watershed' ) { echo ' selected="selected"'; } ?>>Watershed</option>									
				</select>
			</p>
			
			<input type="hidden" name="cunyj-metabox-nonce" id="cunyj-metabox-nonce" value="<?php echo wp_create_nonce( 'cunyj-metabox-nonce' ); ?>" />

		</div>

		<?php
			
		} else {
		
		?>
		
		<div class="inner no-options-available cunyj-page-metabox" id="cunyj-page-no-options-metabox">
			
			<p>Sorry, there aren't any custom options available for this page.</p>
			
		</div>

		<?php
		
		}
		
	} // END page_meta_box()
	
	/**
	 * save_post_meta_box()
	 * Save new values entered by the user
	 */
	function save_post_meta_box( $post_id ) {
		global $cunyj, $post;
		
		if ( !wp_verify_nonce( $_POST['cunyj-metabox-nonce'], 'cunyj-metabox-nonce' ) ) {
			return $post_id;  
		}
		
		if ( !wp_is_post_revision( $post ) && !wp_is_post_autosave( $post ) ) {
			
			$template_file = get_post_meta( $post_id, '_wp_page_template', TRUE );
			if ( $template_file == 'page-live.php' ) {
				update_post_meta( $post_id, '_cunyj_primary_stream', esc_html( $_POST['cunyj-primary-stream'] ) );
				update_post_meta( $post_id, '_cunyj_secondary_stream', esc_html( $_POST['cunyj-secondary-stream'] ) );
			}
		
		} // END if ( !wp_is_post_revision( $post ) && !wp_is_post_autosave( $post ) )
		
	} // END save_post_meta_box()

	function register_settings() {

		register_setting( $this->options_group, $this->options_group_name, array( &$this, 'settings_validate' ) );

		add_settings_section( 'cunyj_homepage', 'Homepage', array(&$this, 'settings_homepage_section'), $this->settings_page );
		// Top homepage announcement
		add_settings_field( 'enable_top_announcement', 'Enable top announcement', array(&$this, 'settings_enable_top_announcement_option'), $this->settings_page, 'cunyj_homepage' );
		add_settings_field( 'top_announcement', 'Text for top announcement', array(&$this, 'settings_top_announcement_option'), $this->settings_page, 'cunyj_homepage' );
		// Primary homepage announcement
		add_settings_field( 'enable_announcement', 'Enable home announcement', array(&$this, 'settings_enable_announcement_option'), $this->settings_page, 'cunyj_homepage' );
		add_settings_field( 'homepage_announcement', 'Text for home announcement', array(&$this, 'settings_homepage_announcement_option'), $this->settings_page, 'cunyj_homepage' );

	}
	
	function settings_homepage_section() {

	}
	
	/**
	 * Enable or disable the top announcement
	 */
	function settings_enable_top_announcement_option() {
		$options = $this->options;
		echo '<select id="enable_top_announcement" name="' . $this->options_group_name . '[enable_top_announcement]">';
		echo '<option value="0">Disabled</option>';
		echo '<option value="1"';
		if ( isset( $options['enable_top_announcement'] ) && $options['enable_top_announcement'] ) {
			echo ' selected="selected"';
		}
		echo '>Enabled</option>';
		echo '</select>';
		echo '<p class="description">Shows up to logged-out users</p>';
	}
	
	/**
	 * Determine the text to go in the announcement
	 */
	function settings_top_announcement_option() {
		$options = $this->options;
		$allowed_tags = htmlentities( '<b><strong><em><i><span><a>' );
		
		echo '<textarea id="top_announcement" name="' . $this->options_group_name . '[top_announcement]" cols="60" rows="2">';
		if ( isset( $options['top_announcement'] ) && $options['top_announcement'] ) {
			echo $options['top_announcement'];
		}
		echo '</textarea>';
		echo '<p class="description">The following tags are permitted: ' . $allowed_tags . '</p>';
	}
	
	/**
	 * Enable or disable the homepage announcement
	 */
	function settings_enable_announcement_option() {
		$options = $this->options;
		echo '<select id="enable_announcement" name="' . $this->options_group_name . '[enable_announcement]">';
		echo '<option value="0">Disabled</option>';
		echo '<option value="1"';
		if ( isset( $options['enable_announcement'] ) && $options['enable_announcement'] ) {
			echo ' selected="selected"';
		}
		echo '>Enabled</option>';
		echo '</select>';
	}
	
	/**
	 * Determine the text to go in the announcement
	 */
	function settings_homepage_announcement_option() {
		$options = $this->options;
		$allowed_tags = htmlentities( '<b><strong><em><i><span><a>' );
		
		echo '<textarea id="homepage_announcement" name="' . $this->options_group_name . '[homepage_announcement]" cols="60" rows="4">';
		if ( isset( $options['homepage_announcement'] ) && $options['homepage_announcement'] ) {
			echo $options['homepage_announcement'];
		}
		echo '</textarea>';
		echo '<p class="description">The following tags are permitted: ' . $allowed_tags . '</p>';
	}
	
	/**
	 * Validation and sanitization on the settings field
	 */
	function settings_validate( $input ) {
		
		// Homepage announcement can only have basic HTML
		$allowed_tags = '<b><strong><em><i><span><a>';
		$input['top_announcement'] = strip_tags( $input['top_announcement'], $allowed_tags );		
		$input['homepage_announcement'] = strip_tags( $input['homepage_announcement'], $allowed_tags );
		
		return $input;

	}	
	
	/**
	 * Options page for the theme
	 */
	function options_page() {
		?>                                   
		<div class="wrap">
			<div class="icon32" id="icon-options-general"><br/></div>

			<h2><?php _e('CUNY J-School Theme Options', 'cunyj-theme') ?></h2>

			<form action="options.php" method="post">

				<?php settings_fields( $this->options_group ); ?>
				<?php do_settings_sections( $this->settings_page ); ?>

				<p class="submit"><input name="submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" /></p>

			</form>
		</div>
		<?php
	}
	
	/**
	 * Check whether the current page has a large search box on it
	 * @return bool $is_search_page Whether it's a search page or not
	 */
	function is_search_page() {
		global $pagenow, $bp;
		
		if ( !get_search_query() ) {
			return false;
		}
		
		if ( is_search() ) {
			return 'posts';
		} else if ( $bp->current_component == 'members' ) {
			return 'members';
		} else if ( $bp->current_component == 'groups' ) {
			return 'groups';
		} else if ( $bp->current_component == 'blogs' ) {
			return 'blogs';
		} else {
			return false;
		}
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
	if ( method_exists( 'BP_XProfile_ProfileData', 'get_all_for_user' ) )
		$members_template->member->profile_data = BP_XProfile_ProfileData::get_all_for_user( $r['user_id'] );

	$data = xprofile_format_profile_field( $members_template->member->profile_data[$field]['field_type'], $members_template->member->profile_data[$field]['field_data'] );

	return apply_filters( 'cunyj_get_member_profile_data', $data );
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
	// Sidebar for the Research Center pages
	register_sidebar( array( 'id' => 'research_center', 'name' => 'Research Center', 'before_title' => '<h3>', 'after_title' => '</h3>' ) );
	// Sidebar for Entrepreneurial Journalism
	register_sidebar( array( 'id' => 'entrepreneurial_journalism', 'name' => 'Entrepreneurial Journalism', 'before_title' => '<h3>', 'after_title' => '</h3>' ) );
		
}

?>
