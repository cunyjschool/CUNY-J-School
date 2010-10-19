<form method="GET" id="searchform" action="<?php bloginfo('url'); ?>/groups/">
      <div id="search">
		<input class="search-box" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <button class="search-button" type="submit">Search</button>
       </div>
</form>
