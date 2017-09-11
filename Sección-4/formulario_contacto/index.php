<?php 


$errores = '';
$enviado = '';

if(isset($_POST['submit'])){
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if(!empty($nombre)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	}else{
		$errores .= 'Por favor ingresa un nombre. <br />';
	}

	if(!empty($correo)){
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido. <br />';
		}
	}else{
		$errores .= 'Por favor ingresa un correo. <br />';
	}

	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripcslashes($mensaje);
	}else{
		$errores .= 'Por favor ingresa el mensaje. <br />';
	}

	if(!$errores){
		$enviar_a = 'davidgg.ccred@gmail.com';
		$asunto = 'Correo enviado desde formulario_contacto Sección-4 AprendiendoPHP Curso 1';
		$mensaje_preparado = "De: $nombre \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Mensaje: " . $mensaje;

		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		//dirección del remitente 
		$headers .= "From: App Contacto < joan.gc.mail@gmail.com >\r\n";

		mail($enviar_a, $asunto, $mensaje_preparado, $headers);
		$enviado = true;
	}
	//Falta meter el header;
}
	require "vista.php";
 ?>