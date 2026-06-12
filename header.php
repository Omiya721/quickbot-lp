<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body>

        <header class="header">

            <div class="header__inner">
                <h1 class="header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">QuickBot.</a>
                </h1>

                <div class="header__info">
                    <a href="<?php echo esc_url(get_theme_mod('header_btn_url', '#contact')); ?>" class="header__btn c-btn">
                        <?php echo esc_html(get_theme_mod('header_btn_text', 'お問い合わせ')); ?>
                    </a>
                </div>
            </div>

        </header>