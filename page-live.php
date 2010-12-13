<?php
/*
Template Name: Page - Live
*/
?>

<?php get_header(); ?>

<div class="wrap">
	
	<div class="main" id="cunyj-live">
		
		<h2 class="banner"><?php the_title(); ?></h2>
  
		<div class="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="page full" id="page-<?php the_ID(); ?>">
		
		<div class="video-player">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="720" height="480" id="utv174"><param name="flashvars" value="autoplay=false&brand=embed&cid=18332%2Ftest&locale=en_US"/><param name="allowfullscreen" value="true"/><param name="allowscriptaccess" value="always"/><param name="movie" value="http://www.ustream.tv/flash/live/18332/test"/><embed flashvars="autoplay=false&brand=embed&cid=18332%2Ftest&locale=en_US" width="720" height="480" allowfullscreen="true" allowscriptaccess="always" id="utv174" name="utv_n_143574" src="http://www.ustream.tv/flash/live/18332/test" type="application/x-shockwave-flash" /></object>
		</div>
    
    	<div class="entry">

			<?php the_content(); ?>
		
      </div>

    </div>
		<?php endwhile; endif; ?>
  </div>

	</div>
</div>


<?php get_footer(); ?>