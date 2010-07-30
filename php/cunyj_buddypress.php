<?php

class cunyj_buddypress
{
	
	function __construct() {
		
		remove_action( 'bp_adminbar_logo', 'bp_adminbar_logo' );
		remove_action( 'bp_adminbar_menus', 'bp_adminbar_login_menu', 2 );
		remove_action( 'bp_adminbar_menus', 'bp_adminbar_account_menu', 4 );		
		
		// Remove the random menu action
		remove_action( 'bp_adminbar_menus', 'bp_adminbar_random_menu', 100 );
		
		
		add_action( 'bp_adminbar_menus', array(&$this, 'cunyj_adminbar_activity'), 1 );
		add_action( 'bp_adminbar_menus', array(&$this, 'cunyj_adminbar_groups'), 7 );
		add_action( 'bp_adminbar_menus', array(&$this, 'cunyj_adminbar_profile'), 100 );
		add_action( 'bp_adminbar_menus', array(&$this, 'cunyj_adminbar_login_menu'), 100 );
		
	}
	
	// **** "Log In" and "Sign Up" links (Visible when not logged in) ********
	function cunyj_adminbar_login_menu() {
		global $bp;

		if ( is_user_logged_in() )
			return false;

		echo '<li class="bp-login no-arrow align-right"><a href="' . $bp->root_domain . '/wp-login.php?redirect_to=' . urlencode( $bp->root_domain ) . '">' . __( 'Log In', 'buddypress' ) . '</a></li>';

		// Show "Sign Up" link if user registrations are allowed
		if ( bp_get_signup_allowed() ) {
			echo '<li class="bp-signup no-arrow"><a href="' . bp_get_signup_page(false) . '">' . __( 'Sign Up', 'buddypress' ) . '</a></li>';
		}
	}
	
	function cunyj_adminbar_activity() {
		global $bp;
		
		if (!is_user_logged_in()) {
			return false;
		}
		echo '<li id="bp-adminbar-activity" class="no-arrow"><a href="' . $bp->root_domain . '/activity/">Network Activity</a></li>';
		
	}
	
	function cunyj_adminbar_groups() {
		global $bp;
		
		if (!is_user_logged_in()) {
			return false;
		}
		
		if ( function_exists( 'groups_install' ) ) {
			
			//$groups = groups_get_groups_for_user( $bp->loggedin_user->id, true );
			
			if ( bp_has_groups() ) :
				
				echo '<li id="bp-adminbar-groups-menu"><a href="' . $bp->loggedin_user->domain . $bp->groups->slug . '/my-groups">';

				_e ( 'Groups', 'buddypress');

				echo '</a><ul>';
				
				while ( bp_groups() ) : bp_the_group();
				
					echo '<li><a href="';
					bp_group_permalink();
					echo '">';
					bp_group_name();
					echo '</a></li>';
				
				endwhile;
		
				
				echo '</ul></li>';
				
			else :
				
			endif;
		
		}
		
		//$counter = 0;
		//foreach( (array)$bp->bp_nav as $nav_item ) {
		
	}
	
	function cunyj_adminbar_profile() {
		global $bp;
		
		if ( !$bp->bp_nav || !is_user_logged_in() ) {
			return false;
		}
		
		echo '<li class="align-right" id="bp-adminbar-account-menu"><a href="' . bp_loggedin_user_domain() . '">';
		echo __( 'My Profile', 'buddypress' ) . '</a>';
		echo '<ul>';
		
		/* Loop through each navigation item */
		$counter = 0;
		foreach( (array)$bp->bp_nav as $nav_item ) {
			$alt = ( 0 == $counter % 2 ) ? ' class="alt"' : '';
			
			$ignore = (array('Activity', 'Profile'));
			
			if (in_array($nav_item['name'], $ignore)) {
				continue;
			}

			echo '<li' . $alt . '>';
			echo '<a id="bp-admin-' . $nav_item['css_id'] . '" href="' . $nav_item['link'] . '">' . $nav_item['name'] . '</a>';

			echo '</li>';

			$counter++;
		}
		
		echo '<li' . $alt . '><a id="bp-admin-logout" class="logout" href="' . wp_logout_url( site_url() ) . '">' . __( 'Log Out', 'buddypress' ) . '</a></li>';
		
		echo '</ul></li>';
		
	}
	
}


?>