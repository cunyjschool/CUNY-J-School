<?php
/*
Template Name: Page - Research Center
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="research-center-main">
		
		<h2><span class="social-links right"><a href="http://facebook.com/cunygsjresearch"><img src="<?php bloginfo('template_directory'); ?>/images/icons/facebook_32.png" alt="Facebook" height="32px" width="32px" /></a><a href="http://twitter.com/cunygsjresearch"><img src="<?php bloginfo('template_directory'); ?>/images/icons/twitter_32.png" alt="Twitter" height="32px" width="32px" /></a></span><?php the_title(); ?><?php edit_post_link( 'Edit', '<span class="edit">', '</span>' ); ?></h2>
	
		<img class="ribbon" src="<?php bloginfo('template_directory'); ?>/images/pages/researchcenter_h850.jpg" alt="Research Center entrance" height="100px" width="850px" />
		
		<?php if ( is_page( 'research-center' ) ) : ?>

		<div id="research-center-blog" class="research-center-info-zone">
			<h4 class="blog-header"><a href="http://researchcenter.journalism.cuny.edu/">Research Center Blog</a></h4>
			<ul>
				<li>Loading...</li>
			</ul>
		</div>

		<div class="tabber" id="research-center-tabber">
			<?php
				$tabs_fields = array();
				$tabs_fields['databases'] = get_post_meta( $post->ID, 'rc_databases_tab', true );
				$tabs_fields['subject_guides'] = get_post_meta( $post->ID, 'rc_subject_guides_tab', true );
				$tabs_fields['journals'] = get_post_meta( $post->ID, 'rc_journals_tab', true );
				$tabs_fields['books'] = get_post_meta( $post->ID, 'rc_books_tab', true );
				$tabs_fields['ebooks'] = get_post_meta( $post->ID, 'rc_ebooks_tab', true );

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
								case 'books':
									$tabs_navigation .= 'Books';
									$tabs_content .= '<div class="tabber-item" id="books-tabber-item">' . $value . '</div>';							
									break;	
								case 'ebooks':
									$tabs_navigation .= 'E-Books';
									$tabs_content .= '<div class="tabber-item" id="ebooks-tabber-item">' . $value . '</div>';							
									break;																							
								default:
									$tabs_navigation .= 'Unknown';
									break;
							}
							$tabs_navigation .= '</li>';					
						}
					} // END - foreach( $tabs_content as $key => $value )
				}

				// Only print the tabs functionality if the buttons are set
				if ( $tabs_navigation ) {
					echo '<ul class="tabber-navigation">' . $tabs_navigation . '</ul>';
					echo $tabs_content;
				}

			?>

		</div>

		<div style="clear:both;"></div>
		
		<?php endif; ?>
		
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

	</div>	
          
	<div class="content left-sidebar">
	
	<div class="page">
		
	<?php if ( is_page( 'research-center' ) ) : ?>

	<div id="research-center-goodreads" class="research-center-info-zone">

	<style type="text/css" media="screen"> .gr_grid_container { /* customize grid container div here. eg: width: 500px; */ } .gr_grid_book_container { /* customize book cover container div here */ float: left; width: 39px; height: 60px; margin: 5px; border: 3px solid #eee; overflow: hidden; } 
	       #gr_grid_widget_1236291550 h2 {
		    margin-top: 10px;
			padding-top: 0;
		   	font-size: 100%; }
	        </style>

	<div id="gr_grid_widget_1236291550">
		
	</div>
	
	<script src="http://www.goodreads.com/review/grid_widget/2095476.Featured%20Books?num_books=22&amp;order=d&amp;shelf=read&amp;sort=date_added&amp;widget_id=1236291550" type="text/javascript" charset="utf-8"></script>
		
	<?php endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="entry">
    
		<?php the_content(); ?>
		
    </div>

	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

	<?php endwhile; endif; ?>
		
	</div>

	<div style="clear:both;"></div>

</div>

</div>

<script type="text/javascript">
	
	jQuery(document).ready(function(){
		
		cunyj_load_blog_posts( 'http://researchcenter.journalism.cuny.edu/', 6, 'research-center-blog' );
		
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






