<?php

function clear_theme_styles() {
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );

    if( is_page_template( 'template/main-template.php' ) ) {
        wp_enqueue_style('main-template', get_template_directory_uri() . '/assets/css/template/main-template.css', ['stylesheet']);
    }
}
add_action( 'wp_enqueue_scripts', 'clear_theme_styles' );

function clear_theme_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/global.js', [], false, true);
}
add_action( 'wp_enqueue_scripts', 'clear_theme_scripts' );
