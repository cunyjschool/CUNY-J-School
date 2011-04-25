<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="single_capstone">
		
		<div class="breadcrumb">
			<a href="<?php bloginfo('url'); ?>/capstones/">&larr; Back to capstones</a>
		</div>
	
  	<div class="content">
    
	
	<?php if (have_posts()) : while (have_posts()) : the_post();
		
		$post_id = get_the_id();
		$capstone_year = get_post_meta( $post_id, '_cunyj_capstones_capstone_year', true );
		$capstone_advisor = get_post_meta( $post_id, '_cunyj_capstones_capstone_advisor', true );
		$concentrations = get_the_term_list( $post_id, 'cunyj_concentrations' );
		$media_types = get_the_term_list( $post_id, 'cunyj_capstone_media_types' );
		$capstone_url = get_post_meta( $post_id, '_cunyj_capstones_capstone_url', true );
		$capstone_video = get_post_meta( $post_id, '_cunyj_capstones_capstone_video', true );
		
	?>
	<div class="capstone" id="capstone-<?php the_ID(); ?>">

		<div class="sidebar right capstone-right">
        
        <h4>Details</h4>
			<p><span>By:</span> <?php if ( function_exists( 'coauthors_links' ) ) { coauthors_links(); } else { the_author_link(); } ?></p>
            <p><span>Pub. Year:</span> <?php echo $capstone_year; ?></p>
            <p><span>Capstone Advisor:</span> <?php echo $capstone_advisor; ?></p>
            <p><span>Media Type:</span> <?php echo $media_types; ?></p>
			<p><span>Concentration:</span> <?php echo $concentrations; ?></p>
            <p><span>Summary:</span><?php the_excerpt(); ?></p> 
                
		</div><!--END sidebar right capstone-right-->
        
        <div class="capstone-content">
        	<h2><?php the_title(); ?></h2> 
            
            <div class="entry">
        		<?php if ($capstone_url): ?>
                	<div class="capstone-screenshot">
                		<p>(Click image to visit website)</p>
                		<a href="<?php echo $capstone_url; ?>"><?php the_post_thumbnail(array(600, 600));?></a>
					</div>
				<?php elseif ($capstone_video): ?>
				<?php echo wp_oembed_get( $capstone_video, array('width'=>600) ); ?>
                <?php else: ?>
                <?php the_content(); ?>
                <?php endif; ?>
				
      		</div><!--END .entry-->
		</div><!--END .capstone-content-->
	
		
        
		<div class="clear"></div>
	</div><!-- END capstone-->
    
    <?php endwhile; else: ?>
    
	<div class="message info">Sorry, no capstones matched your criteria.</div>

<?php endif; ?>
		
  </div>

	<div class="clear-both"></div>

	</div><!-- END #main -->

</div><!-- END .wrap -->

<?php get_footer(); ?>

