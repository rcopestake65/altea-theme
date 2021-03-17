<?php
function load_stylesheets()
{

    
    wp_register_style('styles', get_template_directory_uri() . '/styles/styles.css', array(), false, 'all');
    wp_enqueue_style('styles');

    wp_register_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css' );
    wp_enqueue_style('font_awesome');

    wp_register_style( 'source sans pro', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;1,400;1,600&display=swap' );
    wp_enqueue_style('source sans pro');

    
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjs()
{
    wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', null, null, false );
    wp_enqueue_script('jQuery');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', '', null, true);
    wp_enqueue_script('main');

}
add_action('wp_enqueue_scripts', 'loadjs');

// add page slug as class to body
function add_slug_body_class( $classes ) {
    global $post;
 if ( isset( $post ) ) {
    $classes[] = $post->post_name;
 }
 return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );

//init menu
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

//ad close btn to mobile menu  
  function add_last_nav_item($items) {
    return $items .= '<li class="menu-close-btn"><i class="far fa-times-circle fa-2x"></i></li>';
  }
  add_filter('wp_nav_menu_items','add_last_nav_item');