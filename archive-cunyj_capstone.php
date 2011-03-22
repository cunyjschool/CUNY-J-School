<?php get_header(); ?>

<div class="wrap">

	<div class="main">
    
		<div id="capstone-content">
            
            <div class="capstone-column-wrapper">
                
                <div class="capstone-img">	<img src="<?php bloginfo('template_directory'); ?>/images/capstones/capstone-page-image.jpg" /></div>
 
 				<div class="capstone-box">
				
                	<h3>Read</h3>
					<ul>
					<?php
						$args = array( 
							'post_type' => 'cunyj_capstone',
							'taxonomy' => 'cunyj_capstone_media_types',
							'term' => 'articles', 
							'posts_per_page' => -1 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						$post_id = get_the_id();
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
					<p>By: <?php the_author(); ?></p>
    				<p>Pub. Year: <?php echo $capstone_year; ?></p>
					<p>Concentration: <?php echo $concentrations; ?></p>
    				</li>
					<?php endwhile; ?>
 					</ul>
				</div><!-- END .capstone-box -->
                
                
                <div class="capstone-box">
                	<h3>Watch</h3>
                    <ul>
                    <?php
						$args = array(
							'post_type' => 'cunyj_capstone',
							'taxonomy' => 'cunyj_capstone_media_types',
							'term' => 'videos',
							'posts_per_page' => -1);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						$post_id = get_the_id();
						$cpastone_author = get_post_meta( $post_id, '_cunyj_capstones_capstone_author', true );
						$capstone_year = get_post_meta( $post_id, '_cunyj_capstones_cpastone_year', true );
						$concentrations = get_the_term_list( $post_id, 'cunyj_concentrations' );
					?>
                    <li>
                    <?php if ( has_post_thumbnail() ) : ?>
                    	<a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('capstone-thumb'); ?>
                        </a>
					<?php endif; ?>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p>By: <?php the_author(); ?></p>
                    <p>Pub. Year: <?php echo $capstone_year; ?></p>
                    <p>Concentration: <?php echo $concentrations; ?></p>
                    </li>
                    <?php endwhile; ?>
                    </ul>
				</div><!-- END .capstone-box -->    
                
                
                <div class="capstone-box">
                	<h3>Interact</h3>
                    <ul>
                    <?php
						$args = array(
							'post_type' => 'cunyj_capstone',
							'taxonomy' => 'cunyj_capstone_media_types',
							'term' => 'packages',
							'posts_per_page' => -1);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						$post_id = get_the_id();
						$cpastone_author = get_post_meta( $post_id, '_cunyj_capstones_capstone_author', true );
						$capstone_year = get_post_meta( $post_id, '_cunyj_capstones_cpastone_year', true );
						$concentrations = get_the_term_list( $post_id, 'cunyj_concentrations' );
					?>
                    <li>
                    <?php if ( has_post_thumbnail() ) : ?>
                    	<a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('capstone-thumb'); ?>
                        </a>
					<?php endif; ?>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p>By: <?php the_author(); ?></p>
                    <p>Pub. Year: <?php echo $capstone_year; ?></p>
                    <p>Concentration: <?php echo $concentrations; ?></p>
                    </li>
                    <?php endwhile; ?>
                    </ul>
				</div><!-- END .capstone-box -->                  

			</div><!--END .capstone-column-wrapper-->
            
		</div><!--END #capstone-content-->
 
		<div style="clear:both;"></div>

     </div><!-- END main-->
     
</div><!-- END wrap-->

<?php get_footer(); ?>