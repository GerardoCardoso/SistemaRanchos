<?php

class ControladorClientes{

	/*=============================================
	CREAR CLIENTES
	=============================================*/

	static public function ctrCrearCliente(){

		if(isset($_POST["nuevoCliente"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCliente"]) &&
				preg_match('/^[0-9]+$/', $_POST["nuevoDocumentoId"]) &&
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) ){

				$tabla = "clientes";

			$datos = array("nombre"=>$_POST["nuevoCliente"],
				"documento"=>$_POST["nuevoDocumentoId"],
				"email"=>$_POST["nuevoEmail"],
				"banco"=>$_POST["nuevoBanco"],
				"num_cuenta"=>$_POST["nuevoNumeroCuenta"],
				"cta_clabe"=>$_POST["nuevaCuentaClabe"]);

			$respuesta = ModeloClientes::mdlIngresarCliente($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					type: "success",
					title: "El cliente ha sido guardado correctamente",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false
					}).then((result) => {
						if (result.value) {

							window.location = "clientes";

						}
						})

						</script>';

					}

				}else{

					echo'<script>

					swal({
						type: "error",
						title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result) => {
							if (result.value) {

								window.location = "clientes";

							}
							})

							</script>';



						}

					}

				}

	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function ctrMostrarClientes($item, $valor){

		$tabla = "clientes";

		$respuesta = ModeloClientes::mdlMostrarClientes($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR CLIENTE
	=============================================*/

	static public function ctrEditarCliente(){

		if(isset($_POST["editarCliente"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCliente"]) &&
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) ){

				$tabla = "clientes";

			$datos = array("id"=>$_POST["idCliente"],
				"nombre"=>$_POST["editarCliente"],
				"email"=>$_POST["editarEmail"],
				"banco"=>$_POST["editarBanco"],
				"num_cuenta"=>$_POST["editarNumeroCuenta"],
			    "cta_clabe"=>$_POST["editarCuentaClabe"],);

			$respuesta = ModeloClientes::mdlEditarCliente($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					type: "success",
					title: "El cliente ha sido cambiado correctamente",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false
					}).then((result) => {
						if (result.value) {

							window.location = "clientes";

						}
						})

						</script>';

					}

				}else{

					echo'<script>

					swal({
						type: "error",
						title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result) => {
							if (result.value) {

								window.location = "clientes";

							}
							})

							</script>';



						}

					}

				}

	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function ctrEliminarCliente(){

		if(isset($_GET["idCliente"])){

			$tabla ="clientes";
			$datos = $_GET["idCliente"];

			$respuesta = ModeloClientes::mdlEliminarCliente($tabla, $datos);

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

							window.location = "clientes";

						}
						})

						</script>';

					}		

				}

			}

		}

