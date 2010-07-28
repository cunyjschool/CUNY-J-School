 <?php
function alternate_rows($i){if($i % 2) {echo ' class="on"';} else {echo ' class="off"';}  
} ;
?>

<?php get_header(); ?>

<div class="wrap clearfix" id="content">
  <div id="posts">

<h3 style="margin-top: 20px; margin-bottom: 15px;">Upcoming Events <a href="<?php bloginfo('url'); ?>/category/events/feed/"><img src="<?php bloginfo('template_directory'); ?>/images/icons/feed.png" alt="Events Feed" class="feed" /></a></h3>


<?php
$timecutoff = date("Y-m-d");
$args = array(
'category_name' => 'events',
'orderby' => 'meta_value',
'meta_key' => 'event_date',
'meta_compare' => '>=',
'meta_value' => $timecutoff,
'order' => 'ASC'
);
$my_query = new WP_Query($args);
if ($my_query->have_posts()) : while ($my_query->have_posts()) :
$my_query->the_post();
$eventdate = get_post_meta($post->ID, "event_date", true);
?>
<ul id="event clearfix">
<li style="margin-bottom: 15px; border-bottom: 1px solid #ddd; margin-top: 10px;">
<table class="cal">
  <tr>
    <td class="month"><?php echo get_post_meta( $post->ID,"event_month", $single=true ) ; ?></td>
    <td class="daynumber"><?php echo get_post_meta( $post->ID,"event_day", $single=true ) ; ?></td>
  </tr>
  </table><!-- end cal -->
<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
<p><?php the_excerpt(); ?></p>
</li>
</ul>
<?php endwhile; else: ?>
<ul id="events">
<li><?php _e('No Events Scheduled! Stay Tuned.'); ?></li>
</ul>
<?php endif; ?>

<h3 style="margin-top: 60px; margin-bottom: 15px;">Past Events <a href="<?php bloginfo('url'); ?>/category/events/feed/"></a></h3>

<?php
$timecutoff = date("Y-m-d");
$args = array(
'category_name' => 'events',
'orderby' => 'meta_value',
'meta_key' => 'event_date',
'meta_compare' => '<',
'meta_value' => $timecutoff,
'order' => 'DESC'
);
$my_query = new WP_Query($args);
if ($my_query->have_posts()) : while ($my_query->have_posts()) :
$my_query->the_post();
$eventdate = get_post_meta($post->ID, "event_date", false);
?>
<ul id="event clearfix">
<li style="margin-bottom: 15px; margin-top: 10px;">
<table class="cal">
  <tr>
    <td class="month"><?php echo get_post_meta( $post->ID,"event_month", $single=true ) ; ?></td>
    <td class="daynumber"><?php echo get_post_meta( $post->ID,"event_day", $single=true ) ; ?></td>
  </tr>
  </table><!-- end cal -->
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</li>
</ul>
<?php endwhile; else: ?>
<ul id="events">
<li><?php _e('No Events Scheduled! Stay Tuned.'); ?></li>
</ul>


<?php endif; ?>


</div><!--end posts-->


  
  <?php include (TEMPLATEPATH . '/sidebar-news.php'); ?>
</div> <!--end wrap clearfix content-->

<?php get_footer(); ?>
 
