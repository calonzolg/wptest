<?php
/*
Plugin Name: Own Plugin
Plugin URI: https://github.com/calonzolg/wptest
Description: Create Products, Brands, and Relations.
Version: 0.0.1
Author: Carlos Alonzo
Author URI: https://calonzolg.com
License: GPLv2 or later
*/
function product_category() {
    $labels = array(
        'name'                       => _x( 'Product Category', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Product Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Product Category', 'text_domain' ),
        'all_items'                  => __( 'All Items', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Item', 'text_domain' ),
        'edit_item'                  => __( 'Edit Item', 'text_domain' ),
        'update_item'                => __( 'Update Item', 'text_domain' ),
        'view_item'                  => __( 'View Item', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Items', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No items', 'text_domain' ),
        'items_list'                 => __( 'Items list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rest_base'                  => 'product_category',
    );
    register_taxonomy( 'product_category', array( 'product' ), $args );

}

function products_post_type() {
    $labels = array(
        'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Products', 'text_domain' ),
        'name_admin_bar'        => __( 'Product', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
        'all_items'             => __( 'All Products', 'text_domain' ),
        'add_new_item'          => __( 'Add New Product', 'text_domain' ),
        'add_new'               => __( 'New Product', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Product', 'text_domain' ),
        'update_item'           => __( 'Update Product', 'text_domain' ),
        'view_item'             => __( 'View Product', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search products', 'text_domain' ),
        'not_found'             => __( 'No products found', 'text_domain' ),
        'not_found_in_trash'    => __( 'No products found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Product', 'text_domain' ),
        'description'           => __( 'Product information pages.', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'custom-fields'),
        'taxonomies'            => array( 'product_category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'rest_base'             => 'products',
    );
    register_post_type( 'product', $args );

}

function brands_post_type() {
    $labels = array(
        'name'                  => _x( 'Brands', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Brand', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Brands', 'text_domain' ),
        'name_admin_bar'        => __( 'Brand', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Brand:', 'text_domain' ),
        'all_items'             => __( 'All Brands', 'text_domain' ),
        'add_new_item'          => __( 'Add New Brand', 'text_domain' ),
        'add_new'               => __( 'New Brand', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Brand', 'text_domain' ),
        'update_item'           => __( 'Update Brand', 'text_domain' ),
        'view_item'             => __( 'View Brand', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search products', 'text_domain' ),
        'not_found'             => __( 'No products found', 'text_domain' ),
        'not_found_in_trash'    => __( 'No products found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Brand', 'text_domain' ),
        'description'           => __( 'Brand information pages.', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
        'taxonomies'            => array( 'category' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'rest_base'             => 'brands',
    );
    register_post_type( 'brand', $args );
}

function get_custom_fields( $object, $field_name, $request ) {
    return $object;
}

function add_custom_fields() {
    register_rest_field(
        'products',
        'brand',
        array(
            'get_callback'    => function ( $object ) {
                print($object);
                return get_post_meta( $object['brand']);
            },
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

add_action( 'rest_api_init', 'add_custom_fields' );
add_action( 'init', 'product_category', 0 );
add_action( 'init', 'brands_post_type', 0 );
add_action( 'init', 'products_post_type', 0 );