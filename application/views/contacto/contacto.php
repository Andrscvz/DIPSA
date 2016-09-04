<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>DIPSA</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="<?php echo base_url()."/css/normalize.css";?>">
	<link rel="stylesheet" href="<?php echo base_url()."/css/main.css";?>">
	<link rel="stylesheet" href="<?php echo base_url()."/css/bootstrap.css";?>">
	<script src="<?php echo base_url()."/js/vendor/modernizr-2.7.1.min.js";?>"></script>

	<style type="text/css">
		h1 {
			height: 100%;
			/* The html and body elements cannot have any padding or margin. */
			margin: 0;
			font-size: 14px;
			font-family: 'Open Sans', sans-serif;
			color: #1c1d1e;
			font-size: 32px;
			margin-bottom: 3px;
		}
		h2 {
			color: #1c1d1e;
			font-family: 'Open Sans', sans-serif;
			font-weight: normal;
		}
		h3{
			color: #ffffff;
			font-family: 'Open Sans', sans-serif;
			font-weight: normal;
		}
		body{
			background-image:url('<?php echo base_url()."/img/backgrounds/contacto-1.jpg";?>');
			background-position: center center;
		    background-repeat: no-repeat;
		    background-attachment: fixed;
		    background-size: cover;
		    height: 110%;
		    width: 100%;
		}
	</style>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCc9YX2Ym2rS7usJo4T2jKbFSzDhDypTHo"></script>
	<script>
		var myCenter=new google.maps.LatLng(25.694084,-100.367810);

		function initialize(){
			var mapProp = {
				center:myCenter,
				zoom:16,
				disableDefaultUI:true,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};

			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

			var marker=new google.maps.Marker({
				position:myCenter,
			});

			marker.setMap(map);
		}

		google.maps.event.addDomListener(window, "resize", function() {
		   var center = map.getCenter();
		   google.maps.event.trigger(map, "resize");
		   map.setCenter(center); 
		});

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>

<body class="loading">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/dipsa/">DIPSA</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li id="inicio" class=""><a href="/dipsa/">Inicio</a></li>
    				<li id="despacho" class=""><a href="/dipsa/index.php/despacho/despacho">Despacho</a></li>
    				<li id="servicios" class=""><a href="/dipsa/index.php/servicios/servicios">Servicios</a></li>
                    <li id="proyectos" class=""><a href="/dipsa/index.php/proyectos/proyectos">Proyectos</a></li>
					<li id="contacto" class="active"><a href="#">Contacto</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<main>
		<section id="contacto-1" class="homeSlide">
			<div class="bcg">
			<div class="hsContainer"  style="top:60px;">
				<div class="hsContent panel-transparent">
					<div class="container-fluid">
						<div class="row" >
							<div class="panel-body">
								<h2>CONT&Aacute;CTANOS</h2>
								<div class="col-lg-6 col-md-6 col-xs-12">
									<div class="row">
										<div class="col-xs-12">
											<h3>
												Dirección
											</h3>
											<p>
												Colina Blanca # 449
												Col. San Gerardo 
												Monterrey, N.L, México
												Tel: +52 (81) 8315 1758
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div id="googleMap" style="width:100%;height:380px;"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-12">
									<form action="contacto.html" method="get">
										<div class="form-group">
											<label for="nombre">NOMBRE</label>
											<input name="nombre" type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
										</div>
										<div class="form-group">
											<label for="email">EMAIL</label>
											<input name="email" type="text" class="form-control" id="email" placeholder="Tu email" required>
										</div>
										<div class="form-group">
											<label for="telefono">TEL&Eacute;FONO</label>
											<input name="telefono" type="text" class="form-control" id="telefono" placeholder="Tu tel&eacute;fono" required>
										</div>
										<div class="form-group">
											<label for="mensaje">MENSAJE</label>
											<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Tu mensaje" rows="10" required></textarea>
										</div>
										<button type="submit" class="btn btn-default">Enviar Mensaje</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
	<script src="<?php echo base_url()."/js/jquery.min.js";?>"></script>
    <script src="<?php echo base_url()."/js/imagesloaded.js";?>"></script>
    <script src="<?php echo base_url()."/js/skrollr.js";?>"></script>
    <script src="<?php echo base_url()."/js/_servicios.js";?>"></script>
    <script src="<?php echo base_url()."/js/bootstrap.js";?>"></script>
</body>
</html>