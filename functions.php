<?php

function my_theme_setup() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'css/style.css' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-layout-dimensions', array(
        'contentSize' => '840px',
        'wideSize'    => '1280px',
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


function my_theme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


// ヘッダー設定（カスタマイザー）
function my_theme_customize_register($wp_customize) {
    $wp_customize->add_section('header_settings', array(
        'title' => 'ヘッダー設定',
        'priority' => 30,
    ));
    $wp_customize->add_setting('header_btn_text', array('default' => 'お問い合わせ'));
    $wp_customize->add_control('header_btn_text', array(
        'label' => 'ボタンの文字',
        'section' => 'header_settings',
        'type' => 'text',
    ));
}
add_action('customize_register', 'my_theme_customize_register');


// ACFカスタムブロックの登録
function register_acf_blocks() {
    $block_path = get_template_directory() . '/blocks/hero-section';

    if ( file_exists( $block_path ) ) {
        register_block_type( $block_path );
    }
}
add_action( 'init', 'register_acf_blocks' );
