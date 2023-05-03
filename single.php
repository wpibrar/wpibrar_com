<?php get_header(); ?>

<div class="container content-wrapper my-5">
	<div class="row">
		<div class="col-12 col-md-12">
			<?php
			if( have_posts() ){
				while( have_posts() ){
					the_post();

					$id = get_the_ID();
					$title = get_the_title();
					$link  = get_the_permalink();

					$cats = wp_get_post_categories($id, array('fields' => 'all'));

					?>

						<div class="single-post-item mb-5">

							<h1 class="single-post-title mb-4"><?php echo $title; ?></h1>
							<div class="single-post-content">
								<?php the_content(); ?>
							</div>
							<div>
								<?php
									if($cats){
										foreach($cats as $k => $v){
											?>
											<a href="<?php echo get_category_link($v); ?>" class="the-btn the-btn-primary"><?php echo $v->name; ?></a>
											<?php
										}
									}
								?>
							</div>

							<div class="comments-wrapper mt-5">
							<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>
							</div>

						</div>

					<?php 
				}
			}
			?>
            
            <div class="wpi-sidebar-widget-container shadowed mb-5 p-4">
				<div class="wpi-sidebar-widget">
					<div class="wpi-sidebar-widget">
						<h3 class="mb-2">Hire me for <?php echo get_the_title(); ?></h3>
						<p>As a full-stack WordPress developer with over 8 years of experience, I have honed my skills in custom theme and plugin development, website design, and website maintenance. My focus is always on delivering solutions that meet the needs of my clients and exceed their expectations. I am excited to offer my services to businesses and agencies looking to enhance their online presence with WordPress.</p>
						<div class="text-center">
							<a href="<?php echo get_the_permalink(55); ?>" class="the-btn the-btn-primary">Hire Me</a>
						</div>
					</div>
				</div>
			</div>
            
		</div>
		<div class="col-12 col-md-4 d-none">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>