<?php

get_header();


/**/

$sidebar = 'left';


?>

<div class="container- content-wrapper my-5">
	<div class="row-">
		<div class="col-12-">
			<?php
			if( have_posts() ){
				while( have_posts() ){
					the_post();
					?>
					<div class="content-wrapper">
						<?php the_content(); ?>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>