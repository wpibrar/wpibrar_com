<!DOCTYPE html>
<html>
<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5T267Z6');</script>
	<!-- End Google Tag Manager -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&display=swap" rel="stylesheet">

	<?php echo wp_head(); ?>
	
	<style>
/*		font-family: 'Montserrat', sans-serif;*/
		/*Regular 400
		SemiBold 600
		ExtraBold 800
		Black 900*/
	</style>
	
</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T267Z6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header id="wpi-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-7 col-sm-3">
				<a href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wpibrar-logo.svg" width="175" height="32" alt="WP Ibrar" />
				</a>
			</div>
			<div class="col d-none d-sm-block">
				<div class="menu-wrapper">
					<ul class="nav">
						<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
						<li><a href="<?php echo get_home_url().'/services'; ?>">Services</a></li>
						<li><a href="<?php echo get_home_url().'/contact-me'; ?>">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-5 col-sm-9 d-block d-sm-none">berger</div>
		</div>
	</div>
</header>

