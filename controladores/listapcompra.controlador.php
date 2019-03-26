<?php

class ControladorListapcompra{

	/*=============================================
	CREAR CLIENTES
	=============================================*/


	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function ctrMostrarListapcompra($item, $valor){

		$tabla = "listapcom";

		$respuesta = ModeloListapcompra::mdlMostrarListapcompra($tabla, $item, $valor);

		return $respuesta;

	}



	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function ctrEliminarListapcompra(){

		if(isset($_GET["idListapcom"])){

			$tabla ="listapcom";
			$datos = $_GET["idListapcom"];

			$respuesta = ModeloListapcompra::mdlEliminarListapcompra($tabla, $datos);

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

								window.location = "listacompra";

								}
							})

				</script>';

			}		

		}

	}

}

