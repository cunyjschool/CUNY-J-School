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
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="720" height="480" id="utv174"><param name="flashvars" value="autoplay=false&brand=embed&cid=18332%2Ftest&locale=en_US"/><param name="allowfullscreen" value="true"/><param name="allowscriptaccess" value="always"/><param name="movie" value="http://www.ustream.tv/flash/live/18332/test"/><embed flashvars="autoplay=false&brand=embed&cid=18332%2Ftest&locale=en_US" width="720" height="480" allowfullscreen="true" allowscriptaccess="always" id="utv174" name="utv_n_143574" src="http://www.ustream.tv/flash/live/18332/test" type="application/x-shockwave-flash" /></object>
		</div>
    
    	<div class="entry">

			<?php the_content(); ?>
		
      </div>

    </div>
		<?php endwhile; endif; ?>
  </div>

	</div>
</div>


<?php get_footer(); ?>