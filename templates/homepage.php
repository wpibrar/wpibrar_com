<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

<section class="title-area">
	<div class="container">
		<div class="title-section text-center">
			<h1><?php echo get_the_title(); ?></h1>
			<div class="breadcrumbs-container">
				<ul class="breadcrumbs d-inline-block mt-2">
					<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
					<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
					<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
					<li>Home</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php
if( have_posts() ){
	while( have_posts() ){
		the_post();
		the_content();
	}
}
?>



<section class="py-5">
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-12 col-md-9 col-xl-7">
				Testimonials
			</div>
		</div>
	</div>
</section>


<section class="cream-bg py-5 recent-posts-section">
	<div class="container py-5">
		<div class="row">

			<div class="col-12 col-sm-6 col-md-4 my-3">
				<div class="recent-post white-bg br-11">
					<div class="thumb">
						<?php echo wp_get_attachment_image( 66, 'large' ); ?>
					</div>
					<div class="cont p-3">
						<h3 class="mb-2">Post title here</h3>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 my-3">
				<div class="recent-post white-bg br-11">
					<div class="thumb">
						<?php echo wp_get_attachment_image( 66, 'large' ); ?>
					</div>
					<div class="cont p-3">
						<h3 class="mb-2">Post title here</h3>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 my-3">
				<div class="recent-post white-bg br-11">
					<div class="thumb">
						<?php echo wp_get_attachment_image( 66, 'large' ); ?>
					</div>
					<div class="cont p-3">
						<h3 class="mb-2">Post title here</h3>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 my-3">
				<div class="recent-post white-bg br-11">
					<div class="thumb">
						<?php echo wp_get_attachment_image( 66, 'large' ); ?>
					</div>
					<div class="cont p-3">
						<h3 class="mb-2">Post title here. Post title here Post title here</h3>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 my-3">
				<div class="recent-post white-bg br-11">
					<div class="thumb">
						<?php echo wp_get_attachment_image( 66, 'large' ); ?>
					</div>
					<div class="cont p-3">
						<h3 class="mb-2">Post title here. Post title here Post title here</h3>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 my-3">
				<div class="recent-post white-bg br-11">
					<div class="thumb">
						<?php echo wp_get_attachment_image( 66, 'large' ); ?>
					</div>
					<div class="cont p-3">
						<h3 class="mb-2">Post title here. Post title here Post title here</h3>
					</div>
				</div>
			</div>

			<div class="col-12 text-center mt-5">
				<a href="#" class="the-btn the-btn-primary">Go to blog page</a>
			</div>

		</div>
	</div>
</section>


<?php get_footer(); ?>