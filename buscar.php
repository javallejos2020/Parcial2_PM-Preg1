
<?php
include 'conexion.php';
if (isset($_POST['buscar'])) {
	$codlibro=$_POST["codlibro"];
	$libro=$_POST['libro'];
	$sql="SELECT * FROM libro l WHERE l.codlibro='$codlibro' and l.nombre like '$libro'";
		 //echo $sql."--++++";
	$result=mysqli_query($con,$sql);
	$fila=mysqli_fetch_array($result);
	
if ($fila) {
	$query=	"SELECT * FROM prestamo WHERE codlibro='$codlibro' and nombreLibro like '$libro'";
	$result=mysqli_query($con,$query);
	$fila1=mysqli_fetch_array($result);
	if ($fila1) {
	echo "<h2>NO SE ENCUENTRA DISPONIBLE</h2>";
	$mensaje='NO';		
	}else{
	echo "<h2>SE ENCUENTRA DISPONIBLE</h2>";
	$mensaje='SI';
	}
}else{
echo "<h2>NO SE ENCUENTRA DISPONIBLE</h2>";
$mensaje='NO';
}
}

?>
<input type="text" name="cond" value='<?php if(!empty($mensaje)) echo($mensaje); ?>'><br>