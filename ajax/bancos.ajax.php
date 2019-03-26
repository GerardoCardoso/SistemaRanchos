<?php

require_once "../controladores/bancos.controlador.php";
require_once "../modelos/bancos.modelo.php";

class AjaxBancos{

	/*=============================================
	EDITAR CATEGORÍA
	=============================================*/	

	public $idBancos;

	public function ajaxEditarBancos(){

		$item = "id";
		$valor = $this->idBancos;

		$respuesta = ControladorBancos::ctrMostrarBancos($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["idBancos"])){

	$bancos = new AjaxBancos();
	$bancos -> idBancos = $_POST["idBancos"];
	$bancos -> ajaxEditarBancos();
}
