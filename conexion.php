<?php
$con=mysqli_connect("localhost","javallejos","123456");
mysqli_select_db($con,"academico_5");
if(!$con){
	die("No hay conexion:".mysql_connect_error());
}
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"flujo3");
if(!$conn){
	die("No hay conexion:".mysql_connect_error());
}

?>