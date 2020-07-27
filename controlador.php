<?php
include 'conexion.php';
$codFlujo=$_GET["codflujo"];
$codProceso=$_GET["codproceso"];
//echo "////////".$codProceso;
$codProcesoSiguiente=$_GET["codprocesosiguiente"];
$tipo=$_GET["tipo"];
$archivo=$_GET["archivo"];
include "controlador".$archivo;
if($tipo=='C'){
	echo "CCCC";
	//echo "controlador".$codProceso;
	$sql="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProceso'";	
	
	if (isset($_GET["Anterior"]) ) {

	$sql="select * from proceso where codFlujo='$codFlujo' and codProcesoSiguiente='$codProceso'";
		echo $sql."AAAAAAA";
	}	
	$result=mysqli_query($conn,$sql);
	//echo "$sql";
	$fila=mysqli_fetch_array($result);
	$codprocesoEnvia=$fila['codProceso'];
	$archivoEnvia="motor.php?codflujo=".$codFlujo."&codproceso=".$codprocesoEnvia;
	echo $archivoEnvia;
	header("Location: ".$archivoEnvia);
}
else{
	echo "else";
	if (isset($_GET["Anterior"]) ) {
		if ($codProceso=='P4' or $codProceso=='P7') {
			$sql="select codProceso from procesocon where (codProcesoSi='$codProceso' || codProcesoNo='$codProceso')";
				echo $sql;
		}else{
		$sql="select * from proceso where codFlujo='$codFlujo' and codProcesoSiguiente='$codProceso'";
		echo "sarahi".$sql;	
		}				
	}
	if(isset($_GET["Siguiente"]))
	{
		$sql="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProcesoSiguiente'";
		echo $sql."   sigueinte";
	}
}
$result=mysqli_query($conn,$sql);
$fila=mysqli_fetch_array($result);
//controla el error del anterior
if (isset($fila['codProceso'])) {
	echo "hola mundoooo";
	$codprocesoEnvia=$fila['codProceso'];
	//echo $codprocesoEnvia;
	$archivoEnvia="motor.php?codflujo=".$codFlujo."&codproceso=".$codprocesoEnvia;
	//echo $archivoEnvia."++++++";
	header("Location: ".$archivoEnvia);
}
?>