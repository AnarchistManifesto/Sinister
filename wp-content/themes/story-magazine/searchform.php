<?php
/**
 * Template for displaying search forms 
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form class="searchform" role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>"><span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'story-magazine' ); ?></span></label>
	<input type="search" id="<?php echo $unique_id; ?>"  class="s rad p-border" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'story-magazine' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="searchSubmit ribbon"><i class="fa fa-search"></i></button>
</form>