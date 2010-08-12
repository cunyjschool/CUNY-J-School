<?php get_header(); ?>

<div class="wrap">
	
	<div id="main">
		
		<?php
		if ( in_category(161) ) {
			include 'sidebar-internships.php';
		} else {
			include 'sidebar-news.php'; } ?>
	
  <div id="content">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<?php if ( in_category(37) ) {
echo '<div class="boxon">As the tools of the media trade continue to evolve, the CUNY Graduate School of Journalism wants to help you stay current.<br />See more about our <a href="http://www.journalism.cuny.edu/continuing-education/">Continuing Education program</a>.</div>';
} 
		?>
    
	<div class="post" id="post-<?php the_ID(); ?>">

		<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>

      <div class="timestamp">Last updated on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?></div>

<?php if(get_post_meta($post->ID, photo, true) != "") { ?>
<img src="<?php bloginfo('template_directory'); ?>/php/timthumb.php?src=<?php echo get_post_meta( $post->ID,"photo", $single=true ) ; ?>&h=300&w=500&zc=1&q=100" alt="" class="photo"> 
<?php } ?>

<?php if(get_post_meta($post->ID, photo_caption, true) != "") { ?><div class="photo-caption"><?php echo get_post_meta( $post->ID,"photo_caption", $single=true ) ; ?></div><?php } ?>


      <div class="entry">
<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

      </div>
    </div>
    <?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
  </div>

</div>

</div>

<?php get_footer(); ?>

