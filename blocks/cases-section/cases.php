<?php
$bg_color = get_field('cases_bg') ?: 'is-bg-white';
$title    = get_field('cases_title') ?: '導入事例';
$cases    = get_field('cases_list');
$cta_bg   = get_field('cases_cta_bg') ?: 'is-bg-gray';
$cta_title = get_field('cases_cta_title');
$cta_link = get_field('cases_cta_link');
$cta_text = get_field('cases_cta_btn_text');
$cta_url = is_array($cta_link) ? $cta_link['url'] : $cta_link;
?>

<section class="cases <?php echo esc_attr($bg_color); ?>">
    <div class="cases__inner">
        <h2 class="c-section-title">
            <?php echo esc_html($title); ?>
            <span class="c-section-title__line"></span>
        </h2>

        <?php if( have_rows('cases_list') ): ?>
            <div class="cases__list">
                <?php while( have_rows('cases_list') ): the_row(); 
                    $image = get_sub_field('cases_img');
                ?>
                    <article class="cases__item">
                        <div class="cases__img-wrapper">
                            <?php if($image): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr(get_sub_field('cases_company')); ?>" class="cases__img">
                            <?php endif; ?>
                        </div>
                        <div class="cases__info">
                            <?php $company_name = get_sub_field('cases_company'); ?>
                            <p class="cases__company">
                                <?php if($company_name): ?>
                                    <?php echo esc_html($company_name); ?> 様
                                <?php endif; ?>
                            </p>
                            <p class="cases__industry"><?php the_sub_field('cases_industry'); ?></p>
                        </div>
                        <h3 class="cases__item-title"><?php the_sub_field('cases_title'); ?></h3>
                        <p class="cases__item-text"><?php the_sub_field('cases_text'); ?></p>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if($cta_title || $cta_text): ?>
            <div class="cases__cta <?php echo esc_attr($cta_bg); ?>">
                <h3 class="cases__cta-title"><?php echo nl2br(esc_html($cta_title)); ?></h3>
                <div class="cases__cta-btn-wrapper">
                    <a href="<?php echo esc_url($cta_url); ?>" class="cases__btn c-btn">
                        <?php echo esc_html($cta_text); ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>