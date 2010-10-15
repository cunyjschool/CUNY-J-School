<?php 
	$theme_details = get_theme_data(get_bloginfo('template_directory') . '/style.css');
	$theme_version = $theme_details['Version'];
	$cunyj = new cunyj();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<meta name="description" content=" <?php the_excerpt_rss( 50, 2 ); ?> " />
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="The CUNY Graduate School of Journalism, located one block from Times Square in the heart of New York City, offers a three-semester program with a converged curriculum, paid internships and faculty who are leaders in their fields." />
<?php endif; ?>

	<meta name="copyright" content="Copyright <?php echo date('Y'); ?> City University of New York Graduate School of Journalism" />
	<meta http-equiv="content-language" content="en" />

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta name="google-site-verification" content="HclfSOn_fMggPZnL-xG4QRz4QvnPSBO-P7AJaOEhA-8" />
	
	<?php
	/**
	 * All stylesheets are enqueued in functions.php
	 */
	?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />

  <?php wp_head(); ?>
  
</head>

<body>

<?php if (!is_user_logged_in()) : ?>
	<div id="home-alert"><a href="http://wiki.journalism.cuny.edu/Getting%20a%20Fast%20Start">Getting a Fast Start: CLASS OF 2011</a></div>
<?php else : ?>
	<div id="tile-orange"></div>
<?php endif; ?>

<div id="global">
  <div class="wrap clearfix">
	<?php if ( !$cunyj->is_search_page() ) : ?>		
    <div id="logo">
      <a title="<?php bloginfo('title'); ?>" href="<?php bloginfo('url'); ?>"><img alt="CUNY Graduate School of Journalism" src="<?php bloginfo('template_directory'); ?>/images/logos/cunyj-logo_h360.png" height="75px" width="360px" /></a>
    </div>
	<?php else: ?>
	 <div id="logo">
	      <a title="<?php bloginfo('title'); ?>" href="<?php bloginfo('url'); ?>"><img alt="CUNY Graduate School of Journalism" src="<?php bloginfo('template_directory'); ?>/images/logos/cunyj-logo_h360.png" height="45px" /></a>
	    </div>	
	<?php endif; ?>
    
	<?php if ( !$cunyj->is_search_page() ) : ?>	
		<div id="aud-search">
			<ul id="cssdropdown">
				<li class="headlink first-item"><a href="#" class="olink">Quicklinks &darr;</a>
					<ul>
						<?php if ( !is_user_logged_in() ) : ?>
						<li class="login"><a href="<?php bloginfo('url'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_bloginfo('url')); ?>">Login</a></li>
						<?php endif; ?>
						<li><a href="http://wiki.journalism.cuny.edu/session/login?return_to_page=FrontPage">Wiki</a></li>
						<li><a href="http://mail.journalism.cuny.edu">E-mail</a></li>
						<li><a href="http://help.journalism.cuny.edu">Help Desk</a></li>
						<li><a href="https://cunyjschool.wufoo.com/forms/equipment-request-form/">Equipment Request</a></li>
						<li><a href="<?php bloginfo('url'); ?>/about/room-request/">Room Reservation</a></li>
						<li><a href="https://blackboard-doorway.cuny.edu/">Blackboard</a></li>
						<li><a href="http://www.cuny.edu/flu">H1N1 Info</a></li>
						<li><a href="<?php bloginfo('url'); ?>/about/campus-facilities/hours-of-operation/">Hours of Operation</a></li>
					</ul>
				</li>
				<li><a href="<?php bloginfo('url'); ?>/admissions/">Prospective Students</a></li>
				<li><a href="<?php bloginfo('url'); ?>/current-students/">Current Students</a></li>
				<li><a href="<?php bloginfo('url'); ?>/alumni/">Alumni</a></li>
				<li class="last-item"><a href="<?php bloginfo('url'); ?>/continuing-education/">Continuing Education</a></li>
				<li class="no-background"><a href="http://facebook.com/cunyjschool"><img src="<?php bloginfo('template_directory'); ?>/images/icons/socialnetworking/facebook_16.png" alt="Facebook" /></a></li>
				<li class="no-background"><a href="http://twitter.com/cunyjschool"><img src="<?php bloginfo('template_directory'); ?>/images/icons/socialnetworking/twitter_16.png" alt="Twitter" /></a></li>
			</ul>
			<?php endif; ?>
			
			<?php if ( !$cunyj->is_search_page() ) : ?>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			<?php endif; ?>
    </div><!-- /#aud-search -->

  </div><!-- /.wrap -->
</div><!-- /#global -->

<?php if ( !$cunyj->is_search_page() ) : ?>	
<div id="primary_nav">
	<div class="wrap">
		
	<?php wp_nav_menu(
				array(
					'theme_location' => 'primary_navigation'
					)
				); ?>
	</div><!-- /.wrap -->
</div>
<?php endif; ?>