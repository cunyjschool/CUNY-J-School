function cunyj_load_home_blog_posts( url, zone ) {
	
	url = url + 'api/get_recent_posts/?count=4';
	
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

	cunyj_load_home_blog_posts( 'http://newsinnovation.com/', 'news-innovation-posts' );
	
	cunyj_load_home_blog_posts( 'http://writestuff.journalism.cuny.edu/', 'write-stuff-posts' );	

});