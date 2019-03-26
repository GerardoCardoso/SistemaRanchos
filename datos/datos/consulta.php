
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT nombre, descripcion FROM listapcom"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Nombre</td><td>Descripción</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["nombre"]."</td><td>".$row["descripcion"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>