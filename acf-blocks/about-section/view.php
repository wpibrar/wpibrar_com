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
$class_name = 'about-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$img_id = get_field('image');
$heading = get_field('heading');
$text = get_field('text');

?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
	<div class="container py-5">
		<div class="row">
			<div class="col-12 about-card">
				<div class="row align-items-center">
					<div class="col-12 col-md-6 text-center">
						<?php echo wp_get_attachment_image( $img_id, 'large' ); ?>
					</div>
					<div class="col-12 col-md-6 ps-md-5">
						<h2 class="mb-2 section-heading"><?php echo $heading; ?></h2>
						<?php echo $text; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>