<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sth
 */

?>

<form action="<?php echo home_url( '/' ); ?>" method="get">
    <fieldset>
		<div class="input-group">
			<input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
			<span class="input-group-btn">
				<button type="submit" class="btn btn-info"><?php _e("Search","wpbootstrap"); ?></button>
			</span>
		</div>
    </fieldset>
</form>