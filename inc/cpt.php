<?php
add_action( 'init', 'register_gallerys', 10 );

function register_gallerys() {
  register_post_type( "gallery", array (
    'labels' => 
    array (
      'name' => 'gallerys',
      'singular_name' => 'gallery',
      'add_new' => 'Ajouter',
      'add_new_item' => 'Ajouter une gallery',
      'edit_item' => 'Modifier la gallery',
      'new_item' => 'Nouvelle entrée',
      'view_item' => 'Voir la gallery',
      'search_items' => 'Chercher une entrée',
      'not_found' => 'Aucune entrée trouvée',
      'not_found_in_trash' => 'Aucune entrée trouvée dans la corbeille',
      'parent_item_colon' => 'Entrée parente:',
    ),
    'description' => '',
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'map_meta_cap' => true,
    'capability_type' => 'post',
    'public' => true,
    'hierarchical' => false,
    'rewrite' => 
    array (
      'slug' => 'gallery',
      'with_front' => true,
      'pages' => true,
      'feeds' => 'gallerys',
    ),
    'has_archive' => 'gallerys',
    'query_var' => 'gallery',
    'supports' => 
    array (
      0 => 'title',
      1 => 'editor',
      2 => 'thumbnail',
    ),
    'taxonomies' => 
    array (
    ),
    'show_ui' => true,
    'menu_position' => 30,
    'menu_icon' => false,
    'can_export' => true,
    'show_in_nav_menus' => true,
    'show_in_menu' => true,
  ) );
}