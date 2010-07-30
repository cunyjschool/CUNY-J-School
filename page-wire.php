<?php
/*
Template Name: Page - Wire
*/
?>
<?php get_header(); ?>

<div class="wrap clearfix" id="content">
  <div id="sidebar">  
  
<h4 style="margin-top: 20px; padding-bottom: 10px; border-bottom: 1px dotted #eee;">J-School Sites</h4>

<p>The Wire shows the latest activity from Web sites (listed below) associated with the J-School.</p>

    <ul id="wire-sites">
      <li id="wire-bsb"><a href="http://boxscorebeat.com/">BoxScoreBeat</a><br /><span>Analyzing sports journalism and talking with sports media makers</span></li>
      <li id="wire-isnap"><a href="http://isnapny.com/">ISnapNY</a><br /><span>Student-driven photoblog featuring images from all across NYC</span></li>
      <li id="wire-ni"><a href="http://newsinnovation.com/">News Innovation</a><br /><span>Researching ideas and experiments in new business models for news</span></li>
      <li id="wire-ns"><a href="http://nycitynewsservice.com/">NYCity News Service</a><br /><span>Providing incisive coverage of the New York City's neighborhoods</li>
      <li id="wire-rt"><a href="http://roadtrip.journalism.cuny.edu/">Road Trip</a><br /><span>Meeting with journalists and students all over the world<span></li>
<li id="wire-219mag"><a href="http://219mag.com/">219 Magazine</a><br /><span>An online journal of issue an ideas<span></li>
<li id="wire-mhh"><a href="http://www.motthavenherald.com">Mott Haven Herald</a><br /><span>Serving Mott Haven, Melrose & Port Morris<span></li>
<li id="wire-local"><a href="http://fort-greene.thelocal.nytimes.com/">The Local</a><br /><span>Fort Green and Clinton Hill, Brooklyn blog<span></li>
<li id="wire-dnj"><a href="http://digitalnewsjournalist.com/">Digital News Journalist</a><br /><span>Tips, tools and resources for multimedia journalism<span></li>
      <li id="wire-twitter"><a href="http://twitter.com/cunyjschool/">Twitter</a><br /><span>Follow <a href="http://twitter.com/cunyjschool">@cunyjschool</a> on Twitter</span></li>
    </ul>
  </div>    
  
  
  <div id="right">
    <div class="page" id="cunyj-wire">
<h2>The Wire</h2>
    

<?php
if (function_exists('SimplePieWP')) {
echo SimplePieWP(array(
	'http://nycitynewsservice.com/category/top-stories/feed/',
	'http://roadtrip.journalism.cuny.edu/feed/',
	'http://newsinnovation.com/feed/',
	'http://boxscorebeat.com/feed/',
	'http://twitter.com/statuses/user_timeline/14345137.rss',
	'http://isnapny.com/feed/',
        'http://219mag.com/feed/',
        'http://www.motthavenherald.com/feed/',
        'http://fort-greene.thelocal.nytimes.com/feed/',
        'http://digitalnewsjournalist.com/feed/'
), array(
	'items' => 25,
	'cache_duration' => 1800,
	'date_format' => 'j M Y, g:i a',
	'template' => 'Wire'
));
}

?>

   
    </div>  
  </div>
</div>


<?php get_footer(); ?>