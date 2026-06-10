<?php
$title = get_field('steps_title') ?: 'ご利用の流れ';
$bg_color = get_field('steps_bg') ?: 'is-bg-white';
?>

<section class="steps <?php echo esc_attr($bg_color); ?>">
    <div class="steps__inner">
        <h2 class="c-section-title">
            <?php echo esc_html($title); ?>
            <span class="c-section-title__line"></span>
        </h2>

        <?php if( have_rows('steps_list') ): ?>
            <ul class="steps__list">
                <?php 
                $i = 1; // 連番用のカウンターを初期化
                while( have_rows('steps_list') ): the_row(); 
                ?>
                    <li class="steps__item">
                        <div class="steps__number-wrapper">
                            <span class="steps__number"><?php echo $i; ?></span>
                        </div>
                        <div class="steps__content">
                            <h3 class="steps__item-title"><?php the_sub_field('step_title'); ?></h3>
                            <p class="steps__item-text"><?php the_sub_field('step_text'); ?></p>
                        </div>
                    </li>
                <?php 
                $i++; // ループするたびに番号を1つ増やす
                endwhile; 
                ?>
            </ul>
        <?php endif; ?>
    </div>
</section>