jQuery(document).ready(function(){

	jQuery('#cunyj_events-all_day').change(function() {
		if (jQuery(this).is(':checked')) {
			jQuery('.event_date_time').hide();
		} else {
			jQuery('.event_date_time').show();
		}
		
	});
	
	jQuery('a.action#add_street_address').click(function() {
		jQuery(this).remove()
		jQuery('#street_address_wrap').show();
		return false;
	});
	
	
});