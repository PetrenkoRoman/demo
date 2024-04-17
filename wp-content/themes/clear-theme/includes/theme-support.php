<?php
function clear_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    register_nav_menus(
        array(
            'Main Menu'    => esc_html__( 'Primary', 'clear-theme' ),
        )
    );
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'clear_theme_setup' );