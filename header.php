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

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <?php if (is_home()) : ?>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/nextgen_gallery.css" type="text/css" media="screen" />
  <?php endif; ?>
	
	<?php /* Other supplemental stylesheets broken up for simplicity */ ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/sidebar.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/buddypress.css" type="text/css" media="screen" />

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />

  <?php wp_head(); ?>
  
</head>

<body>

<div id="tile-orange"></div>

<div id="global">
  <div class="wrap clearfix">
    <div id="logo">
      <a title="<?php bloginfo('title'); ?>" href="<?php bloginfo('url'); ?>"><img alt="CUNY Graduate School of Journalism" src="<?php bloginfo('template_directory'); ?>/images/logos/cunyj-logo_h360.png" height="75px" width="360px" /></a>
    </div>
    
		<div id="aud-search">
			<ul id="cssdropdown">
				<li class="headlink"><a href="#" class="olink">Quicklinks &darr;</a>
					<ul>
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
				<li style="border-right: 0;"><a href="<?php bloginfo('url'); ?>/continuing-education/">Continuing Education</a></li>
			</ul>

			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
    </div><!-- /#aud-search -->

  </div><!-- /.wrap -->
</div><!-- /#global -->

<div id="primary_nav">
	<div class="wrap">	
	
	<?php wp_nav_menu(
				array(
					'theme_location' => 'primary_navigation'
					)
				); ?>

	</div><!-- /.wrap -->
</div>