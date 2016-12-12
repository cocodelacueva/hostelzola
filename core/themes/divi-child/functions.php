<?php
/**
 * sobreescribe post type 'project'
 * lo renombra como habitaciones
 * para que quede más prolijo pero
 * mantiene la funcionalidad normal
 * esto funciona, el problema es que 
 * no funciona más el builder del theme


function et_pb_register_posttypes() {
	$labels = array(
		'name'               => esc_html__( 'Rooms', 'et_builder' ),
		'singular_name'      => esc_html__( 'Project', 'et_builder' ),
		'add_new'            => esc_html__( 'Add New', 'et_builder' ),
		'add_new_item'       => esc_html__( 'Add New Room', 'et_builder' ),
		'edit_item'          => esc_html__( 'Edit Room', 'et_builder' ),
		'new_item'           => esc_html__( 'New Room', 'et_builder' ),
		'all_items'          => esc_html__( 'All Rooms', 'et_builder' ),
		'view_item'          => esc_html__( 'View Rooms', 'et_builder' ),
		'search_items'       => esc_html__( 'Search Rooms', 'et_builder' ),
		'not_found'          => esc_html__( 'Nothing found', 'et_builder' ),
		'not_found_in_trash' => esc_html__( 'Nothing found in Trash', 'et_builder' ),
		'parent_item_colon'  => '',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'can_export'         => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'has_archive'        => true,
		'rewrite'            => apply_filters( 'et_project_posttype_rewrite_args', array(
			'feeds'      => true,
			'slug'       => 'room',
			'with_front' => false,
		) ),
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions', 'custom-fields' ),
	);

	register_post_type( 'room', apply_filters( 'et_project_posttype_args', $args ) );

	$labels = array(
		'name'              => esc_html__( 'Room Categories', 'et_builder' ),
		'singular_name'     => esc_html__( 'Room Category', 'et_builder' ),
		'search_items'      => esc_html__( 'Search Categories', 'et_builder' ),
		'all_items'         => esc_html__( 'All Categories', 'et_builder' ),
		'parent_item'       => esc_html__( 'Parent Category', 'et_builder' ),
		'parent_item_colon' => esc_html__( 'Parent Category:', 'et_builder' ),
		'edit_item'         => esc_html__( 'Edit Category', 'et_builder' ),
		'update_item'       => esc_html__( 'Update Category', 'et_builder' ),
		'add_new_item'      => esc_html__( 'Add New Category', 'et_builder' ),
		'new_item_name'     => esc_html__( 'New Category Name', 'et_builder' ),
		'menu_name'         => esc_html__( 'Categories', 'et_builder' ),
	);

	register_taxonomy( 'project_category', array( 'Room' ), array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	) );

	$labels = array(
		'name'              => esc_html__( 'Room Tags', 'et_builder' ),
		'singular_name'     => esc_html__( 'Room Tag', 'et_builder' ),
		'search_items'      => esc_html__( 'Search Tags', 'et_builder' ),
		'all_items'         => esc_html__( 'All Tags', 'et_builder' ),
		'parent_item'       => esc_html__( 'Parent Tag', 'et_builder' ),
		'parent_item_colon' => esc_html__( 'Parent Tag:', 'et_builder' ),
		'edit_item'         => esc_html__( 'Edit Tag', 'et_builder' ),
		'update_item'       => esc_html__( 'Update Tag', 'et_builder' ),
		'add_new_item'      => esc_html__( 'Add New Tag', 'et_builder' ),
		'new_item_name'     => esc_html__( 'New Tag Name', 'et_builder' ),
		'menu_name'         => esc_html__( 'Tags', 'et_builder' ),
	);

	register_taxonomy( 'project_tag', array( 'Room' ), array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	) );
} */