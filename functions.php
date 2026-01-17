<?php
function minimal_theme_setup() {
    // 1. Load the style.css file
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'minimal_theme_setup' );

function minimal_register_sidebars() {
    // 2. Register a Sidebar for widgets
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