<?php require_once("conn/conexion.php") ?>

<?php 

	$search ="";
	if(isset($_GET['search'])){
		$search = strtolower($_GET['search']);
	}

	$id="";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}

	$consulta = "SELECT * FROM articulos WHERE id = ".$id;
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);

	$unavisitamas = "UPDATE articulos SET visitas=visitas+1 WHERE id=".$id.""; //sube las visitas a este artículo
	$update = $connect->query($unavisitamas) || die("No se ha podido aumentar el número de visitas");

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Buscador con Ajax y JQuery</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="container">
		<div class="center">
			<br><br><br>
			<img src="img/logo.jpg" width="200px" alt="">
			<br><br><br>
		</div>
		<div class="form center">
			<a href="javascript:history.back(1);">Volver</a>
		</div>
		<div id="resultados">
			<h1><?php echo utf8_encode($fila['nombre']) ?></h1>
			<p><?php echo str_replace($search,'<strong>'.$search.'</strong>', utf8_encode($fila['articulo'])) ?></p>
		</div>
		<div class="footer center">Sergio Alegre @naarean</div>
	</div>
</body>
</html>