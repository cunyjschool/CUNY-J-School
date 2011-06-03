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
<meta name="description" content=" <?php the_excerpt_rss( 50, 2 ); ?> " />
<?php } else { ?>
<meta name="description" content="The CUNY Graduate School of Journalism, located one block from Times Square in the heart of New York City, offers a three-semester program with a converged curriculum, paid internships and faculty who are leaders in their fields." />
<?php } ?>

	<meta name="copyright" content="Copyright <?php echo date('Y'); ?> City University of New York Graduate School of Journalism" />
	<meta http-equiv="content-language" content="en" />

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	
	<!-- Pingdom check -->

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

<div class="header">
	
	<div class="top-stripe"></div>	

	<div class="wrap">
		
		<div class="site-logo"><a href="<?php get_home_url(); ?>"><img width="360px" height="75px" src="<?php bloginfo( 'template_directory' ); ?>/images/logos/cunyj-logo_h360.png" /></a></div>
	
	
		<ul class="primary-navigation inline-navigation page-item">
			<li><a href="#">First item</a></li>
			<li><a href="#">Second item</a></li>
			<li><a href="#">Third item</a></li>
		</ul>
		
	</div><!-- END .wrap -->

</div><!-- END .header -->