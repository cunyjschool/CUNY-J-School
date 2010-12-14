var flickr_timeout;
var twitter_timeout;

function stripslashes(str) {
str=str.replace(/\\'/g,'\'');
str=str.replace(/\"/g,'"');
str=str.replace(/\\"/g,'"');
str=str.replace(/\\0/g,'\0');
str=str.replace(/\\\\/g,'\\');
return str;
}

/**
 * Handler method that determines which streams to add when the page loads
 */
function cunyj_live_loadpage() {
	
	if ( typeof(cunyj_live_flickr_json) != 'undefined' || typeof(cunyj_live_twitter_json) != 'undefined' ) {
		jQuery('#live-updates').show();
		if ( typeof(cunyj_live_flickr_json) != 'undefined' ) {
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
	if ( typeof(cunyj_live_flickr_json) == 'undefined' ) {
		return false;
	}
	jQuery('ul.switcher li#flickr').addClass('active');
	jQuery('#flickr-updates').show();
	var json_url = cunyj_live_flickr_json;
	json_url += '&callback=?';
	json_url = json_url.replace(/&amp;/ig, '&' );
	jQuery.getJSON( json_url );
}

function jsonFlickrFeed( data ) {
	if ( jQuery('#flickr-updates ul li').length == 0 ) {
		var run_once = false;
	} else {
		var run_once = true;
	}
	jQuery.each( data.items, function( key, item ) {
		if ( key < 6 ) {
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
	if ( typeof(cunyj_live_twitter_json) == 'undefined' ) {
		return false;
	}
	jQuery('ul.switcher li#twitter').addClass('active');
	jQuery('#twitter-updates').show();
	var json_url = cunyj_live_twitter_json;
	json_url = json_url.replace(/&amp;/ig, '&' );	
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
		if ( key < 3 ) {
			
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

/**
 * Insert the chat widget into the page
 */
function cunyj_live_meebochat() {
	if ( typeof(cunyj_live_meebo_chat) == 'undefined' ) {
		return false;
	}	
	//var chat_embed = '<div style="width:225px"><style>.mcrmeebo { display: block; background:url("http://widget.meebo.com/r.gif") no-repeat top right; } .mcrmeebo:hover { background:url("http://widget.meebo.com/ro.gif") no-repeat top right; } </style><object width="225" height="275"><param name="movie" value="http://widget.meebo.com/mcr.swf?id=GDwcDLPmRM"></param><embed src="http://widget.meebo.com/mcr.swf?id=GDwcDLPmRM" type="application/x-shockwave-flash" width="225" height="275" /></object><a target="_blank" href="http://www.meebo.com/rooms/" class="mcrmeebo"><img alt="Create a Meebo Chat Room" src="http://widget.meebo.com/b.gif" width="225" height="45" style="border:0px"/></a></div>';
	jQuery('ul.switcher li#meebo').addClass('active');
	jQuery('#meebo-chat').show();
	jQuery('#meebo-chat').append(cunyj_live_meebo_chat);
}

jQuery(document).ready(function(){
	
	jQuery('.video-backup a').click(function(){
		var embed_to_load = cunyj_live_secondary_livestream;
		jQuery('.video-player').html(embed_to_load);
		jQuery('.video-backup').remove();
		jQuery('.video-backup-data').remove();
		return false;
	})
	
	jQuery('ul.switcher li').click(function(){
		jQuery('.updates-wrap').hide();
		clearTimeout(flickr_timeout);
		clearTimeout(twitter_timeout);		
		jQuery('#twitter-updates ul li').remove();
		jQuery('#flickr-updates ul li').remove();
		jQuery('#meebo-chat').empty();
		
		if ( jQuery(this).attr('id') == 'twitter') {
			if ( jQuery(this).hasClass('active') ) {
				jQuery('ul.switcher li').removeClass('active');
			} else {
				jQuery('ul.switcher li').removeClass('active');
				jQuery(this).addClass('active');
				cunyj_live_twitterstream();
			}
		} else if ( jQuery(this).attr('id') == 'flickr' ) {
			if ( jQuery(this).hasClass('active') ) {
				jQuery('ul.switcher li').removeClass('active');
			} else {
				jQuery('ul.switcher li').removeClass('active');
				jQuery(this).addClass('active');
				cunyj_live_flickrstream();
			}	
		} else if ( jQuery(this).attr('id') == 'meebo' ) {					
			if ( jQuery(this).hasClass('active') ) {
				jQuery('ul.switcher li').removeClass('active');
			} else {
				jQuery('ul.switcher li').removeClass('active');
				jQuery(this).addClass('active');
				cunyj_live_meebochat();
			}
		}
	});
	
	cunyj_live_loadpage();
	
});