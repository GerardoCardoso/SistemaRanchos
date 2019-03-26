<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$nombre_base = "pos";

$link = mysqli_connect($servidor,$usuario,$password,$nombre_base) or die("Error en la coneccion");


if(isset($_POST["Lista"]) && isset($_POST["Peso"]) && isset($_POST["Compra"])) {

  $kilos = $_POST['Lista'];
  $costo = $_POST['Peso'];
  $compra = $_POST['Compra'];
  $query2 = ("INSERT INTO pesos(peso, listaprecc, compra) VALUES ('$costo', '$kilos', '$compra')");
    $result2 = mysqli_query($link, $query2);   
     echo header ("Location: http://localhost/datos/al.php");


  
}
$link->close();
?>
