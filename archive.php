<?php get_header(); ?>

<div class="wrap clearfix" id="content">
  <div id="posts">
  
  
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post">

<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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
  
  <?php include (TEMPLATEPATH . '/sidebar-news.php'); ?>


</div>

<?php get_footer(); ?>
