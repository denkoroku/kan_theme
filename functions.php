<?php

function kannon_files(){
    wp_enqueue_script('kannon-js', get_theme_file_uri('/js/scripts-bundled.js', NULL, '1.0', true));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    wp_enqueue_style('kannon_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','kannon_files');

function kannon_features(){
    register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
    register_nav_menu( 'footerLocationOne', 'Footer Menu One' );
    register_nav_menu( 'footerLocationTwo', 'Footer Menu Two' );
    add_theme_support('title-tag');
}
add_action('after_setup_theme','kannon_features');
