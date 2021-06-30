<?php 

try {
	
	$con = new PDO("mysql:host=localhost;dbname=prueba_modificado", "root", "");


} catch (PDOException $e) {
	echo "Error: ".$e->getMessage();
}


$consulta = $con->prepare("select   U.nombre, P.contenido, C.comentario from usuario U inner join post P on U.CodUsua = P.CodUsua left join coment C on C.id_post in (P.CodPost) where U.CodUsua in (select usu_enviador from amigos where usu_receptor =7 and acceptado=1)
");
$consulta->execute();
$re = $consulta->fetchAll();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba</title>
</head>
<body>
<?php foreach($re as $r): ?>
	<div class="post">
		<h1 class="post-usuario"><?php echo $r["nombre"]?></h1>
		<p class="post-post"><?php echo $r["contenido"] ?></p>
	</div>
<?php endforeach; ?>
</body>
</html>