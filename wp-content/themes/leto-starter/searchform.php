<?php
/**
 * Search form template.
 *
 * @package Leto_Starter
 */
?>
<form role="search" method="get" class="search-form leto-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="leto-screen-reader-text" for="leto-search-field"><?php esc_html_e( 'Search for:', 'leto-starter' ); ?></label>
	<input
		type="search"
		id="leto-search-field"
		class="search-field leto-search-field"
		placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'leto-starter' ); ?>"
		value="<?php echo get_search_query(); ?>"
		name="s"
	/>
	<button type="submit" class="search-submit leto-search-submit">
		<?php echo esc_html_x( 'Search', 'submit button', 'leto-starter' ); ?>
	</button>
</form>
