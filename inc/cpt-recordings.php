<?php

// Register Custom Post Type
function clarinet_recordings_post_type() {

	$labels = array(
		'name'                  => _x( 'Recordings', 'Post Type General Name', 'clarinet' ),
		'singular_name'         => _x( 'Recording', 'Post Type Singular Name', 'clarinet' ),
		'menu_name'             => __( 'Recordings', 'clarinet' ),
		'name_admin_bar'        => __( 'Recordings', 'clarinet' ),
		'archives'              => __( 'Recording Archives', 'clarinet' ),
		'attributes'            => __( 'Recording Attributes', 'clarinet' ),
		'parent_item_colon'     => __( 'Parent Recording', 'clarinet' ),
		'all_items'             => __( 'All Recordings', 'clarinet' ),
		'add_new_item'          => __( 'Add New Recording', 'clarinet' ),
		'add_new'               => __( 'Add New', 'clarinet' ),
		'new_item'              => __( 'New Recording', 'clarinet' ),
		'edit_item'             => __( 'Edit Recording', 'clarinet' ),
		'update_item'           => __( 'Update Recording', 'clarinet' ),
		'view_item'             => __( 'View Recording', 'clarinet' ),
		'view_items'            => __( 'View Recordings', 'clarinet' ),
		'search_items'          => __( 'Search Recording', 'clarinet' ),
		'not_found'             => __( 'No Recordings Found', 'clarinet' ),
		'not_found_in_trash'    => __( 'No Recordings Found in Trash', 'clarinet' ),
		'featured_image'        => __( 'Featured Image', 'clarinet' ),
		'set_featured_image'    => __( 'Set featured image', 'clarinet' ),
		'remove_featured_image' => __( 'Remove featured image', 'clarinet' ),
		'use_featured_image'    => __( 'Use as featured image', 'clarinet' ),
		'insert_into_item'      => __( 'Insert into recording', 'clarinet' ),
		'uploaded_to_this_item' => __( 'Uploaded to this recording', 'clarinet' ),
		'items_list'            => __( 'Recordings list', 'clarinet' ),
		'items_list_navigation' => __( 'Recordings list navigation', 'clarinet' ),
		'filter_items_list'     => __( 'Filter recordings list', 'clarinet' ),
	);
	$args = array(
		'label'                 => __( 'Recording', 'clarinet' ),
		'description'           => __( 'Audio and Video', 'clarinet' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-microphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'recordings', $args );

}
add_action( 'init', 'clarinet_recordings_post_type', 0 );