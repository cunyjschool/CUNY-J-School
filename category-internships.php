<?php
function alternate_rows($i){if($i % 2) {echo ' class="on"';} else {echo ' class="off"';}  
} ;
?>

<?php get_header(); ?>


<div class="wrap">
	
	<div class="main">

	<?php get_sidebar( 'careerservices_left' ); ?>
	
	<?php get_sidebar( 'careerservices_internships' ); ?>

	<div class="content left-sidebar">

  <div id="posts-internships">
  
<h2>Internship Opportunities</h2>

<img src="<?php bloginfo('url'); ?>/files/2010/06/internship2-edit.png" width="320px" style="border: 5px solid #efefef;" />

<div style="width: 320px; -moz-background-clip:border; -moz-background-inline-policy:continuous; -moz-background-origin:padding; background:#EFEFEF none repeat scroll 0 0; padding:5px;"><!--start filter-->

See all <a href="<?php bloginfo('url'); ?>/category/career-services/internships/internships-upcoming-deadlines/">Upcoming Deadlines</a> or sort by:
<div style="border-bottom: 1px solid #eee; margin-top:10px;">
<table>
    <tbody>
       <tr style="vertical-align: top; width: 371px;">
            <td style="width: 70px; line-height:12px;"><p><strong>Semester:</strong></p></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px; background: #f7f7f7;"><a href="<?php bloginfo('url'); ?>/category/career-services/summer-internships-career-services/">Summer</a></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px;"><a href="<?php bloginfo('url'); ?>/category/career-services/fall-internships-career-services/">Fall</a></td>
            <td style="width: 80px; line-height:20px; padding-left: 8px; background: #f7f7f7;"><a href="<?php bloginfo('url'); ?>/category/career-services/spring-internships-career-services/">Spring</a></td>
        </tr>
    </tbody>
</table>
</div>

<div style="border-bottom: 1px solid #eee;">
<table>
    <tbody>
       <tr style="vertical-align: top; width: 371px;">
            <td style="width: 70px; line-height:12px;"><p><strong>Platform:</strong></p></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px; background: #f7f7f7;"><a href="<?php bloginfo('url'); ?>/category/career-services/broadcast-internships-career-services/">Broadcast</a></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px;"><a href="<?php bloginfo('url'); ?>/category/career-services/print-internships-career-services/">Print</a></td>
            <td style="width: 80px; line-height:20px; padding-left: 8px; background: #f7f7f7;"><a href="<?php bloginfo('url'); ?>/category/career-services/online-internships-career-services/">Online</a></td>
        </tr>
    </tbody>
</table>
</div>

<div style="border-bottom: 1px solid #eee;">
<table>
    <tbody>
       <tr style="vertical-align: top; width: 371px;">
            <td style="width: 70px; line-height:12px;"><p><strong>Location:</strong></p></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px;background: #f7f7f7;"><a href="<?php bloginfo('url'); ?>/category/career-services/new-york-internships-career-services/">NYC</a></td>
            <td style="width: 70px; line-height:20px; padding-left: 8px;"><a href="<?php bloginfo('url'); ?>/category/career-services/other-us-cities/">Other U.S. Cities</a></td>
            <td style="width: 80px; line-height:20px; padding-left: 8px; background: #f7f7f7;"><a href="<?php bloginfo('url'); ?>/category/career-services/international/">International</a></td>
        </tr>
    </tbody>
</table>
</div>

<div style="padding: 3px; border: 1px solid #eee; background:  #f7f7f7; margin: 2px 0 10px 0; width: 70px; text-align: center; float:left;"><a href="/category/career-services/internships/">Clear Filter</a></div>

</div><!--end filter-->


<table style="width: 100%; margin-top: 0px; clear:both;">
<h4 style="margin-top:50px;">Summer Internships: A Sampling</h4>

<?php
$args = array(
	'category_name' => 'internships',
	'orderby' => 'title',
	'order' => 'asc',
	'posts_per_page' => '-1'
);
$listings = new WP_Query( $args );

if ( $listings->have_posts() ) : while ( $listings->have_posts() ) : $listings->the_post(); ?>

<?php $i++; ?>  

  <tr>
    <td<?php alternate_rows($i); ?> id="comment-<?php comment_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </td>
  </tr>
	<?php endwhile; ?>
</table>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		
		</table>

	<?php endif; ?>
  </div>

	</div>
	
	<div class="clear-both"></div>

	</div><!-- END .main -->

</div><!-- END .wrap -->

<?php get_footer(); ?>
