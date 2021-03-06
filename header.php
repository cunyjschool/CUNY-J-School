<?php 
	$theme_details = get_theme_data(get_bloginfo('template_directory') . '/style.css');
	$theme_version = $theme_details['Version'];
	$cunyj = new cunyj();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if ( is_single() || is_page() ) { ?>
<meta name="description" content=" <?php the_excerpt(); ?> " />
<?php } else { ?>
<meta name="description" content="The CUNY Graduate School of Journalism, located one block from Times Square in the heart of New York City, offers a three-semester program with a converged curriculum, paid internships and faculty who are leaders in their fields." />
<?php } ?>

	<meta name="copyright" content="Copyright <?php echo date('Y'); ?> City University of New York Graduate School of Journalism" />
	<meta http-equiv="content-language" content="en" />

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta name="google-site-verification" content="HclfSOn_fMggPZnL-xG4QRz4QvnPSBO-P7AJaOEhA-8" />
	<meta name="google-site-verification" content="05m0sGhwEPW0MeSVKRC4cDr_EYYzh3xq_FcYYbXSAFs" />
	
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

<body <?php body_class(); ?>>
<?php if ( !is_user_logged_in() && isset( $cunyj->options['enable_top_announcement']) && $cunyj->options['enable_top_announcement'] ) : ?>
	<div id="top-alert"><?php echo $cunyj->options['top_announcement']; ?></div>
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
	 <div id="logo" class="minimal">
	      <a title="<?php bloginfo('title'); ?>" href="<?php bloginfo('url'); ?>"><img alt="CUNY Graduate School of Journalism" src="<?php bloginfo('template_directory'); ?>/images/logos/cunyj-logo_h360.png" height="45px" /></a>
	    </div>	
	<?php endif; ?>
    
	<?php if ( !$cunyj->is_search_page() ) : ?>	
		<div id="aud-search">
			<ul id="cssdropdown">
				<li class="headlink first-item"><a href="#" class="olink">Quicklinks &darr;</a>
					<ul>
						<?php if ( !is_user_logged_in() ) : ?>
						<li class="login"><a href="<?php bloginfo('url'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_bloginfo('url')); ?>">Wordpress Login</a></li>
						<?php endif; ?>
						<li><a href="http://tech.journalism.cuny.edu">Tech Docs</a></li>
						<li><a href="http://help.journalism.cuny.edu">Help Desk</a></li>
						<li><a href="http://mail.journalism.cuny.edu">CUNY Email</a></li>
						<li><a href="http://webmail.journalism.cuny.edu">2013 GMail</a></li>
						<li><a href="https://cunyjschool.wufoo.com/forms/equipment-request-form/">Equipment Request</a></li>
						<li><a href="http://tech.journalism.cuny.edu/room-reservation-request/">Room Reservation</a></li>
						<li><a href="https://blackboard-doorway.cuny.edu/">Blackboard</a></li>
						<li><a href="<?php bloginfo('url'); ?>/about/campus-facilities/hours-of-operation/">Hours of Operation</a></li>
					</ul>
				</li>
				<li><a href="<?php bloginfo('url'); ?>/admissions/">Prospective Students</a></li>
				<li><a href="<?php bloginfo('url'); ?>/current-students/">Current Students</a></li>
				<li><a href="<?php bloginfo('url'); ?>/alumni/">Alumni</a></li>
				<li class="last-item"><a href="<?php bloginfo('url'); ?>/continuing-education/">Continuing Education</a></li>
			</ul>
			<?php endif; ?>
			
			<?php if ( !$cunyj->is_search_page() ) : ?>
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				<label class="hidden" for="s"><?php _e(''); ?></label>
				<div id="search">
					<input class="search-box" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
			        <button class="search-button" type="submit">Search</button>
				<p class="alternate-methods">Or browse <a href="<?php echo get_bloginfo('url') . '/' . BP_MEMBERS_SLUG . '/'; ?>">members</a>, <a href="<?php echo get_bloginfo('url') . '/' . BP_GROUPS_SLUG . '/'; ?>">groups</a>, or <a href="<?php echo get_bloginfo('url') . '/' . BP_BLOGS_SLUG . '/'; ?>">blogs</a></p>
				</div>
			</form>
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