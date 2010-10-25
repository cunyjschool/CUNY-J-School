/**
 * Loads the most recent tweet from Twitter
 */
function cunyj_load_home_twitter() {
	
	var request_url = 'http://api.twitter.com/1/statuses/user_timeline.json?screen_name=cunyjschool&count=1';
	
	jQuery.ajax({
		url: request_url,
		success: function(data) {
			
		},
		error: function(data) {
		},
	});
	
}

/**
 * Loads the JSON feed for a given site and inserts blog post links
 * @author danielbachhuber
 */
function cunyj_load_home_blog_posts( url, items, zone ) {
	
	url = url + 'api/get_recent_posts/?count=' + items;
	
	jQuery.ajax({
		url: url,
		dataType: 'jsonp',
		success: function(data) {
			var html = '';
			// Only add data if the status has returned 'ok'
			if ( data.status == 'ok' ) {
				html += '<ul>';
				jQuery.each(data.posts, function( index, item ) {
					html += '<li><a href="' + item.url + '">' + item.title + '</a></li>';
				})
				html += '</ul>';				
			}
			jQuery('#'+zone).append(html);
		},
	});
}

jQuery(document).ready(function() {

	/**
	 * Dynamically load most recent tweet
	 */
	//cunyj_load_home_twitter();

	/**
	 * Dynamically load blog posts from all of the network sites
	 */
	cunyj_load_home_blog_posts( 'http://newsinnovation.com/', 4, 'news-innovation-posts' );
	cunyj_load_home_blog_posts( 'http://writestuff.journalism.cuny.edu/', 4, 'write-stuff-posts' );
	cunyj_load_home_blog_posts( 'http://motthavenherald.com/', 3, 'mott-haven-herald-posts' );
	cunyj_load_home_blog_posts( 'http://digitalnewsjournalist.com/', 3, 'digital-news-journalist-posts' );	
	cunyj_load_home_blog_posts( 'http://219mag.com/', 3, '219-mag-posts' );	

});