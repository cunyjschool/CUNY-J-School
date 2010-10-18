<?php get_header(); ?>

<div class="wrap">

	<div id="main">
		
	<?php include (TEMPLATEPATH . '/sidebar-search.php');
	?>		

	<div id="content" class="search-content">
		
		<div id="primary-search">
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		</div>
		
	<div id="search-results">
  
	<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		
	<?php
	$post_type = get_post_type(get_the_id());
	?>

	<div class="<?php echo $post_type; ?> result" id="<?php echo $post_type . '-' . the_ID(); ?>">
		<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

		<div class="entry">
			<?php the_excerpt(); ?>
		</div>
		
		<?php if ($post_type == 'page') : ?>
		<div class="details">Updated <?php the_time('F j, Y'); ?></div>
		<?php endif; ?>
		<?php if ($post_type == 'post') : ?>
		<div class="details"><?php the_author_posts_link(); ?> - <?php the_time('F j, Y'); ?><?php if (get_the_tags()) { echo ' - '; the_tags(); } ?></div>
		<?php endif; ?>
		<?php
		if ($post_type == 'cunyj_event') : ?>
		<div class="details">
			<?php
			$start_date = get_post_meta($post->ID, '_cunyj_events_start_date', true);
			$end_date = get_post_meta($post->ID, '_cunyj_events_end_date', true);
			$venue = get_post_meta($post->ID, '_cunyj_events_venue', true);
			
			if ($start_date) {
				if ($start_date == $end_date) {
					echo date_i18n('F j, Y', $start_date);
				} else {
					echo date_i18n('F j, Y', $start_date);
					echo ' to ' . date_i18n('F j, Y', $end_date);
				}
			}
			
			if ($start_date && $venue) {
				echo ' - ';
			}
			if ($venue) {
				echo $venue;
			}
			?>
			
		</div>
		<?php endif; ?>
		
	</div>

<?php endwhile; ?>

      <div class="navigation">
	    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	  </div>

	<?php else : ?>
		
		<p>No results found.</p>
		
		
	<?php endif; ?>
	
	</div>

	</div>
	
	</div>
	
  </div>
</div>

<?php get_footer(); ?>