<?php get_header(); ?>

<div class="wrap">

	<div class="main" id="search-main">
		
	<?php include (TEMPLATEPATH . '/sidebar-search.php'); ?>		

	<div class="content" id="search-content">
		
		<div id="primary-search">
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		</div>
		
	<div class="all-posts" id="search-results">
  
	<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		
	<?php
	$post_type = get_post_type(get_the_id());
	?>
	<?php
		$item_classes = array(	'result',
								$post_type,
								'item'
							);
		if ( has_post_thumbnail() ) {
			$item_classes[] = 'post-thumbnail';
		}
	?>

	<div class="<?php echo implode( $item_classes, ' ' ); ?>" id="<?php echo $post_type . '-' . get_the_ID(); ?>">
		<?php if ( has_post_thumbnail() ) {
			echo '<a href="' . get_permalink() . '">';
			the_post_thumbnail( array( 100, 100 ) );
			echo '</a>';
		} ?>
		<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		<?php if ($post_type == 'post') : ?>
		<div class="details">By <?php if ( function_exists( 'coauthors_links' ) ) { coauthors_links(); } else { the_author_link(); } ?> | <?php the_time('F j, Y'); ?> | <?php the_category(', '); ?><?php edit_post_link('Edit', ' | ', ''); ?></div>
		<?php endif; ?>
		<div class="entry">
			<?php the_excerpt(); ?>
		</div>
		
		<?php if ($post_type == 'page') : ?>
		<div class="details">Updated <?php the_time('F j, Y'); ?></div>
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
		
		<div class="message info">No posts or pages matched your search</div>
		
	<?php endif; ?>
	
	</div>

	</div>
	
	<div style="clear:right;"></div>
	
	</div>
	
  </div><!-- END - #main -->

</div><!-- END - .wrap -->

<?php get_footer(); ?>