<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>Alta de Pesos en Compra</title>
</head>
<body>

	<center>
		<h1> Lista de Pesos en Compra</h1>
	<form action="alta.php" method="post">
 <p>Lista de Precios: <input type="text" id="Lista" name="Lista" required /></p>
 <p>Peso: <input type="text" name="Peso" id="Peso" required /></p>
 <p>Compra: <input type="number" name="Compra" id="Compra" required /></p>
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT id, nombre, descripcion FROM listapcom"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table class='table table-striped'> \n"; 
   echo "<tr><td>ID</td><td>Nombre</td><td>Descripción</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["descripcion"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
 <p><button type="submit" class="btn btn-primary">Aceptar</button></p>
</form>
<div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT idpesos, peso, listaprecc FROM pesos WHERE  DATE(alta) = DATE(NOW()) and listaprecc=1 order by peso asc"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>ID</td><td>Peso</td><td>Lista de precios</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["idpesos"]."</td><td>".$row["peso"]."</td><td>".$row["listaprecc"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n\n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT idpesos, peso, listaprecc FROM pesos WHERE  DATE(alta) = DATE(NOW()) and listaprecc =2 order by peso asc"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>ID</td><td>Peso</td><td>Lista de precios</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["idpesos"]."</td><td>".$row["peso"]."</td><td>".$row["listaprecc"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n\n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>
<div class="row">
	<div class="col">
	<p>Lista de precios</p>
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT id, kilos, pecio FROM precioscompra where listapcom = 1"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>ID</td><td>Kilos</td><td>Precios</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["id"]."</td><td>".$row["kilos"]."</td><td>".$row["pecio"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
	<div class="col">
	<p>Lista de precios 2</p>
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT id, kilos, pecio FROM precioscompra where listapcom = 2"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>ID</td><td>Kilos</td><td>Precios</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["id"]."</td><td>".$row["kilos"]."</td><td>".$row["pecio"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>
<p>Lista de precios 1</p>
<div class="row">

	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 0 AND 100 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table  align='center' class='table'> \n"; 
   echo "<tr><td>0 a 100 kg</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
<div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT count(peso) FROM pesos
WHERE (peso BETWEEN 0 AND 100 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["count(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT sum(peso) FROM pesos
WHERE (peso BETWEEN 0 AND 100 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["sum(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 101 AND 231 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>100 a 231 kg</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
<div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT count(peso) FROM pesos
WHERE (peso BETWEEN 101 AND 231 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["count(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT sum(peso) FROM pesos
WHERE (peso BETWEEN 101 AND 231 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["sum(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 232 AND 291 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>231 a 291 kg</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>

<div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT count(peso) FROM pesos
WHERE (peso BETWEEN 232 AND 291 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["count(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT sum(peso) FROM pesos
WHERE (peso BETWEEN 232 AND 291 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["sum(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>

</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 292 AND 341 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>291 a 341 kg</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?><div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT count(peso) FROM pesos
WHERE (peso BETWEEN 292 AND 341 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["count(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT sum(peso) FROM pesos
WHERE (peso BETWEEN 292 AND 341 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["sum(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>

</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 342 AND 391 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>341 a 391 kg</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
<div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT count(peso) FROM pesos
WHERE (peso BETWEEN 342 AND 392 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["count(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT sum(peso) FROM pesos
WHERE (peso BETWEEN 342 AND 391 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["sum(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 392 AND 431 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>391 a 431 kg</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
<div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT count(peso) FROM pesos
WHERE (peso BETWEEN 392 AND 431 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["count(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT sum(peso) FROM pesos
WHERE (peso BETWEEN 392 AND 431 and listaprecc =1) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["sum(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>



</div>

</div>


<p>Lista de precios 2</p>
<div class="row">

	<div class="col">
	<p>0 a 100 kg</p>
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 0 AND 100 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>Peso</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
<div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT count(peso) FROM pesos
WHERE (peso BETWEEN 0 AND 100 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["count(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT sum(peso) FROM pesos
WHERE (peso BETWEEN 0 AND 100 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["sum(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>




</div>

<div class="col">
	<p>100 a 231 kg</p>
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 101 AND 231 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>Peso</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
<div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT count(peso) FROM pesos
WHERE (peso BETWEEN 101 AND 231 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["count(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT sum(peso) FROM pesos
WHERE (peso BETWEEN 101 AND 231 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["sum(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>






</div>
<div class="col">
	<p>231 a 291 kg</p>
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 232 AND 291 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>Peso</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
<div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT count(peso) FROM pesos
WHERE (peso BETWEEN 232 AND 291 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["count(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT sum(peso) FROM pesos
WHERE (peso BETWEEN 232 AND 291 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["sum(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>

</div>
<div class="col">
	<p>291 a 341 kg</p>
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 292 AND 341 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>Peso</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
<div class="row">
	<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT count(peso) FROM pesos
WHERE (peso BETWEEN 292 AND 341 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["count(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT sum(peso) FROM pesos
WHERE (peso BETWEEN 292 AND 341 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Total</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["sum(peso)"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
</div>

</div>
<div class="col">
<p>341 a 391 kg</p>
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso FROM pesos
WHERE (peso BETWEEN 342 AND 391 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table align='center' class='table'> \n"; 
   echo "<tr><td>Peso</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>
<div class="col">
<p>391 a 431 kg</p>
<?php 
$mysqli = new mysqli("localhost", "root", "", "pos");
$result = $mysqli->query("SELECT peso, alta FROM pesos
WHERE (peso BETWEEN 392 AND 431 and listaprecc =2) and  DATE(alta) = DATE(NOW())"); 
if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Peso</td><td>Alta</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["peso"]."</td><td>".$row["alta"]."</td></tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
</div>

</div>
</center>
 
</body>
</html>