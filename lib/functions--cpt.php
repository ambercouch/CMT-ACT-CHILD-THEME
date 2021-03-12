<?php
function  act_cpt() {
//Service
    $labels = array(
        'name' => _x('Services', 'post type general name'),
        'singular_name' => _x('Service', 'post type singular name'),
        'add_new' => _x('Add New', 'Service'),
        'add_new_item' => __('Add New Service'),
        'edit_item' => __('Edit Service'),
        'new_item' => __('New Service'),
        'all_items' => __('All Services'),
        'view_item' => __('View Service'),
        'search_items' => __('Search Services'),
        'not_found' => __('No Services found'),
        'not_found_in_trash' => __('No Services found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Services'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-store',
        'description' => 'Services offered',
        'public' => true,
        'menu_position' => 20,
        'supports' => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
        'has_archive' => 'service'
    );
    register_post_type('service', $args);

//Service Categories
    $labels = array(
        'name'              => _x( 'Service Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Service Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Service Categories' ),
        'all_items'         => __( 'All Service Categories' ),
        'edit_item'         => __( 'Edit Service Category' ),
        'update_item'       => __( 'Update Service Category' ),
        'add_new_item'      => __( 'Add New Service Category' ),
        'new_item_name'     => __( 'New Tile Service Category' ),
        'menu_name'         => __( 'Service Categories' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'service-category' ),
    );

    register_taxonomy( 'service_category', array( 'service' ), $args );

    //Media
    $labels = array(
        'name' => _x('Media', 'post type general name'),
        'singular_name' => _x('Media', 'post type singular name'),
        'add_new' => _x('Add Media', 'Media'),
        'add_new_item' => __('Add New Media'),
        'edit_item' => __('Edit Media'),
        'new_item' => __('New Media'),
        'all_items' => __('All Media'),
        'view_item' => __('View Media'),
        'search_items' => __('Search Medias'),
        'not_found' => __('No Media found'),
        'not_found_in_trash' => __('No Media found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Media'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-format-video',
        'description' => 'Media',
        'public' => true,
        'rewrite' => 'media-item',
        'menu_position' => 20,
        'supports' => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
        'has_archive' => 'media-list'
    );
    register_post_type('media', $args);

//Media Categories
    $labels = array(
        'name'              => _x( 'Media Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Media Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Media Categories' ),
        'all_items'         => __( 'All Media Categories' ),
        'edit_item'         => __( 'Edit Media Category' ),
        'update_item'       => __( 'Update Media Category' ),
        'add_new_item'      => __( 'Add New Media Category' ),
        'new_item_name'     => __( 'New Tile Media Category' ),
        'menu_name'         => __( 'Media Categories' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'media-category' ),
    );

    register_taxonomy( 'media_category', array( 'media' ), $args );


}

add_action('init', 'act_cpt');
