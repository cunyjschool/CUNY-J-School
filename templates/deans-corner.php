<div id="deanscorner">
<h3>Recent Dean's Corner Posts</h3>
<ul>
<?php
    $args=array(
      'cat' => 248,
      'numberposts'=>1,
    );
	
$catposts=get_posts($args);
if ($catposts) {
	foreach($catposts as $catpost) {
		echo "<li><a href='".get_permalink($catpost->ID)."'>".$catpost->post_title."</a>"; 
		echo "<p>$catpost->post_excerpt <a href='".get_permalink($catpost->ID)."'>Read more &raquo;</a></p>";
		echo "</li>";
	}
}
?>
<?php
    $args=array(
      'cat' => 248,
      'numberposts'=>4,
	  'offset'=>1,
    );
	
$catposts=get_posts($args);
if ($catposts) {
	foreach($catposts as $catpost) {
		echo "<li><a href='".get_permalink($catpost->ID)."'>".$catpost->post_title."</a></li>"; 
	}
}
?>
  <li style="background: none;"><a href="/category/deans-corner/">More &raquo;</a></li>
</ul>
</div>




	