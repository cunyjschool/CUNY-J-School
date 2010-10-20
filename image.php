<?php get_header(); ?>

	<div class="wrap">
		
	<div class="main">

	<div id="content" class="widecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="image" id="image-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			<div class=""><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment">Back to <?php echo get_the_title($post->post_parent); ?></a></div>
			<div class="entry">
				<a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, array( 845, 845 ) ); ?></a>
                <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>

				<?php the_content(); ?>

				<div class="navigation">
					<div class="alignleft"><?php previous_image_link() ?></div>
					<div class="alignright"><?php next_image_link() ?></div>
				</div>
				<br class="clear" />

				<?php edit_post_link('Edit this entry.','',''); ?>

			</div>

		</div>

	<?php // comments_template(); ?>

	<?php endwhile; else: ?>

		<div class="message info">Sorry, no attachments matched your criteria.</div>

<?php endif; ?>

	</div>
	
	</div>
	
	</div>

<?php get_footer(); ?>
