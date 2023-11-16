<?php
// Register Custom Post Type Blog
function create_blog_cpt() {

    $labels = array(
        'name' => _x( 'Blog', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'Blog', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'Blog', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'Blog', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'Blog Archives', 'textdomain' ),
        'attributes' => __( 'Blog Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Blog:', 'textdomain' ),
        'all_items' => __( 'All Blog', 'textdomain' ),
        'add_new_item' => __( 'Add New Blog', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Blog', 'textdomain' ),
        'edit_item' => __( 'Edit Blog', 'textdomain' ),
        'update_item' => __( 'Update Blog', 'textdomain' ),
        'view_item' => __( 'View Blog', 'textdomain' ),
        'view_items' => __( 'View Blog', 'textdomain' ),
        'search_items' => __( 'Search Blog', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Blog', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Blog', 'textdomain' ),
        'items_list' => __( 'Blog list', 'textdomain' ),
        'items_list_navigation' => __( 'Blog list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Blog list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Blog', 'textdomain' ),
        'description' => __( '', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('blog-category'),
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
    register_post_type( 'blog', $args );

}
add_action( 'init', 'create_blog_cpt', 0 );

// Register Taxonomy Categories
function create_categories_tax() {

    $labels = array(
        'name'              => _x( 'Category', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Categories', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Category', 'textdomain' ),
        'all_items'         => __( 'All Category', 'textdomain' ),
        'parent_item'       => __( 'Parent Categories', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Categories:', 'textdomain' ),
        'edit_item'         => __( 'Edit Categories', 'textdomain' ),
        'update_item'       => __( 'Update Categories', 'textdomain' ),
        'add_new_item'      => __( 'Add New Categories', 'textdomain' ),
        'new_item_name'     => __( 'New Categories Name', 'textdomain' ),
        'menu_name'         => __( 'Categories', 'textdomain' ),
    );
    $args = array(
        'labels' => $labels,
        'description' => __( '', 'textdomain' ),
        'hierarchical' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => false,
        'show_in_rest' => true,
    );
    register_taxonomy( 'category', array('blog'), $args );

}
add_action( 'init', 'create_categories_tax' );