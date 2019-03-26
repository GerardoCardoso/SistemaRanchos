<title>Alta de pesos</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 <script src="http://localhost/3taurusv1/vistas/bower_components/jquery/dist/jquery.min.js"></script>

<?php
$con = mysqli_connect('localhost','root','','pos');
if (!$con) {
	die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,'pos');
$sql = "SELECT max(codigo) FROM compras";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
   $count=$row[0];
}
$compra = (int) ($count+1);

?>

<style>

input[type=number]::-webkit-outer-spin-button,

input[type=number]::-webkit-inner-spin-button {

    -webkit-appearance: none;

    margin: 0;

}

 

input[type=number] {

    -moz-appearance:textfield;

}

</style>
<div align="center">
<?php echo "Compra número: ".$compra; ?>
<h1> Ingresar Pesos</h1>

<form action="pesos.php" method="post">
	<input type="" value="<?php echo $compra; ?>" name="compra" id="compra" hidden>
<div class="row pull-right">
	<div class="col-xs-3"><input type="number"style="padding-left:15px"  min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();" name="peso1" id="peso1"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();" name="peso2" id="peso2"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();" name="peso3" id="peso3"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso4" id="peso4"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso5" id="peso5"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso6" id="peso6"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso7" id="peso7"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso8" id="peso8"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px"  min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso9" id="peso9"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso10" id="peso10"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso11" id="peso11"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso12" id="peso12"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso13" id="peso13"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso14" id="peso14"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso15" id="peso15"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso16" id="peso16"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso17" id="peso17"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso18" id="peso18"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso19" id="peso19"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso20" id="peso20"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso21" id="peso21"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso22" id="peso22"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso23" id="peso23"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso24" id="peso24"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso25" id="peso25"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso26" id="peso26"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso27" id="peso27"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso28" id="peso28"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso29" id="peso29"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso30" id="peso30"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso31" id="peso31"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso32" id="peso32"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso33" id="peso33"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso34" id="peso34"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso35" id="peso35"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso36" id="peso36"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso37" id="peso37"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso38" id="peso38"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso39" id="peso39"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso40" id="peso40"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso41" id="peso41"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso42" id="peso42"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso43" id="peso43"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso44" id="peso44"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso45" id="peso45"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso46" id="peso46"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso47" id="peso47"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso48" id="peso48"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso49" id="peso49"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso50" id="peso50"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso51" id="peso51"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso52" id="peso52"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso53" id="peso53"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso54" id="peso54"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso55" id="peso55"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso56" id="peso56"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso57" id="peso57"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso58" id="peso58"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso59" id="peso59"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso60" id="peso60"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso61" id="peso61"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso62" id="peso62"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso63" id="peso63"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso64" id="peso64"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso65" id="peso65"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso66" id="peso66"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso67" id="peso67"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso68" id="peso68"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso69" id="peso69"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso70" id="peso70"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso71" id="peso71"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso72" id="peso72"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso73" id="peso73"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso74" id="peso74"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso75" id="peso75"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso76" id="peso76"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso77" id="peso77"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso78" id="peso78"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso79" id="peso79"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso80" id="peso80"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso81" id="peso81"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso82" id="peso82"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso83" id="peso83"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso84" id="peso84"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso85" id="peso85"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso86" id="peso86"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso87" id="peso87"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso88" id="peso88"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso89" id="peso89"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso90" id="peso90"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso91" id="peso91"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso92" id="peso92"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso93" id="peso93"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso94" id="peso94"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso95" id="peso95"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso96" id="peso96"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso97" id="peso97"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso98" id="peso98"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso99" id="peso99"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso100" id="peso100"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso101" id="peso101"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso102" id="peso102"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso103" id="peso103"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso104" id="peso104"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso105" id="peso105"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso106" id="peso106"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso107" id="peso107"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso108" id="peso108"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso109" id="peso109"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso110" id="peso110"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso111" id="peso111"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso112" id="peso112"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso113" id="peso113"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso114" id="peso114"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso115" id="peso115"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso116" id="peso116"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso117" id="peso117"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso118" id="peso118"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso119" id="peso119"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso120" id="peso120"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso121" id="peso121"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso122" id="peso122"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso123" id="peso123"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso124" id="peso124"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso125" id="peso125"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso126" id="peso126"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso127" id="peso127"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso128" id="peso128"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso129" id="peso129"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso130" id="peso130"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso131" id="peso131"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso132" id="peso132"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso133" id="peso133"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso134" id="peso134"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso135" id="peso135"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso136" id="peso136"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso137" id="peso137"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso138" id="peso138"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso139" id="peso139"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso140" id="peso140"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso141" id="peso141"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso142" id="peso142"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso143" id="peso143"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso144" id="peso144"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso145" id="peso145"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso146" id="peso146"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso147" id="peso147"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso148" id="peso148"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso149" id="peso149"></div>
	<div class="col-xs-3"><input type="number" style="padding-left:15px" min="1" max="600"  maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" align="center" class="monto" onchange="sumar();"  name="peso150" id="peso150"></div>
</div>
<hr>
<h1>Aretes:</h1>
<label class="lead">Cantidad: <input type="number" id="cantidada" name="cantidada" min="0"></label>
<label class="lead">Precio c/u: <input type="number" id="precioa" name="precioa" min="0" step="any"></label>

<hr>
<h1>Factor:</h1>
<label class="lead">Porcentaje: <input type="number" id="merma" name="merma" min="0" step="any" placeholder="Ej. 1.02"></label>

<hr>
<button type="submit" class="btn btn-primary pull-right" > Guardar </button>
</form>
<button class='btn btn-danger pull-right' onclick='abrir();' class='close' data-dismiss='modal'>Cancelar</button>
<hr>

<label class="lead">Animales</label>
<p class="lead" id="spTotal1"></p>
<label class="lead">Total de Kilos</label>
<p id="spTotal" class="lead"></p>

<script type="text/javascript">
	function sumar() {

		var total = 0;
		var count = 0;
		var p1 = document.getElementById("peso1").value;
		$(".monto").each(function() {

			if (isNaN(parseFloat($(this).val()))) {

				total += 0;

			} else {
					if(parseFloat($(this).val())>600){
						alert("Numero mayor al limite");

					}else{
				total += parseFloat($(this).val());
				count = count+1;
}

			}

		});

  //alert(total);
  document.getElementById('spTotal').innerHTML = total;
  document.getElementById('spTotal1').innerHTML = count;

}
  window.addEventListener("keypress", function(event){
    if (event.keyCode == 13){
        event.preventDefault();
    }
}, false);


</script>


    <script language=javascript>
  // definimos la anchura y altura de la ventana
  var altura=380;
  var anchura=730;

// calculamos la posicion x e y para centrar la ventana
var y=parseInt((window.screen.height/2)-(altura/2));
var x=parseInt((window.screen.width/2)-(anchura/2));
function abrir(){
  window.open('http://3taurus.com.mx/crear-compra',target='_self','width='+anchura+',height='+altura+',top='+y+',left='+x+',toolbar=no,location=no,status=no,menubar=no,scrollbars=no,directories=no,resizable=no');
}
</script>
</div>