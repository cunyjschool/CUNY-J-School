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
		var html = '<div class="message loading">Loading CUNY Campus Wire...</div>';
		jQuery('#cuny-campus-wire-dynamic-load').append(html);
		
		var cunycampuswire_json = 'http://pipes.yahoo.com/pipes/pipe.run?_id=aaee703dfb8af98292545662c1d06134&_render=json&_callback=cunyj_render_cunycampuswire';
	
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
	if ( link.indexOf( 'bronxnet.org/' ) != -1 ) {
		publication = 'BronxNet';
	}
	if ( link.indexOf( 'brooklynexcelsior.com/' ) != -1 ) {
		publication = 'The Excelsior';
	}
	if ( link.indexOf( 'thehunterenvoy.com/' ) != -1 ) {
		publication = 'The Envoy';
	}
	if ( link.indexOf( 'theknightnews.com/' ) != -1 ) {
		publication = 'The Knight News';		
	}
	if ( link.indexOf( 'lcmeridian.com/' ) != -1 ) {
		publication = 'Meridian';
	}
	if ( link.indexOf( 'whcs.hunter.cuny.edu/' ) != -1 ) {
		publication = 'WHCS Hunter';
	}
	
	return publication;
	
} // END cunyj_get_publication_name()

/**
 * cunyj_render_cunycampuswire()
 */
function cunyj_render_cunycampuswire( data ) {
	
	jQuery('#cuny-campus-wire-dynamic-load').empty();
	
	var html = Array();
	
	var previous_publication = null;
	
	jQuery.each( data.value.items, function( index, item ) {
		
		var this_publication = cunyj_get_publication_name( item.link );
		html.push( '<div class="wire-item">' );
		html.push( '<h4><a href="' + item.link + '">' + item.title + '</a></h4>' );
		var pub_date = new Date( item.pubDate );
		html.push( '<p class="wire-item-meta meta">' + pub_date.getMonth() + pub_date.getDate() + pub_date.getYear() );
		html.push( this_publication + '</p>' );
		html.push( '</div>' );		
		
	});
	
	jQuery( '#cuny-campus-wire-dynamic-load' ).html( html.join( '' ) );
	
} // END cunyj_render_cunycampuswire()

jQuery(document).ready(function(){
   
   cunyj_download_cunycampuswire();
	
});