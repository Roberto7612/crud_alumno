<?php
	include_once("conexion.php");
	$objeto= new Alumnos();
	
           
           $z=$_POST['id'];
        $a=$_POST['nombre'];
		$b=$_POST['apellidos'];
		$c=$_POST['direccion'];
		$d=$_POST['edad'];
		$e=$_POST['sexo'];
       $objeto->sobreescribir($z,$a,$b,$c,$d,$e);

       
?>
<!DOCTYPE html>
<head>
	<script>
		function cerrarse(){
			opener.location.reload();
			window.close();
		}
	</script>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	
	<title>Guardado con exito</title>
</head>
<body onload="cerrarse()">
	
</body>
</html>
