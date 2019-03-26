<?php

require_once "../controladores/compras.controlador.php";
require_once "../modelos/compras.modelo.php";

class AjaxCompras{

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

		$respuesta = ControladorCompras::ctrRangoFechasCompras($fechaInicial, $fechaFinal);

		echo json_encode($respuesta);

	}
}

/*=============================================
TRAER RANGO DE FECHAS
=============================================*/	
if(isset($_POST["fechaInicial"])){

	$rango = new AjaxCompras();
	$rango -> fechaInicial = $_POST["fechaInicial"];
	$rango -> fechaFinal = $_POST["fechaFinal"];
	$rango -> ajaxRangoFechas();
}
