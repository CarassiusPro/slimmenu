<?php
/*
Plugin Name: Jon's Slim Menu
Plugin URI: http://headwaythemesextend.com/
Description: Responsive menu plugin
Version: 1.4
Author: Jon Mather
Author URI: http://www.carassiusproductions.com.au
License: GNU GPL v2
*/

define('SLIM_BLOCK_VERSION', '1.4');

add_action('after_setup_theme', 'register_slim_block');
function register_slim_block() {
    if ( !class_exists('Headway') )
    	return;
	require_once 'block.php';
	require_once 'block-options.php';
	
	if (!class_exists('HeadwayBlockAPI') )
	{
		return false;
	}
	return headway_register_block('HeadwaySlimBlock', substr(WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), '', plugin_basename(__FILE__)), 0, -1));

}
// add menu support
function register_jon_slim_menu($block_id, $block = false) {
	$block = HeadwayBlocksData::get_block($block_id);
	$name = HeadwayBlocksData::get_block_name($block) . ' &mdash; ' . 'Layout: ' . HeadwayLayout::get_name($block['layout']);
	register_nav_menus(
		array(
			'jons-slim-menu' => __( 'SlimMenu ' . $name )
		)
	);
}
add_action( 'init', 'register_jon_slim_menu' ); 

add_filter('wp_nav_menu_items', 'add_search_form_to_menu', 10, 2);
function add_search_form_to_menu($items, $args) {
 
 // If this isn't the main navbar menu, do nothing
 if( !($args->theme_location == 'jons-slim-menu') )
 return $items;
 
 // On main menu: put styling around search and append it to the menu items
 return $items . '<li class="my-nav-menu-search">' . get_search_form(false) . '</li>';
}
