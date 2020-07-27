<?php
include "conexion.php";
if (isset($_POST['verificar'])){?> 
	<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
        <tr>
          <td align="center"><font face="crono" size="4"><b>CI</b></font></td>
          <td align="center"><font face="crono" size="4"><b>NATRICULA</b></font></td>
          <td align="center"><font face="crono" size="4"><b>NOMBRE</b></font></td>
          <td align="center"><font face="crono" size="4"><b>APELLIDOS</b></font></td>
          <td align="center"><font face="crono" size="4"><b>CARRERA</b></font></td>
          </tr>
<?php	
	$ci=$_POST['ci'];
	$carrera=$_POST['carrera'];
	//echo $ci." - ".$matricula;
	$sql="select*from estudiante where '$ci'=ci and '$carrera'=carrera";
	$result=mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($result))
          {
           echo "<tr><td width=\"16%\"><font face=\"crono\" size=\"3\">".$row["ci"]."</font></td>";
           echo "<td width=\"16%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["nroMatricula"]."</font></td>";
           echo "<td width=\"16%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["nombre"]."</font></td>";
           echo "<td width=\"16%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["apellido"]."</font></td>";
           echo "<td width=\"16%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["carrera"]."</font></td></tr>";
          }
}
?>