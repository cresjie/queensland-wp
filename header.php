<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">



		<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.min.css"/>

		<!-- Additional stylesheets-->
		<link rel="stylesheet" href="<?=get_template_directory_uri()?>/js/lightslider/css/lightslider.min.css">
		<link rel="stylesheet" href="<?=get_template_directory_uri()?>/js/featherlight/featherlight.min.css">
		<link rel="stylesheet" href="<?=get_template_directory_uri()?>/js/jquery.scrollbar/jquery.scrollbar-rail.min.css">




		
		<script>
			var url = {
				home: '<?=get_site_url()?>'
			}
		</script>
		
		<?php wp_head(); ?>

		<link rel="stylesheet" href="<?=get_template_directory_uri()?>/style.css">

	</head>
	<body <?php body_class(); ?>>
		<style>
			body{
				background-image: url(<?=get_template_directory_uri()?>/images/temp/bg.jpg);
			}
		</style>
		<nav class="navbar main-navbar transparent-black">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>

		            <a class="navbar-brand" href="<?=get_site_url()?>">
		            	<img class="img-responsive" src="<?=get_template_directory_uri()?>/images/logo.png">
		            </a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
		            <?php 
		            	wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'nav navbar-nav navbar-right',
							'container' => 'ul'
						) );
		            ?>
				</div>
					
			</div>
		</nav>

		<div id="main-content">