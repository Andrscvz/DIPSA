
<?php foreach ($inicio as $inicio_item): ?>
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
		</style>
    </head>

    <body class="loading">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
       	 

        <nav class="navbar navbar-default navbar-fixed-top">
        	<div class="container">
        		<div class="navbar-header">
        			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        			</button>
        			<a class="navbar-brand" href="#" onclick="activar('inicio')">DIPSA</a>
        		</div>
        		<div id="navbar" class="navbar-collapse collapse">
        			<ul class="nav navbar-nav">
						<li class="dropdown active">
							<a id="inicio" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inicio<span class="caret"></span></a>
							<ul class="dropdown-menu">
		        				<li id="inicio_cuadro1"><a href="#">Bienvenido</a></li>
		        				<li id="inicio_cuadro2"><a href="#">¿Qui&eacute;nes somos?</a></li>
		        				<li id="inicio_cuadro3"><a href="#">Misi&oacute;n, Visi&oacute;n, y Valores</a></li>
		        				<li id="inicio_cuadro4"><a href="#">&Uacute;ltimos Proyectos</a></li>
							</ul>
						</li>
						<li id="despacho" class=""><a href="/dipsa/index.php/despacho/despacho">Despacho</a></li>
        				<li id="servicios" class=""><a href="/dipsa/index.php/servicios/servicios">Servicios</a></li>
                        <li id="proyectos" class=""><a href="/dipsa/index.php/proyectos/proyectos">Proyectos</a></li>
        				<li id="contacto" class=""><a href="/dipsa/index.php/contacto/contacto">Contacto</a></li>
        			</ul>
        		</div><!--/.nav-collapse -->
        	</div>
        </nav>

       	<main>
	        <section id="inicio-1" class="homeSlide">
	        	<div class="bcg" 
					data-center="background-position: 50% 0px;" 
					data-top-bottom="background-position: 50% -100px;" 
					data-anchor-target="#inicio-1">
		        	<div class="hsContainer">
			    		<div class="hsContent">
				    		<h2><?=$inicio_item['bienvenidaHeading']?></h2>
				    		<h3><?=$inicio_item['bienvenidaSubHeading']?></h3>
			    		</div>
		        	</div>
	        	</div>
		    </section>
		    
		    <section id="inicio-2" class="homeSlide">
				<div class="bcg" 
					data-center="background-position: 50% 0px;" 
					data-top-bottom="background-position: 50% -100px;"
					data-bottom-top="background-position: 50% 100px;"
					data-anchor-target="#inicio-2">
					<div class="hsContainer">
						<div class="hsContent panel-transparent">
							<div class="container-fluid">
								<div class="row panel-body">
									<h2>¿QUI&Eacute;NES SOMOS?</h2>
									<div class="col-sm-5">
										<img class="img-responsive img-rounded" src="./img/quiensomos.jpg" style="margin-bottom: 12px;" width="100%" height="100%">
									</div>
									<div class="col-sm-7">
										<h3 style="color:#F0F0F0;"><?=$inicio_item['quienesTitulo']?></h3>
										<p>
											<?=$inicio_item['quienesTexto']?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="inicio-3" class="homeSlide">
				<div class="bcg" 
					data-center="background-position: 0px 50%;" 
					data-bottom-top="background-position: 0px 40%;" 
					data-top-bottom="background-position: -100px 50%;"
					data-anchor-target="#inicio-3">
					<div class="hsContainer">
						<div class="hsContent panel-transparent">
							<div class="container-fluid">
								<div class="row">
									<div class="col-sm-6 panel-body">
										<h2>
											MISI&Oacute;N
										</h2>
										<p>
											<?=$inicio_item['mision']?>
										</p>
									</div>
									<div class="col-sm-6">
									</div>
								</div>
							</div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-sm-6">
									</div>
									<div class="col-sm-6  panel-body">
										<h2>
											VISI&Oacute;N
										</h2>
										<p>
											<?=$inicio_item['vision']?>
										</p>
									</div>
								</div>
							</div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-sm-6  panel-body">
										<h2>
											VALORES
										</h2>
										<p>
											<?=$inicio_item['valores']?>
										</p>
									</div>
									<div class="col-sm-6">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		    
		    <section id="inicio-4" class="homeSlide">
		    	<div class="bcg" 
					data-0="background-color:rgb(255,255,255);" 
					data--250-top="background-color:(0,0,0);"  
					data-anchor-target="#inicio-4">
			    	<div class="hsContainer">
			    		<div class="hsContent">
				    		<h2>&Uacute;LTIMOS PROYECTOS</h2>
				    		<h3><?=$inicio_item['ultimosProyectosSubHeading']?></h3>
				    		<br>
				    		<div class="container-fluid">
								<div class="row">
									<a href="./views/proyectos.html" data-lightbox="img_proy1">
										<div class="col-lg-2 col-md-3 col-xs-6" align="center">
											<img class="img-responsive" src="./img/proyectos/ultimosProyectos/1.jpg" class="img-circle" style="margin-bottom: 12px;">
											<p>
												<?=$inicio_item['ultimosProyectos1']?>
											</p>
										</div>
										<div class="col-lg-2 col-md-3 col-xs-6" align="center">
											<img class="img-responsive" src="./img/proyectos/ultimosProyectos/2.jpg" class="img-circle" style="margin-bottom: 12px;">
											<p>
												<?=$inicio_item['ultimosProyectos2']?>
											</p>
										</div>
										<div class="col-lg-2 col-md-3 col-xs-6" align="center">      
											<img class="img-responsive" src="./img/proyectos/ultimosProyectos/3.jpg" class="img-circle" style="margin-bottom: 12px;">
											<p>
												<?=$inicio_item['ultimosProyectos3']?>
											</p>
										</div>
										<div class="col-lg-2 col-md-3 col-xs-6" align="center">      
											<img class="img-responsive" src="./img/proyectos/ultimosProyectos/4.jpg" class="img-circle" style="margin-bottom: 12px;">
											<p>
												<?=$inicio_item['ultimosProyectos4']?>
											</p>
										</div>
										<div class="col-lg-2 col-md-3 col-xs-6" align="center">
											<img class="img-responsive" src="./img/proyectos/ultimosProyectos/5.jpg" class="img-circle" style="margin-bottom: 12px;">
											<p>
												<?=$inicio_item['ultimosProyectos5']?>
											</p>
										</div>
										<div class="col-lg-2 col-md-3 col-xs-6" align="center">
											<img class="img-responsive" src="./img/proyectos/ultimosProyectos/6.jpg" class="img-circle" style="margin-bottom: 12px;">
											<p>
												<?=$inicio_item['ultimosProyectos6']?>
											</p>
										</div>
									</a>
								</div>
							</div>
			    		</div>
		        	</div>
		    	</div>
		    </section>

			
		    <div id="progress" 
       	 		data-start="width:0%;" 
       	 		data-end="width:100%;"></div>

		</main>

        <script src="<?php echo base_url()."/js/jquery.min.js";?>"></script>
        <script src="<?php echo base_url()."/js/menu.js";?>"></script>
        <script src="<?php echo base_url()."/js/waypoints.min.js";?>"></script>
        <script src="<?php echo base_url()."/js/imagesloaded.js";?>"></script>
        <script src="<?php echo base_url()."/js/skrollr.js";?>"></script>
        <script src="<?php echo base_url()."/js/_inicio.js";?>"></script>
        <script src="<?php echo base_url()."/js/bootstrap.js";?>"></script>
    </body>
</html>

<?php endforeach ?>
