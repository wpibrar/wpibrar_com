<?php
/**
 * Template Name: Services
 */

$services = new WP_Query(
	array(
		'post_type'      => 'services',
		'posts_per_page' => '-1',
	)
);

get_header(); ?>

<div class="container content-wrapper my-5">
	<div class="row">
		<div class="col-12 col-md-12">
			<?php
			if( $services->have_posts() ){
				while( $services->have_posts() ){
					$services->the_post();
					get_template_part('template-parts/post-archive', 'item');
				}
			}
			?>
		</div>
		<div class="col-12 col-md-4 d-none">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>