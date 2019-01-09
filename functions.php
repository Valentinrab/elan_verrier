<?php
// function enregistre_menus() {
// register_nav_menus(
//     array(
//     'navigation-menu' => __( 'Menu de navigation' ),
//     'footer-menu' => __( 'Menu pied de page' )
//     )
// );
// }
// add_action( 'init', 'enregistre_menus' );
add_action('init', 'register_cpt_membre');

function register_cpt_membre()
	{
	$labels = array(
		'name' => _x('Membres', 'membre') ,
		'singular_name' => _x('Membres', 'membre') ,
		'add_new' => _x('Ajouter', 'membre') ,
		'add_new_item' => _x('Ajouter Hotel', 'membre') ,
		'edit_item' => _x('Editer Hotel', 'membre') ,
		'new_item' => _x('Nouveau Hotel', 'membre') ,
		'view_item' => _x('Voir Hotel', 'membre') ,
		'search_items' => _x('Rechercher Membres', 'membre') ,
		'not_found' => _x('Aucun Hotel', 'membre') ,
		'not_found_in_trash' => _x('Aucun Hotel dans la Corbeille', 'membre') ,
		'parent_item_colon' => _x('Parent Hotel:', 'membre') ,
		'menu_name' => _x('Membres', 'membre') ,
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor'
		) ,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-format-quote',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type('membre', $args);
	}

?>
