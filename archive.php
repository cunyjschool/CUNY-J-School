<?php get_header(); ?>

<div class="main">

	<div class="wrap">
	
		<?php get_sidebar( 'news' ); ?>	

	<div class="content" id="archive-content">	
	
		<div class="all-posts">

		<h2>Archive</h2>			
  
  		<?php if ( have_posts()) : ?>
	
	 	<?php while (have_posts()) : the_post(); ?>
		
			<?php
				$item_classes = array(	'post',
										'item'
									);
				if ( has_post_thumbnail() ) {
					$item_classes[] = 'post-thumbnail';
				}
			?>
    	
			<div class="<?php echo implode( $item_classes, ' ' ); ?>" id="post-<?php the_ID(); ?>">
				
				<?php if ( has_post_thumbnail() ) {
					echo '<a href="' . get_permalink() . '">';
					the_post_thumbnail( array( 100, 100 ) );
					echo '</a>';
				} ?>

				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		
				<div class="details">By <?php if ( function_exists( 'coauthors_links' ) ) { coauthors_links(); } else { the_author_link(); } ?> | <?php the_time('F j, Y'); ?> | <?php the_category(', '); ?><?php edit_post_link('Edit', ' | ', ''); ?></div>
		
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
	
			</div><!-- END - .post -->
    
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

	<div style="clear:right;"></div>

</div>

</div><!-- END - .wrap -->

</div><!-- END - .main -->

<?php get_footer(); ?>
