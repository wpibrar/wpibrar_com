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
$heading = get_field('heading');
$text = get_field('text');

$services_link = get_field('services_page_link');

?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">	
	<div class="container py-5">

		<div class="row justify-content-center py-4">
			
			<div class="col-12 col-md-9 col-lg-7 text-center">
				<h2 class="section-heading mb-4"><?php echo $heading; ?></h2>
				<?php echo $text; ?>
			</div>
		
		</div>
		
		<?php if( have_rows('services') ){ ?>
		<div class="row">
			<?php
			while( have_rows('services') ){
				the_row();

				$link = get_sub_field('link');

				?>
				<div class="col-12 col-sm-6 col-md-4 sevice-box mb-4">
					<div>
						<h3 class="mb-3"><?php the_sub_field('title'); ?></h3>
						<p><?php the_sub_field('text'); ?></p>
						<div class="read-more-link">
							<a href="<?php echo $link_url; ?>"><?php echo $link['title']; ?></a>
						</div>
					</div>
				</div>
				<?php
			}
			?>

			<?php print_r(get_sub_field('link')); ?>

			<div class="col-12 text-center pt-5">
				<a href="<?php echo $services_link['url']; ?>" class="the-btn the-btn-primary"><?php echo $services_link['title']; ?></a>
			</div>

		</div>
		<?php } ?>

	</div>
</section>