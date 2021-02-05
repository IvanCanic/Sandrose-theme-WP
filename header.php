<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!--Search Icon -->
    <div class="search-icon">&#128269;</div>
    <!-- Search Form -->
    <?php get_search_form(); ?>
    <!-- Navigation -->
    <nav class="menu">
        <div class="menu__logo">
            <a href="#">
                <!--<img class="menu__logo-img" src="assets/images/logo.jpg" alt="slika">-->
                <?php if(function_exists('the_custom_logo')) { the_custom_logo(); } ?>
            </a>
        </div>
        <div class="menu__toggler"><span></span></div>
        
            <?php 
            wp_nav_menu(array(
            'menu'                 => '',
            'container'            => 'ul',
            'container_class'      => '',
            'container_id'         => '',
            'container_aria_label' => '',
            'menu_class'           => 'menu__list',
            'menu_id'              => '',
            'echo'                 => true,
            'fallback_cb'          => 'wp_page_menu',
            'before'               => '',
            'after'                => '',
            'link_before'          => '',
            'link_after'           => '',
            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'item_spacing'         => 'preserve',
            'depth'                => 0,
            'walker'               => '',
            'theme_location'       => 'primary',
            ));
            ?>
        
    </nav>
    <!-- Header -->
    <header 
        class="header" 
        style="background-image: linear-gradient(to right, rgba(114, 175, 224, 0.7), rgba(32, 99, 155, 0.7), rgba(16, 81, 134, 0.7)), url('<?php echo esc_url(get_theme_mod('header-background')); ?>')"; 
        >
        <h1 class="header__title"><?php echo esc_html(get_theme_mod('header-title', 'Sandrose')); ?></h1>
        <p class="header__subtitle"><?php echo esc_html(get_theme_mod('header-subtitle', 'Enjoy and rest your feets on amazing beaches')); ?></p>
        <?php if(get_theme_mod('header-btn-text')) : ?>
        <a href="<?php echo esc_url(get_theme_mod('header-btn-url')); ?>" class="btn btn--primary"><?php echo esc_html(get_theme_mod('header-btn-text', 'Explore')); ?></a>
        <?php endif; ?>
    </header>
    <main class="main">