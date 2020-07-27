<?php
include "conexion.php";
if (isset($_POST['registrar'])) {
	$ci=$_POST['ci'];
	$nroMatricula=$_POST['nroMatricula'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$prestamo=$_POST['prestamo'];
	$codlibro=$_POST['codlibro'];
	$nombrelibro=$_POST['nombrelibro'];
	$autor=$_POST['autor'];
	$sql="insert into prestamo values('$ci','$nroMatricula','$nombre','$apellido','$prestamo','$codlibro','$nombre','$autor')";
	$query = mysqli_query($con,$sql);
}
?>