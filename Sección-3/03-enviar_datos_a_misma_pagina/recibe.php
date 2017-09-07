<?php 

	//print_r($_POST);
	if ($_POST){
		$nombre = $_POST['nombre'];
		$sexo = $_POST['sexo'];
		$year = $_POST['year'];
		$terminos = $_POST['terminos'];

		echo 'Hola, ' . $nombre . ' eres ' . $sexo;
	}else{
		header('Location: http://localhost/AprendiendoPHP%20Curso%201/Secci%C3%B3n-3/01-formularios/');
	}
	
 ?>