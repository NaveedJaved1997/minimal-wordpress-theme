<?php
// 1. Theme Setup (Logos, Title Tags, etc.) - Runs FIRST
function minimal_theme_setup() {
    // Enable Logo Support
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Optional: Let WordPress handle the <title> tag
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'minimal_theme_setup' );

// 2. Load Styles - Runs LATER
function minimal_load_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'minimal_load_styles' );

// 3. Register Sidebar
function minimal_register_sidebars() {
    register_sidebar( array(
        'name'          => 'Main Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Widgets in this area will be shown on all posts and pages.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'minimal_register_sidebars' );
?>