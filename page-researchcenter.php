<?php
/*
Template Name: Page - Research Center
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="research-center-main">
		
		<h2><?php the_title(); ?><?php edit_post_link( 'Edit', '<span class="edit">', '</span>' ); ?></h2>
		
			<div class="sidebar left standard">

				<?php

				$args = array(
							'theme_location' => 'research_center',
							'menu_class' => 'navigation default',
							'menu_id' => 'research-center-navigation',
							'fallback_cb' => false,
					);

				wp_nav_menu( $args );

				echo '<ul class="widgets">';
				dynamic_sidebar( 'research_center' );
				echo '</ul>';

				?>
	<div class="right">
		<ul class="social-links">
			<li class="facebook"><a href="http://facebook.com/cunygsjresearch">Like Us on Facebook</a></li>
			<li class="twitter"><a href="http://twitter.com/cunygsjresearch">Follow Us on Twitter</a></li>
			<li class="pinterest"><a href="http://pinterest.com/cunygsjresearch/">Follow Us on Pinterest</a></li>
		</ul>
	</div><!-- end social-links right -->
			</div><!-- END .sidebar.left -->
			
		<?php if ( is_page( 'research-center' ) ) : ?>
		
	
          
	<div class="content left-sidebar">
	<div class="rc-account-btn"><a href="http://apps.appl.cuny.edu:83/F/?func=find-b-0&local_base=journalism">My Account</a></div>
	<div class="page">
		
		<div class="tabber" id="research-center-tabber">
			<?php
				$tabs_fields = array();
				$tabs_fields['databases'] = get_post_meta( $post->ID, 'rc_databases_tab', true );
				$tabs_fields['subject_guides'] = get_post_meta( $post->ID, 'rc_subject_guides_tab', true );
				$tabs_fields['journals'] = get_post_meta( $post->ID, 'rc_journals_tab', true );
				$tabs_fields['articles'] = get_post_meta( $post->ID, 'rc_articles_tab', true );				
				$tabs_fields['books'] = get_post_meta( $post->ID, 'rc_books_tab', true );
				$tabs_fields['ebooks'] = get_post_meta( $post->ID, 'rc_ebooks_tab', true );
				$tabs_fields['reserves'] = get_post_meta( $post->ID, 'rc_reserves_tab', true );

				$tabs_navigation = '';
				$tabs_content = '';
				if ( count( $tabs_fields ) ) {
					foreach( $tabs_fields as $key => $value ) {
						if ( $value ) {
							$tabs_navigation .= '<li>';
							switch( $key ) {
								case 'databases':
									$tabs_navigation .= 'Databases';
									$tabs_content .= '<div class="tabber-item" id="databases-tabber-item">' . $value . '</div>';							
									break;
								case 'subject_guides':
									$tabs_navigation .= 'Subject Guides';
									$tabs_content .= '<div class="tabber-item" id="subject-guides-tabber-item">' . $value . '</div>';
									break;
								case 'journals':
									$tabs_navigation .= 'Journals/Periodicals';
									$tabs_content .= '<div class="tabber-item" id="journals-tabber-item">' . $value . '</div>';							
									break;
								case 'articles':
									$tabs_navigation .= 'Articles';
									$tabs_content .= '<div class="tabber-item" id="articles-tabber-item">' . $value . '</div>';							
									break;									
								case 'books':
									$tabs_navigation .= 'Books';
									$tabs_content .= '<div class="tabber-item" id="books-tabber-item">' . $value . '</div>';							
									break;	
								case 'ebooks':
									$tabs_navigation .= 'E-Books';
									$tabs_content .= '<div class="tabber-item" id="ebooks-tabber-item">' . $value . '</div>';							
									break;
								case 'reserves':
									$tabs_navigation .= 'Reserves';
									$tabs_content .= '<div class="tabber-item" id="reserves-tabber-item">' . $value . '</div>';	
									break;																						
								default:
									$tabs_navigation .= 'Unknown';
									break;
							}
							$tabs_navigation .= '</li>';					
						}
					} // END - foreach( $tabs_content as $key => $value )
				} // END if ( count( $tabs_fields ) )

				// Only print the tabs functionality if the buttons are set
				if ( $tabs_navigation ) {
					echo '<ul class="tabber-navigation">' . $tabs_navigation . '</ul>';
					echo $tabs_content;
				}

			?>

		</div><!-- end #research-center-tabber .tabber -->

		<div style="clear:right;"></div>
		
		<?php endif; ?>		

	<?php if ( is_page( 'research-center' ) ) : ?>
		
	<div id="research-center-middle">
		<div class="rc-top">
			<div class="rc-top-left">
				<h3>What's New</h3>
					
                        
                        <?php
							$values = get_post_custom( $post->ID );
							$video = isset( $values['cunyjrc_whatsnew-video'] ) ? esc_attr( $values['cunyjrc_whatsnew-video'][0] ) : '';
							$image = isset( $values['cunyjrc_whatsnew-image'] ) ? esc_attr( $values['cunyjrc_whatsnew-image'][0] ) : '';
							wp_nonce_field( 'cunyjrc_whatsnew-video_box_nonce', 'meta_box_nonce' );
							wp_nonce_field( 'cunyjrc_whatsnew-image_box_nonce', 'meta_box_nonce' );
							if (!empty($video)) {
							   	global $wp_embed;
								$post_embed = $wp_embed->run_shortcode('[embed width=300]' . $video . '[/embed]');
								echo '<div style="padding-bottom: 5px;">' . $post_embed . '</div>';
                            } elseif (!empty($image)) { ?>
								<img src="<?php echo $image; ?>" style="padding-bottom: 5px;max-width:310px; background: #eee; padding: 3px; max-height: 190px; float: left;margin-right: 10px"/>
                            <?php } ?>
					
							<h4><a href="<?php echo get_post_meta( get_the_id(), 'cunyjrc_whatsnew-url', true); ?>" target="_blank"><?php echo get_post_meta( get_the_id(), 'cunyjrc_whatsnew-title', true); ?></a></h4>
					
							<span class="rc-postcaption"><?php echo get_post_meta( get_the_id(), 'cunyjrc_whatsnew-blurb', true); ?></span>
			</div><!-- end rc-top-left-->
			
			<div class="rc-top-right">
					<ul class="rc-guides">
						<li style="border-bottom: 1px solid #eee;">
							<div class="rc-blurb">
								Research guides organized by topic with sites, tools, tips & techniques to inform your reporting.
							</div><!-- end rc-blurb-->
							<div class="rc-buttons" style="margin-top: 30px;">
								<span><a class="gray-btn" href="http://researchcenter.journalism.cuny.edu/research-guides/">Research Guides <span style="float:right;margin-right: 8px;">&rarr;</span></a></span>
							</div>
						</li>
				

						<li style="border-bottom: 1px solid #eee;">
							<div class="rc-blurb">
								A to Z List of our research databases.
							</div><!-- end rc-blurb-->
							<div class="rc-buttons">
								<span><a class="gray-btn" href="http://www.journalism.cuny.edu/databases/">Databases list <span style="float:right;margin-right: 10px;">&rarr;</span></a></span>
							</div>
						</li>
								
						<li>
							<div class="rc-blurb">
									Tips on searching our research databases. 
							</div><!-- end rc-blurb-->
							<div class="rc-buttons">
								<span><a class="gray-btn" href="http://researchcenter.journalism.cuny.edu/database-tutorials/">Databases tutorials	<span style="float:right;margin-right: 8px;">&rarr;</span></a></span>
							</div>
						</li>
					</ul><!-- end rc-guides -->
					
					
			
			</div><!--end rc-top-right -->
			
			
		</div><!-- end rc left -->
		<!--
		<div class="rc-bottom">
			<h3>What's New</h3>
		</div>-->
	</div><!-- end research center middle -->
		

	<div id="research-center-goodreads" class="research-center-info-zone">

	<div id="gr_grid_widget_1236291550">
		
	</div><!-- END #gr_grid_widget_1236291550 -->
	
	<script src="http://www.goodreads.com/review/grid_widget/2095476.Featured%20Books?num_books=11&amp;order=d&amp;shelf=read&amp;sort=date_added&amp;widget_id=1236291550" type="text/javascript" charset="utf-8"></script>
	

	</div>
		
	<?php endif; ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    		<div class="page" id="page-<?php the_ID(); ?>">
    
    		<?php if ( $page_image = get_post_meta( $post->ID, 'page_image', true ) ) : ?>
				<div id="page-image">
					<img src="<?php echo $page_image; ?>" />
				</div>
	  		<?php endif; ?>

			<?php if ( $page_image_wide = get_post_meta( $post->ID, 'page_image_wide', true ) ) : ?>
	        	<div id="page-image-wide">
					<img src="<?php echo $page_image_wide; ?>" />
	        	</div>
	  		<?php endif; ?>

      		<div class="entry">
				<?php the_content(); ?>
      		</div>
    </div>
		<?php endwhile; endif; ?>
  </div>
	
<div style="clear:left;"></div>


</div><!-- END .main -->

</div><!-- END .wrap -->

<script type="text/javascript">
	
	jQuery(document).ready(function(){
		
		cunyj_load_blog_posts( 'http://researchcenter.journalism.cuny.edu/', 4, 'research-center-blog' );
		
		jQuery('ul.tabber-navigation').show();
		jQuery('ul.tabber-navigation li:eq(0)').addClass('active');
		jQuery('div.tabber-item:eq(0)').addClass('active');
		
		jQuery('ul.tabber-navigation li').click(function() {
			// Remove the existing 'active' classes
			jQuery('ul.tabber-navigation li').removeClass('active');
			jQuery('div.tabber-item').removeClass('active');
			// Add the 'active' class to the newly active elements
			jQuery(this).addClass('active');
			var index = jQuery(this).index();
			jQuery('div.tabber-item:eq('+index+')').addClass('active');
		});
		
	});
	
</script>

<?php get_footer(); ?>






