<?php
// ACFで設定した値を取得
$image = get_field('hero_image');
$title = get_field('hero_title');
$text  = get_field('hero_text');
$btn_text = get_field('hero_btn_text');
$btn_link = get_field('hero_btn_link');
?>

<section class="hero">
    <div class="hero__inner">
        <div class="hero__image">
            <?php if($image): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        </div>

        <div class="hero__body">
            <h2 class="hero__title"><?php echo nl2br(esc_html($title)); ?></h2>
            <p class="hero__text"><?php echo nl2br(esc_html($text)); ?></p>
            <div class="hero__cta">
                <a href="<?php echo esc_url($btn_link['url']); ?>" class="hero__btn c-btn">
                    <?php echo esc_html($btn_text); ?>
                </a>
            </div>
        </div>
    </div>
</section>