<?php get_header(); ?>

<div class="wrap">

<div class="main" id="databases">
	
	<div id="database-search">
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/databases/">
		      <div id="search">
				<input class="search-box" type="text" value="<?php echo $_GET['q']; ?>" name="q" id="database-search" />
		        <button class="search-button" type="submit">Search</button>
		       </div>
		</form>
	</div>

<div class="content" id="results">
	
	<?php
		$search_query = ( $_GET['q'] ) ? $_GET['q'] : false;
		$args = array(	'order_by' => 'ASC',
						'nopaging' => true,
						'posts_per_page' => '-1',
						's' => $search_query,
						'post_type' => 'cunyj_database',
						);
		$databases = new WP_Query( $args );
	?>
  
	<?php if ( $databases->have_posts()) : while ( $databases->have_posts() ) : $databases->the_post();
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
    
	<?php endwhile; ?>

	<?php else : ?>

		<div class="message info">No databases matched your search</div>

	<?php endif; ?>

</div>

</div>

</div>

<?php get_footer(); ?>
