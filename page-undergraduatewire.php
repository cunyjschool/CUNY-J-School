<?php
/*
Template Name: Page - CUNY Undergraduate Wire
*/
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">

<div class="sidebar left">

<ul id="sidebar-nav">

  <li><h4><a href="/cuny-undergraduate-wire/">CUNY Undergraduate Wire</a></h4></li>

  <h4 style="margin-top: 20px;"><strong>Sources:</strong></h4>

<p><strong><a href="http://www.bridgenewspaper.net/">The Bridge</a></strong></p>
<p><strong><a href="http://www.bronxnet.org/ ">Bronx Net</a></strong></p>
<p><strong><a href="http://www.lcmeridian.com/ ">Meridian</a></strong></p>
<p><strong><a href="http://www.brooklynexcelsior.com/home/index.cfm?buttonPushed=1&event=displaySearchResults&q=backgrounds">Excelsior</a></strong></p>
<p><strong><a href="http://mywbcr.com ">WBCR</a></strong></p>
<p><strong><a href="http://www.adafi.org/">ADAFI: The Voice of Medgar Evers College</a></strong></p>
<p><strong><a href="http://www.baruchgradvoice.com/ ">The Graduate Voice</a></strong></p>
<p><strong><a href="http://www.ccnycampus.com/ ">The Campus</a></strong></p>
<p><strong><a href="http://www.ccnythepaper.com">The Paper</a></strong></p>
<p><strong><a href="http://www.thehunterenvoy.com">The Envoy</a></strong></p>
<p><strong><a href="http://whcs.tumblr.com/ ">WHCS</a></strong></p>
<p><strong><a href="http://www.qcknightnews.com">The Knight News</a></strong></p>
  
</ul><!-- end sidebar-nav -->
	
</div><!-- end sidebar -->
          
  <div id="right">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
    
    <?php edit_post_link('Edit this entry', '<ul><li class="edit">', '</li></ul>'); ?>

	<h2><?php the_title(); ?></h2>
    
    
      <div class="entry">
      
      	<?php if(get_post_meta($post->ID, page_image, true) != "") { ?>
        <div id="page-image">
<img src="<?php echo get_post_meta( $post->ID,"page_image", $single=true ) ; ?>" />
        </div><!-- end page-image -->
  		<?php } ?>

		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div><!-- end entry -->
    </div><!-- end post -->
		<?php endwhile; endif; ?>
</div><!-- end wrap right -->
</div><!-- end wrap clearfix -->


<?php get_footer(); ?>

