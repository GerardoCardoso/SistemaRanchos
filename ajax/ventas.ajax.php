<?php

require_once "../controladores/ventas.controlador.php";
require_once "../modelos/ventas.modelo.php";

class AjaxVentas{

	/*=============================================
	EDITAR CATEGORÍA
	=============================================*/	

	public $fechaInicial;
	public $fechaFinal;

	public function ajaxRangoFechas(){

		if($this->fechaInicial == "" && $this->fechaFinal == ""){

			$fechaInicial = null;
			$fechaFinal = null;

		}else{

			$fechaInicial = $this->fechaInicial;
			$fechaFinal = $this->fechaFinal;

		}		

		$respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

		echo json_encode($respuesta);

	}
}

/*=============================================
TRAER RANGO DE FECHAS
=============================================*/	
if(isset($_POST["fechaInicial"])){

	$rango = new AjaxVentas();
	$rango -> fechaInicial = $_POST["fechaInicial"];
	$rango -> fechaFinal = $_POST["fechaFinal"];
	$rango -> ajaxRangoFechas();
}
