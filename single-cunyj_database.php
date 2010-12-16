<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="single_database">
		
		<div class="breadcrumb">
			<a href="<?php bloginfo('url'); ?>/databases/">&larr; Back to databases</a>
		</div>
	
  	<div class="content">
	
	<?php if (have_posts()) : while (have_posts()) : the_post();
		
		$post_id = get_the_id();
		$database_link = get_post_meta( $post_id, '_cunyj_databases_database_link', true );
		$tutorial_link = get_post_meta( $post_id, '_cunyj_databases_tutorial_link', true );
		$topics = wp_get_post_terms( $post_id, 'cunyj_database_topics' );
	?>
	<div class="database" id="database-<?php the_ID(); ?>">

		<div class="left-col">
			<?php if ( $database_link ) : ?>
			<h3 class="title"><a href="<?php echo $database_link; ?>"><?php the_title(); ?></a></h3>
			<?php else : ?>
			<h3 class="title"><?php the_title(); ?></h3>	
			<?php endif; ?>
		</div>
	
		<div class="right-col">
			<div class="description"><?php the_content(); ?></div>
			<?php if ( count( $topics ) ) : 
			$all_topics = '';	
			foreach ( $topics as $topic ) {
				$all_topics .= $topic->name . ', ';
			}
			$all_topics = rtrim( $all_topics, ', ' );
			?>
			<p class="meta">
				<span class="right">
				<?php if ( $tutorial_link ): ?>
				<a class="tutorial" href="<?php echo $tutorial_link; ?>">Tutorial</a> | 
				<?php endif; ?>	
				<a class="permalink" href="<?php the_permalink(); ?>">Permalink</a>
				</span>
				<span class="topics"><?php echo $all_topics; ?></span></p>
			<?php endif; ?>
		</div>

		<div class="clear"></div>
	</div>
    <?php endwhile; else: ?>
		
		<div class="message info">Sorry, no databases matched your criteria.</div>
	
	<?php endif; ?>
		
  </div>

	<div style="clear:both;"></div>

	</div><!-- /#main -->

</div><!-- /.wrap -->

<?php get_footer(); ?>

