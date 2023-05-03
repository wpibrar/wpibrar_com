<?php get_header(); ?>

<div class="container content-wrapper my-5">
	<div class="row">
		<div class="col-12 col-md-8">
			<?php
			if( have_posts() ){
				while( have_posts() ){
					the_post();
					get_template_part('template-parts/post-archive', 'item');
				}
			}
			?>
		</div>
		<div class="col-12 col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>