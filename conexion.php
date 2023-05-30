<?php
include_once("configuracion.php");
class Alumnos 
{ 
private $conn; //variable de conexion a la base de datos
                       //variable global
function __construct(){
$this ->conn=new mysqli(HOST,USER,PASS,DBNAME);
//inicializa la llave a la BD
}

 //function conectar(){
//if($this->conn->connect_error){
//die("Connection failed: ". $conn->connect_error);
//echo "No se pudo conectar <br >";

 

function alta($a,$b,$c,$d,$e){
   $consulta="INSERT INTO alumnos( nombre, apellidos, direccion, edad, sexo) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."')";
  if($this->conn->query($consulta)){
    echo"datos insertados corectamente";
  }else{
     echo $this->conn->connect_error;
  }
 
}

function mostrar(){
  $consulta="SELECT * FROM alumnos";
  $resultado=$this->conn->query($consulta);
  return $resultado;
}
function eliminar($id){
  $consulta="DELETE FROM alumnos WHERE id=".$id;
  if($this->conn->query($consulta)){
    echo "Datos eliminados";
  }else{
    echo $this->conn->connect_error;
  }
}
function quitarepeticion($t,$i){
  
    $consulta="SELECT id FROM alumnos WHERE Nombre like'".$t."' and apellidos like '".$i."'";
  $resultado=$this->conn->query($consulta);
  
  return $resultado;
}

function modificar($id){
  $consulta="select* from alumnos where id=".$id;
  $res=$this->conn->query($consulta);
  return $res;
}
function sobreescribir($z,$a,$b,$c,$d,$e){
  echo $consulta="UPDATE alumnos SET nombre='".$a."',apellidos='".$b."',direccion='".$c."',edad='".$d."',sexo='".$e."' WHERE id=".$z;
  $this->conn->query($consulta); 
}





}


?>