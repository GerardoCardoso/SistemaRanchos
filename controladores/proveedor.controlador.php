<?php

class ControladorProveedor{

	/*=============================================
	CREAR CLIENTES
	=============================================*/

	static public function ctrCrearProveedor(){

		if(isset($_POST["nuevoProveedor"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoProveedor"]) &&
				preg_match('/^[0-9]+$/', $_POST["nuevoDocumentoId"])){

			   	$tabla = "proveedor";

			   	$datos = array("nombre"=>$_POST["nuevoProveedor"],
					           "documento"=>$_POST["nuevoDocumentoId"],
					           "rfc"=>$_POST["nuevoRFC"],
					       	   "banco"=>$_POST["nuevoBanco"],
					       	   "cuenta_bancaria"=>$_POST["nuevoCuenta"],
			   				   "cta_clave"=>$_POST["nuevaClave"]);

			   	$respuesta = ModeloProveedor::mdlIngresarProveedor($tabla, $datos);

			   	if($respuesta == "ok"){
echo'<script>

					swal({
						  type: "success",
						  title: "El proveedor ha sido creado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "proveedor";

									}
								})

					</script>';


					}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El proveedor no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "proveedor";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function ctrMostrarProveedor($item, $valor){

		$tabla = "proveedor";

		$respuesta = ModeloProveedor::mdlMostrarProveedor($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR CLIENTE
	=============================================*/

	static public function ctrEditarProveedor(){

		if(isset($_POST["editarProveedor"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarProveedor"])){

			   	$tabla = "proveedor";

			   	$datos = array("id"=>$_POST["idProveedor"],
			   				   "nombre"=>$_POST["editarProveedor"],
					           "rfc"=>$_POST["editarRfc"],
					           "banco"=>$_POST["editarBanco"],
					           "cuenta_bancaria"=>$_POST["editarCuentaBancaria"],
			   				   "cta_clave"=>$_POST["editarCuentaClave"]);

			   	$respuesta = ModeloProveedor::mdlEditarProveedor($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El proveedor ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "proveedor";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El proveedor no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "proveedor";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function ctrEliminarProveedor(){

		if(isset($_GET["idProveedor"])){

			$tabla ="proveedor";
			$datos = $_GET["idProveedor"];

			$respuesta = ModeloProveedor::mdlEliminarProveedor($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El proveedor ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then((result) => {
								if (result.value) {

								window.location = "proveedor";

								}
							})

				</script>';

			}		

		}

	}

}

