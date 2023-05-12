<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta id="viewport-tag" name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="aios-starter-theme-child/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php if (has_action('aios_seotools_gtm_body')) {
		do_action('aios_seotools_gtm_body');
	} ?>
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Mobile Header")) : ?><?php endif ?>

	<div id="main-wrapper">


		<?php do_action('aios_landing_page_header'); ?>
		<?php do_action('aios_neighborhoods_header'); ?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

		<header class="header">
			<nav class="navbar navbar-expand">
				<div name="heading" class="container-fluid col-lg-12 col-md-12 col-xs-4" id="navigation-bar" style="height:230px;  text-align:center;">
					<a class="nav-item text-dark" style="font-size: 25px;  font-family: 'Poppins', sans-serif;
" href=" #">P O R T F O L I O</a>
					<ul class="nav navbar-nav navbar-right px-5">
						<li class="nav-item px-2" style="font-size: 16px; font-family: 'Poppins', sans-serif;">
							<a class="nav-link text-dark fw-bold" href="#">Home</a>
						</li>
						<li class="nav-item px-2" style="font-size: 16px; font-family: 'Poppins', sans-serif;">
							<a class="nav-link text-dark fw-bold" href="#">About</a>
						</li>
						<li class="nav-item px-1" style="font-size: 16px; font-family: 'Poppins', sans-serif;">
							<a class="nav-link text-dark fw-bold" href="#">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<h2 class="aios-starter-theme-hide-title">Main Content</h2>

			<!-- ip banner goes here -->
			<?php
			if (!is_home() && !is_page_template('template-homepage.php') && is_custom_field_banner(get_queried_object()) && is_active_sidebar('aios-inner-pages-banner')) {
				dynamic_sidebar('aios-inner-pages-banner');
			}
			?>
			<!-- ip banner goes here -->


			<?php if (!is_home() && !is_page_template('template-fullwidth.php') && !is_page_template('template-homepage.php')) : ?>

				<div id="inner-page-wrapper">
					<div class="container">

					<?php endif ?>