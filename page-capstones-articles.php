<?php
/*
Template Name: Page - Capstones Articles
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main">

  <?php get_sidebar( 'default_page' ); ?>
  
	<div id="content" class="right small">
	
    <div class="page" id="page-<?php the_ID(); ?>">

			<h2><?php edit_post_link('Edit', '<span class="edit button">', '</span>'); ?><?php the_title(); ?></h2>
            
            
            
    <?php query_posts('category_name=articles&showposts=10'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div id="capstones">
	<div class="capstones-post">

<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    
    	<div class="capstones-info">
      <ul>
      
      
      
		<li><span class="no-caps"> on</span> <?php the_time('M j, Y') ?></li>
		<li><span class="no-caps"> by</span> <?php the_author_posts_link(); ?></li>
		<li class="capstones-info-categories"><span class="no-caps"> in </span><?php the_category(', ') ?></li>		</ul>
	</div><!--end capstones-info-->
    <div style="clear:both"></div>
    
      	<?php if(get_post_meta($post->ID, 'photo', true) != "") { ?>
        <div class="capstones-article-img">
<img src="<?php echo get_post_meta( $post->ID,"photo", $single=true ) ; ?>" width=200 />
        </div>
  		<?php } ?>

		<?php the_excerpt(); ?> <span class="no-caps"><a href="<?php the_permalink() ?>">Read More  &raquo;</a></span>
       
      </div>
    </div>
		<?php endwhile; endif; ?>
  </div>

	<div style="clear:left;"></div>

	</div>
</div>


<?php get_footer(); ?>