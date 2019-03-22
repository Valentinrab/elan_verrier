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

//limit words number

// Custom Excerpt function for Advanced Custom Fields
function custom_field_excerpt($toCut) {
	global $post;
	$text = get_field($toCut); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]&gt;', ']]&gt;', $text);
		$excerpt_length = 20; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '...');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}

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

					// function remove_menus(){
					//   remove_menu_page( 'edit.php' );                   //Posts
					//   remove_menu_page( 'edit-comments.php' );          //Comments
					//   remove_menu_page( 'themes.php' );                 //Appearance
					//   remove_menu_page( 'plugins.php' );                //Plugins
					//   remove_menu_page( 'users.php' );                  //Users
					//   remove_menu_page( 'tools.php' );                  //Tools
					//   remove_menu_page( 'options-general.php' );        //Settings
					// }
					// add_action( 'admin_menu', 'remove_menus' );

?>
