<?php
function alternate_rows($i){if($i % 2) {echo ' class="on"';} else {echo ' class="off"';}  
} ;
?>


<?php get_header(); ?>

<div class="wrap clearfix" id="content">

  <div id="sidebar">
<ul id="sidebar-nav">
  <li><h4><a href="/career-services/">Career Services</a></h4></li>
  <li><a href="/career-services/news-events/">News & Events</a></li>
  <li><a href="/category/career-services/internships/">Internship Listings</a></li>
  <li><a href="/career-services/freelance-community-publications/">Freelance: Community Publications</a></li>
  <li><a href="/career-services/job-hunting-career-info-links/">Job-Hunting & Career-Info Links</a></li>
  <li><a href="/career-services/professional-organizations/">Professional Organizations</a></li>
  <li><a href="/career-services/for-employers/">For Employers</a></li>
  <li><a href="/career-services/where-our-alumni-are-working/">Where Our Alumni Are Working</a></li>
</ul>

<ul id="sidebar-nav" style="margin-top: 20px;">
  <li><h4>Job-Search Tips</h4></li>
  <li><a href="/job-search-tips/resume/">Resume</a></li>
  <li><a href="/job-search-tips/cover-letter/">Cover Letter</a></li>
  <li><a href="/job-search-tips/references/">References</a></li>
  <li><a href="/job-search-tips/clips-tapes/">Clips &amp; Tapes</a></li>
  <li><a href="/job-search-tips/search-strategies/">Search Strategies</a></li>
  <li><a href="/job-search-tips/interview-salary-negotiation/">Interview &amp; Salary Negotiation</a></li>
</ul>

<h3>Contact Us</h3>

<p><strong>William Chang</strong><br />
Director of Career Services<br />
646-758-7732<br />
<a href="mailto:william.chang@journalism.cuny.edu">william.chang@journalism.cuny.edu</a></p>

<p><strong>Lili Grossman</strong><br />
Career Services Coordinator<br />
646-758-7727<br />
<a href="mailto:lili.grossman@journalism.cuny.edu">lili.grossman@journalism.cuny.edu</a></p>

<p><strong>Office Hours</strong><br />
9 a.m.-5 p.m., Monday-Friday</p>
  
</div><!--end sidebar -->


  <div id="posts-internships">
  
<h2>Internship Opportunities</h2>

<div style="width: auto;"><!--start filter-->

See all <a href="/category/career-services/internships/internships-upcoming-deadlines/">Upcoming Deadlines</a> or sort by:
<div style="border-bottom: 1px solid #eee; margin-top:10px;">
<table>
    <tbody>
       <tr style="vertical-align: top; width: 371px;">
            <td style="width: 70px; line-height:12px;"><p><strong>Semester:</strong></p></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px; background: #f7f7f7;"><a href="/category/career-services/summer-internships-career-services/">Summer</a></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px;"><a href="/category/career-services/fall-internships-career-services/">Fall</a></td>
            <td style="width: 80px; line-height:20px; padding-left: 8px; background: #f7f7f7;"><a href="/category/career-services/spring-internships-career-services/">Spring</a></td>
        </tr>
    </tbody>
</table>
</div>

<div style="border-bottom: 1px solid #eee;">
<table>
    <tbody>
       <tr style="vertical-align: top; width: 371px;">
            <td style="width: 70px; line-height:12px;"><p><strong>Platform:</strong></p></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px; background: #f7f7f7;"><a href="/category/career-services/broadcast-internships-career-services/">Broadcast</a></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px;"><a href="/category/career-services/print-internships-career-services/">Print</a></td>
            <td style="width: 80px; line-height:20px; padding-left: 8px; background: #f7f7f7;">Online</td>
        </tr>
    </tbody>
</table>
</div>

<div style="border-bottom: 1px solid #eee;">
<table>
    <tbody>
       <tr style="vertical-align: top; width: 371px;">
            <td style="width: 70px; line-height:12px;"><p><strong>Location:</strong></p></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px;background: #f7f7f7;"><a href="/category/career-services/new-york-internships-career-services/">NYC</a></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px;"><a href="/category/career-services/other-us-cities/">Other U.S. Cities</a></td>
            <td style="width: 80px; line-height:20px; padding-left: 8px; background: #f7f7f7;"><a href="/category/career-services/international/">International</a></td>
        </tr>
    </tbody>
</table>
</div>

<div style="padding: 3px; border: 1px solid #eee; background:  #f7f7f7; margin: 2px 0 10px 0; width: 70px; text-align: center; float:left;"><a href="/category/career-services/internships/">Clear Filter</a></div>

</div><!--end filter-->


<table style="width: 100%; margin-top: 0px; clear:both;">

<h4 style="margin-top:50px;">Online Internships:</h4>
  <?php $posts = query_posts($query_string . '&orderby=title&order=asc&posts_per_page=-1');
if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $i++; ?>  

  <tr>
    <td<?php alternate_rows($i); ?> id="comment-<?php comment_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </td>
  </tr>
	<?php endwhile; ?>
</table>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
  </div>
  
  <?php include (TEMPLATEPATH . '/sidebar-internships.php'); ?>


</div>

<?php get_footer(); ?>
