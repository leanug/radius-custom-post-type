<?php

function radius_post_type_register_project_type_category() {
    $labels = [
        'name'              => esc_html_x('Project Category', 'taxonomy general name', 'radius-post-type'),
		'singular_name'     => esc_html_x('Project Category', 'taxonomy singular name', 'radius-post-type'),
		'search_items'      => esc_html__('Search Project Categories', 'radius-post-type'),
		'all_items'         => esc_html__('All Project Categories', 'radius-post-type'),
		'parent_item'       => esc_html__('Parent Project Category', 'radius-post-type'),
		'parent_item_colon' => esc_html__('Parent Project Type:', 'radius-post-type'),
		'edit_item'         => esc_html__('Edit Project Category', 'radius-post-type'),
		'update_item'       => esc_html__('Update Project Category', 'radius-post-type'),
		'add_new_item'      => esc_html__('Add New Project Category', 'radius-post-type'),
		'new_item_name'     => esc_html__('New Project Category Name', 'radius-post-type'),
		'menu_name'         => esc_html__('Project Categories', 'radius-post-type'),
    ];
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'project_category'),
        'show_in_rest' => true
    );
    register_taxonomy('radius_project_category', ['radius_portfolio'], $args);
}

add_action('init', 'radius_post_type_register_project_type_category');