<?php 

if(isset($_GET['valor1']))
{
	echo $_GET['valor1'] . " " . $_GET['valor2'];
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enlaces a travez de get</title>
</head>
<body>
	<a href="enlaces a travez de get.php?valor1=45&&valor2='hola'">Enviar</a>
</body>
</html>