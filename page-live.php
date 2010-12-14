<?php
/*
Template Name: Page - Live
*/
?>

<?php 
	$theme_details = get_theme_data(get_bloginfo('template_directory') . '/style.css');
	$theme_version = $theme_details['Version'];
	$cunyj = new cunyj();
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
			<?php if ( $primary_livestream = get_post_meta( get_the_id(), 'primary_livestream', true ) ) : ?>
				<?php echo $primary_livestream; ?>
			<?php else: ?>
				<p>Please add an embed code to the 'primary_livestream' custom field for this page.</p>
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
		
		<?php if ( $secondary_livestream = get_post_meta( get_the_id(), 'secondary_livestream', true ) ) : ?>
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
$primary_livestream = ( $primary_livestream = get_post_meta( get_the_id(), 'primary_livestream', true ) ) ? $primary_livestream : '';
$secondary_livestream = ( $secondary_livestream = get_post_meta( get_the_id(), 'secondary_livestream', true ) ) ? $secondary_livestream : '';				?>
<script type="text/javascript">
	var cunyj_live_flickr_json = '<?php echo $flickr_json; ?>';
	var cunyj_live_twitter_json = '<?php echo $twitter_json; ?>';
	var cunyj_live_meebo_chat = '<?php echo $meebo_chat; ?>';	
	var cunyj_live_primary_livestream = '<?php echo $primary_livestream; ?>';	
	var cunyj_live_secondary_livestream = '<?php echo $secondary_livestream; ?>';	
</script>


<?php get_footer(); ?>