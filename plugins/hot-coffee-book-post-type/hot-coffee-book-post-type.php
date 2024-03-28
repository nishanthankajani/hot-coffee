<?php
/** 
* Plugin Name: Hot Coffee-Book-Post-Type
*/


function hot_coffee_register_post_type() {

   $labels = array(

      'name'                     => __( 'Books', 'hot_coffee' ),
      'singular_name'            => __( 'Book', 'hot_coffee' ),
      'add_new'                  => __( 'Add New', 'hot_coffee' ),
      'add_new_item'             => __( 'Add New Book', 'hot_coffee' ),
      'edit_item'                => __( 'Edit Book', 'hot_coffee' ),
      'new_item'                 => __( 'New Book', 'hot_coffee' ),
      'view_item'                => __( 'View Book', 'hot_coffee' ),
      'view_items'               => __( 'View Books', 'hot_coffee' ),
      'search_items'             => __( 'Search Books', 'hot_coffee' ),
      'not_found'                => __( 'No Books found.', 'hot_coffee' ),
      'not_found_in_trash'       => __( 'No Books found in Trash.', 'hot_coffee' ),
      'parent_item_colon'        => __( 'Parent Books:', 'hot_coffee' ),
      'all_items'                => __( 'All Books', 'hot_coffee' ),
      'archives'                 => __( 'Book Archives', 'hot_coffee' ),
      'attributes'               => __( 'Book Attributes', 'hot_coffee' ),
      'insert_into_item'         => __( 'Insert into Book', 'hot_coffee' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Book', 'hot_coffee' ),
      'featured_image'           => __( 'Featured Image', 'hot_coffee' ),
      'set_featured_image'       => __( 'Set featured image', 'hot_coffee' ),
      'remove_featured_image'    => __( 'Remove featured image', 'hot_coffee' ),
      'use_featured_image'       => __( 'Use as featured image', 'hot_coffee' ),
      'menu_name'                => __( 'Books', 'hot_coffee' ),
      'filter_items_list'        => __( 'Filter Book list', 'hot_coffee' ),
      'filter_by_date'           => __( 'Filter by date', 'hot_coffee' ),
      'items_list_navigation'    => __( 'Books list navigation', 'hot_coffee' ),
      'items_list'               => __( 'Books list', 'hot_coffee' ),
      'item_published'           => __( 'Book published.', 'hot_coffee' ),
      'item_published_privately' => __( 'Book published privately.', 'hot_coffee' ),
      'item_reverted_to_draft'   => __( 'Book reverted to draft.', 'hot_coffee' ),
      'item_scheduled'           => __( 'Book scheduled.', 'hot_coffee' ),
      'item_updated'             => __( 'Book updated.', 'hot_coffee' ),
      'item_link'                => __( 'Book Link', 'hot_coffee' ),
      'item_link_description'    => __( 'A link to an book.', 'hot_coffee' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company books', 'hot_coffee' ),
      'public'                => true,
      'hierarchical'          => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => false,
      'show_in_admin_bar'     => false,
      'show_in_rest'          => true,
      'menu_position'         => null,
      'menu_icon'             => 'dashicons-book',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'title', 'editor', 'excerpt',the_post_thumbnail('medium') ),
      'taxonomies'            => array('category'),
      'has_archive'           => false,
      'rewrite'               => array( 'slug' => 'books' ),
      'query_var'             => true,
      'can_export'            => true,
      'delete_with_user'      => false,
      'template'              => array(),
      'template_lock'         => false,

   );
   register_post_type( 'hot_coffee_book', $args );
}

add_action( 'init', 'hot_coffee_register_post_type' );