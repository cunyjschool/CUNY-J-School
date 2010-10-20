<?php
/*
Template Name: Template - Full
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">
  
	<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="page full" id="page-<?php the_ID(); ?>">

		<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>
    
    	<div class="entry">

			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>

    </div>
		<?php endwhile; endif; ?>
  </div>

	</div>
</div>


<?php get_footer(); ?>