<?php 

$ruta = ControladorRuta::ctrRuta();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Epic Carewash - Clean Detailing</title>

	<!--=====================================
    HOJAS DE ESTILO PERSONALIZADAS
    ======================================-->

	<link rel="stylesheet"href="<?php echo $ruta ?>vistas/assets/css/styles.css" async>

	<!--=====================================
    PLUGINS DE CSS
    ======================================-->

    <script src="https://kit.fontawesome.com/ac222f5566.js" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <!--=====================================
    PLUGINS DE JAVASCRIPT
    ======================================-->

   	<script async src="<?php echo $ruta ?>vistas/js/plugins/jquery.min.js"></script>

   	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


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
	        $_GET["ruta"] == "vip" ||
	        $_GET["ruta"] == "contacto"){

			include "paginas/".$_GET["pagina"].".php";

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
	
	
</body>
</html>