<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
	<div>
		<label for="s" class="screen-reader-text"><?php _e('Search for:','nakedtheme'); ?></label>
		<input type="search" id="s" name="s" value="" />
		<button class="btn btn--blue"type="submit" id="searchsubmit" ><?php _e('Search','nakedtheme'); ?></button>
	</div>
</form>