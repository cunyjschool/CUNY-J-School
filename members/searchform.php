<form method="GET" action="<?php bloginfo('url'); ?>/members/">
	<input class="search-box" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<button class="search-button" type="submit">Search</button>
</form>
