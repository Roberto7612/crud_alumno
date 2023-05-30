<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	include_once("conexion.php");
	$objeto=new alumnos();//inicializa objeto de la clase BD
	
	echo$elementorecuperado=$_GET['id'];
	$datos=$objeto->eliminar($elementorecuperado);
	header("location:index.php");

	?>
	
</body>
</html>
