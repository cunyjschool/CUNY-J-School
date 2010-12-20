<?php
/*
Template Name: Page - Entrepreneurial Journalism landing
*/
?>

<?php get_header(); ?>

<div class="wrap">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<div class="main" id="entrepreneurial-journalism">

		<h2 class="banner"><?php the_title(); ?></h2>

	<div class="sidebar right standard">

		<?php
			$courses = get_post_meta( get_the_id(), 'associated_course' );
			
			if ( count( $courses ) ) {
				echo '<div class="sidebar-item" id="entrepreneurial-journalism-course-summaries">';
				foreach( $courses as $course ) {
					echo '<div class="course-description">' . $course . '</div>';
				}
				echo '</div>';
			}
		?>

	</div><!-- END .sidebar -->

	<div class="content">

	<div class="page left">	
	
		<div class="entry">
    
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
			
			<?php edit_post_link( 'Edit page', '<div class="edit-link">', '</div>' ); ?>
      	
		</div><!-- END .entry -->
		
	</div><!-- END .page -->

	<div style="clear:both;"></div>

</div><!-- END .main -->	
	
	<?php endwhile; endif; ?>

</div><!-- END .wrap -->

<?php get_footer(); ?>







