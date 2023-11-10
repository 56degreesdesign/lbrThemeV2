<?php
// Register Custom Post Type News and events
function create_newsandevents_cpt() {

    $labels = array(
        'name' => _x( 'News and events', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'News and events', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'News and events', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'News and events', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'News and events Archives', 'textdomain' ),
        'attributes' => __( 'News and events Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent News and events:', 'textdomain' ),
        'all_items' => __( 'All News and events', 'textdomain' ),
        'add_new_item' => __( 'Add New News and events', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New News and events', 'textdomain' ),
        'edit_item' => __( 'Edit News and events', 'textdomain' ),
        'update_item' => __( 'Update News and events', 'textdomain' ),
        'view_item' => __( 'View News and events', 'textdomain' ),
        'view_items' => __( 'View News and events', 'textdomain' ),
        'search_items' => __( 'Search News and events', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into News and events', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this News and events', 'textdomain' ),
        'items_list' => __( 'News and events list', 'textdomain' ),
        'items_list_navigation' => __( 'News and events list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter News and events list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'News and events', 'textdomain' ),
        'description' => __( '', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-format-status',
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'newsandevents', $args );

}
add_action( 'init', 'create_newsandevents_cpt', 0 );

function create_year() {
    $labels = array(
        'name' => _x( 'Years', 'taxonomy general name' ),
        'singular_name' => _x( 'Years', 'taxonomy singular name' ),
        // Add other taxonomy labels as needed
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true, // Set to true if you want hierarchical categories like default 'category'
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
    );

    register_taxonomy( 'year', array( 'newsandevents' ), $args );
}
add_action( 'init', 'create_year', 0 );
