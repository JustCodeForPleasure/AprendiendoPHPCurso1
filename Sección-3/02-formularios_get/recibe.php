<?php 

	/*print_r($_POST);
	if ($_POST){
		$nombre = $_POST['nombre'];
		$sexo = $_POST['sexo'];
		$year = $_POST['year'];
		$terminos = $_POST['terminos'];

		echo 'Hola, ' . $nombre . ' eres ' . $sexo;
	}else{
		header('Location: http://localhost/AprendiendoPHP%20Curso%201/Secci%C3%B3n-3/01-formularios/');
	}
	*/

	if(!$_GET){
		header('Location: http://localhost/AprendiendoPHP%20Curso%201/Secci%C3%B3n-3/01-formularios/');
	}


	//echo print_r($_GET);
	$sexo = $_GET['sexo'];
	$year = $_GET['year'];
	$terminos = $_GET['terminos'];

	if($nombre){
	    $nombre = $_GET['nombre'];
	}else{
		echo 'El usuario no establecio su nombre <br>';
	}

	echo $nombre . '<br />';
	echo $sexo . '<br />';
	echo $year . '<br />';
	echo $terminos . '<br />';
	//echo htmlspecialchars($nombre);
 ?>