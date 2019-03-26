<?php

class ControladorBancos{

	/*=============================================
	CREAR CATEGORIAS
	=============================================*/

	static public function ctrCrearBancos(){

		if(isset($_POST["nuevoBanco"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoAbre"])){

				$tabla = "bancos";

				$datos = array("nombre"=>$_POST["nuevoBanco"],
					"abreviacion"=>$_POST["nuevoAbre"],
					"saldo"=>$_POST["nuevoSaldo"]);


				$respuesta = ModeloBancos::mdlIngresarBancos($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						type: "success",
						title: "El Banco ha sido guardada correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result) => {
							if (result.value) {

								window.location = "bancos";

							}
							})

							</script>';

						}


					}else{

						echo'<script>

						swal({
							type: "error",
							title: "¡El banco no puede ir vacía o llevar caracteres especiales!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result) => {
								if (result.value) {

									window.location = "bancos";

								}
								})

								</script>';

							}

						}

					}

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function ctrMostrarBancos($item, $valor){

		$tabla = "bancos";

		$respuesta = ModeloBancos::mdlMostrarBancos($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR CATEGORIA
	=============================================*/

	static public function ctrEditarBancos(){

		if(isset($_POST["editarBancos"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarAbrev"])){


				$tabla = "bancos";

				$datos = array("id"=>$_POST["idBancos"],
					"nombre"=>$_POST["editarBancos"],
					"abreviacion"=>$_POST["editarAbrev"]);

				$respuesta = ModeloBancos::mdlEditarBancos($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						type: "success",
						title: "El Banco ha sido cambiada correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result) => {
							if (result.value) {

								window.location = "bancos";

							}
							})

							</script>';

						}


					}else{

						echo'<script>

						swal({
							type: "error",
							title: "¡El Banco no puede ir vacía o llevar caracteres especiales!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result) => {
								if (result.value) {

									window.location = "bancos";

								}
								})

								</script>';

							}

						}

					}

	/*=============================================
	BORRAR CATEGORIA
	=============================================*/

	static public function ctrBorrarBancos(){

		if(isset($_GET["idBancos"])){

			$tabla ="bancos";
			$datos = $_GET["idBancos"];

			$respuesta = ModeloBancos::mdlBorrarBancos($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					type: "success",
					title: "El banco ha sido borrada correctamente",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false
					}).then((result) => {
						if (result.value) {

							window.location = "bancos";

						}
						})

						</script>';
					}
				}

			}
		}
