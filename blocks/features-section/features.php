<?php
$title = get_field('features_title') ?: '特徴';
$bg_color = get_field('features_bg') ?: 'is-bg-white'; 
$items = get_field('features_items');
$cta_bg = get_field('cta-bg') ?: 'is-bg-gray';
$cta_title = get_field('cta_title');
$cta_link = get_field('cta_link');
$cta_url = is_array($cta_link) ? $cta_link['url'] : $cta_link;
$cta_text = get_field('cta_text');
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
                    <?php 
                        if (!empty($item['icon'])): 
                            $icon_url = is_array($item['icon']) ? $item['icon']['url'] : $item['icon'];
                    ?>
                        <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($item['title']); ?>" class="features__icon">
                    <?php endif; ?>
                </div>
                <h3 class="features__item-title"><?php echo esc_html($item['title']); ?></h3>
                <p class="features__item-text"><?php echo esc_html($item['text']); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if($cta_title || $cta_text): ?>
            <div class="features__cta <?php echo esc_attr($cta_bg); ?>">
                <h3 class="features__cta-title"><?php echo nl2br(esc_html($cta_title)); ?></h3>
                <div class="features__cta-btn-wrapper">
                    <a href="<?php echo esc_url($cta_url); ?>" class="features__btn c-btn"><?php echo esc_html($cta_text); ?></a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>