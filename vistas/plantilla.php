<?php 

$ruta = ControladorRuta::ctrRuta();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Epic Carewash - Clean Detailing</title>

	<link rel="stylesheet"href="<?php echo $ruta ?>vistas/assets/css/styles.css" async>


</head>

<body>

	<?php 

	/*=============================================
	Módulos fijos superiores
	=============================================*/	

	include "paginas/modulos/header.php";


	?>

	<script async src="<?php echo $ruta ?>vistas/js/header.js"></script>
	
</body>
</html>