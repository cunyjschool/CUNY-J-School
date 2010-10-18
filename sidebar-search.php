<div id="search_sidebar" class="sidebar right">
	
	<?php
	global $cunyj;
	if ( $cunyj->is_search_page() != 'members' ) {
		$args = array( 'search_terms' => get_search_query() );
		$users = bp_core_get_users( $args );
		
		if ( count( $users['users'] ) ) {		
			echo '<div id="search_members_results" class="buddypress_search_results with-avatar">';
			echo '<h3>People (' . count( $users['users'] ) . ')</h3>';
			echo '<ul>';
			foreach ( $users['users'] as $user ) {
				echo '<li><h4>' . $user->display_name . '</h4></li>';
			}
			echo '</ul>';
			echo '</div>';
		}
		
	}
	if ( $cunyj->is_search_page() != 'groups' ) {
		$args = array( 'search_terms' => get_search_query() );
		$groups = groups_get_groups( $args );
		
		if ( count( $groups['groups'] ) ) {		
			echo '<div id="search_groups_results" class="buddypress_search_results with-avatar">';
			echo '<h3>Groups (' . count( $groups['groups'] ) . ')</h3>';
			echo '<ul>';
			foreach ( $groups['groups'] as $group ) {
				echo '<li><a href="' . bp_get_group_permalink( $group ) . '">';
				echo bp_core_fetch_avatar( array( 'item_id' => $group->id, 'object' => 'group', 'type' => 'thumb', 'width' => 30, 'height' => 30 ) );
				echo '<h4>' . $group->name . '</h4>';
				echo '<p class="description">' . $group->description . '</p>';
				echo '</a></li>';
			}
			echo '</ul>';
			echo '</div>';
		}

	} // END - if ( $cunyj->is_search_page() != 'groups' )
	
	if ( $cunyj->is_search_page() != 'blogs' ) {
		$args = array( 'search_terms' => get_search_query() );
		$blogs = bp_blogs_get_blogs( $args );
		
		if ( count( $blogs['blogs'] ) ) {		
			echo '<div id="search_blogs_results" class="buddypress_search_results no-avatar">';
			echo '<h3>Blogs (' . count( $blogs['blogs'] ) . ')</h3>';
			echo '<ul>';			
			foreach ( $blogs['blogs'] as $blog ) {
				echo '<li><a href="">';
				echo '<h4>' . $blog->name . '</h4>';
				echo '<p class="description">' . $blog->description . '</p>';
				echo '</a></li>';
			}
			echo '</ul>';
			echo '</div>';
		}

	} // END - if ( $cunyj->is_search_page() != 'groups' )
	
	?>
	
</div>