
<form class="form-inline search-top" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
<div class="form-group">
	<input type="text"  class="form-control" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s" />
	</div>
	<input type="submit" class="btn btn-default" id="searchsubmit" value="поиск" />
</form>