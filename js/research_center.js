/**
 * Loads the JSON feed for a given site and inserts blog post links
 * @author danielbachhuber
 */
function cunyj_load_research_blog_posts( url, items, zone ) {
	
	// Only make the AJAX request if the zone exists
	if ( jQuery('#'+zone).length > 0 ) {
	
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
						html += '<li><a href="' + item.url + '">' + item.title + '</a>';
						//html += '<br />By ' + item.author.name;
						html += '</li>';
					})
					html += '</ul>';			
				} else {
					html += '<ul><li>Error loading feed</li></ul>';
				}
				jQuery('#'+zone+' ul').remove();			
				jQuery('#'+zone).append(html);
			},
		});
		
	}
}

jQuery(document).ready(function() {

	/**
	 * Dynamically load blog posts for the Research Center
	 */
	cunyj_load_research_blog_posts( 'http://researchcenter.journalism.cuny.edu/', 8, 'research-center-blog' );

});