<?php

// Register Custom Post Type
function clarinet_event_post_type() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'clarinet' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'clarinet' ),
		'menu_name'             => __( 'Events', 'clarinet' ),
		'name_admin_bar'        => __( 'Event', 'clarinet' ),
		'archives'              => __( 'Events', 'clarinet' ),
		'attributes'            => __( 'Event Attributes', 'clarinet' ),
		'parent_item_colon'     => __( 'Parent Event:', 'clarinet' ),
		'all_items'             => __( 'All Events', 'clarinet' ),
		'add_new_item'          => __( 'Add New Event', 'clarinet' ),
		'add_new'               => __( 'Add New', 'clarinet' ),
		'new_item'              => __( 'New Event', 'clarinet' ),
		'edit_item'             => __( 'Edit Event', 'clarinet' ),
		'update_item'           => __( 'Update Event', 'clarinet' ),
		'view_item'             => __( 'View Event', 'clarinet' ),
		'view_items'            => __( 'View Events', 'clarinet' ),
		'search_items'          => __( 'Search Event', 'clarinet' ),
		'not_found'             => __( 'No Events Found', 'clarinet' ),
		'not_found_in_trash'    => __( 'No Events Found in Trash', 'clarinet' ),
		'featured_image'        => __( 'Featured Image', 'clarinet' ),
		'set_featured_image'    => __( 'Set featured image', 'clarinet' ),
		'remove_featured_image' => __( 'Remove featured image', 'clarinet' ),
		'use_featured_image'    => __( 'Use as featured image', 'clarinet' ),
		'insert_into_item'      => __( 'Insert into event', 'clarinet' ),
		'uploaded_to_this_item' => __( 'Uploaded to this event', 'clarinet' ),
		'items_list'            => __( 'Events list', 'clarinet' ),
		'items_list_navigation' => __( 'Events list navigation', 'clarinet' ),
		'filter_items_list'     => __( 'Filter events list', 'clarinet' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'clarinet' ),
		'description'           => __( 'Events (Performances and Classes)', 'clarinet' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'clarinet_event_post_type', 0 );