<?php

function organi_setup() {

    load_theme_textdomain('organi', get_template_part('/languages'));
    add_theme_support('title-tag');

    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'organi')
    ));
}
add_action('after_setup_theme', 'organi_setup');

function organi_assets() {
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'elegant-icons', get_template_directory_uri() . '/css/elegant-icons.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/css/nice-select.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/js/mixitup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'organi_assets' );