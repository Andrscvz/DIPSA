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

						        				<?php foreach ($categorias as $categorias_item): ?>
						        				<li id="<?=$categorias_item['categoria']?>" class="" onclick="filtro('<?=$categorias_item['categoria']?>')"><a href="#"><?=$categorias_item['categoria']?></a></li>
							        			<?php endforeach ?>

						        			</ul>
						        		</div>
						        	</div>
						        </nav>
						    </div>
						    <?php foreach ($proyectos as $proyectos_item): ?>
				            <div class="col-lg-4 col-md-6 col-xs-12 thumb <?=$proyectos_item['categoria']?>" align="center">
				                <div class="panel" style="height:28em;width:25em;">
										<div class="panel-body">
											<a href="<?php echo base_url()."/img/proyectos/".$proyectos_item['numero']."-1.jpg";?>" data-lightbox="img_proy<?=$proyectos_item['numero']?>">
					                   		<img class="img-responsive" src="<?php echo base_url()."/img/proyectos/".$proyectos_item['numero']."-1.jpg";?>" alt="" style="height:18em;width:23em;">
					                		<h3>
							                    <?=$proyectos_item['proyectoTitulo']?>
							                </h3>
							            </a>
							            <a href="<?php echo base_url()."/img/proyectos/".$proyectos_item['numero']."-2.jpg";?>" data-lightbox="img_proy<?=$proyectos_item['numero']?>"></a>
							            <a href="<?php echo base_url()."/img/proyectos/".$proyectos_item['numero']."-3.jpg";?>" data-lightbox="img_proy<?=$proyectos_item['numero']?>"></a>
						                <p><?=$proyectos_item['proyectoTexto']?></p>
					                </div>
					            </div>
				            </div>
				            <?php endforeach ?>
				        </div>
				    </div>
				</div>
        	</div>
		</main>	
	    <script src="<?php echo base_url()."/js/jquery.min.js";?>"></script>
        <script src="<?php echo base_url()."/js/lightbox-plus-jquery.js";?>"></script>
        <script src="<?php echo base_url()."/js/bootstrap.js";?>"></script>

        <script type="text/javascript">

			function filtro(tipo){
				document.getElementById("Todo").className = "";
				
				<?php foreach ($categorias as $categorias_item): ?>
			   		document.getElementById("<?=$categorias_item['categoria']?>").className = "";
			    <?php endforeach ?>

			    document.getElementById(tipo).className = "active";
			}

			$("#Todo").click(function(){
				<?php foreach ($categorias as $categorias_item): ?>
					$(".<?=$categorias_item['categoria']?>").show();
    			<?php endforeach ?>
			});


<?php 
			foreach ($categorias as $categorias_itemX): 
				
				$x = $categorias_itemX['categoria'];

				echo "$(\"#".$categorias_itemX['categoria']."\").click(function(){";

					foreach ($categorias as $categorias_itemY): 

						if( $x == $categorias_itemY['categoria']){
						
							echo "$(\".".$categorias_itemY['categoria']."\").show();";
						}else{
						
							echo "$(\".".$categorias_itemY['categoria']."\").hide();";
						}
	    			
	    			endforeach;

				echo ";});";

			endforeach 
?>

		</script>
    </body>
</html>
