<?php
function alternate_rows($i){if($i % 2) {echo ' class="on"';} else {echo ' class="off"';}  
} ;
?>


<?php get_header(); ?>

<div class="wrap clearfix content">

  <?php get_sidebar('careerservices_left'); ?>

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
            <td style="width: 70px; line-height:20px; padding-left: 8px;">Fall</td>
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
            <td style="width: 80px; line-height:20px; padding-left: 8px; background: #f7f7f7;"><a href="/category/career-services/online-internships-career-services/">Online</a></td>
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

<h4 style="margin-top:50px;">Fall Internships:</h4>
  <?php $posts = query_posts('cat=12&orderby=title&order=asc&posts_per_page=-1');
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
		
		</table>

	<?php endif; ?>
  </div>
  
  <?php get_sidebar('careerservices_internships'); ?>


</div>

<?php get_footer(); ?>
