<?php 

require_once "controladores/plantillaControlador.php";
require_once "controladores/rutaControlador.php";

require_once "controladores/correoControlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();