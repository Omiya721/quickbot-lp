<?php
$title = get_field('features_title') ?: '特徴';
$bg_color = get_field('features_bg_color') ?: 'is-bg-white'; 
$items = get_field('features_items');
$cta_title = get_field('cta_title');
$cta_link = get_field('cta_link');
$cta_text = get_field('cta_text') ?: 'お問い合わせ';
?>

<section class="features <?php echo esc_attr($bg_color); ?>">
    <div class="features__inner">
        <h2 class="c-section-title">
            <?php echo esc_html($title); ?>
            <span class="c-section-title__line"></span>
        </h2>

        <?php if($items): ?>
        <div class="features__list">
            <?php foreach($items as $item): ?>
            <article class="features__item">
                <div class="features__icon-wrapper">
                    <?php echo wp_get_attachment_image($item['icon']['ID'], 'full', false, ['class' => 'features__icon']); ?>
                </div>
                <h3 class="features__item-title"><?php echo esc_html($item['title']); ?></h3>
                <p class="features__item-text"><?php echo esc_html($item['text']); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="features__cta">
            <h3 class="features__cta-title"><?php echo nl2br(esc_html($cta_title)); ?></h3>
            <div class="features__cta-btn-wrapper">
                <a href="<?php echo esc_url($cta_link); ?>" class="features__btn c-btn"><?php echo esc_html($cta_text); ?></a>
            </div>
        </div>
    </div>
</section>