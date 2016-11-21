<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline">
	<input type="text" name="s" id="search" placeholder="Search" value="<?php the_search_query(); ?>"/>
    <button type="submit" class="button small"><?php _e("Search"); ?></button>
</form>