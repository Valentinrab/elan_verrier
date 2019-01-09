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
		'add_new_item' => _x('Ajouter Membre', 'membre') ,
		'edit_item' => _x('Editer Membre', 'membre') ,
		'new_item' => _x('Nouveau Membre', 'membre') ,
		'view_item' => _x('Voir Membre', 'membre') ,
		'search_items' => _x('Rechercher Membres', 'membre') ,
		'not_found' => _x('Aucun Membre', 'membre') ,
		'not_found_in_trash' => _x('Aucun Membre dans la Corbeille', 'membre') ,
		'parent_item_colon' => _x('Parent Membre:', 'membre') ,
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
  		'add_new_item' => _x('Ajouter Question', 'question') ,
  		'edit_item' => _x('Editer Question', 'question') ,
  		'new_item' => _x('Nouveau Question', 'question') ,
  		'view_item' => _x('Voir Question', 'question') ,
  		'search_items' => _x('Rechercher Questions', 'question') ,
  		'not_found' => _x('Aucun Question', 'question') ,
  		'not_found_in_trash' => _x('Aucun Question dans la Corbeille', 'question') ,
  		'parent_item_colon' => _x('Parent Question:', 'question') ,
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
    		'add_new_item' => _x('Ajouter Evenement', 'evenement') ,
    		'edit_item' => _x('Editer Evenement', 'evenement') ,
    		'new_item' => _x('Nouveau Evenement', 'evenement') ,
    		'view_item' => _x('Voir Evenement', 'evenement') ,
    		'search_items' => _x('Rechercher Evenements', 'evenement') ,
    		'not_found' => _x('Aucun Evenement', 'evenement') ,
    		'not_found_in_trash' => _x('Aucun Evenement dans la Corbeille', 'evenement') ,
    		'parent_item_colon' => _x('Parent Evenement:', 'evenement') ,
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
      		'add_new_item' => _x('Ajouter Materiel', 'materiel') ,
      		'edit_item' => _x('Editer Materiel', 'materiel') ,
      		'new_item' => _x('Nouveau Materiel', 'materiel') ,
      		'view_item' => _x('Voir Materiel', 'materiel') ,
      		'search_items' => _x('Rechercher Materiel', 'materiel') ,
      		'not_found' => _x('Aucun Materiel', 'materiel') ,
      		'not_found_in_trash' => _x('Aucun Materiel dans la Corbeille', 'materiel') ,
      		'parent_item_colon' => _x('Parent Materiel:', 'materiel') ,
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
        		'add_new_item' => _x('Ajouter Realisation', 'realisation') ,
        		'edit_item' => _x('Editer Realisation', 'realisation') ,
        		'new_item' => _x('Nouveau Realisation', 'realisation') ,
        		'view_item' => _x('Voir Realisation', 'realisation') ,
        		'search_items' => _x('Rechercher Realisations', 'realisation') ,
        		'not_found' => _x('Aucun Realisation', 'realisation') ,
        		'not_found_in_trash' => _x('Aucun Realisation dans la Corbeille', 'realisation') ,
        		'parent_item_colon' => _x('Parent Realisation:', 'realisation') ,
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
