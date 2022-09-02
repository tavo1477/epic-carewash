<?php 

$ruta = ControladorRuta::ctrRuta();

?>

<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Epic Carewash - Clean Detailing</title>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ruta ?>vistas/images/apple-icon-180x180.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ruta ?>vistas/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ruta ?>vistas/images/favicon-16x16.png" />

	<!--=====================================
    Marcado de opengrafh de FACEBOOK
    ======================================-->

    <!-- <meta property="og:title" content="Epic Carewash">
	<meta property="og:url" content="">
	<meta property="og:description" content="¿Quiere que su vehículo vuelva a lucir como nuevo? ¿Volver a disfrutarlo plenamente o venderlo? En ambos casos, ha venido al lugar correcto en Epic CareWash se lo detallamos, realizamos una inspección total del vehículo para así garantizar que hemos detallado cada lugar, cada uno de nuestros lavados van de 1 hora a 3 horas aproximadamente.">
	<meta property="og:image"  content="vistas/img/cabeceras/default.jpg">
	<meta property="og:type"  content="website">	
	<meta property="og:site_name" content="Tu logo">
	<meta property="og:locale" content="es_CR"> -->

	<!--=====================================
    HOJAS DE ESTILO PERSONALIZADAS
    ======================================-->

	<link rel="stylesheet" href="<?php echo $ruta ?>vistas/assets/css/styles.css" async>

	<!--=====================================
    PLUGINS DE CSS
    ======================================-->

    <script src="https://kit.fontawesome.com/ac222f5566.js" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

     <link rel="stylesheet" href="<?php echo $ruta ?>vistas/assets/css/plugins/jquery.fancybox.min.css" async>

     <link rel="stylesheet" href="<?php echo $ruta ?>vistas/assets/css/plugins/notie.min.css" async>

    <!--=====================================
    PLUGINS DE JAVASCRIPT
    ======================================-->

   	<script async src="<?php echo $ruta ?>vistas/js/plugins/jquery.min.js"></script>

   	<script async src="<?php echo $ruta ?>vistas/js/plugins/jquery.fancybox.min.js"></script>  

   	<script async src="<?php echo $ruta ?>vistas/js/plugins/notie.min.js"></script>  

   	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

   	<script>
   		

   		$('[data-fancybox]').fancybox({
		    youtube : {
		        controls : 0,
		        showinfo : 0
		    }
		    
		});

   	</script>  

</head>

<body>

	<?php 

	/*=============================================
	Módulos fijos superiores
	=============================================*/	

	include "paginas/modulos/header.php";

	/*=============================================
	Navegar entre páginas
	=============================================*/	

	if (isset($_GET["ruta"])) {

		if ($_GET["ruta"] == "inicio" ||
	        $_GET["ruta"] == "nosotros" ||
	        $_GET["ruta"] == "servicios" ||	              
	        $_GET["ruta"] == "contacto"){

			include "paginas/".$_GET["ruta"].".php";

		}

	} else {

		include "paginas/inicio.php";
		
	}

	/*=============================================
	Módulos fijos inferiores
	=============================================*/	

	include "paginas/modulos/footer.php";

	?>	

	<span class="ir-arriba">	

		<i class="fa-solid fa-arrow-up"></i>

	</span>

	<!--=====================================
	JAVASCRIPT PERSONALIZADO
	======================================-->

	<script async src="<?php echo $ruta ?>vistas/js/header.js"></script>
	<script async src="<?php echo $ruta ?>vistas/js/slider.js"></script>
	<script async src="<?php echo $ruta ?>vistas/js/before_after.js"></script>	
	<script async src="<?php echo $ruta ?>vistas/js/marcas.js"></script>	
	<script async src="<?php echo $ruta ?>vistas/js/ir_arriba.js"></script>
	<script async src="<?php echo $ruta ?>vistas/js/validarCorreo.js"></script>
	
	
</body>
</html>