<?php 

/*
$_SERVER['PHP_SELF']		Retorna el nombre del archivo que se esta ejecutando
$_SERVER['SERVER_NAME']		El nombre del host del servidor donde se está ejecutando actualmente el script ( www.google.com)
$_SERVER['HTTP_HOST']		Contenido de la cabecera Host: de la petición actual, si existe
$_SERVER['HTTP_REFERER']	Dirección de la pagina (si la hay) que emplea el agente de usuario para la pagina actual
$_SERVER['SCRIPT_NAME']		Contiene la ruta del script actual


*/


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];


 ?>
