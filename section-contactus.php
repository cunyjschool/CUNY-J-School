<?php
/*
Template Name: Section - Contact Us
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

	<div id="sidebar">
		<ul id="sidebar-nav">
			<li><h4><a href="<?php bloginfo('url'); ?>/contact-us/">Contact Us</a></h4></li>
		</ul><!-- end sidebar-nav -->
	</div><!-- end sidebar -->


	<div id="right">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>
		
			<div class="entry">
			<?php if(get_post_meta($post->ID, page_image, true) != "") { ?>
				
				<div id="page-image">
				<img src="<?php echo get_post_meta( $post->ID,"page_image", $single=true ) ; ?>" />
				</div><!-- end page-image -->

			<?php } ?>

			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div><!--end entry -->
	
		</div><!-- end post -->
		<?php endwhile; endif; ?>
	</div><!-- end right -->

</div><!-- end content -->


<?php get_footer(); ?>
