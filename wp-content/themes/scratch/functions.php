<?php

    if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'jpreLoader', get_template_directory_uri() . '/js/jpreLoader.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-knob', get_template_directory_uri() . '/js/jquery.knob.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-slideto', get_template_directory_uri() . '/js/jquery.slideto.v1.1.js', array(), '1.0.0', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


register_nav_menus( array(
	'static-menu' => 'Static Homepage Menu',
	'floating-menu' => 'Floating Menu'
) );


?>