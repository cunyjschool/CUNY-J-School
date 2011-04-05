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
 * cunyj_get_publiation_name()
 */
function cunyj_get_publication_name( link ) {
	
	var publication = null;
 	if ( link.indexOf( 'adafi.org/' ) != -1 ) {
		publication = 'ADAFI: The Voice of Medgar Evers College';	
	}
	if ( link.indexOf( 'thebridgenews.com/' ) != -1 ) {
		publication = 'The Bridge';
	}
	
	return publication;
	
} // END cunyj_get_publication_name()

/**
 * cunyj_render_cunycampuswire()
 */
function cunyj_render_cunycampuswire( data ) {
	
	jQuery('#cuny-campus-wire-dynamic-load').empty();
	
	var html = Array();
	
	jQuery.each( data.value.items, function( index, item ) {
	   
		html.push( '<div class="wire-item">' );
		html.push( '<h4><a href="' + item.link + '">' + item.title + '</a></h4>' );
		var publication = cunyj_get_publication_name( item.link );
		if ( publication ) {
			html.push( '<p>' + publication + '</p>' );
		}
		html.push( '</div>' );		
		
	});
	
	jQuery( '#cuny-campus-wire-dynamic-load' ).html( html.join( '' ) );
	
} // END cunyj_render_cunycampuswire()

jQuery(document).ready(function(){
   
   cunyj_download_cunycampuswire();
	
});