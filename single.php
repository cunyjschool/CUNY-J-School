<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">
		
		<?php
		if ( in_category(161) ) {
			include 'sidebar-internships.php';
		} else {
			include 'sidebar-news.php'; } ?>
	
  <div class="content left">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
	<div class="post" id="post-<?php the_ID(); ?>">
		
		<?php if ( has_post_thumbnail() ) {
			echo '<div class="lead-image">';
			the_post_thumbnail( '520px-width' );
			$image_meta = wp_get_attachment_metadata( get_post_thumbnail_id() );
			if ( $image_meta['image_meta']['credit'] ) {
				echo '<div class="lead-credit">Photo by ' . $image_meta['image_meta']['credit'] . '</div>';
			}
			$image_data = get_post( get_post_thumbnail_id() );
			if ( $image_data->post_excerpt ) {
				echo '<div class="lead-caption">' . $image_data->post_excerpt . '</div>';
			}
			echo '<div class="clear"></div>';
			echo '</div>';
		} else if ( $photo = get_post_meta( get_the_id(), 'photo', true) ) {
			echo '<div class="lead-image">';			
			echo '<img src="' . get_bloginfo('template_directory') . '/php/timthumb.php?src=' . $photo . '&h=300&w=520&zc=1&q=100" />';
			if ( $photo_caption = get_post_meta( get_the_id(), 'photo_caption', true ) ) {
				echo '<div class="lead-caption">' . $photo_caption . '</div>';
			}
			echo '</div>';
		} ?>

		<h2><?php the_title(); ?></h2>

		<div class="meta">By <?php the_author_link(); ?> | Last updated on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?><?php edit_post_link( 'Edit', ' | ', '' ); ?></div>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
      		</div>

    </div><!-- /END .post -->

    <?php endwhile; else: ?>
		
		<div class="message info">Sorry, no posts matched your criteria.</div>
	
	<?php endif; ?>
  	
	</div><!-- /END .content.left -->

	<div style="clear:both;"></div>

</div>

</div>

<?php get_footer(); ?>

