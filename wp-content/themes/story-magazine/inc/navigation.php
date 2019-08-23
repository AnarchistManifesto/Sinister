<?php
/**
 * Template part for displaying main navigation
 */

if ( has_nav_menu('main-menu-left') ) {
	wp_nav_menu( array( 'depth' => 4, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_class' => 'nav tmnf_custom_menu', 'menu_id' => 'main-nav-left' , 'theme_location' => 'main-menu-left' ) );
}

if ( has_nav_menu('main-menu-right') ) {
	wp_nav_menu( array( 'depth' => 4, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_class' => 'nav tmnf_custom_menu', 'menu_id' => 'main-nav-right' , 'theme_location' => 'main-menu-right' ) );
}
?>