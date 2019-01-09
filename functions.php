<?php
function enregistre_menus() {
register_nav_menus(
    array(
    'navigation-menu' => __( 'Menu de navigation' ),
    'footer-menu' => __( 'Menu pied de page' )
    )
);
}
add_action( 'init', 'enregistre_menus' );
add_action('init', 'register_cpt_hotel');
function register_cpt_hotel()
	{
	$labels = array(
		'name' => _x('Panda', 'hotel') ,
		'singular_name' => _x('Hotels', 'hotel') ,
		'add_new' => _x('Ajouter', 'hotel') ,
		'add_new_item' => _x('Ajouter Hotel', 'hotel') ,
		'edit_item' => _x('Editer Hotel', 'hotel') ,
		'new_item' => _x('Nouveau Hotel', 'hotel') ,
		'view_item' => _x('Voir Hotel', 'hotel') ,
		'search_items' => _x('Rechercher Hotels', 'hotel') ,
		'not_found' => _x('Aucun Hotel', 'hotel') ,
		'not_found_in_trash' => _x('Aucun Hotel dans la Corbeille', 'hotel') ,
		'parent_item_colon' => _x('Parent Hotel:', 'hotel') ,
		'menu_name' => _x('Hotels', 'hotel') ,
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
	register_post_type('hotel', $args);
	}

?>
