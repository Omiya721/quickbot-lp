<?php

//CSS・JS読み込み
function my_theme_enqueue_scripts() {
    // CSSの読み込み
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0');
    
    // JSの読み込み
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');