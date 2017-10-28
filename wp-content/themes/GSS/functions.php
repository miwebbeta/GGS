<?php 

    function registrar_estilos(){
        //nos aseguramos que no estamos en administracion
        if (!is_admin()){
           
             wp_register_style(
                'bootstrap', get_template_directory_uri(). '/css/bootstrap-3.3.7/css/bootstrap.css'
                );
            //Cargamos estilo
            wp_enqueue_style('bootstrap');
             wp_register_style(
                'estilo', get_template_directory_uri(). '/style.css'
                );
            //Cargamos estilo
            wp_enqueue_style('estilo');
            
        }
    }
    add_action("wp_enqueue_scripts", "registrar_estilos");

    //Cargar js
    

    function registrar_scripts(){
        if (!is_admin()){
            
            //jQuery
             wp_register_script(
                'jQuery',
                get_bloginfo('template_directory') .'/js/jquery-3.2.1.min.js', 
                array(),'3.2.1',true);
            wp_enqueue_script(
                'jQuery');         
            
            //Modernizer

           wp_register_script(
                'Modernizr',
                get_bloginfo('template_directory') .'/js/modernizr.js', 
                array(),'3.3.1',true);
            wp_enqueue_script(
                'Modernizr');         

       
             //Menu
            wp_register_script(
                'Menu',
                get_bloginfo('template_directory') .'/js/menu.js', 
                array(),'3.3.1',true);
            wp_enqueue_script(
                'Menu');   
        };
    }
    add_action('wp_enqueue_scripts', 'registrar_scripts');

// Remove scripts from head.
function move_scripts_from_head_to_footer() {
    remove_action( 'wp_head', 'wp_print_scripts' );
    remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
    remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
 
    add_action( 'wp_footer', 'wp_print_scripts', 5);
    add_action( 'wp_footer', 'wp_enqueue_scripts', 5);
    add_action( 'wp_footer', 'wp_print_head_scripts', 5);
}
add_action('wp_enqueue_scripts', 'move_scripts_from_head_to_footer');

// Registrar menus

function registrarMenu(){
        register_nav_menus(array(
        'Menu-Top'  =>__( 'Menu Top'),
            'Idioma'=>__( 'idioma') 
     ));     
}
add_action('init', 'registrarMenu');

//Tamaño imagenes
/* Definir nuevos tamaños de imágenes */  
if ( function_exists( 'add_image_size' ) ) {  
    add_image_size('img_Single', 661, 500, true);  
    add_image_size('img_Single_Centro', 383, 500, true);  
}

add_filter('image_size_names_choose', 'hmuda_image_sizes');  
function hmuda_image_sizes($sizes) {  
    $addsizes = array(  
        "img_Single" => __( "Imagenes 1 y 3 de Plantilla Single"),  
        "img_Single_Centro" => __("Imagen central de Plantilla Single")  
    );  
    $newsizes = array_merge($sizes, $addsizes);  
    return $newsizes;  
}
?>