function cunyj_load_home_blog_posts( url, items, zone ) {
	
	url = url + 'api/get_recent_posts/?count=' + items;
	
	jQuery.ajax({
		url: url,
		dataType: 'jsonp',
		success: function(data) {
			var html = '';
			if ( data.status == 'ok' ) {
				html += '<ul>';
				jQuery.each(data.posts, function( index, item ) {
					html += '<li><a href="' + item.url + '">' + item.title + '</a></li>';
				})
				html += '</ul>';				
			}
			jQuery('#'+zone).append(html);
		}
	});
}

jQuery(document).ready(function() {

	cunyj_load_home_blog_posts( 'http://newsinnovation.com/', 4, 'news-innovation-posts' );
	
	cunyj_load_home_blog_posts( 'http://writestuff.journalism.cuny.edu/', 4, 'write-stuff-posts' );
	
	cunyj_load_home_blog_posts( 'http://motthavenherald.com/', 3, 'mott-haven-herald-posts' );
	
	cunyj_load_home_blog_posts( 'http://digitalnewsjournalist.com/', 3, 'digital-news-journalist-posts' );	
	
	cunyj_load_home_blog_posts( 'http://219mag.com/', 3, '219-mag-posts' );	

});