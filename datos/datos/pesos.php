<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$nombre_base = "pos";

$link = mysqli_connect($servidor,$usuario,$password,$nombre_base) or die("Error en la coneccion");

if(!empty($_POST["peso1"]) ) {
$peso1 = $_POST['peso1'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest1 = $peso1*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso1', '$compra')");
  $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest1', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso2"]) ) {
$peso2 = $_POST['peso2'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest2 = $peso2*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso2', '$compra')");
  $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest2', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso3"]) ) {
$peso3 = $_POST['peso3'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest3 = $peso3*$merma;


  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso3', '$compra')");
    $result2 = mysqli_query($link, $query2);   
      $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest3', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso4"]) ) {
$peso4 = $_POST['peso4'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest4 = $peso4*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso4', '$compra')");
   $result2 = mysqli_query($link, $query2);   
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest4', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso5"]) ) {
$peso5 = $_POST['peso5'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest5 = $peso5*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso5', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest5', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso6"]) ) {
$peso6 = $_POST['peso6'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest6 = $peso6*$merma;
  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso6', '$compra')");
  $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest6', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso7"]) ) {
$peso7 = $_POST['peso7'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest7 = $peso7*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso7', '$compra')");
  $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest7', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso8"]) ) {
$peso8 = $_POST['peso8'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest8 = $peso8*$merma;


  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso8', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest8', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso9"]) ) {
$peso9 = $_POST['peso9'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest9 = $peso9*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso9', '$compra')");
  $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest9', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso10"]) ) {
$peso10 = $_POST['peso10'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest10 = $peso10*$merma;
  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso10', '$compra')");
  $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest10', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso11"]) ) {
$peso11 = $_POST['peso11'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest11 = $peso11*$merma;
  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso11', '$compra')");
  $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest11', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso12"]) ) {
$peso12 = $_POST['peso12'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest12 = $peso12*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso12', '$compra')");
    $result2 = mysqli_query($link, $query2);  
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest12', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso13"]) ) {
$peso13 = $_POST['peso13'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest13 = $peso13*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso13', '$compra')");
    $result2 = mysqli_query($link, $query2);   
 $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest13', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso14"]) ) {
$peso14 = $_POST['peso14'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest14 = $peso14*$merma;
  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso14', '$compra')");
    $result2 = mysqli_query($link, $query2); 
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest14', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}

if(!empty($_POST["peso15"]) ) {
$peso15 = $_POST['peso15'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest15 = $peso15*$merma;
  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso15', '$compra')");
    $result2 = mysqli_query($link, $query2);  
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest15', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso16"]) ) {
$peso16 = $_POST['peso16'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest16 = $peso16*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso16', '$compra')");
  $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest16', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso17"]) ) {
$peso17 = $_POST['peso17'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest17 = $peso17*$merma;
  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso17', '$compra')");
    $result2 = mysqli_query($link, $query2);
   $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest17', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso18"]) ) {
$peso18 = $_POST['peso18'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest18 = $peso18*$merma;
  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso18', '$compra')");
    $result2 = mysqli_query($link, $query2);
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest18', '$compra')");
  $result21 = mysqli_query($link, $query21);        
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso19"]) ) {
$peso19 = $_POST['peso19'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest19 = $peso19*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso19', '$compra')");
    $result2 = mysqli_query($link, $query2);  
 $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest19', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso20"]) ) {
$peso20 = $_POST['peso20'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest20 = $peso20*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso20', '$compra')");
    $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest20', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso21"]) ) {
$peso21 = $_POST['peso21'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest21 = $peso21*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso21', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest21', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso22"]) ) {
$peso22 = $_POST['peso22'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest22 = $peso22*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso22', '$compra')");
    $result2 = mysqli_query($link, $query2);  
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest22', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso23"]) ) {
$peso23 = $_POST['peso23'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest23 = $peso23*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso23', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest23', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso24"]) ) {
$peso24 = $_POST['peso24'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest24 = $peso24*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso24', '$compra')");
    $result2 = mysqli_query($link, $query2);  
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest24', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso25"]) ) {
$peso25 = $_POST['peso25'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest25 = $peso25*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso25', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest25', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso26"]) ) {
$peso26 = $_POST['peso26'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest26 = $peso26*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso26', '$compra')");
  $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest26', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso27"]) ) {
$peso27 = $_POST['peso27'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest27 = $peso27*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso27', '$compra')");
    $result2 = mysqli_query($link, $query2); 
   $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest27', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso28"]) ) {
$peso28 = $_POST['peso28'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest28 = $peso28*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso28', '$compra')");
  $result2 = mysqli_query($link, $query2);   
 $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest28', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso29"]) ) {
$peso29 = $_POST['peso29'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest29 = $peso29*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso29', '$compra')");
    $result2 = mysqli_query($link, $query2);   
   $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest29', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso30"]) ) {
$peso30 = $_POST['peso30'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest30 = $peso30*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso30', '$compra')");
    $result2 = mysqli_query($link, $query2);
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest30', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso31"]) ) {
$peso31 = $_POST['peso31'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest31 = $peso31*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso31', '$compra')");
    $result2 = mysqli_query($link, $query2);   
 $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest31', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso32"]) ) {
$peso32 = $_POST['peso32'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest32 = $peso32*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso32', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest32', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso33"]) ) {
$peso33 = $_POST['peso33'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest33 = $peso33*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso33', '$compra')");
    $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest33', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso34"]) ) {
$peso34 = $_POST['peso34'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest34 = $peso34*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso34', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest34', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso35"]) ) {
$peso35 = $_POST['peso35'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest35 = $peso35*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso35', '$compra')");
    $result2 = mysqli_query($link, $query2); 
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest35', '$compra')");
  $result21 = mysqli_query($link, $query21); 

     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso36"]) ) {
$peso36 = $_POST['peso36'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest36 = $peso36*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso36', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest36', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso37"]) ) {
$peso37 = $_POST['peso37'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest37 = $peso37*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso37', '$compra')");
    $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest37', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso38"]) ) {
$peso38 = $_POST['peso38'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest38 = $peso38*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso38', '$compra')");
    $result2 = mysqli_query($link, $query2);   
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest38', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso39"]) ) {
$peso39 = $_POST['peso39'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest39 = $peso39*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso39', '$compra')");
    $result2 = mysqli_query($link, $query2);  
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest39', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso40"]) ) {
$peso40 = $_POST['peso40'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest40 = $peso40*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso40', '$compra')");
    $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest40', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso41"]) ) {
$peso41 = $_POST['peso41'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest41 = $peso41*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso41', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest41', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso42"]) ) {
$peso42 = $_POST['peso42'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest42 = $peso42*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso42', '$compra')");
    $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest42', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso43"]) ) {
$peso43 = $_POST['peso43'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest43 = $peso43*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso43', '$compra')");
    $result2 = mysqli_query($link, $query2); 
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest43', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso44"]) ) {
$peso44 = $_POST['peso44'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest44 = $peso44*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso44', '$compra')");
    $result2 = mysqli_query($link, $query2);  
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest44', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso45"]) ) {
$peso45 = $_POST['peso45'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest45 = $peso45*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso45', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest45', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso46"]) ) {
$peso46 = $_POST['peso46'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest46 = $peso46*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso46', '$compra')");
    $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest46', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso47"]) ) {
$peso47 = $_POST['peso47'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest47 = $peso47*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso47', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest47', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso48"]) ) {
$peso48 = $_POST['peso48'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest48 = $peso48*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso48', '$compra')");
    $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest48', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso49"]) ) {
$peso49 = $_POST['peso49'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest49 = $peso49*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso49', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest49', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso50"]) ) {
$peso50 = $_POST['peso50'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest50 = $peso50*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso50', '$compra')");
    $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest50', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso51"]) ) {
$peso51 = $_POST['peso51'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest51 = $peso51*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso51', '$compra')");
    $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest51', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso52"]) ) {
$peso52 = $_POST['peso52'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest52 = $peso52*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso52', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest52', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso53"]) ) {
$peso53 = $_POST['peso53'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest53 = $peso53*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso53', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest53', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso54"]) ) {
$peso54 = $_POST['peso54'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest54 = $peso54*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso54', '$compra')");
    $result2 = mysqli_query($link, $query2);
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest54', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso55"]) ) {
$peso55 = $_POST['peso55'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest55 = $peso55*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso55', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest55', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso56"]) ) {
$peso56 = $_POST['peso56'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest56 = $peso56*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso56', '$compra')");
    $result2 = mysqli_query($link, $query2);  
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest56', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso57"]) ) {
$peso57 = $_POST['peso57'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest57 = $peso57*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso57', '$compra')");
    $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest57', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso58"]) ) {
$peso58 = $_POST['peso58'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest58 = $peso58*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso58', '$compra')");
    $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest58', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso59"]) ) {
$peso59 = $_POST['peso59'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest59 = $peso59*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso59', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest59', '$compra')");
  $result21 = mysqli_query($link, $query21); 

     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso60"]) ) {
$peso60 = $_POST['peso60'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest60 = $peso60*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso60', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest60', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso61"]) ) {
$peso61 = $_POST['peso61'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest61 = $peso61*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso61', '$compra')");
    $result2 = mysqli_query($link, $query2); 
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest61', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso62"]) ) {
$peso62 = $_POST['peso62'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest62 = $peso62*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso62', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest62', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso63"]) ) {
$peso63 = $_POST['peso63'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest63 = $peso63*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso63', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest63', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso64"]) ) {
$peso64 = $_POST['peso64'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest64 = $peso64*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso64', '$compra')");
    $result2 = mysqli_query($link, $query2);   
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest64', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso65"]) ) {
$peso65 = $_POST['peso65'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest65 = $peso65*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso65', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest65', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso66"]) ) {
$peso66 = $_POST['peso66'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest66 = $peso66*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso66', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest66', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso67"]) ) {
$peso67 = $_POST['peso67'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest67 = $peso67*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso67', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest67', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso68"]) ) {
$peso68 = $_POST['peso68'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest68 = $peso68*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso68', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest68', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso69"]) ) {
$peso69 = $_POST['peso69'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest69 = $peso69*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso69', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest69', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso70"]) ) {
$peso70 = $_POST['peso70'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest70 = $peso70*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso70', '$compra')");
    $result2 = mysqli_query($link, $query2);
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest70', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso71"]) ) {
$peso71 = $_POST['peso71'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest71 = $peso71*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso71', '$compra')");
    $result2 = mysqli_query($link, $query2); 
   $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest71', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso72"]) ) {
$peso72 = $_POST['peso72'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest72 = $peso72*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso72', '$compra')");
    $result2 = mysqli_query($link, $query2); 
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest72', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso73"]) ) {
$peso73 = $_POST['peso73'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest73 = $peso73*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso73', '$compra')");
    $result2 = mysqli_query($link, $query2); 
   $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest73', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso74"]) ) {
$peso74 = $_POST['peso74'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest74 = $peso74*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso74', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest74', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso75"]) ) {
$peso75 = $_POST['peso75'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest75 = $peso75*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso75', '$compra')");
    $result2 = mysqli_query($link, $query2);
   $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest75', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso76"]) ) {
$peso76 = $_POST['peso76'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest76 = $peso76*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso76', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest76', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso77"]) ) {
$peso77 = $_POST['peso77'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest77 = $peso77*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso77', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest77', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso78"]) ) {
$peso78 = $_POST['peso78'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest78 = $peso78*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso78', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest78', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso79"]) ) {
$peso79 = $_POST['peso79'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest79 = $peso79*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso79', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest79', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso80"]) ) {
$peso80 = $_POST['peso80'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest80 = $peso80*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso80', '$compra')");
    $result2 = mysqli_query($link, $query2); 
     $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest80', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso81"]) ) {
$peso81 = $_POST['peso81'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest81 = $peso81*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso81', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest81', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso82"]) ) {
$peso82 = $_POST['peso82'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest82 = $peso82*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso82', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest82', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso83"]) ) {
$peso83 = $_POST['peso83'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest83 = $peso83*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso83', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest83', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso84"]) ) {
$peso84 = $_POST['peso84'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest84 = $peso84*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso84', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest84', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso85"]) ) {
$peso85 = $_POST['peso85'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest85 = $peso85*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso85', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest85', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso86"]) ) {
$peso86 = $_POST['peso86'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest86 = $peso86*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso86', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest86', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso87"]) ) {
$peso87 = $_POST['peso87'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest87 = $peso87*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso87', '$compra')");
    $result2 = mysqli_query($link, $query2);  
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest87', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso88"]) ) {
$peso88 = $_POST['peso88'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest88 = $peso88*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso88', '$compra')");
    $result2 = mysqli_query($link, $query2);
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest88', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso89"]) ) {
$peso89 = $_POST['peso89'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest89 = $peso89*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso89', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest89', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso90"]) ) {
$peso90 = $_POST['peso90'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest90 = $peso90*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso90', '$compra')");
    $result2 = mysqli_query($link, $query2);   
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest90', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso91"]) ) {
$peso91 = $_POST['peso91'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest91 = $peso91*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso91', '$compra')");
    $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest91', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso92"]) ) {
$peso92 = $_POST['peso92'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest92 = $peso92*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso92', '$compra')");
    $result2 = mysqli_query($link, $query2); 
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest92', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso93"]) ) {
$peso93 = $_POST['peso93'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest93 = $peso93*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso93', '$compra')");
    $result2 = mysqli_query($link, $query2); 
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest93', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso94"]) ) {
$peso94 = $_POST['peso94'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest94 = $peso94*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso94', '$compra')");
    $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest94', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso95"]) ) {
$peso95 = $_POST['peso95'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest95 = $peso95*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso95', '$compra')");
    $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest95', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso96"]) ) {
$peso96 = $_POST['peso96'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest96 = $peso96*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso96', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest96', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso97"]) ) {
$peso97 = $_POST['peso97'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest97 = $peso97*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso97', '$compra')");
  $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest97', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso98"]) ) {
$peso98 = $_POST['peso98'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest98 = $peso98*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso98', '$compra')");
    $result2 = mysqli_query($link, $query2);  
    $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest98', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso99"]) ) {
$peso99 = $_POST['peso99'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest99 = $peso99*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso99', '$compra')");
    $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest99', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso100"]) ) {
$peso100 = $_POST['peso100'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest100 = $peso100*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso100', '$compra')");
  $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest100', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso101"]) ) {
$peso101 = $_POST['peso101'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest101 = $peso101*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso101', '$compra')");
    $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest101', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso102"]) ) {
$peso102 = $_POST['peso102'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest102 = $peso102*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso102', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest102', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso103"]) ) {
$peso103 = $_POST['peso103'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest103 = $peso103*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso103', '$compra')");
  $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest103', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso104"]) ) {
$peso104 = $_POST['peso104'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest104 = $peso104*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso104', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest104', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso105"]) ) {
$peso105 = $_POST['peso105'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest105 = $peso105*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso105', '$compra')");
    $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest105', '$compra')");
  $result21 = mysqli_query($link, $query21); 
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso106"]) ) {
$peso106 = $_POST['peso106'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest106 = $peso106*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso106', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest106', '$compra')");
  $result21 = mysqli_query($link, $query21);

     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso107"]) ) {
$peso107 = $_POST['peso107'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest107 = $peso107*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso107', '$compra')");
  $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest107', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso108"]) ) {
$peso108 = $_POST['peso108'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest108 = $peso108*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso108', '$compra')");
  $result2 = mysqli_query($link, $query2);   
 $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest108', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso109"]) ) {
$peso109 = $_POST['peso109'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest109 = $peso109*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso109', '$compra')");
$result2 = mysqli_query($link, $query2);   
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest109', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso110"]) ) {
$peso110 = $_POST['peso110'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest110 = $peso110*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso110', '$compra')");
    $result2 = mysqli_query($link, $query2);   
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest110', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso111"]) ) {
$peso111 = $_POST['peso111'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest111 = $peso111*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso111', '$compra')");
    $result2 = mysqli_query($link, $query2);   
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest111', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso112"]) ) {
$peso112 = $_POST['peso112'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest112 = $peso112*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso112', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest112', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso113"]) ) {
$peso113 = $_POST['peso113'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest113 = $peso113*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso113', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest113', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso114"]) ) {
$peso114 = $_POST['peso114'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest114 = $peso114*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso114', '$compra')");
    $result2 = mysqli_query($link, $query2); 
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest114', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso115"]) ) {
$peso115 = $_POST['peso115'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest115 = $peso115*$merma;

$query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso115', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest115', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso116"]) ) {
$peso116 = $_POST['peso116'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest116 = $peso116*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso116', '$compra')");
    $result2 = mysqli_query($link, $query2);   
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest116', '$compra')");
  $result21 = mysqli_query($link, $query21);
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso117"]) ) {
$peso117 = $_POST['peso117'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest117 = $peso117*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso117', '$compra')");
  $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest117', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso118"]) ) {
$peso118 = $_POST['peso118'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest118 = $peso118*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso118', '$compra')");
    $result2 = mysqli_query($link, $query2);   
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest118', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso119"]) ) {
$peso119 = $_POST['peso119'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest119 = $peso119*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso119', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest119', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso120"]) ) {
$peso120 = $_POST['peso120'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest120 = $peso120*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso120', '$compra')");
  $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest120', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso121"]) ) {
$peso121 = $_POST['peso121'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest121 = $peso121*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso121', '$compra')");
  $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest121', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso122"]) ) {
$peso122 = $_POST['peso122'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest122 = $peso122*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso122', '$compra')");
  $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest122', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso123"]) ) {
$peso123 = $_POST['peso123'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest123 = $peso123*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso123', '$compra')");
  $result2 = mysqli_query($link, $query2); 
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest123', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso124"]) ) {
$peso124 = $_POST['peso124'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest124 = $peso124*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso124', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest124', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso125"]) ) {
$peso125 = $_POST['peso125'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest125 = $peso125*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso125', '$compra')");
    $result2 = mysqli_query($link, $query2);   
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest125', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso126"]) ) {
$peso126 = $_POST['peso126'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest126 = $peso126*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso126', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest126', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso127"]) ) {
$peso127 = $_POST['peso127'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest127 = $peso127*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso127', '$compra')");
    $result2 = mysqli_query($link, $query2); 
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest127', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso128"]) ) {
$peso128 = $_POST['peso128'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest128 = $peso128*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso128', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest128', '$compra')");
  $result21 = mysqli_query($link, $query21);  

     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso129"]) ) {
$peso129 = $_POST['peso129'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest129 = $peso129*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso129', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest129', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso130"]) ) {
$peso130 = $_POST['peso130'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest130 = $peso130*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso130', '$compra')");
    $result2 = mysqli_query($link, $query2);  
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest130', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso131"]) ) {
$peso131 = $_POST['peso131'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest131 = $peso131*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso131', '$compra')");
  $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest131', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso132"]) ) {
$peso132 = $_POST['peso132'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest132 = $peso132*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso132', '$compra')");
  $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest132', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso133"]) ) {
$peso133 = $_POST['peso133'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest133 = $peso133*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso133', '$compra')");
  $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest133', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso134"]) ) {
$peso134 = $_POST['peso134'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest134 = $peso134*$merma;

$query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso134', '$compra')");
$result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest134', '$compra')");
$result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso135"]) ) {
$peso135 = $_POST['peso135'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest135 = $peso135*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso135', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest135', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso136"]) ) {
$peso136 = $_POST['peso136'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest136 = $peso136*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso136', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest136', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso137"]) ) {
$peso137 = $_POST['peso137'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest137 = $peso137*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso137', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest137', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso138"]) ) {
$peso138 = $_POST['peso138'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest138 = $peso138*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso138', '$compra')");
    $result2 = mysqli_query($link, $query2); 
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest138', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso139"]) ) {
$peso139 = $_POST['peso139'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest139 = $peso139*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso139', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest139', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso140"]) ) {
$peso140 = $_POST['peso140'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest140 = $peso140*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso140', '$compra')");
    $result2 = mysqli_query($link, $query2); 
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest140', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso141"]) ) {
$peso141 = $_POST['peso141'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest141 = $peso141*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso141', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest141', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso142"]) ) {
$peso142 = $_POST['peso142'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest142 = $peso142*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso142', '$compra')");
    $result2 = mysqli_query($link, $query2); 
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest142', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso143"]) ) {
$peso143 = $_POST['peso143'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest143 = $peso143*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso143', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest143', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso144"]) ) {
$peso144 = $_POST['peso144'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest144 = $peso144*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso144', '$compra')");
    $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest144', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso145"]) ) {
$peso145 = $_POST['peso145'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest145 = $peso145*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso145', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest145', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso146"]) ) {
$peso146 = $_POST['peso146'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest146 = $peso146*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso146', '$compra')");
    $result2 = mysqli_query($link, $query2); 
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest146', '$compra')");
  $result21 = mysqli_query($link, $query21);    
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso147"]) ) {
$peso147 = $_POST['peso147'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest147 = $peso147*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso147', '$compra')");
    $result2 = mysqli_query($link, $query2);
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest147', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso148"]) ) {
$peso148 = $_POST['peso148'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest148 = $peso148*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso148', '$compra')");
    $result2 = mysqli_query($link, $query2);
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest148', '$compra')");
  $result21 = mysqli_query($link, $query21);     
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso149"]) ) {
$peso149 = $_POST['peso149'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest149 = $peso149*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso149', '$compra')");
    $result2 = mysqli_query($link, $query2);   
$query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest149', '$compra')");
  $result21 = mysqli_query($link, $query21);  
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}
if(!empty($_POST["peso150"]) ) {
$peso150 = $_POST['peso150'];
$compra = $_POST['compra'];
$merma = $_POST['merma'];
$pest150 = $peso150*$merma;

  $query2 = ("INSERT INTO pesos(peso, compra) VALUES ('$peso150', '$compra')");
    $result2 = mysqli_query($link, $query2);  
  $query21 = ("INSERT INTO pesosventa(peso, venta) VALUES ('$pest150', '$compra')");
  $result21 = mysqli_query($link, $query21);   
     echo header ("Location: http://localhost/3taurusv1/crear-compra");
}

if(!empty($_POST["cantidada"]) && !empty($_POST["precioa"])) {
$cantidad = $_POST['cantidada'];
$precio = $_POST['precioa'];
$compra = $_POST['compra'];

  $query0 = ("INSERT INTO aretes(cantidad, precio, compra) VALUES ('$cantidad', '$precio', '$compra')");
    $result0 = mysqli_query($link, $query0);   
    echo header ("Location: http://localhost/3taurusv1/crear-compra");
}



if(!empty($_POST["merma"])) {
$merma = $_POST['merma'];
$compra = $_POST['compra'];

  $query0 = ("INSERT INTO merma(merma, venta) VALUES ('$merma', '$compra')");
    $result0 = mysqli_query($link, $query0);   
        echo header ("Location: http://localhost/3taurusv1/crear-compra");

}


$link->close();


?>


