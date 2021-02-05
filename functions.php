<?php

function getScripts() {

    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/main.css', '', 1.00000000003, 'all' );

    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', '', 1, true);
}

add_action( 'wp_enqueue_scripts', 'getScripts');

function smallStafs() {

    add_theme_support( 'title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('widgets');

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'sandrose_v'),
        'social' => __('Social Menu', 'sandrose_v')
    ));
}

add_action( 'after_setup_theme', 'smallStafs' );

function customHeader($wp_customize) {

    $wp_customize->add_section('header', array(
        'title' => __('Header', 'sandrose_v'),
        'description' => sprintf(__('Options for theme colors','sandrose_v')),
        'priority' => 102
    ));

    $wp_customize->add_setting('header-title', array(
        'default' => __('Sandrose', 'sandrose_v'),
        'sanitize_callback' => 'sandrose_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('header-title', array(
        'label' => __('Header title', 'sandrose_v'),
        'settings' => 'header-title',
        'section' => 'header',
        'priority' => 2
    ));

    $wp_customize->add_setting('header-subtitle', array(
        'default' => __('Enjoy and rest your feets on amazing beaches','sandrose_v'),
        'sanitize_callback' => 'sandrose_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('header-subtitle', array(
        'label' => __('Header subtitle', 'sandrose_v'),
        'settings' => 'header-subtitle',
        'section' => 'header',
        'priority' => 2
    ));

    $wp_customize->add_setting('header-btn-text', array(
        'default' => __('Explore','sandrose_v'),
        'sanitize_callback' => 'sandrose_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('header-btn-text', array(
        'label' => __('Button name', 'sandrose_v'),
        'settings' => 'header-btn-text',
        'section' => 'header',
        'priority' => 2
    ));

    $wp_customize->add_setting('header-btn-url', array(
        'default' => __('#latest-posts', 'sandrose_v'),
        'sanitize_callback' => 'sandrose_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('header-btn-url', array(
        'label' => __('Button url', 'sandrose_v'),
        'settings' => 'header-btn-url',
        'section' => 'header',
        'priority' => 2
    ));

    $wp_customize->add_setting('header-background', array(
        'default' => get_template_directory_uri() . './assets/images/stene.jpeg',
        'sanitize_callback' => 'sandrose_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 'header-background', array(
            'label' => __('Header background image', 'sandrose_v'),
            'settings' => 'header-background',
            'section' => 'header',
            'priority' => 1
        ))
    );

}

add_action('customize_register', 'customHeader');

function sandrose_sanitize_text($ar) {
    return sanitize_text_field( $ar );
}

function sandrose_sanitize_url($ar) {
    return esc_url($ar);
}

function sandroseWidgets() {

    register_sidebar( array(
        'name' => __('Custom sidebar', 'sandrose_v'),
        'id' =>  'custom-sidebar-s',
        'before_widget' => '<ul class="main-sidebar__lists">',
        'after_widget' => '</ul>',
        'before_title' => '<h3 class="main-sidebar__header" >',
        'after_title' => '</h3>',
    ));

}

add_action( 'widgets_init', 'sandroseWidgets' );