<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonials-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$heading = get_field('heading');
$text = get_field('text');

// $testimonials = get_field('services_page_link');

?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <?php if( have_rows('testimonials') ){ ?>
            <div class="col-12 col-md-10 col-lg-9 col-xl-8 testi-slider">
                <?php while( have_rows('testimonials') ){ the_row(); ?>
                <div class="slide">
                    <div class="testi-text text-center">
                        <p><?php the_sub_field('text'); ?></p>
                    </div>
                    <div class="testi-meta text-center">
                        <span class="testi-author d-block mb-1"><?php the_sub_field('author'); ?></span>
                        <span class="testi-country d-block"><em><?php the_sub_field('country'); ?></em></span>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri().'/img/quotes.svg'; ?>" class="quotes-img" />
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>