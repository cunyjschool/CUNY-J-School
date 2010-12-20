<?php
/*
Template Name: Page - Entrepreneurial Journalism
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="entrepreneurial-journalism">
		
		<h2 class="banner"><?php the_title(); ?></h2>
		
	<div class="sidebar right standard">

	<?php
		$args = array(
					'theme_location' => 'entrepreneurial_journalism',
					'menu_class' => 'navigation default',
					'menu_id' => 'entrepreneurial-journalism-navigation',
					'fallback_cb' => false,
			);

		wp_nav_menu( $args );

		echo '<ul class="widgets">';
		dynamic_sidebar( 'entrepreneurial_journalism' );
		echo '</ul>'; ?>

	</div><!-- END .sidebar -->
          
	<div class="content">
	
	<div class="page left">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="entry">
    
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
			
			<?php edit_post_link( 'Edit page', '<div class="edit-link">', '</div>' ); ?>
      	
		</div><!-- END .entry -->
	
	<?php endwhile; endif; ?>
		
	</div><!-- END .page -->

	<div style="clear:both;"></div>

</div><!-- END .main -->

</div><!-- END .wrap -->

<?php get_footer(); ?>







