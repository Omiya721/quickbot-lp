<?php

//基本設定
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


//CSS・JS読み込み
function my_theme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
add_action('enqueue_block_editor_assets', 'my_theme_enqueue_scripts');


//ヘッダー設定（カスタマイザー）
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


//blocksフォルダ内のすべてのblock.jsonを確実に自動登録
function register_all_acf_blocks_secure() {
    $blocks_dir = get_template_directory() . '/blocks';

    if ( ! is_dir( $blocks_dir ) ) {
        return;
    }

    // すべての「block.json」のパスを取得する
    $block_json_files = glob( $blocks_dir . '/*/block.json' );

    if ( ! empty( $block_json_files ) && is_array( $block_json_files ) ) {
        foreach ( $block_json_files as $file_path ) {
            $block_dir_path = dirname( $file_path );
            register_block_type( $block_dir_path );
        }
    }
}
add_action( 'init', 'register_all_acf_blocks_secure' );
