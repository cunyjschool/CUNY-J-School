<?php
/*
Template Name: Section - Admissions
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

  <div id="sidebar">
<ul id="sidebar-nav">
  <li><h4><a href="/admissions/">Admissions</a></h4></li>
  <li><a href="https://cunyjschool.wufoo.com/forms/information-request-form/">Request Info</a>
    <ul>
      <li><a href="/admissions/information-sessions/">Information Sessions</a></li>
    </ul>
  </li>
  <li><a href="/admissions/how-to-apply/">How To Apply</a>
  <?php if(is_page(array(137,164))) { ?>  	
    <ul>
      <li><a href="/admissions/sample-entrance-exam/">Sample Entrance Exam</a></li>
    </ul>
  <?php } ?>
  </li>
  <li><a href="/admissions/paying-for-j-school/">Paying for J-School</a>
  <?php if(is_page(array(139,142,144,1008))) { ?>  	
    <ul>
      <li><a href="/admissions/tuition-and-fees/">Tuition and Fees</a></li>
      <li><a href="/admissions/scholarships/">Scholarships</a></li>
      <li><a href="/admissions/financial-aid/">Financial Aid</a></li>
    </ul>
  <?php } ?>
  </li>
  <li><a href="/admissions/international-students/">International Students</a></li>
  <li><a href="/admissions/admitted-students/">Admitted Students</a>
  <?php if(is_page(array(154,156,158,160,1731,4396,8424))) { ?>  	
	<ul>
      <li><a href="/admissions/admitted-students/business-cards/">Business Cards</a></li>
      <li><a href="/admissions/admitted-students/laptop-information/">Laptop Information</a></li>
      <li><a href="/admissions/admitted-students/open-house/">Open House</a></li>
      <li><a href="/admissions/admitted-students/orientation/">Orientation</a></li>
      <!-- <li><a href="/admissions/admitted-students/software-installation/">Software Installation</a></li> -->
    </ul>
  <?php } ?>
  </li>
  <li><a href="/admissions/frequently-asked-questions/">Frequently Asked Questions</a></li>
  <li><a href="/admissions/ten-reasons-to-choose-cuny/">Ten Reasons to Choose CUNY</a></li>
  <li><a href="/admissions/class-of-2010/">Class of 2010 Profile</a></li>
<li><a href="/2010/05/17/august-academy-for-class-of-2012-applicants/">August Academy</a></li>
</ul>


<h4 style="margin-top: 20px;"><strong>Contacts</strong></h4>

<p><strong><a href="mailto:stephen.dougherty@journalism.cuny.edu">Stephen Dougherty</a></strong><br />
Dir. of Admissions/Student Affairs<br />
(Office) 646-758-7731<br />
(Fax) 646-758-7709<br />
(Skype) stephend12</p>

<p><strong><a href="mailto:yahaira.castro@journalism.cuny.edu">Yahaira Castro</a></strong><br />
Assoc. Dir. of Admissions/Student Affairs<br />
(Office) 646-758-7726<br />
(Fax) 646-758-7709<br />
(Skype) ycwrite</p>

<p><strong><a href="mailto:colleen.marshall@journalism.cuny.edu">Colleen Marshall</a></strong><br />
Admissions/Outreach Counselor
(Office) 646-758-7852<br />
(Fax) 646-758-7709<br />
(Skype) colleen923</p>

<p><strong>Office Hours</strong><br />
9 a.m.-5 p.m., Monday-Friday</p>
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

<?php if(get_post_meta($post->ID, page_image_wide, true) != "") { ?>
        <div id="page-image-wide">
<img src="<?php echo get_post_meta( $post->ID,"page_image_wide", $single=true ) ; ?>" />
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







