<?php

require_once "../controladores/chofer.controlador.php";
require_once "../modelos/chofer.modelo.php";

class AjaxChofer{

	/*=============================================
	EDITAR CLIENTE
	=============================================*/	

	public $idChofer;

	public function ajaxEditarChofer(){

		$item = "id";
		$valor = $this->idChofer;

		$respuesta = ControladorChofer::ctrMostrarChofer($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR CLIENTE
=============================================*/	

if(isset($_POST["idChofer"])){

	$chofer = new AjaxChofer();
	$chofer -> idChofer = $_POST["idChofer"];
	$chofer -> ajaxEditarChofer();

}