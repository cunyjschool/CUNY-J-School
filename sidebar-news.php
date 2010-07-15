  <div class="clearfix" id="sidebar-news">
    <div id="admiss-links">
      <h3><a href="/admissions/">Admissions</a></h3>
      <ul>
        <li><a href="/admissions/how-to-apply/">How to Apply</a></li>
        <li><a href="https://cunyjschool.wufoo.com/forms/information-request-form/">Request Info</a></li>
      </ul>
    </div>
    
     
    <div id="latest-news">
<h3>Latest News</h3>
<ul>
<?php query_posts('cat=4&showposts=5'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul>
    </div>
    
    <div id="upcoming-events">
<h3>Upcoming Events</h3>
<ul>
<?php query_posts('cat=15&showposts=3'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul>
    </div>
    
    <div class="clearfix" id="cats-archives">
      <div id="category-list">
<h3>More News</h3>
<ul>
<?php wp_list_categories('child_of=4&title_li=&exclude=13'); ?>
</ul>
      </div>
     
      <div id="archives">
<h3>Archives</h3>
<ul>
<?php wp_get_archives('type=yearly'); ?>
</ul>
      </div>
    </div>
  </div>
