<?php foreach ($servicios as $servicios_item): ?>

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
				color: #494A4B;
				font-family: 'Open Sans', sans-serif;
				font-weight: normal;
			}
			body{
				background-image:url('<?php echo base_url()."/img/backgrounds/servicios-1.jpg";?>');
				background-position: center center;
			    background-repeat: no-repeat;
			    background-attachment: fixed;
			    background-size: cover;
			    height: 110%;
			    width: 100%;
			}
		</style>
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
        				<li id="servicios" class="active"><a href="#">Servicios</a></li>
        				<li id="proyectos" class=""><a href="/dipsa/index.php/proyectos/proyectos">Proyectos</a></li>
                        <li id="contacto" class=""><a href="/dipsa/index.php/contacto/contacto">Contacto</a></li>
        			</ul>
        		</div>
        	</div>
        </nav>
        <main>
            <section id="servicios-1" class="homeSlide">
                <div class="bcg" 
                    data-center="background-position: 50% 0px;" 
                    data-top-bottom="background-position: 50% 0px;"
                    data-bottom-top="background-position: 50% 0px;"
                    data-anchor-target="#servicios-1">
                    <div class="hsContainer" style="top:4%;">
                        <div class="hsContent panel-transparent">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="panel-body">
                                        <h2>
                                            SERVICIOS
                                        </h2>
                                        <div class="col-lg-6 col-md-6 col-xs-12">
					                		<h2>
					                			<?=$servicios_item['servicioTitulo1']?>
					                		</h2>
					                		<p>
					                			<?php echo nl2br($servicios_item['servicioTexto1'])?>
					                		</p>
					                    </div>
					                    <div class="col-lg-6 col-md-6 col-xs-12">   
					                    	<h2>
					                			<?=$servicios_item['servicioTitulo2']?>
					                		</h2>
					                		<p>
					                			<?php echo nl2br($servicios_item['servicioTexto2'])?>
					                		</p>
					                    </div>
					                    <div class="col-lg-6 col-md-6 col-xs-12">    
					                    	<h2>
					                			<?=$servicios_item['servicioTitulo3']?>
					                		</h2>
					                		<p>
					                			<?php echo nl2br($servicios_item['servicioTexto3'])?>
					                		</p>
					                    </div>
					                    <div class="col-lg-6 col-md-6 col-xs-12">  
					                    	<h2>
					                			<?=$servicios_item['servicioTitulo4']?>
					                		</h2>
					                		<p>
					                			<?php echo nl2br($servicios_item['servicioTexto4'])?>
					                		</p>
					                    </div>
					                    <div class="col-lg-6 col-md-6 col-xs-12">            
					                    	<h2>
					                			<?=$servicios_item['servicioTitulo5']?>
					                		</h2>
					                		<p>
					                			<?php echo nl2br($servicios_item['servicioTexto5'])?>
					                		</p>
					                    </div>
					                    <div class="col-lg-6 col-md-6 col-xs-12"> 
					                    	<h2>
					                			<?=$servicios_item['servicioTitulo6']?>
					                		</h2>
					                		<p>
					                			<?php echo nl2br($servicios_item['servicioTexto6'])?>
					                		</p>
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


<?php endforeach ?>