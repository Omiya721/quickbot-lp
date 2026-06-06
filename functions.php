<?php

//CSS・JS読み込み
function my_theme_enqueue_scripts() {
    // CSSの読み込み
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0');
    
    // JSの読み込み
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

//ヘッダー設定
function my_theme_customize_register($wp_customize) {
    $wp_customize->add_section('header_settings', array(
        'title' => 'ヘッダー設定',
        'priority' => 30,
    ));
    // ボタンの文字
    $wp_customize->add_setting('header_btn_text', array('default' => 'お問い合わせ'));
    $wp_customize->add_control('header_btn_text', array(
        'label' => 'ボタンの文字',
        'section' => 'header_settings',
        'type' => 'text',
    ));
}
add_action('customize_register', 'my_theme_customize_register');

//ブロックエディタ対応
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    $block_path = get_template_directory() . '/blocks/hero-section';

    if ( file_exists( $block_path ) ) {
        register_block_type( $block_path );
    }
}