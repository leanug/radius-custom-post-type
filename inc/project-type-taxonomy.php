<?php

function radius_post_type_register_project_type_tax() {
    $labels = [
        'name'              => esc_html_x('Project Type', 'taxonomy general name', 'radius-post-type'),
		'singular_name'     => esc_html_x('Project Type', 'taxonomy singular name', 'radius-post-type'),
		'search_items'      => esc_html__('Search Project Types', 'radius-post-type'),
		'all_items'         => esc_html__('All Project Types', 'radius-post-type'),
		'parent_item'       => esc_html__('Parent Project Type', 'radius-post-type'),
		'parent_item_colon' => esc_html__('Parent Project Type:', 'radius-post-type'),
		'edit_item'         => esc_html__('Edit Project Type', 'radius-post-type'),
		'update_item'       => esc_html__('Update Project Type', 'radius-post-type'),
		'add_new_item'      => esc_html__('Add New Project Type', 'radius-post-type'),
		'new_item_name'     => esc_html__('New Project Type Name', 'radius-post-type'),
		'menu_name'         => esc_html__('Project Types', 'radius-post-type'),
    ];
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'project_type'),
        'show_in_rest' => true
    );
    register_taxonomy('radius_project_type', ['radius_portfolio'], $args);
}

add_action('init', 'radius_post_type_register_project_type_tax');