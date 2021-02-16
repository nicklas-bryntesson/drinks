<?php

/**
 * Custom Taxonomy for drink Flavours
 * 
 */

// Register Custom Taxonomy
function flavour()
{

    $labels = array(
        'name'                       => _x('Flavours', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x('Flavour', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __('Flavour', 'text_domain'),
        'all_items'                  => __('All Flavours', 'text_domain'),
        'parent_item'                => __('Parent Item', 'text_domain'),
        'parent_item_colon'          => __('Parent Item:', 'text_domain'),
        'new_item_name'              => __('New Flavour', 'text_domain'),
        'add_new_item'               => __('Add New Flavours', 'text_domain'),
        'edit_item'                  => __('Edit Flavour', 'text_domain'),
        'update_item'                => __('Update Flavour', 'text_domain'),
        'view_item'                  => __('View Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove Flavours', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Flavours', 'text_domain'),
        'search_items'               => __('Search Flavour', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No items', 'text_domain'),
        'items_list'                 => __('Items list', 'text_domain'),
        'items_list_navigation'      => __('Items list navigation', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
        'show_tagcloud'              => false,
        'show_in_rest'               => true,
    );
    register_taxonomy('txn_flavour', array('cpt_drinks'), $args);
}
add_action('init', 'flavour', 0);
