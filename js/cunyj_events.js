jQuery(document).ready(function(){

	jQuery('#cunyj_events-all_day').change(function() {
		if (jQuery(this).is(':checked')) {
			jQuery('.event_date_time').hide();
		} else {
			jQuery('.event_date_time').show();
		}
		
	});
	
	
});