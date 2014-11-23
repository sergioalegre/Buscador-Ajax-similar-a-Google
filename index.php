<?php require_once("conn/conexion.php") ?>

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
		<div class="center" id="logo">
			<img src="img/logo.jpg" width="200px" alt="">
			<br><br><br>
		</div>
		<div class="form center">
			<form action="" method="POST" name="search_form" id="search_form">
				<input type="text" name="search" id="search">
			</form>
		</div>
		<div id="resultados"></div>
		<div class="footer center">Sergio Alegre - <a href="https://twitter.com/naarean">@naarean</a> - <a href="https://github.com/naarean">github.com/naarean</a></div>
	</div>
</body>
</html>