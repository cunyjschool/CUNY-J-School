/**
 * cunyj_load_cunycampuswire()
 * Download the CUNY Campus Wire from Yahoo Pipes
 * @author danielbachhuber
 * @date 4/5/11
 */
function cunyj_download_cunycampuswire() {
	
	// Only make the AJAX request if the zone exists
	if ( jQuery('#cuny-campus-wire-dynamic-load').length > 0 ) {
		
		// Loading message for the wire
		var html = '<div class="message info"><p>Loading CUNY Campus Wire...</p></div>';
		jQuery('#cuny-campus-wire-dynamic-load').append(html);
		
		var cunycampuswire_json = 'http://pipes.yahoo.com/pipes/pipe.run?_id=fd6e096ae2c202c5a1d6ede49f686495&_render=json&_callback=cunyj_render_cunycampuswire';
	
		jQuery.ajax({
			url: cunycampuswire_json,
			dataType: 'jsonp',
			success: function(data) {
				
				// This should happen in a callback anyway
				
			},
		});
		
	}
} // END - cunyj_download_cunycampuswire()

/**
 * cunyj_render_cunycampuswire()
 */
function cunyj_render_cunycampuswire( data ) {
	
	jQuery('#cuny-campus-wire-dynamic-load').empty();
	
	var html = Array();
	
	jQuery.each( data.value.items, function( index, item ) {
	   
		html.push( '<div class="wire-item">' );
		html.push( '<h4><a href="' + item.link + '">' + item.title + '</a></h4>' );
		html.push( '</div>' );		
		
	});
	
	jQuery( '#cuny-campus-wire-dynamic-load' ).html( html.join( '' ) );
	
} // END cunyj_render_cunycampuswire()

jQuery(document).ready(function(){
   
   cunyj_download_cunycampuswire();
	
});