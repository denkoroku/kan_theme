<?php

function kannon_files(){

    wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    wp_enqueue_style('kannon_main_styles', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','kannon_files');

?>