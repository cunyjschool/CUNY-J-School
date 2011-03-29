<?php
/*
Template Name: Page - Live
*/

$embed_codes = array();
$embed_codes['no'] = '';
$embed_codes['livestream'] = '<object width="720" height="400" id="lsplayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"><param name="movie" value="http://cdn.livestream.com/grid/LSPlayer.swf?channel=cunyjournalism&amp;color=0xe7e7e7&amp;autoPlay=false&amp;mute=false&amp;iconColorOver=0x888888&amp;iconColor=0x777777"></param><param name="allowScriptAccess" value="always"></param><param name="allowFullScreen" value="true"></param><embed name="lsplayer" wmode="transparent" src="http://cdn.livestream.com/grid/LSPlayer.swf?channel=cunyjournalism&amp;color=0xe7e7e7&amp;autoPlay=false&amp;mute=false&amp;iconColorOver=0x888888&amp;iconColor=0x777777" width="720" height="400" allowScriptAccess="always" allowFullScreen="true" type="application/x-shockwave-flash"></embed></object>';
$embed_codes['watershed'] = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="720" height="480" id="utv174"><param name="flashvars" value="autoplay=false&brand=embed&cid=18332%2Ftest&locale=en_US"/><param name="allowfullscreen" value="true"/><param name="allowscriptaccess" value="always"/><param name="movie" value="http://www.ustream.tv/flash/live/18332/test"/><embed flashvars="autoplay=false&brand=embed&cid=18332%2Ftest&locale=en_US" width="720" height="480" allowfullscreen="true" allowscriptaccess="always" id="utv174" name="utv_n_143574" src="http://www.ustream.tv/flash/live/18332/test" type="application/x-shockwave-flash" /></object>';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="description" content="Streaming content from the CUNY Graduate School of Journalism" />

	<meta name="copyright" content="Copyright <?php echo date('Y'); ?> City University of New York Graduate School of Journalism" />
	<meta http-equiv="content-language" content="en" />

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<?php
	/**
	 * All stylesheets are enqueued in functions.php
	 */
	?>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />

	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/live.css" />
  
</head>

<body id="live">

<div id="tile-orange"></div>

<div id="global">
	<div class="wrap">
		
		<?php wp_nav_menu(
					array(
						'theme_location' => 'livestream_navigation',
						'fallback_cb' => false,
						'menu_id' => 'livestream-navigation',
						)
					); ?>
		
 		<div id="logo" class="minimal">
	      <a title="<?php bloginfo('title'); ?>" href="<?php bloginfo('url'); ?>"><img alt="CUNY Graduate School of Journalism" src="<?php bloginfo('template_directory'); ?>/images/logos/cunyj-logo_h360.png" height="45px" /></a>
	    </div>

	</div><!-- /.wrap -->
</div><!-- /#global -->

<div class="wrap">
	
	<div class="main" id="cunyj-live">
		
		<h2 class="banner"><?php the_title(); ?></h2>
  
		<div class="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="page full" id="page-<?php the_ID(); ?>">
		
		<div class="video-player">
			<?php if ( 'no' != ( $primary_livestream = get_post_meta( get_the_id(), '_cunyj_primary_stream', true ) ) ) : ?>
				<?php echo $embed_codes[$primary_livestream]; ?>
			<?php else: ?>
				<p>Please select a primary stream for this page.</p>
			<?php endif; ?>
		</div>
		
		<div class="video-sidebar">
			<div class="sidebar-item" id="interest-capture">
				<a class="sign-up" target="_blank" href="https://cunyjschool.wufoo.com/forms/s7p4p3/" onclick="window.open(this.href,  null, 'height=540, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false" title="Sign up for updates">Sign up for J-School updates</a>
			</div>
			
			<div class="sidebar-item" id="live-updates">
				<ul class="switcher">
					<li class="button" id="flickr">Photos</li>
					<li class="button" id="twitter">Tweets</li>
					<li class="button" id="meebo">Chat</li>
				</ul>
				
				<div id="flickr-updates" class="updates-wrap">
					<ul>
						
					</ul>
					
					<div style="clear:left;"></div>
					
					<p></p>
				</div>
				
				<div id="twitter-updates" class="updates-wrap">
					<ul>
						
					</ul>
					
					<div style="clear:left;"></div>
					
					<p></p>
				</div>
				
				<div id="meebo-chat" class="updates-wrap">
					
				</div>
				
			</div>
			
			
			<div class="sidebar-item" id="report-trouble">
				<p>Trouble with the livestream or chat? Email <a href="mailto:webmaster@journalism.cuny.edu?subject=Issue with livestream and/or chat">webmaster@journalism.cuny.edu</a> and we'll help out!</p>
			</div>
			
		</div>
		
		<div class="clear"></div>
		
		<?php if ( 'no' != ( $secondary_livestream = get_post_meta( get_the_id(), '_cunyj_secondary_stream', true ) ) ) : ?>
		<div class="video-backup">If this video is down, please <a href="#">try the mirror stream</a></div>
    	<?php endif; ?>

    	<div class="entry">

			<?php the_content(); ?>
		
      	</div>

    </div>
		<?php endwhile; endif; ?>
  </div>

	</div>
</div>

<?php 
$flickr_json = ( $flickr_json = get_post_meta( get_the_id(), 'flickr_json', true ) ) ? $flickr_json : '';
$twitter_json = ( $twitter_json = get_post_meta( get_the_id(), 'twitter_json', true ) ) ? $twitter_json : '';
$meebo_chat = ( $meebo_chat = get_post_meta( get_the_id(), 'meebo_chat', true ) ) ? $meebo_chat : '';
$primary_livestream_embed = addslashes( $embed_codes[$primary_livestream] );
$secondary_livestream_embed = addslashes( $embed_codes[$secondary_livestream] );				?>
<script type="text/javascript">
	var cunyj_live_flickr_json = '<?php echo $flickr_json; ?>';
	var cunyj_live_twitter_json = '<?php echo $twitter_json; ?>';
	var cunyj_live_meebo_chat = '<?php echo $meebo_chat; ?>';	
	var cunyj_live_primary_livestream = '<?php echo $primary_livestream_embed; ?>';	
	var cunyj_live_secondary_livestream = '<?php echo $secondary_livestream_embed; ?>';	
</script>


<?php get_footer(); ?>