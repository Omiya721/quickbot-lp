<?php
$faq_title = get_field('faq_title') ?: 'よくある質問'; 
$bg_color = get_field('faq_bg') ?: 'is-bg-gray'; 
?>

<section class="faq <?php echo esc_attr($bg_color); ?>">

    <div class="faq__inner">
        <h2 class="c-section-title">
            <?php echo esc_html($faq_title); ?>
            <span class="c-section-title__line"></span>
        </h2>

        <div class="faq__list">

            <?php if (have_rows('faq_list')) : ?>
                <?php while (have_rows('faq_list')) : the_row(); 
                    $question = get_sub_field('faq_question');
                    $answer   = get_sub_field('faq_answer');
                ?>
                    <details class="faq__item js-faq">
                        <summary class="faq__head">
                            <span class="faq__icon-q">Q</span>
                            <h3 class="faq__question"><?php echo esc_html($question); ?></h3>
                            <span class="faq__arrow"></span>
                        </summary>
                        <div class="faq__body">
                            <div class="faq__body-inner">
                                <div class="faq__answer">
                                    <?php echo wpautop(esc_html($answer)); ?>
                                </div>
                            </div>
                        </div>
                    </details>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>

</section>