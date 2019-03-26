<?php

class ControladorChofer{

	/*=============================================
	CREAR CLIENTES
	=============================================*/

	static public function ctrCrearChofer(){

		if(isset($_POST["nuevoChofer"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoChofer"]) &&
			   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"])){

			   	$tabla = "chofer";

			   	$datos = array("nombre"=>$_POST["nuevoChofer"],
					           "telefono"=>$_POST["nuevoTelefono"]);

			   	$respuesta = ModeloChofer::mdlIngresarChofer($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El chofer ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "chofer";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El chofer no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "chofer";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function ctrMostrarChofer($item, $valor){

		$tabla = "chofer";

		$respuesta = ModeloChofer::mdlMostrarChofer($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR Chofer
	=============================================*/

	static public function ctrEditarChofer(){

		if(isset($_POST["editarChofer"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarChofer"])){

			   	$tabla = "chofer";

			   	$datos = array("id"=>$_POST["idChofer"],
			   				   "nombre"=>$_POST["editarChofer"],
					           "telefono"=>$_POST["editarTelefono"]);

			   	$respuesta = ModeloChofer::mdlEditarChofer($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El chofer ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "chofer";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El chofer no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "chofer";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function ctrEliminarChofer(){

		if(isset($_GET["idChofer"])){

			$tabla ="chofer";
			$datos = $_GET["idChofer"];

			$respuesta = ModeloChofer::mdlEliminarChofer($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El chofer ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then((result) => {
								if (result.value) {

								window.location = "chofer";

								}
							})

				</script>';

			}		

		}

	}

}

