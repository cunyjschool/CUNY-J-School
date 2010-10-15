<div id="members_sidebar" class="sidebar">
	
	<?php 
	$args = array( 'search_terms' => get_search_query() );
	var_dump(groups_get_groups( $args )); ?>
	
</div>