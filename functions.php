<?php 


function theme_styles() {
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
  wp_enqueue_style( 'grayscale', get_template_directory_uri() . '/css/grayscale.css' );
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );


}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

  global $wp_scripts;

  wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false ); 
  wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false ); 

  $wp_scripts->add_data ( 'html5_shiv', 'conditional', 'lt IE 9' );
  $wp_scripts->add_data ( 'respond_js', 'conditional', 'lt IE 9' );

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
  wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array() );
  wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyALR-fKOehBUz5vQTl33w6pAYzSAzT6cjU&sensor=false');

  wp_enqueue_script( 'grayscale', get_template_directory_uri() . '/js/grayscale.js', array() );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_filter( 'show_admin_bar', '__return_false');

add_theme_support ( 'menus' );
add_theme_support ( 'post-thumbnails' );


function register_theme_menus() {
  register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );

function create_widget( $name, $id, $description ) {

  register_sidebar(array(
    'name' => __( $name ),   
    'id' => $id, 
    'description' => __( $description ),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h3>'
  ));

}

create_widget( 'Front Page Info', 'front-info', 'Displays info on the homepage' );

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
create_widget( 'Front Page Gallery', 'front-gallery', 'Displays gallery on homepage' );

create_widget( 'Front Page Contact', 'front-contact', 'Displays contact on the homepage' );
create_widget( 'Front Page About', 'front-about', 'Displays about on the homepage' );

create_widget( 'Page Sidebar', 'page-sidebar', 'Displays sidebar' );
































?>