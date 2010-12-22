<?php
/*
Template Name: Page - Capstones Packages
*/
?>

<?php get_header(); ?><title>Capstones - Packages</title>

<div class="wrap">
	
	<div class="main">

  <?php get_sidebar( 'default_page' ); ?>
  
	<div id="content" class="right small">
	
    <div class="page" id="page-<?php the_ID(); ?>">

			<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>
            
            
            
    <?php query_posts('category_name=packages&showposts=10'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div id="capstones">
	<div class="capstones-post-packages">



<?php if(get_post_meta($post->ID, 'photo', true) != "") { ?>
        <div class="capstones-packages-img">
<a href="<?php echo get_post_meta( $post->ID,"url", $single=true ) ; ?>"><img src="<?php echo get_post_meta( $post->ID,"photo", $single=true ) ; ?>" width=280 /></a>
        </div>
  		<?php } ?>
    <h3><a href="<?php echo get_post_meta( $post->ID,"url", $single=true ) ; ?>"><?php the_title(); ?></a></h3>
    	<div class="capstones-packages-info">
      <ul>
      
		<li><span class="no-caps"> on</span> <?php the_time('M j, Y') ?></li>
		<li><span class="no-caps"> by</span> <?php the_author_posts_link(); ?></li>
		<li class="capstones-info-categories"><span class="no-caps"> in </span><?php the_category(', ') ?></li>
		</ul>
	</div><!--end capstones-info-->
    
      	
       
      </div>
    </div>
		<?php endwhile; endif; ?>
  </div>

	<div style="clear:left;"></div>

	</div>
</div>


<?php get_footer(); ?>