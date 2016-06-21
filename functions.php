<?php
/*Funciones para cargar estilo y scripts */
function cargar_css_del_tema(){

  wp_enqueue_style("bootstrap", get_stylesheet_directory_uri()."/css/bootstrap.min.css");
     wp_enqueue_style("style", get_stylesheet_directory_uri()."/css/style.css");
}

 function cargar_js_del_tema(){
   wp_enqueue_script("jquery", get_stylesheet_directory_uri()."/js/jquery.js");
   wp_enqueue_script("bootstrap", get_stylesheet_directory_uri()."/js/bootstrap.min.js");

}
add_action("wp_enqueue_scripts","cargar_js_del_tema");
 add_action("wp_enqueue_scripts","cargar_css_del_tema");

/* ***FIN***Funciones para cargar estilo y scripts */


//Funcionaiento de Bootsrap en Wordpreesss

// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
    add_theme_support("menus");
    add_theme_support("post-thumbnails");

    function registrar_mis_menus(){
      register_nav_menus(array(

        'menu_cabecera' => 'Menu en Cabecera'

      ));
    }
    add_action('init','registrar_mis_menus');

 /*?>
No se cierran los .php en wordpress */
  add_filter('body_class','add_body_class');
  function add_body_class($classes)
  {
    global $post;
    if (isset($post)) {
      $classes[]= $post->post_name;
    }
    return $classes;
  }
  add_filter('body_class', 'add_body_class');

// Register Custom Post Type
function crear_eventos() {

	$labels = array(
		'name'                  => _x( 'Eventos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Evento', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Evento', 'text_domain' ),
		'name_admin_bar'        => __( 'Eventos', 'text_domain' ),
		'parent_item_colon'     => __( 'Evento superior', 'text_domain' ),
		'all_items'             => __( 'Todos los eventos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar', 'text_domain' ),
		'add_new'               => __( 'Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Actualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'No se encuentra', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encuentra', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'evento', 'text_domain' ),
		'description'           => __( 'Eventos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title','editor', 'thumbnail','custom-fields' ),
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
		'capability_type'       => 'page',
	);
	register_post_type( 'eventos', $args );

}
add_action( 'init', 'crear_eventos', 0 );



// Register Custom Taxonomy
function crear_tipo_de_evento() {

	$labels = array(
		'name'                       => _x( 'Tipos de Eventos', 'Tipos de Eventos', 'text_domain' ),
		'singular_name'              => _x( 'Tipo de Evento', 'Tipo de Evento', 'text_domain' ),
		'menu_name'                  => __( 'Tipo de Evento', 'text_domain' ),
		'all_items'                  => __( 'Todos', 'text_domain' ),
		'parent_item'                => __( 'Superior', 'text_domain' ),
		'parent_item_colon'          => __( 'Superior', 'text_domain' ),
		'new_item_name'              => __( 'Nuevo', 'text_domain' ),
		'add_new_item'               => __( 'Nuevo', 'text_domain' ),
		'edit_item'                  => __( 'Editar', 'text_domain' ),
		'update_item'                => __( 'Actualizar', 'text_domain' ),
		'view_item'                  => __( 'Ver', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar por comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Modificar', 'text_domain' ),
		'choose_from_most_used'      => __( 'Elegir de los mas usados', 'text_domain' ),
		'popular_items'              => __( 'Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar', 'text_domain' ),
		'not_found'                  => __( 'No se ha encotrado', 'text_domain' ),

	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'tipo_de_evento', array( 'eventos' ), $args );

}
add_action( 'init', 'crear_tipo_de_evento', 0 );
