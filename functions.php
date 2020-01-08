<?php



/* Copiado del parent theme, sin las partes que hasta el momento no necesito */
/* Comparar con functions.pho del parent theme para ver cuales */
if ( ! function_exists( 'cafecoders_child_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cafecoders_child_setup() {
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
            // el menu-1 está en el parent theme, aquí en el child-theme me creo uno nuevo
			'menu-2' => esc_html__( 'Main menu cafecoders-child', 'cafecoders-child' ),
		) );
	


		/**
		 * Add support for core custom logo.
		 * Personalizar > Identidad del Sitio
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250, //dimensiones sugeridas en Personalizar > Identidad del Sitio > Seleccionar el logotipo
			'width'       => 250, //dimensiones sugeridas en Personalizar > Identidad del Sitio > Seleccionar el logotipo
			'flex-width'  => true,
			'flex-height' => true,
		) );
		

		
	}
endif;
add_action( 'after_setup_theme', 'cafecoders_child_setup' );


// Esta funcion añade la clase "nav__item" a los li del menu (menu-2)
function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'menu-2') {
      $classes[] = 'nav__item';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);




// Habilitar Wordpress para para subir a Medios files de tipo SVG
// con esto no hace falta instalar plugins
  function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
	}
	add_filter('upload_mimes', 'add_file_types_to_uploads');






function my_theme_enqueue_styles() {

 $parent_style = 'cafecoders-parent-style'; // Estos son los estilos del tema padre recogidos por el tema hijo.

 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,400i,700&display=swap', false );
 wp_enqueue_style( 'load-font-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
 
 wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'cafecoders-child-style', get_stylesheet_directory_uri() . '/dist/styles/style.min.css', array( $parent_style ), wp_get_theme()->get('Version'));


 wp_enqueue_script('jquery');
 wp_enqueue_script( 'personal-scripts', get_stylesheet_directory_uri() . '/dist/js/javascript.min.js', array( 'jquery' ), '1.0', false );


}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );








/**
 * CHANGE CLASSES
 * 
 * In the the_custom_logo(); output
 * custom-logo-link se convierte en > nav__logo
 */
function helpwp_custom_logo_output( $html ) {
	$html = str_replace('custom-logo-link', 'nav__logo', $html );
	return $html;
}
add_filter('get_custom_logo', 'helpwp_custom_logo_output', 10);



// Wordpress agrega en atuomatico la clase "home" al body
// Aquí como robarsela!
add_filter('body_class', function (array $classes) {
    if (in_array('home', $classes)) {
      unset( $classes[array_search('home', $classes)] );
    }
  return $classes;
});



// // Agregar la clase "active" a "current-menu-item"
// add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// function special_nav_class ($classes, $item) {
//     if (in_array('current-menu-item', $classes) ){
//         $classes[] = 'active ';
//     }
//     return $classes;
// }