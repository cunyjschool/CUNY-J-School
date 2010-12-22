<?php
/*
Template Name: Page - Capstones
*/
?>

<?php get_header(); ?>

<div class="wrap">

	<div class="main">
    
		<div id="full-width">
	   		<!--content-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    		<div class="capstone-column-wrapper">
    
				<h2 style="margin-left:10px;"><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>
      
      				
					<div class="entry">
					
                    <div class="capstone-img" style="text-align:center; background: black;">	
					<?php if(get_post_meta($post->ID, 'page_image_wide', true) != "") { ?>
        
					<img src="<?php echo get_post_meta( $post->ID,"page_image_wide", $single=true ) ; ?>" />
        
  					<?php } ?>
					</div><!--end capstone-img-->			

                    <div class="wrap-capstone-box">

     
            
					<?php
							$pages = get_pages('child_of='.$post->ID.'&sort_column=menu_order&sort_order=asc&include=10,13,16');
							foreach($pages as $page) 
							{
							$capstone_excerpt = get_post_meta($page->ID, 'capstone_section_excerpt', true);
							$page_thumb = get_post_meta($page->ID, 'photo', true);
							echo "<li class='capstone-box three-columns'><h4><a href=\"".get_page_link($page->ID)."\">$page->post_title</a></h4><br />";
							echo "<span class='capstone-img-frame'><img src=$page_thumb  /></span>";
							echo $capstone_excerpt;
							echo "</li>";
							}
							?>

					<?php endwhile; endif; ?>




        			</div><!--end wrap-capstone-box-->
                 </div><!--end entry-->
			</div><!--end capstone-column-wrapper-->
		</div><!--end full-width-->
 

<div style="clear:both;"></div>

     </div><!--end main-->
</div><!-- end wrap-->

<?php get_footer(); ?>