<?php
// Register Custom Post Type
function cursos_post_type() {

    $labels = array(
        'name'                  => _x( 'Cursos', 'Post Type General Name', 'cursos_post_types' ),
        'singular_name'         => _x( 'Curso', 'Post Type Singular Name', 'cursos_post_types' ),
        'menu_name'             => __( 'Cursos', 'cursos_post_types' ),
        'name_admin_bar'        => __( 'Cursos', 'cursos_post_types' ),
        'archives'              => __( 'Item Archives', 'cursos_post_types' ),
        'attributes'            => __( 'Item Attributes', 'cursos_post_types' ),
        'parent_item_colon'     => __( 'Parent Item:', 'cursos_post_types' ),
        'all_items'             => __( 'All Items', 'cursos_post_types' ),
        'add_new_item'          => __( 'Add New Item', 'cursos_post_types' ),
        'add_new'               => __( 'Add New', 'cursos_post_types' ),
        'new_item'              => __( 'New Item', 'cursos_post_types' ),
        'edit_item'             => __( 'Edit Item', 'cursos_post_types' ),
        'update_item'           => __( 'Update Item', 'cursos_post_types' ),
        'view_item'             => __( 'View Item', 'cursos_post_types' ),
        'view_items'            => __( 'View Items', 'cursos_post_types' ),
        'search_items'          => __( 'Search Item', 'cursos_post_types' ),
        'not_found'             => __( 'Not found', 'cursos_post_types' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'cursos_post_types' ),
        'featured_image'        => __( 'Featured Image', 'cursos_post_types' ),
        'set_featured_image'    => __( 'Set featured image', 'cursos_post_types' ),
        'remove_featured_image' => __( 'Remove featured image', 'cursos_post_types' ),
        'use_featured_image'    => __( 'Use as featured image', 'cursos_post_types' ),
        'insert_into_item'      => __( 'Insert into item', 'cursos_post_types' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'cursos_post_types' ),
        'items_list'            => __( 'Items list', 'cursos_post_types' ),
        'items_list_navigation' => __( 'Items list navigation', 'cursos_post_types' ),
        'filter_items_list'     => __( 'Filter items list', 'cursos_post_types' ),
    );
    $rewrite = array(
        'slug'                  => 'cursos',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Curso', 'cursos_post_types' ),
        'description'           => __( 'Post Type Description', 'cursos_post_types' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'post-formats', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
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
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'cursos', $args );

}
add_action( 'init', 'cursos_post_type', 0 );