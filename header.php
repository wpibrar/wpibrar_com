<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&display=swap" rel="stylesheet">

	<?php echo wp_head(); ?>
	
	<style>
/*		font-family: 'Montserrat', sans-serif;*/
	</style>
	
</head>
<body <?php body_class(); ?>>

<header id="wpi-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-7 col-sm-3">
				<a href="<?php echo get_home_url(); ?>">
					<h1>WPIbrar</h1>
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

