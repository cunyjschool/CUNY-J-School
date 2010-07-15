<?php
function alternate_rows($i){if($i % 2) {echo ' class="on"';} else {echo ' class="off"';}  
} ;
?>


<?php get_header(); ?>

<div class="wrap clearfix" id="content">

  <div id="capstone-projects">
  
<h2>Capstone Projects</h2>

<h4 style="margin-top:50px;">Featured Work</h4>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec diam nulla, id elementum neque. Cras ac ante id est lacinia interdum vel adipiscing elit. Aenean non est diam, vitae porta dui. Aliquam sit amet magna quis elit vulputate pretium non sit amet felis. Integer consectetur vulputate elit ut aliquet. (Previous Years: <a href="#">2008</a> | <a href="#">2007</a>)<br />
<p style="border-top:1px dotted #ccc; padding: 5px;"><span style="font-size: .9em; float: right;">See more student work on <a href="http://nycitynewsservice.com/">NYCity News Service</a></span></p>


<div id="projects">
  
  
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="project-item">

<h4><a href="<?php echo get_post_meta($post->ID, "capstone-link", true);?>" rel="bookmark" title="Link to project"><?php the_title(); ?></a></h4>
     

	

	  <div class="capstonemetadata">By <?php echo get_post_meta( $post->ID,"capstone-byline", $single=true ) ; ?>  </div><!-- end capstonemetadata -->
  <a href="<?php echo get_post_meta($post->ID, "capstone-link", true);?>" rel="bookmark" title="Link to project"> <img class="capstone-thumb" src="<?php echo get_post_meta($post->ID, "capstone-thumb", true);?>" width="250" /> </a>

<span style="font-size: .9em;"><?php the_excerpt(); ?></span>



    </div><!-- end project-item -->
    

	<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div><!-- end navigation -->

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
  </div><!-- end projects -->

</div><!-- end capstone-projects -->
  


</div><!-- end content -->

<?php get_footer(); ?>
