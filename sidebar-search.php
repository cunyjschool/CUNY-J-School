<div id="search_sidebar" class="sidebar right">
	
	<?php
	global $cunyj;
	$maximum_results = 3;
	
	if ( $cunyj->is_search_page() != 'posts' && get_search_query() ) {
		$args = array( 'showposts' => $maximum_results + 1,
						'post_type' => 'any',
						's' => get_search_query() );
		$posts = get_posts( $args );
		$post_results = 0;
		echo '<div id="search_posts_results" class="buddypress_search_results no-avatar">';
		echo '<h3>Posts and Pages</h3>';
		if ( count( $posts) ) {
			echo '<ul>';
			foreach ( $posts as $post ) {
				if ( $post_results < $maximum_results ) {
					$post_results++;
				} else {
					break;
				}
				echo '<li><a href="' .  get_permalink( $post->id ) . '">';
				echo '<h4>' . $post->post_title . '</h4>';
				echo '<p class="description">';
				if ( $post->post_type == 'page' ) {
					echo 'Updated ' . get_the_time( 'F j, Y', $post->ID );
				} else if ( $post->post_type == 'post' ) {
					echo get_the_author_meta( 'display_name', $post->post_author ) . ' - ' . get_the_time( 'F j, Y', $post->ID );
				}
				echo '</a></li>';
			}
			echo '</ul>';
		} else {
			echo '<div class="message info">No posts or pages matched your search</div>';
		}
		echo '<div class="buddypress_more_results">';
		echo '<a href="' . bp_core_get_root_domain() . '/?s=' . get_search_query() . '">Search all posts and pages</a>';
		echo '</div>';
		echo '</div>';
		
	}

	if ( $cunyj->is_search_page() != 'members' && get_search_query() ) {
		$args = array( 'search_terms' => get_search_query() );
		$users = bp_core_get_users( $args );
		$user_results = 0;
		echo '<div id="search_members_results" class="buddypress_search_results with-avatar">';
		echo '<h3>Members</h3>';
		if ( count( $users['users'] ) ) {
			echo '<ul>';
			foreach ( $users['users'] as $user ) {
				if ( $user_results < $maximum_results ) {
					$user_results++;
				} else {
					break;
				}
				echo '<li><a href="' .  bp_core_get_user_domain( $user->id ) . '">';
				echo bp_core_fetch_avatar( array( 'item_id' => $user->id, 'type' => 'thumb', 'width' => 30, 'height' => 30 ) );
				echo '<h4>' . $user->display_name . '</h4>';
				$title = cunyj_get_member_profile_data( 'field=Title&user_id=' . $user->id );
				$organization = cunyj_get_member_profile_data( 'field=Organization&user_id=' . $user->id );
				if ( $title && $organization ) {
					echo '<p class="description">' . $title . ', ' . $organization . '</p>';
				} else if ( $title || $organization ) {
					echo '<p class="description">' . $title . $organization . '</p>';
				}
				echo '</a></li>';
			}
			echo '</ul>';
		} else {
			echo '<div class="message info">No members matched your search</div>';
		}
		echo '<div class="buddypress_more_results">';
		echo '<a href="' . bp_core_get_root_domain() . '/' . BP_MEMBERS_SLUG . '/?s=' . get_search_query() . '">Search all members</a>';
		echo '</div>';
		echo '</div>';
		
	}
	if ( $cunyj->is_search_page() != 'groups' && get_search_query() ) {
		$args = array( 'search_terms' => get_search_query() );
		$groups = groups_get_groups( $args );
		$group_results = 0;
		echo '<div id="search_groups_results" class="buddypress_search_results with-avatar">';
		echo '<h3>Groups</h3>';
		if ( count( $groups['groups'] ) ) {
			echo '<ul>';
			foreach ( $groups['groups'] as $group ) {
				if ( $group_results < $maximum_results ) {
					$group_results++;
				} else {
					break;
				}
				echo '<li><a href="' . bp_get_group_permalink( $group ) . '">';
				echo bp_core_fetch_avatar( array( 'item_id' => $group->id, 'object' => 'group', 'type' => 'thumb', 'width' => 30, 'height' => 30 ) );
				echo '<h4>' . $group->name . '</h4>';
				echo '<p class="description">' . $group->description . '</p>';
				echo '</a></li>';
			}
			echo '</ul>';
		} else {
			echo '<div class="message info">No groups matched your search</div>';
		}
		echo '<div class="buddypress_more_results">';
		echo '<a href="' . bp_core_get_root_domain() . '/' . BP_GROUPS_SLUG . '/?s=' . get_search_query() . '">Search all groups</a>';
		echo '</div>';
		echo '</div>';

	} // END - if ( $cunyj->is_search_page() != 'groups' )
	
	if ( $cunyj->is_search_page() != 'blogs' && get_search_query() ) {
		$args = array( 'search_terms' => get_search_query() );
		$blogs = bp_blogs_get_blogs( $args );
		
		echo '<div id="search_blogs_results" class="buddypress_search_results no-avatar">';
		echo '<h3>Blogs</h3>';
		$blog_results = 0;
		if ( count( $blogs['blogs'] ) ) {
			echo '<ul>';			
			foreach ( $blogs['blogs'] as $blog ) {
				if ( $blogs_results < $maximum_results ) {
					$blogs_results++;
				} else {
					break;
				}
				echo '<li><a href="http://' . $blog->domain . '">';
				echo '<h4>' . $blog->name . '</h4>';
				echo '<p class="description">' . $blog->description . '</p>';
				echo '</a></li>';
			}
			echo '</ul>';
		} else {
			echo '<div class="message info">No blogs matched your search</div>';
		}
		echo '<div class="buddypress_more_results">';
		echo '<a href="' . bp_core_get_root_domain() . '/' . BP_BLOGS_SLUG . '/?s=' . get_search_query() . '">Search all blogs</a>';
		echo '</div>';
		echo '</div>';

	} // END - if ( $cunyj->is_search_page() != 'blogs' )
	
	?>
	
</div>