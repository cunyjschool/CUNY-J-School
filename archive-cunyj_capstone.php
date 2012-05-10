<?php get_header(); ?>

<div class="wrap">

	<div class="main">

    
		<div id="capstone-content">
					<h2>Student Capstones</h2>
            
            <div class="capstone-column-wrapper">
                
                <div class="capstone-img">	<img src="<?php bloginfo('template_directory'); ?>/images/capstones/capstone-page-image.jpg" /></div>
 
 				<div class="capstone-box">
					<ul>
					<?php
						$args = array( 
							'post_type' => 'cunyj_capstone',
							'taxonomy' => 'cunyj_media_types',
							'posts_per_page' => -1 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						$post_id = get_the_id();
						$media_types = get_the_term_list( $post_id, 'cunyj_media_types' );
						$capstone_author = get_post_meta( $post_id, '_cunyj_capstones_capstone_author', true );
						$capstone_year = get_post_meta( $post_id, '_cunyj_capstones_capstone_year', true );
						$concentrations = get_the_term_list( $post_id, 'cunyj_concentrations' );
					?>
					<li>
                    <?php if ( has_post_thumbnail() ) : ?>
                    	<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('capstone-thumb'); ?>
                        </a>
					<?php endif; ?>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p>By: <?php if ( function_exists( 'coauthors_links' ) ) { coauthors_links(); } else { the_author_link(); } ?></p>
    				<p>Pub. Year: <?php echo $capstone_year; ?></p>
					<p>Concentration: <?php echo $concentrations; ?></p>
					<p>Media Type: <?php echo $media_types; ?></p>
					<?php
						// Show the image credit if it exists
						if ( has_post_thumbnail() ) {
							$image_data = get_post( get_post_thumbnail_id() );
							if ( $image_data->post_excerpt ) {
								echo '<p class="text-color-light-grey"><em>(Photo: ' . $image_data->post_excerpt . ')</em></p>';
							}
						} // END if ( has_post_thumbnail() )
					?>
    				</li>
					<?php endwhile; ?>
 					</ul>
				</div><!-- END .capstone-box -->
                
			</div><!--END .capstone-column-wrapper-->
            
		</div><!--END #capstone-content-->
 
		<div class="clear-both"></div>

     </div><!-- END main-->
     
</div><!-- END wrap-->

<?php get_footer(); ?>