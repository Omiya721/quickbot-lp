
<?php get_header(); ?>

    <main>

        <?php
        // 投稿や固定ページの内容を表示するメインループ
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; endif;
        ?>

        <!--お問い合わせフォーム ここから-->
        <section id="contact" class="contact">
            <div class="contact__inner">

                <?php 
                    $show_form = get_field('show_contact_form'); 
                    if ( $show_form === null ) {
                        $show_form = true;
                    }
                ?>

                <?php if ( $show_form ) : ?>
                    <h2 class="c-section-title">
                        お問い合わせ
                        <span class="c-section-title__line"></span>
                    </h2>

                    <?php echo do_shortcode('[contact-form-7 id="d9597bf" title="Contact form 1"]'); ?>
                <?php endif; ?>

            </div>
        </section>
        
    </main>

<?php get_footer(); ?>