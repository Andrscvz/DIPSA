<?php foreach ($despacho as $despacho_item): ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>DIPSA</title>
        <meta name="description" content="Learn how to create a fullscreen slideshow for your scrolling website.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <link rel="stylesheet" href="<?php echo base_url()."/css/normalize.css";?>">
        <link rel="stylesheet" href="<?php echo base_url()."/css/main.css";?>">
        <link rel="stylesheet" href="<?php echo base_url()."/css/bootstrap.css";?>">
        <script src="<?php echo base_url()."/js/vendor/modernizr-2.7.1.min.js";?>"></script>
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
                        <li class="dropdown active">
                            <a id="despacho" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Despacho<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="despacho_cuadro1"><a href="#">El arquitecto</a></li>
                                <li id="despacho_cuadro2"><a href="#">Nuestras Ventajas</a></li>
                                <li id="despacho_cuadro3"><a href="#">Testimonios</a></li>
                            </ul>
                        </li>
                        <li id="servicios" class=""><a href="/dipsa/index.php/servicios/servicios">Servicios</a></li>
                        <li id="proyectos" class=""><a href="/dipsa/index.php/proyectos/proyectos">Proyectos</a></li>
                        <li id="contacto" class=""><a href="/dipsa/index.php/contacto/contacto">Contacto</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
		<main>
            <section id="despacho-1" class="homeSlide">
                <div class="bcg" 
                    data-center="background-position: 50% 0px;" 
                    data-top-bottom="background-position: 50% -100px;" 
                    data-anchor-target="#despacho-1">
                    <div class="hsContainer">
                        <div class="hsContent">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="panel-transparent">
                                        <div class="col-sm-6 panel-body">
                                            <h2>
                                                ARQ. RA&Uacute;L E. CAVAZOS
                                            </h2>
                                            <h3 style="color:#F0F0F0;">
                                                <?=$despacho_item['arqTitulo']?>
                                            </h3>
                                            <p>
                                                <?=$despacho_item['arqTexto']?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="despacho-2" class="homeSlide">
                <div class="bcg" 
                    data-center="background-position: 50% 0px;" 
                    data-top-bottom="background-position: 50% -100px;"
                    data-bottom-top="background-position: 50% 100px;"
                    data-anchor-target="#despacho-2">
                    <div class="hsContainer">
                        <div class="hsContent panel-transparent">
                            <div class="container-fluid">
                                <div class="row" >
                                    <div class="panel-body">
                                        <h2>
                                            NUESTRAS VENTAJAS
                                        </h2>
                                        <div class="col-lg-3 col-md-6 col-xs-12">
                                            <h3 style="color:#F0F0F0;">
                                                <?=$despacho_item['ventajasTitulo1']?>
                                            </h3>
                                            <p>
                                                <?=$despacho_item['ventajasTexto1']?>
                                            </p>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-xs-12">
                                            <h3 style="color:#F0F0F0;">
                                                <?=$despacho_item['ventajasTitulo2']?>
                                            </h3>
                                            <p>
                                                <?=$despacho_item['ventajasTexto2']?>
                                            </p>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-xs-12">
                                            <h3 style="color:#F0F0F0;">
                                                <?=$despacho_item['ventajasTitulo3']?>
                                            </h3>
                                            <p>
                                                <?=$despacho_item['ventajasTexto3']?>
                                            </p>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-xs-12">
                                            <h3 style="color:#F0F0F0;">
                                                <?=$despacho_item['ventajasTitulo4']?>
                                            </h3>
                                            <p>
                                                <?=$despacho_item['ventajasTexto4']?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="despacho-3" class="homeSlide">
                <div class="bcg" 
                    data-center="background-position: 0px 50%;" 
                    data-bottom-top="background-position: 0px 40%;" 
                    data-top-bottom="background-position: -50px 50%;"
                    data-anchor-target="#despacho-3">
                    <div class="hsContainer">
                        <div class="hsContent panel-transparent">
                            <div class="container-fluid">
                                <div class="row" >
                                    <div class="panel-body">
                                        <h2>
                                            TESTIMONIOS
                                        </h2>
                                        <div class="col-lg-4 col-md-6 col-xs-12">
                                            <blockquote>
                                                <p>
                                                    "<?=$despacho_item['testimoniosTexto1']?>"
                                                </p>
                                                <p>
                                                    <small  style="color:#F0F0F0;">
                                                        <?=$despacho_item['testimoniosPersona1']?>
                                                    </small>
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12">
                                            <blockquote>
                                                <p>
                                                    "<?=$despacho_item['testimoniosTexto2']?>"
                                                </p>
                                                <p>
                                                    <small  style="color:#F0F0F0;">
                                                        <?=$despacho_item['testimoniosPersona2']?>
                                                    </small>
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-xs-12">
                                            <blockquote>
                                                <p>
                                                    "<?=$despacho_item['testimoniosTexto3']?>"
                                                </p>
                                                <p>
                                                    <small  style="color:#F0F0F0;">
                                                        <?=$despacho_item['testimoniosPersona3']?>
                                                    </small>
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>
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
        <script src="<?php echo base_url()."/js/waypoints.min.js";?>"></script>
        <script src="<?php echo base_url()."/js/imagesloaded.js";?>"></script>
        <script src="<?php echo base_url()."/js/skrollr.js";?>"></script>
        <script src="<?php echo base_url()."/js/_despacho.js";?>"></script>
        <script src="<?php echo base_url()."/js/bootstrap.js";?>"></script>
    </body>
</html>

<?php endforeach ?>