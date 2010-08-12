<?php get_header(); ?>

<div class="wrap">
	
	<div id="main">
  
	<?php include (TEMPLATEPATH . '/sidebar-news.php'); ?>	  

		<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">

		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
   
	<div class="timestamp">Last updated on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?></div>

	  <div class="postmetadata">Posted in <?php the_category(', ') ?> <?php edit_post_link('Edit', '| ', ''); ?></div>
    </div>
    

	<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
  </div>

	</div>


</div>

<?php get_footer(); ?>
