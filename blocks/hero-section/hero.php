<?php
/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 */

$image         = get_field('hero_image');
$is_image_left = get_field('hero_image_left') ?: false;
$bg_color      = get_field('hero_bg_color') ?: 'gray';
$title         = get_field('hero_title');
$text          = get_field('hero_text');
$btn_text      = get_field('hero_btn_text');
$btn_link      = get_field('hero_btn_link');

$class_name = 'hero';

if ( $bg_color === 'white' ) {
    $class_name .= ' hero--bg-white';
} else {
    $class_name .= ' hero--bg-gray';
}

if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if( empty($image) ) {
    $class_name .= ' hero--center';
} elseif( $is_image_left ) {
    $class_name .= ' hero--image-left';
} else {
    $class_name .= ' hero--image-right';
}

$block_id = ! empty( $block['anchor'] ) ? $block['anchor'] : '';
?>

<section class="<?php echo esc_attr( $class_name ); ?>" <?php echo $block_id ? 'id="' . esc_attr( $block_id ) . '"' : ''; ?>>
    <div class="hero__inner">
        
        <?php if ( ! empty( $image ) && is_array( $image ) && ! empty( $image['url'] ) ): ?>
            <div class="hero__image">
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ?? '' ); ?>">
            </div>
        <?php endif; ?>

        <div class="hero__body">
            <?php if ( ! empty( $title ) ): ?>
                <h2 class="hero__title"><?php echo nl2br( esc_html( $title ) ); ?></h2>
            <?php endif; ?>

            <?php if ( ! empty( $text ) ): ?>
                <p class="hero__text"><?php echo nl2br( esc_html( $text ) ); ?></p>
            <?php endif; ?>
            
            <?php if ( ! empty( $btn_link ) && is_array( $btn_link ) && ! empty( $btn_link['url'] ) && ! empty( $btn_text ) ): ?>
                <div class="hero__cta">
                    <a href="<?php echo esc_url( $btn_link['url'] ); ?>" class="hero__btn c-btn" target="<?php echo esc_attr( $btn_link['target'] ?? '_self' ); ?>">
                        <?php echo esc_html( $btn_text ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>