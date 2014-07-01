<?php
/**
 * The template for displaying search forms in Blain
 *
 * @package Blain
 */
?>
<form role="search" method="get" class="row search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
        <label class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'blain' ); ?></label>
        <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'blain' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
    </div>
	<input type="submit" class="btn red" value="<?php echo esc_attr_x( 'Search', 'submit button', 'blain' ); ?>">
</form>
