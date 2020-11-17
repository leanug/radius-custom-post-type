<?php

if( ! defined( 'ABSPATH' ) ) die();

function radius_theme_setup_post_type() {

    $labels = array(
        'name'                  => esc_html_x( 'Portfolio', 'Post type general name', 'radius-post-type' ),
        'singular_name'         => esc_html_x( 'Portfolio Item', 'Post type singular name', 'radius-post-type' ),
        'menu_name'             => esc_html_x( 'Portfolio', 'Admin Menu text', 'radius-post-type' ),
        'name_admin_bar'        => esc_html_x( 'Portfolio Item', 'Add New on Toolbar', 'radius-post-type' ),
        'add_new'               => esc_html__( 'Add New', 'radius-post-type' ),
        'add_new_item'          => esc_html__( 'Add New Portfolio Item', 'radius-post-type' ),
        'new_item'              => esc_html__( 'New Portfolio Item', 'radius-post-type' ),
        'edit_item'             => esc_html__( 'Edit Portfolio Item', 'radius-post-type' ),
        'view_item'             => esc_html__( 'View Portfolio Item', 'radius-post-type' ),
        'view_items'            => esc_html__( 'View Portfolio Items', 'radius-post-type' ),
        'all_items'             => esc_html__( 'All Portfolio Items', 'radius-post-type' ),
        'search_items'          => esc_html__( 'Search Portfolio Items', 'radius-post-type' ),
        'parent_item_colon'     => esc_html__( 'Parent Portfolio Items:', 'radius-post-type' ),
        'not_found'             => esc_html__( 'No Portfolio Items found.', 'radius-post-type' ),
        'not_found_in_trash'    => esc_html__( 'No Portfolio Items found in Trash.', 'radius-post-type' ),
        'featured_image'        => esc_html_x( 'Portfolio Item Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'radius-post-type' ),
        'set_featured_image'    => esc_html_x( 'Set portfolio item image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'radius-post-type' ),
        'remove_featured_image' => esc_html_x( 'Remove portfolio item image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'radius-post-type' ),
        'use_featured_image'    => esc_html_x( 'Use as portfolio item image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'radius-post-type' ),
        'archives'              => esc_html_x( 'Portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'radius-post-type' ),
        'insert_into_item'      => esc_html_x( 'Insert into portfolio item', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'radius-post-type' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this portfolio item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'radius-post-type' ),
        'filter_items_list'     => esc_html_x( 'Filter portfolio items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'radius-post-type' ),
        'items_list_navigation' => esc_html_x( 'Portfolio items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'radius-post-type' ),
        'items_list'            => esc_html_x( 'Portfolio items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'radius-post-type' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite' => array( 'slug' => 'portfolio' ),
        'show_in_rest' => true,
    );
    register_post_type('radius_portfolio', $args);
}

add_action('init', 'radius_theme_setup_post_type');
