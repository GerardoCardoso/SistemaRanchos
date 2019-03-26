<?php

class ControladorListapventa{

	static public function ctrMostrarListapventa($item, $valor){

		$tabla = "listapventa";

		$respuesta = ModeloListapventa::mdlMostrarListapventa($tabla, $item, $valor);

		return $respuesta;

	}



	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function ctrEliminarListapventa(){

		if(isset($_GET["idListapventa"])){

			$tabla ="listapventa";
			$datos = $_GET["idListapventa"];

			$respuesta = ModeloListapventa::mdlEliminarListapventa($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El cliente ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then((result) => {
								if (result.value) {

								window.location = "listaventa";

								}
							})

				</script>';

			}		

		}

	}

}

