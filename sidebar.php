	<div id="sidebar">

<ul id="sidebar-nav">
  <li><h4><a href="<?php $parent_link = get_permalink($post->post_parent); echo $parent_link; ?>"><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?></a></h4></li>
  
<?php
if ( is_page('34') || $post->post_parent=="34")	{ //Academics
		wp_list_pages('sort_column=menu_order&title_li=&depth=2&child_of=34');
	}
	
	elseif ( is_page('62') || $post->post_parent=="62") { //About
		wp_list_pages('title_li=&depth=2&child_of=62');
	} 

	elseif ( is_page('110') || $post->post_parent=="110") { //Admissions
		wp_list_pages('title_li=&depth=2&child_of=110');
	} 
	
	elseif ( is_page('162') || $post->post_parent=="162") { //Career Services
		wp_list_pages('title_li=&depth=2&child_of=162');
	} 
	
	elseif ( is_page('203') || $post->post_parent=="203") { //Research Center
		wp_list_pages('title_li=&depth=2&child_of=203');
	}
	
	elseif ( is_page('205') || $post->post_parent=="205") { //Research Center About
		wp_list_pages('title_li=&depth=2&child_of=203');
	}
	
	elseif ( is_page('227') || $post->post_parent=="227") { //Giving
		wp_list_pages('title_li=&depth=2&child_of=227');
	}
?>
</ul>
	</div>




