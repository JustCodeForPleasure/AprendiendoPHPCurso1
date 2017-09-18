<?php 
	
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=rest1', 'root', '');
		echo "Conexion Exitosa <br />";
	} catch (PDOException $e) {
		echo "ERROR" . $e->getMessage();
		die();
	}

	$verbo = $_SERVER['REQUEST_METHOD'];
	$nombre = '';
	$apellido = '';

	if($verbo == 'GET'){
		//Hacemos algo con GET
		if(isset($_GET['filename'])){
			$file_content = file_get_contents($_GET['filename']);
			echo $file_content;
		}else{
			die("ERROR: LOS PARAMETROS REQUERIDOS NO SE OTORGARON!");
		}
	}elseif($verbo == 'POST'){
		//Hacemos algo con POST
		if(isset($_POST['nombre']) and isset($_POST['apellido'])){
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];

			$sentencia = $conexion->prepare("INSERT INTO usuarios (nombre, apellido) VALUES(:nombre, :apellido)");
			$sentencia->bindParam(':nombre', $nombre);
			$sentencia->bindParam(':apellido', $apellido);

			if(!$sentencia){
				echo "Error al crear el registro";
			}else{
			$sentencia->execute();
			echo "Registro creado correctamente";
			}
		}else{
			die("ERROR: LOS PARAMETROS SON REQUERIDOS");
		}
	}elseif($verbo == 'DELETE'){
		parse_str(file_get_contents('php://input'), $_DELETE);

		if(isset($_DELETE['file'])){
			unlink($_DELETE['file']);
		}else{
			die("ERROR: LOS PARAMETROS SON REQUERIDOS");
		}
	}

	require 'index.php';
 ?>