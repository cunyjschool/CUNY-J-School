<?php
/*
Template Name: Section - Health and Medicine
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

  <div id="sidebar">
<ul id="sidebar-nav">
  <li><h4><a href="/academics/">Academics</a></h4></li>
  <li><a href="/academics/course-descriptions/">Course Descriptions</a></li>
  <li><a href="/academics/sample-courses-of-study/">Sample Courses of Study</a></li>
  <li><a href="/academics/summer-internship/">Summer Internship</a></li>
  <li><a href="/academics/january-academy/">January Academy</a></li>
  <li><a href="/academics/subject-concentrations/">Subject Concentrations</a>
    <ul>
      <li><a href="/academics/subject-concentrations/arts-culture/">Arts/Culture</a></li>
      <li><a href="/academics/subject-concentrations/business-economics/">Business/Economics</a></li>
      <li><a href="/academics/subject-concentrations/health-medicine/">Health/Medicine</a>
        <ul>
          <li><a href="/academics/subject-concentrations/health-medicine/advisory-council/">Advisory Council</a></li>
          <li><a href="/academics/subject-concentrations/health-medicine/speakers/">Speakers</a></li>
          <li><a href="/academics/subject-concentrations/health-medicine/special-projects/">Special Projects</a></li>
          <li><a href="/academics/subject-concentrations/health-medicine/student-testimonials/">Student Testimonials</a></li>
        </ul>
      </li>
      <li><a href="/academics/subject-concentrations/international/">International</a></li>
      <li><a href="/academics/subject-concentrations/urban/">Urban</a></li>
    </ul>
  </li>
</ul>
	</div>
          
  <div id="right">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
    <?php edit_post_link('Edit this entry', '<ul><li class="edit">', '</li></ul>'); ?>

	<h2><?php the_title(); ?></h2>
    
    
      <div class="entry">
      
      	<?php if(get_post_meta($post->ID, page_image, true) != "") { ?>
        <div id="page-image">
<img src="<?php echo get_post_meta( $post->ID,"page_image", $single=true ) ; ?>" />
        </div>
  		<?php } ?>

		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
    </div>
		<?php endwhile; endif; ?>
  </div>
</div>


<?php get_footer(); ?>







