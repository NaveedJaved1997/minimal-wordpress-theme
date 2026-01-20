<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="header-content">
        <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo">
                <?php the_custom_logo(); ?>
            </div>
        <?php endif; ?>

        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <p><?php bloginfo( 'description' ); ?></p>
        
        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu', // Must match the ID in functions.php
                'menu_id'        => 'primary-menu',
                'container'      => false,          // Removes the extra <div> wrapper
                'fallback_cb'    => false,          // Don't show a list of pages if no menu is assigned
            ) );
            ?>
        </nav>
    </div>
</header>
<div id="content">