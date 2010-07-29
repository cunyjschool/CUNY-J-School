<div id="sidebar">
	<?php
	//if the post has a parent
	if ($post->post_parent){
	  //collect ancestor pages
	  $relations = get_post_ancestors($post->ID);
		$depth = count($relations);
		$depth = $depth + 2;
		$parents = $relations;
		foreach ($parents as $parent) {
			$add_page = array();
			$siblings = get_pages(array('child_of'=>$parent));
			foreach ($siblings as $sibling) {
				$add_page[] = $sibling->ID;
			}
			$relations = array_merge($relations, $add_page);
		}
	  //get child pages
	  $result = $wpdb->get_results( "SELECT ID FROM wp_posts WHERE post_parent = $post->ID AND post_type='page'" );
	  if ($result){
	    foreach($result as $pageID){
	      array_push($relations, $pageID->ID);
	    }
	  }
	
	  //add current post to pages
	  array_push($relations, $post->ID);
	  //get comma delimited list of children and parents and self
	  $relations_string = implode(",",$relations);
	  //use include to list only the collected pages. 
	  $sidelinks = wp_list_pages("title_li=&echo=0&depth=".$depth."&include=".$relations_string);
	} else {
	  // display only main level and children
		$result = get_pages(array('child_of'=>$post->ID));
		$relations = array();
	  if ($result){
	    foreach($result as $pageID){
	      array_push($relations, $pageID->ID);
	    }
	  }
		array_push($relations, $post->ID);
	  $relations_string = implode(",",$relations);
	  $sidelinks = wp_list_pages("title_li=&echo=0&depth=3&include=".$relations_string);
	}

	if ($sidelinks) { ?>
	  <ul class="navigation">
	    <?php echo $sidelinks; ?>
	  </ul>         
	<?php } ?>
</div>