<?php query_posts('cat=272&showposts=1'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
    <?php endwhile; else: ?><p>There are currently no polls.</p>
<?php endif; ?>