<?php
/*
  Plugin Name: WP Custom Post Type
  Description: This is a simple plugin for purpose of learning about wordpress CPT
  Version: 1.0.0
  Author: Online Web Tutor
 */

add_action('init', 'wpl_owt_cpt_register_movies');

function wpl_owt_cpt_register_movies() {
    $labels = array(
        'name' => __('Movies'),
        'singular_name' => __('Movie'),
        'menu_name' => __('Movies'),
        'name_admin_bar' => __('Movie'),
        'add_new' => __('Add New'),
        'add_new_item' => __('Add New Movies'),
        'new_item' => __('New Movie'),
        'edit_item' => __('Edit Movie'),
        'view_item' => __('View Movie'),
        'all_items' => __('All Movies'),
        'search_items' => __('Search Movies'),
        'parent_item_colon' => __('Parent Movies:'),
        'not_found' => __('No movies found.'),
        'not_found_in_trash' => __('No movies found in Trash.')
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'book'),
        'capability_type' => 'movie',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('movie', $args);
}

