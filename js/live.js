var flickr_timeout;
var twitter_timeout;

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
	jQuery('#flickr-updates').show();
	var json_url = jQuery('#flickr-json').html();
	json_url += '&callback=?';
	jQuery.getJSON( json_url );
}

function jsonFlickrFeed( data ) {
	if ( jQuery('#flickr-updates ul li').length == 0 ) {
		var run_once = false;
	} else {
		var run_once = true;
	}
	jQuery.each( data.items, function( key, item ) {
		if ( key < 10 ) {
			
			var item_html = '<li id="' + item.link + '"><a href="' + item.link + '" target="_blank">';
			// Replace the medium size with the square size
			item_img = item.media.m.replace( 'm.jpg', 's.jpg' );
			item_html += '<img src="' + item_img + '" height="75px" width="75px" title="' + item.title + '" />';
			item_html += '</a></li>';
			if ( !run_once ) {
				jQuery('#flickr-updates ul').append(item_html);
			} else {
				// Only prepend the new item if it doesn't already exist
				if ( jQuery('#flickr-updates ul li#' + item.link ).length == 0 ) {
					jQuery('#flickr-updates ul').prepend(item_html);
					jQuery('#flickr-updates ul li:last').remove();
				}
			}
		} else {
			return false;
		}
	})
	
	flickr_timeout = setTimeout( 'cunyj_live_flickrstream()', 3000 );	
}

/**
 * Starts the live Twitterstream updates
 */
function cunyj_live_twitterstream() {
	jQuery('ul.switcher li#twitter').addClass('active');
	jQuery('#twitter-updates').show();
	var json_url = jQuery('#twitter-json').html();
	json_url += '&callback=?';
	jQuery.getJSON( json_url, null, function( data ) {
		jsonTwitterFeed( data );
	} );
}

function jsonTwitterFeed( data ) {
	if ( jQuery('#twitter-updates ul li').length == 0 ) {
		var run_once = false;
	} else {
		var run_once = true;
	}
	jQuery.each( data.results, function( key, tweet ) {
		if ( key < 10 ) {
			
			var tweet_html = '<li id="' + tweet.id + '">'
			tweet_html += '<img src="' + tweet.profile_image_url + '" height="32px" width="32px" class="avatar" />';			
			tweet_html += '<div class="tweet-text"><a href="http://twitter.com/' + tweet.from_user + '/status/' + tweet.id + '/" target="_blank">';
			tweet_html += tweet.from_user + '</a>: ';
			tweet_html += tweet.text;
			tweet_html += '</div></li>';
			if ( !run_once ) {
				jQuery('#twitter-updates ul').append(tweet_html);
			} else {
				// Only prepend the new item if it doesn't already exist
				if ( jQuery('#twitter-updates ul li#' + tweet.id ).length == 0 ) {
					jQuery('#twitter-updates ul').prepend(tweet_html);
					jQuery('#twitter-updates ul li:last').remove();
				}
			}
		} else {
			return false;
		}
	})
	
	twitter_timeout = setTimeout( 'cunyj_live_twitterstream()', 3000 );	
}

jQuery(document).ready(function(){
	
	jQuery('ul.switcher li').click(function(){
		if ( jQuery(this).attr('id') == 'twitter') {
			if ( jQuery(this).hasClass('active') ) {
				jQuery('ul.switcher li').removeClass('active');
				clearTimeout(twitter_timeout);				
				jQuery('#twitter-updates').hide();			
				jQuery('#twitter-updates ul li').remove();
			} else {
				jQuery('ul.switcher li').removeClass('active');
				jQuery(this).addClass('active');
				clearTimeout(flickr_timeout);
				jQuery('#flickr-updates').hide();		
				jQuery('#flickr-updates ul li').remove();
				cunyj_live_twitterstream();
			}
		} else if ( jQuery(this).attr('id') == 'flickr' ) {
			if ( jQuery(this).hasClass('active') ) {
				jQuery('ul.switcher li').removeClass('active');
				clearTimeout(flickr_timeout);				
				jQuery('#flickr-updates').hide();		
				jQuery('#flickr-updates ul li').remove();
			} else {
				jQuery('ul.switcher li').removeClass('active');
				jQuery(this).addClass('active');
				clearTimeout(twitter_timeout);
				jQuery('#twitter-updates').hide();			
				jQuery('#twitter-updates ul li').remove();
				cunyj_live_flickrstream();
			}	
		}
	});
	
	cunyj_live_loadpage();
	
});