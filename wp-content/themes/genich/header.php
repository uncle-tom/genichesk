<head>
<title><?php wp_title(); ?></title>

<!-- Заглавная картинка -->
<?php 
	$args = array(
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
		'uploads'       => true,
		'flex-width'    => true,
		'flex-width'    => true,
		'height'        => 410,
	);
	add_theme_support( 'custom-header', $args )
?>

<meta name=viewport content="width=device-width, initial-scale=1">

<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Counter -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.7.1/countUp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>

<!-- Materialize -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script> -->

<?php wp_head(); ?>
</head>

<?php 
	$args = array(
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
		'uploads'       => true,
		'flex-width'    => true,
		'flex-width'    => true,
		'height'        => 410,
	);
	add_theme_support( 'custom-header', $args )
?>

<div class="welcome-block" style="background-image:url(<?php header_image(); ?>)">

<nav class="first-header navbar navbar-default pc-show">
  <div class="container-fluid">
	  <div class="col-md-12">
	  		<div class="logo">
		    	<li>
		    		<a href="/">Genichesk<span>.</span>Info</a>
		    	</li>
		    </div>
		    <div class="header-menu pull-right">
		    	<li>
		    		<div class="header-button waves-effect waves-light">
							<a href="#">Предложить новость</a>
						</div>
		    	</li>
		    	<li>
		    		<div class="header-button waves-effect waves-light">
							<a href="#">Добавить пансионат</a>
						</div>
		    	</li>
		    </div>
				<div class="mobile-show">
		    	<div class="hamburger-menu" data-activates="slide-out">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
		    </div>
	  </div>
    
  </div><!-- /.container -->
</nav>

</div>
