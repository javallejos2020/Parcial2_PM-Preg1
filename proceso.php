<?php 
  if ($codProceso=='P2') { 
  ?>
  <h1><center>Verificacion si perteneces a alguna carrera</center></h1>
  <form action="" method="POST">
  <table align="center">
  <tr>
  <th>CI:</th>
  <td><input type="text" name="ci" required></td>
  </tr>
  <tr>
  <th>Carrera:</th>
  <td><input type="text" name="carrera" required></td>
  </tr>
  <td><input type="submit" name="verificar" align="center" required></td>
  </table>
  </form>
  <?php 
  }
  ?>
<?php
  if ($codProceso=='P3') {?>
   <h1><center>¿HAY EL LIBRO?</center></h1> 
  <form action="" method="POST">
    <table align="center">
      <tr>
        <th>Codigo Libro</th>
        <td>
          <input type="text" name="codlibro" required> 
          </td>
      </tr>
      <tr>
        <th>Nombre del libro</th>
          <td>
          <input type="text" name="libro" required> 
          </td>
                  
      </tr>
      <tr>
        <td>
          <input type="submit" name="buscar" required>
        </td>
      </tr>
    </table>
  </form>  
<?php   
  }
?>
<?php 
if ($codProceso=='P4') {?>
  <h1><center>Registrar</center></h1>
  <form action="" method="POST">
    <table align="center">
      <tr>
        <th>CI:</th>
        <td><input type="text" name="ci" required></td>
      </tr>
      <tr>
        <th>Matricula:</th>
        <td><input type="text" name="nroMatricula" required></td>
      </tr>
      <tr>
        <th>Nombre:</th>
        <td><input type="text" name="nombre" required></td>
      </tr>
      <tr>
        <th>Apellidos:</th>
        <td><input type="text" name="apellido" required></td>
      </tr>
      <tr>
        <th>Fecha de Prestamo</th>
        <td><input type="date" name="prestamo" required></td>
      </tr>
      <tr>
        <th>Codigo Libro:</th>
        <td><input type="text" name="codlibro" required></td>
      </tr>
      <tr>
        <th>Nombre Libro:</th>
        <td><input type="text" name="nombrelibro"></td>
      </tr>
      <tr>
        <th>Autor:</th>
        <td><input type="text" name="autor"></td>
      </tr>
      <tr>
        <td><input type="submit" name="registrar">  </td>
      
      </tr>
      
    </table>
  </form>
<?php
}
?>