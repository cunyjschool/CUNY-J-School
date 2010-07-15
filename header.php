<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<meta name="description" content=" <?php the_excerpt_rss( 50, 2 ); ?> " />
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="The CUNY Graduate School of Journalism, located one block from Times Square in the heart of New York City, offers a three-semester program with a converged curriculum, paid internships and faculty who are leaders in their fields." />
<?php endif; ?>


<meta name="copyright" content="Copyright (c) 2009 City University of New York Graduate School of Journalism" />
<meta http-equiv="content-language" content="en" />
<meta name="robots" content="all" />

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="/wp-content/themes/cunyjschool/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/wp-content/themes/cunyjschool/homepage.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" /> 

<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="/js/AC_RunActiveContent.js" language="javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.2.6.pack.js"></script>


<script language="JavaScript">
	window.onload = function()
	{
		var lis = document.getElementById('cssdropdown').getElementsByTagName('li');
		for(i = 0; i < lis.length; i++)
		{
			var li = lis[i];
			if (li.className == 'headlink')
			{
				li.onmouseover = function() { this.getElementsByTagName('ul').item(0).style.display = 'block'; }
				li.onmouseout = function() { this.getElementsByTagName('ul').item(0).style.display = 'none'; }
			}
		}
	}
	/* or with jQuery:
	$(document).ready(function(){
		$('#cssdropdown li.headlink').hover(
			function() { $('ul', this).css('display', 'block'); },
			function() { $('ul', this).css('display', 'none'); });
	});
	*/
</script>


<?php wp_head(); ?>
</head>


<body>

<!-- <div id="tile-orange"></div> -->
<div id="home-alert"><a href="http://wiki.journalism.cuny.edu/Getting%20a%20Fast%20Start">Getting a Fast Start: CLASS OF 2011</a></div>


<div id="global">
  <div class="wrap clearfix">
    <div id="logo">
<a title="CUNY Graduate School of Journalism" href="/"><img alt="CUNY Graduate School of Journalism" src="/img/logo.png" /></a>
    </div>
    
    <div id="aud-search">
<ul id="cssdropdown">
  <li class="headlink"><a href="#" class="olink">Quicklinks &darr;</a>
    <ul>
      <li><a href="http://wiki.journalism.cuny.edu/session/login?return_to_page=FrontPage">Wiki</a></li>
      <li><a href="http://mail.journalism.cuny.edu">E-mail</a></li>
      <li><a href="http://help.journalism.cuny.edu">Help Desk</a></li>
      <li><a href="https://cunyjschool.wufoo.com/forms/equipment-request-form/">Equipment Request</a></li>
      <li><a href="/about/room-request/">Room Reservation</a></li>
      <li><a href="https://blackboard-doorway.cuny.edu/">Blackboard</a></li>
      <li><a href="http://www.cuny.edu/flu">H1N1 Info</a></li>
      <li><a href="/about/campus-facilities/hours-of-operation/">Hours of Operation</a></li>
    </ul>
  </li>
  <li><a href="/admissions/">Prospective Students</a></li>
  <li><a href="/current-students/">Current Students</a></li>
  <li><a href="/alumni/">Alumni</a></li>
  <li style="border-right: 0;"><a href="/continuing-education/">Continuing Education</a></li>
</ul>

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

    </div>
  </div>
</div>

      
<div id="nav"> 
  <div class="wrap clearfix" style="width: 910px;">     
<ul>
  <li style="margin-left: 12px;"><a href="/">Home</a></li>
  <li><a href="/about/">About</a></li>
  <li><a href="/academics/">Academics</a></li>
  <li><a href="/admissions/">Admissions</a></li>
  <li><a href="/career-services/">Career Services</a></li>
  <li><a href="/faculty/">Faculty</a></li>
  <li><a href="/news-events/">News &amp; Events</a></li>
  <li><a href="/contact-us/">Contact Us</a></li>
  <li><a href="/research-center/">Research Center</a></li>
  <li><a href="/donate/">Donate</a></li>
</ul>
  </div>
</div>