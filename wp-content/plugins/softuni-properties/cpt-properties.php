<?php
/**
 * Register a custom post type called "Property".
 *
 * @see get_post_type_labels() for label keys.
 */
function softuni_properties_cpt()
{
    $labels = array(
        'name' => _x('Properties', 'Post type general name', 'softuni'),
        'singular_name' => _x('Property', 'Post type singular name', 'softuni'),
        'menu_name' => _x('Properties', 'Admin Menu text', 'softuni'),
        'name_admin_bar' => _x('Property', 'Add New on Toolbar', 'softuni'),
        'add_new' => __('Add New', 'softuni'),
        'add_new_item' => __('Add New Property', 'softuni'),
        'new_item' => __('New Property', 'softuni'),
        'edit_item' => __('Edit Property', 'softuni'),
        'view_item' => __('View Property', 'softuni'),
        'all_items' => __('All Properties', 'softuni'),
        'search_items' => __('Search Properties', 'softuni'),
        'parent_item_colon' => __('Parent Properties:', 'softuni'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Property'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions'),
        'show_in_rest' => true,
    );

    register_post_type('Property', $args);

    flush_rewrite_rules();
}

add_action('init', 'softuni_properties_cpt');

/**
 * Register a 'field' taxonomy for post type 'Property', with a rewrite to match Property CPT slug.
 *
 * @see register_post_type for registering post types.
 */


 function softuni_properties_field_taxonomy()
 {
     $labels = array(
         'name' => _x('Fields', 'taxonomy general name', 'textdomain'),
         'singular_name' => _x('Field', 'taxonomy singular name', 'textdomain'),
         'search_items' => __('Search Fields', 'textdomain'),
         'all_items' => __('All Fields', 'textdomain'),
         'parent_item' => __('Parent Field', 'textdomain'),
         'parent_item_colon' => __('Parent Field:', 'textdomain'),
         'edit_item' => __('Edit Field', 'textdomain'),
         'update_item' => __('Update Field', 'textdomain'),
         'add_new_item' => __('Add New Field', 'textdomain'),
         'new_item_name' => __('New Field Name', 'textdomain'),
         'menu_name' => __('Field', 'textdomain'),
     );
 
     $args = array(
         'hierarchical' => true,
         'labels' => $labels,
         'show_ui' => true,
         'show_admin_column' => true,
         'query_var' => true,
         'show_in_rest' => true,
     );
     register_taxonomy('field', 'property', $args);
 }
 add_action('init', 'softuni_properties_field_taxonomy');
 
 function softuni_properties_location_taxonomy()
 {
     $labels = array(
         'name' => _x('Locations', 'taxonomy general name', 'textdomain'),
         'singular_name' => _x('Location', 'taxonomy singular name', 'textdomain'),
         'search_items' => __('Search Locations', 'textdomain'),
         'all_items' => __('All Locations', 'textdomain'),
         'parent_item' => __('Parent Location', 'textdomain'),
         'parent_item_colon' => __('Parent Location:', 'textdomain'),
         'edit_item' => __('Edit Location', 'textdomain'),
         'update_item' => __('Update Location', 'textdomain'),
         'add_new_item' => __('Add New Location', 'textdomain'),
         'new_item_name' => __('New Location Name', 'textdomain'),
         'menu_name' => __('Location', 'textdomain'),
     );
 
     $args = array(
         'hierarchical' => true,
         'labels' => $labels,
         'show_ui' => true,
         'show_admin_column' => true,
         'query_var' => true,
         'show_in_rest' => true,
     );
     register_taxonomy('location', 'property', $args);
 }
 add_action('init', 'softuni_properties_location_taxonomy');
 
 
 function softuni_properties_company_taxonomy()
 {
     $labels = array(
         'name' => _x('Companies', 'taxonomy general name', 'textdomain'),
         'singular_name' => _x('Company', 'taxonomy singular name', 'textdomain'),
         'search_items' => __('Search Companies', 'textdomain'),
         'all_items' => __('All Companies', 'textdomain'),
         'parent_item' => __('Parent Company', 'textdomain'),
         'parent_item_colon' => __('Parent Company:', 'textdomain'),
         'edit_item' => __('Edit Company', 'textdomain'),
         'update_item' => __('Update Company', 'textdomain'),
         'add_new_item' => __('Add New Company', 'textdomain'),
         'new_item_name' => __('New Company Name', 'textdomain'),
         'menu_name' => __('Company', 'textdomain'),
     );
 
     $args = array(
         'hierarchical' => false,
         'labels' => $labels,
         'show_ui' => true,
         'show_admin_column' => true,
         'query_var' => true,
         'show_in_rest' => true,
     );
     register_taxonomy('company', 'property', $args);
 }
 add_action('init', 'softuni_properties_company_taxonomy');