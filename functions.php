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

//Membres
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

  //FAQ
  add_action('init', 'register_cpt_question');

  function register_cpt_question()
  	{
  	$labels = array(
  		'name' => _x('Questions', 'question') ,
  		'singular_name' => _x('Questions', 'question') ,
  		'add_new' => _x('Ajouter', 'question') ,
  		'add_new_item' => _x('Ajouter Hotel', 'question') ,
  		'edit_item' => _x('Editer Hotel', 'question') ,
  		'new_item' => _x('Nouveau Hotel', 'question') ,
  		'view_item' => _x('Voir Hotel', 'question') ,
  		'search_items' => _x('Rechercher Questions', 'question') ,
  		'not_found' => _x('Aucun Hotel', 'question') ,
  		'not_found_in_trash' => _x('Aucun Hotel dans la Corbeille', 'question') ,
  		'parent_item_colon' => _x('Parent Hotel:', 'question') ,
  		'menu_name' => _x('Questions', 'question') ,
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
  	register_post_type('question', $args);
  	}

    //EVENEMENTS
    add_action('init', 'register_cpt_evenement');

    function register_cpt_evenement()
    	{
    	$labels = array(
    		'name' => _x('Evenements', 'evenement') ,
    		'singular_name' => _x('Evenements', 'evenement') ,
    		'add_new' => _x('Ajouter', 'evenement') ,
    		'add_new_item' => _x('Ajouter Hotel', 'evenement') ,
    		'edit_item' => _x('Editer Hotel', 'evenement') ,
    		'new_item' => _x('Nouveau Hotel', 'evenement') ,
    		'view_item' => _x('Voir Hotel', 'evenement') ,
    		'search_items' => _x('Rechercher Evenements', 'evenement') ,
    		'not_found' => _x('Aucun Hotel', 'evenement') ,
    		'not_found_in_trash' => _x('Aucun Hotel dans la Corbeille', 'evenement') ,
    		'parent_item_colon' => _x('Parent Hotel:', 'evenement') ,
    		'menu_name' => _x('Evenements', 'evenement') ,
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
    	register_post_type('evenement', $args);
    	}

      //MATERIEL
      add_action('init', 'register_cpt_materiel');

      function register_cpt_materiel()
      	{
      	$labels = array(
      		'name' => _x('Materiel', 'materiel') ,
      		'singular_name' => _x('Materiel', 'materiel') ,
      		'add_new' => _x('Ajouter', 'materiel') ,
      		'add_new_item' => _x('Ajouter Hotel', 'materiel') ,
      		'edit_item' => _x('Editer Hotel', 'materiel') ,
      		'new_item' => _x('Nouveau Hotel', 'materiel') ,
      		'view_item' => _x('Voir Hotel', 'materiel') ,
      		'search_items' => _x('Rechercher Materiel', 'materiel') ,
      		'not_found' => _x('Aucun Hotel', 'materiel') ,
      		'not_found_in_trash' => _x('Aucun Hotel dans la Corbeille', 'materiel') ,
      		'parent_item_colon' => _x('Parent Hotel:', 'materiel') ,
      		'menu_name' => _x('Materiel', 'materiel') ,
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
      	register_post_type('materiel', $args);
      	}

        //Réalisations
        add_action('init', 'register_cpt_realisation');

        function register_cpt_realisation()
        	{
        	$labels = array(
        		'name' => _x('Realisations', 'realisation') ,
        		'singular_name' => _x('Realisations', 'realisation') ,
        		'add_new' => _x('Ajouter', 'realisation') ,
        		'add_new_item' => _x('Ajouter Hotel', 'realisation') ,
        		'edit_item' => _x('Editer Hotel', 'realisation') ,
        		'new_item' => _x('Nouveau Hotel', 'realisation') ,
        		'view_item' => _x('Voir Hotel', 'realisation') ,
        		'search_items' => _x('Rechercher Realisations', 'realisation') ,
        		'not_found' => _x('Aucun Hotel', 'realisation') ,
        		'not_found_in_trash' => _x('Aucun Hotel dans la Corbeille', 'realisation') ,
        		'parent_item_colon' => _x('Parent Hotel:', 'realisation') ,
        		'menu_name' => _x('Realisations', 'realisation') ,
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
        	register_post_type('realisation', $args);
        	}

?>
