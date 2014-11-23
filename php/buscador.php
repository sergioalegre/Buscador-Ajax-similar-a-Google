<?php include_once("../conn/conexion.php") ;

	sleep(0.5); //que se para un segundo para que salga loading.gif

	$search ="";

	if(isset($_POST['search']))
	{
		$search = strtolower($_POST['search']);
	}

	$consulta = "SELECT * FROM articulos WHERE articulo LIKE '%" .$search. "%' OR nombre LIKE '%" .$search. "%' ORDER BY visitas DESC LIMIT 6";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);
?>

<?php if($total>0 && $search!='') { ?>

	<h2>Resultados de la búsqueda</h2>
	<?php do { ?>
	<div class="art">
		<a href="articulo.php?id=<?php echo $fila['id'] ?>&search=<?php echo $search ?>">
			<span class="titulo"><?php echo str_replace($search,'<strong>'.$search.'</strong>',utf8_encode($fila['nombre'])) ?></span>
			<br> <!-- utf8_encode para solucionar acentos -->
			<!-- str_replace es para reemplazar y en este caso resaltar en los respultados la cadena buscada -->
			<span class="contenido"><?php echo str_replace($search,'<strong>'.$search.'</strong>', substr(utf8_encode($fila['articulo']),0,200)) ?></span>
			<!-- substr, substraemos o acortamos, en un cadena desde el carater 0 al 200 -->
		</a>
	</div>
	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
	<?php }
	elseif($total>0 && $search=='') echo "<h2>Introduce un parametro de búsqueda</h2> <p>Introduce palabras relacionadas</p>";
	else echo "<h2>No se han encontrado resultados</h2> <p>Prueba de nuevo</p>";
?>