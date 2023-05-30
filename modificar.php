<?php
	include_once("conexion.php");
	$objeto= new Alumnos();
	

	$elementorecuperado=$_GET['id'];
	$row=$objeto->modificar($elementorecuperado);
	$fila=$row->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="modi.php" method="post">
		<label>ID</label>
		<input type="tex" value="<?php echo $fila['id'];?>" disable><br>
		<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
		<label>nombre</label><input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"><br>
		<label>apellidos</label><input type="text" name="apellidos" value="<?php echo $fila['apellidos']; ?>"><br>
		<label>direccion</label><input type="text" name="direccion" value="<?php echo $fila['direccion']; ?>"><br>
		<label>edad</label><input type="text" name="edad" value="<?php echo $fila['edad']; ?>"><br>
		<label>sexo</label><input type="text" name="sexo" value="<?php echo $fila['sexo']; ?>"><br>
		<input type="submit" value="enviar">
	</form>
	
</body>
</html>