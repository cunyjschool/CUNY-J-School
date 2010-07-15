<?php get_header(); ?>


<?php
echo SimplePieWP('http://nycitynewsservice.com/category/top-stories/feed/', array(
	'items' => 5,
	'cache_duration' => 1800,
	'date_format' => 'j M Y, g:i a',
	'truncate_item_description' => 0
));
?>

</body>
</html>
