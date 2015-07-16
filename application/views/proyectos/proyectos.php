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
       	<link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url()."/css/normalize.css";?>">
        <link rel="stylesheet" href="<?php echo base_url()."/css/main.css";?>">
        <link rel="stylesheet" href="<?php echo base_url()."/css/bootstrap.css";?>">
        <script src="<?php echo base_url()."/js/vendor/modernizr-2.7.1.min.js";?>"></script>
        <link rel="stylesheet" href="<?php echo base_url()."/css/lightbox.css";?>">
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
				color: #494A4B;
				font-family: 'Open Sans', sans-serif;
				font-weight: normal;
			}
			.hsContent h3 {
				color: #494A4B;
				text-align: left;
			}
			.hsContent p {
				color: #494A4B;
				text-align: justify;
			}
		</style>
    </head>

    <body>
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
                        <li id="proyectos" class="active"><a href="#">Proyectos</a></li>
        				<li id="contacto" class=""><a href="/dipsa/index.php/contacto/contacto">Contacto</a></li>
        			</ul>
        		</div>
        	</div>
        </nav>
        <main class="proyectos">
	    	<div class="hsContainer">
	    		<div class="hsContent">
		    		<div class="container-fluid" style="margin-top:70px;height:93%;">
		    			<div class="row">
		    				<div class="col-lg-12 col-md-12 col-xs-12" align="center">
				    			<nav class="navbar navbar-default">
						        	<div class="container">
						        		<div id="navbar">
						        			<ul class="nav navbar-nav">
						        				<li id="Todo" class="active" onclick="filtro('Todo')"><a href="#">Todo</a></li>
						        				<li id="Comercial" class="" onclick="filtro('Comercial')"><a href="#">Comercial</a></li>
						        				<li id="Residencial" class="" onclick="filtro('Residencial')"><a href="#">Residencial</a></li>
						        				<li id="Salud" class="" onclick="filtro('Salud')"><a href="#">Salud</a></li>
						        				<li id="Educativo" class="" onclick="filtro('Educativo')"><a href="#">Educativo</a></li>
						        			</ul>
						        		</div>
						        	</div>
						        </nav>
						    </div>
				            <div class="col-lg-4 col-md-6 col-xs-12 thumb residencial" align="center">
				                <div class="panel" style="height:28em;width:25em;">
										<div class="panel-body">
											<a href="<?php echo base_url()."/img/proyectos/1-1.jpg";?>" data-lightbox="img_proy1">
					                   		<img class="img-responsive" src="<?php echo base_url()."/img/proyectos/1-1.jpg";?>" alt="" style="height:18em;width:23em;">
					                		<h3>
							                    Project Name
							                </h3>
							            </a>
							            <a href="<?php echo base_url()."/img/proyectos/1-2.jpg";?>" data-lightbox="img_proy1"></a>
							            <a href="<?php echo base_url()."/img/proyectos/1-3.jpg";?>" data-lightbox="img_proy1"></a>
						                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
					                </div>
					            </div>
				            </div>
				            <div class="col-lg-4 col-md-6 col-xs-12 thumb salud" align="center">
				                <div class="panel panel-default" style="height:28em;width:25em;">
										<div class="panel-body">
											<a href="<?php echo base_url()."/img/proyectos/2-1.jpg";?>" data-lightbox="img_proy2">
					                   		<img class="img-responsive" src="<?php echo base_url()."/img/proyectos/2-1.jpg";?>" alt="" style="height:18em;width:23em;">
					                		<h3>
							                    Project Name
							                </h3>
						                </a>
						                <a href="<?php echo base_url()."/img/proyectos/2-2.jpg";?>" data-lightbox="img_proy2"></a>
							            <a href="<?php echo base_url()."/img/proyectos/2-3.jpg";?>" data-lightbox="img_proy2"></a>
						                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
					                </div>
					            </div>
				            </div>
				            <div class="col-lg-4 col-md-6 col-xs-12 thumb educativo" align="center">
				                <div class="panel panel-default" style="height:28em;width:25em;">
										<div class="panel-body">
				                   		<a href="<?php echo base_url()."/img/proyectos/3-1.jpg";?>" data-lightbox="img_proy3">
					                   		<img class="img-responsive" src="<?php echo base_url()."/img/proyectos/3-1.jpg";?>" alt="" style="height:18em;width:23em;">
					                		<h3>
							                    Project Name
							                </h3>
						                </a>
						                <a href="<?php echo base_url()."/img/proyectos/3-2.jpg";?>" data-lightbox="img_proy3"></a>
							            <a href="<?php echo base_url()."/img/proyectos/3-3.jpg";?>" data-lightbox="img_proy3"></a>
						                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
					                </div>
					            </div>
				            </div>
				            <div class="col-lg-4 col-md-6 col-xs-12 thumb educativo" align="center">
				                <div class="panel panel-default" style="height:28em;width:25em;">
										<div class="panel-body">
				                   		<a href="<?php echo base_url()."/img/proyectos/4-1.jpg";?>" data-lightbox="img_proy4">
					                   		<img class="img-responsive" src="<?php echo base_url()."/img/proyectos/4-1.jpg";?>" alt="" style="height:18em;width:23em;">
					                		<h3>
							                    Project Name
							                </h3>
						                </a>
						                <a href="<?php echo base_url()."/img/proyectos/4-2.jpg";?>" data-lightbox="img_proy4"></a>
							            <a href="<?php echo base_url()."/img/proyectos/4-3.jpg";?>" data-lightbox="img_proy4"></a>
						                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
					                </div>
					            </div>
				            </div>
				        </div>
				    </div>
				</div>
        	</div>
		</main>	
	    <script src="<?php echo base_url()."/js/jquery.min.js";?>"></script>
        <script src="<?php echo base_url()."/js/lightbox-plus-jquery.js";?>"></script>
        <script src="<?php echo base_url()."/js/_proyectos.js";?>"></script>
        <script src="<?php echo base_url()."/js/bootstrap.js";?>"></script>
    </body>
</html>
