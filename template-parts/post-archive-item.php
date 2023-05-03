<?php
$id = get_the_ID();
$title = get_the_title();
$excerpt = get_the_excerpt();
$link  = get_the_permalink();

$cats = wp_get_post_categories($id, array('fields' => 'all'));

?>

	<div class="archive-post-item mb-4 shadowed p-4">
		<a href="<?php echo $link; ?>" class="archive-item-title">
			<h2 class=""><?php echo $title; ?></h2>
		</a>
		<div class="archive-post-item-excerpt">
			<p><?php echo $excerpt; ?></p>
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
	</div>