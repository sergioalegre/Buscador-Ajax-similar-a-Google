<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db ="BUSCADORAJAX";

	$connect = new mysqli($host,$user,$pass,$db) or die("Error" .mysql_errno($connect));
 ?>