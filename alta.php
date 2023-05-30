<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo canciones.css">

</head>
<body>
	<?php
	include_once("conexion.php");
	$objeto= new Alumnos();
	
	
	?>	
	<hr>
	<form action="alta.php" method="post">
		<label>nombre</label><input type="text" name="Nombre"><br>
		<label>apellido</label><input type="text" name="Apellido"><br>
		<label>direccion</label><input type="text" name="Direccion"><br>
		<label>edad</label><input type="text" name="Edad"><br>
		<label>sexo</label><input type="text" name="Sexo"><br>
		<input type="submit" name="Guardar">
	</form>
	<?php
	if($_POST) {
		$a=$_POST['Nombre'];
		$b=$_POST['Apellido'];
		$c=$_POST['Direccion'];
		$d=$_POST['Edad'];
		$e=$_POST['Sexo'];
		 $resultado=$objeto->quitarepeticion($a,$b);
		 $num=mysqli_num_rows ($resultado);
if($num> 0){
  echo "dato repetido";
    }else{
  $objeto->alta($a,$b,$c,$d,$e);
}
		
	header("Location:index.php");	
	}
	?>
</body>
</html>