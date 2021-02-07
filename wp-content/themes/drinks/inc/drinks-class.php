<?php
/*
Custom Post Type: Drinks
*/
?>

<?php

// Register Custom Post Type
function drinks()
{

	$labels = array(
		'name'                  => _x('Drinks', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Drink', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Drinks', 'text_domain'),
		'name_admin_bar'        => __('Drinks', 'text_domain'),
		'archives'              => __('Item Archives', 'text_domain'),
		'attributes'            => __('Item Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('All drinks', 'text_domain'),
		'add_new_item'          => __('Add New drink', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New drink', 'text_domain'),
		'edit_item'             => __('Edit drink', 'text_domain'),
		'update_item'           => __('Update drink', 'text_domain'),
		'view_item'             => __('View drink', 'text_domain'),
		'view_items'            => __('View drinks', 'text_domain'),
		'search_items'          => __('Search drinks', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Thumbnail', 'text_domain'),
		'set_featured_image'    => __('Set thumbnail', 'text_domain'),
		'remove_featured_image' => __('Remove thumbnail', 'text_domain'),
		'use_featured_image'    => __('Use as thumbnail', 'text_domain'),
		'insert_into_item'      => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list'            => __('Drink list', 'text_domain'),
		'items_list_navigation' => __('Drink list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter drinks list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Drink', 'text_domain'),
		'description'           => __('Cocktails, Long-drinks, shots...', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies'            => array('Long drinks', ' Shots', ' Cocktails', ' Alcohol free'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-beer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type('cpt_drinks', $args);
}
add_action('init', 'drinks', 0);


?>