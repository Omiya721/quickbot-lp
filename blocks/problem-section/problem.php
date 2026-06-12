<?php
$title = get_field('problem_title') ?: 'こんなお悩みありませんか？';
$items = get_field('problem_items');
$solution_title = get_field('solution_title');
$solution_img = get_field('solution_image');
$cta_link = get_field('cta_link');
$cta_text = get_field('cta_text') ?: '無料で14日間試してみる';
$cta_url = is_array($cta_link) ? $cta_link['url'] : $cta_link;
$list_bg = get_field('problem_list_bg') ?: 'is-bg-white';
$sol_bg = get_field('solution_bg') ?: 'is-bg-gray';
?>

<section class="problem <?php echo esc_attr($list_bg); ?>">
    <div class="problem__inner">
        <h2 class="c-section-title">
            <?php echo esc_html($title); ?>
            <span class="c-section-title__line"></span>
        </h2>

        <?php if($items): ?>
        <div class="problem__list">
            <?php foreach($items as $item): ?>
            <article class="problem__item">
                <div class="problem__img-wrapper">
                    <?php echo wp_get_attachment_image($item['image']['ID'], 'full', false, ['class' => 'problem__img']); ?>
                </div>
                <h3 class="problem__item-title"><?php echo esc_html($item['title']); ?></h3>
                <p class="problem__item-text"><?php echo esc_html($item['text']); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="problem__solution <?php echo esc_attr($sol_bg); ?>">
            <h3 class="problem__solution-title"><?php echo nl2br(esc_html($solution_title)); ?></h3>
            <?php if( !empty($solution_img['ID']) ): ?>
                <div class="problem__solution-img-wrapper">
                    <?php echo wp_get_attachment_image($solution_img['ID'], 'full', false, ['class' => 'problem__solution-img']); ?>
                </div>
            <?php endif; ?>
            <div class="problem__solution-cta">
                <a href="<?php echo esc_url($cta_url); ?>" class="problem__solution-btn c-btn"><?php echo esc_html($cta_text); ?></a>
            </div>
        </div>
    </div>
</section>