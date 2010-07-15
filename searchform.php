<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e(''); ?></label>
      <div id="search">
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <button type="submit">Search</button>
       </div>
</form>
