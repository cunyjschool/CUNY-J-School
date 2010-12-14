/**
 * Handler method that determines which streams to add when the page loads
 */
function cunyj_live_loadpage() {
	
	if ( jQuery('#flickr-json').length > 0 || jQuery('#twitter-json').length > 0 ) {
		jQuery('#live-updates').show();
		if ( jQuery('#flickr-json').length > 0 ) {
			cunyj_live_flickrstream();
		}
	} else {
		return false;
	}
	
}

/**
 * Starts the live imagestream updates
 */
function cunyj_live_flickrstream() {
	jQuery('ul.switcher li#flickr').addClass('active');	
	var json_url = jQuery('#flickr-json').val();
}



jQuery(document).ready(function(){
	
	jQuery('ul.switcher li').click(function(){
		jQuery('ul.switcher li').removeClass('active');
		jQuery(this).addClass('active');
	});
	
	cunyj_live_loadpage();
	
});