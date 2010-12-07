<?php
/*
Template Name: Page - Live
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="cunyj-live">
		
		<h2 class="banner"><?php the_title(); ?></h2>
  
	<div class="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="page full" id="page-<?php the_ID(); ?>">
    
    	<div class="entry">

			<?php the_content(); ?>
		
      </div>

    </div>
		<?php endwhile; endif; ?>
  </div>

	</div>
</div>


<?php get_footer(); ?>