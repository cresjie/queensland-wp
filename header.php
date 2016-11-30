<html>
	<head>
		<meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title>VICTORIA COURT Official Site – Feel the Distinction : Home</title>

       

       <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.min.css"/>

       <!-- Additional stylesheets-->
       <link rel="stylesheet" href="<?=get_template_directory_uri()?>/js/lightslider/css/lightslider.min.css">
       <link rel="stylesheet" href="<?=get_template_directory_uri()?>/js/featherlight/featherlight.min.css">
       <link rel="stylesheet" href="<?=get_template_directory_uri()?>/js/jquery.scrollbar/jquery.scrollbar-rail.min.css">



       

       <script src="<?=get_template_directory_uri()?>/js/jquery/jquery-3.1.1.min.js"></script>
       <script src="<?=get_template_directory_uri()?>/js/bootstrap.min.js"></script>

       <script src="<?=get_template_directory_uri()?>/js/contentjs/room-view.js"></script>

       <!-- Addition scripts-->
       <script>
       		var url = {
       			home: '<?=get_site_url()?>'
       		}
       </script>

       <script src="<?=get_template_directory_uri()?>/js/lightslider/js/lightslider.min.js"></script>
       <script src="<?=get_template_directory_uri()?>/js/featherlight/featherlight.min.js"></script>
       <script src="<?=get_template_directory_uri()?>/js/jquery.scrollbar/jquery.scrollbar.min.js"></script>

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

		            <a class="navbar-brand" href="#">
		            	<img class="img-responsive" src="<?=get_template_directory_uri()?>/images/logo.png">
		            </a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
		              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
		              <li><a href="../navbar-static-top/">Static top</a></li>
		              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
		            </ul>
				</div>
					
			</div>
		</nav>

		<div id="main-content">