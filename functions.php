<?php
// 1. Theme Setup (Logos, Title Tags, etc.) - Runs FIRST
function minimal_theme_setup() {
    // 1. Enable Logo Support
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // 2. Enable Title Tag
    add_theme_support( 'title-tag' );

    // 3. Enable Featured Images
    add_theme_support( 'post-thumbnails' );

    // 4. Register Navigation Menu
    register_nav_menus( array(
        'primary-menu' => 'Main Header Menu',
    ) );
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

/* =========================================
   4. Theme Customizer (Color Options)
   ========================================= */

function minimal_customize_register( $wp_customize ) {

    // 1. Primary Color Setting (Header & Footer)
    $wp_customize->add_setting( 'primary_color', array(
        'default'   => '#2c3e50', // Default Dark Blue
        'transport' => 'refresh', // Refresh the page to see changes
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'    => __( 'Primary Theme Color', 'minimal-theme' ),
        'section'  => 'colors', // Adds it to the existing "Colors" section
        'settings' => 'primary_color',
    ) ) );

    // 2. Accent Color Setting (Links & Buttons)
    $wp_customize->add_setting( 'accent_color', array(
        'default'   => '#3498db', // Default Bright Blue
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
        'label'    => __( 'Accent Color', 'minimal-theme' ),
        'section'  => 'colors',
        'settings' => 'accent_color',
    ) ) );

}
add_action( 'customize_register', 'minimal_customize_register' );


/* =========================================
   5. Output Custom CSS
   ========================================= */

function minimal_customizer_css() {
    // Get the user's choices (or use defaults if none set)
    $primary = get_theme_mod( 'primary_color', '#2c3e50' );
    $accent  = get_theme_mod( 'accent_color', '#3498db' );
    ?>
    <style type="text/css">
        :root {
            --primary: <?php echo esc_attr( $primary ); ?>;
            --accent:  <?php echo esc_attr( $accent ); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'minimal_customizer_css' );
?>