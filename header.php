<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollw" />
		<?php endif; ?>
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
		<!-- style -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/stylesheets/screen.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-3.1.1.min.css" >
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/designfly.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet">

		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-3.7.0.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/respond-1.4.2.js"></script>
		<![endif]-->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
		<?php wp_head() ?>
	</head>
	<body <?php body_class()?> >

		<header id="main-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 headerMatch">
						<!-- LOGO -->
						<div id="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a></div>
					</div>
					<div class="col-md-6 headerMatch">
						<div class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav ">
								
								 <?php wp_nav_menu(array(
						'name' => 'Menu Główne',
						'menu_class'   =>  'nav navbar-nav'
					));
					?>  
								
								</ul>
							</div>
						</div>
						
					</div>
				</div>

			</div>
		</header>
		


	