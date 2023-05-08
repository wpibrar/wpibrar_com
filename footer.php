<footer>
	<div class="container main-footer py-5">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6">
				<h3 class="mb-3">About me</h3>
				<p>With over 8 years of experience as a full-stack WordPress developer, I have a deep understanding of the platform and its capabilities. I am passionate about delivering high-quality, customized solutions that meet the unique needs of my clients. I am available to offer my services to businesses and agencies looking to leverage the power of WordPress.</p>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<h3 class="mb-3">Top Services</h3>
				<ul class="footer-links">
					<li><a href="<?php echo get_the_permalink(41); ?>">Theme development</a></li>
					<li><a href="<?php echo get_the_permalink(50); ?>">Woocommerce development</a></li>
					<li><a href="<?php echo get_the_permalink(49); ?>">Site customization</a></li>
					<li><a href="<?php echo get_the_permalink(45); ?>">Speed optimization</a></li>
				</ul>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<h3 class="mb-3">Pages</h3>
				<ul class="footer-links">
					<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
					<li><a href="<?php echo get_home_url().'/services'; ?>">About</a></li>
					<li><a href="<?php echo get_home_url().'/contact-me'; ?>">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container lower-footer">
		<div class="row">
			<div class="col-12">
				All right reserved.
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>