<div class="wpi-sidebar">
	
	<div class="wpi-sidebar-widget-container shadowed mb-5 p-4">
		<div class="wpi-sidebar-widget">
			<div class="wpi-sidebar-widget">
				<h3 class="mb-2">Widget title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				<div class="text-center">
					<a href="#" class="the-btn the-btn-primary">Link here</a>
				</div>
			</div>
		</div>
	</div>

	<div class="wpi-sidebar-widget-container shadowed mb-5 p-4">
		<div class="wpi-sidebar-widget">
			<h3 class="mb-2">Widget title 2</h3>
			<?php $cats = get_categories(); //print_r($cats); ?>
			<div class="mb-5">
				<ul class="cats">
					<?php foreach ($cats as $k => $v) { ?>
					<li>
						<a href="<?php echo get_term_link($v); ?>">
							<span><?php echo $v->name; ?></span><span>(<?php echo $v->count; ?>)</span>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<a href="#" class="btn btn-default">Link here</a>
		</div>
	</div>

</div>