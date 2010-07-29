<div class="clearfix" id="sidebar-internships">
    
    
<?php if (is_category(161)) { ?>
<?php } else { ?>
<?php } ?>
    
<h3 style="margin-top: 30px;">Upcoming Deadlines</h3>
<ul>



<?php query_posts('cat=9&showposts=10&meta_key=deadline&order=ASC&orderby=meta_value'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span style="color: #999; font-size: 10px;"> <?php if(get_post_meta($post->ID, deadline, true) != "") { ?>Deadline: <?php 
/* Change the way the date metavalue displays to MM/DD/YYYY */
$local_date_values = split("/", get_post_meta( $post->ID,"deadline", $single=true ));
echo $local_date_values[1] . "/" .
 $local_date_values[2] . "/" .
 $local_date_values[0];
?><?php } ?></span></li>
  
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul>


<h3 style="margin-top: 30px;">Recently Added &amp; Updated Internships</h3>
<ul style="padding-bottom: 30px;">
<?php query_posts('cat=9&showposts=5&orderby=modified'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span style="color: #999; font-size: 10px;">Updated: <?php the_modified_date(); ?></span></li>
  
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul>

<h3>Other Listings</h3>
<ul id="other-internships">
<?php wp_list_bookmarks('title_li=0&categorize=0&category=161&limit=10&show_description=1&between=<div>&after=</div></li>'); ?>
  <li><strong><a href="/2009/07/16/more-resources-for-internship-information/">More Resources for Internship Information</a></strong></li>
</ul>

</div>


