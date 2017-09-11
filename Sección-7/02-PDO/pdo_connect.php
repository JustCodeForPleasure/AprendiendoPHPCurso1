<?php 
	$id = $_GET['id'];

	try {
		$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
		//echo "Conexion OK<br />";

		//$resultados = $conexion->query('SELECT * FROM usuarios');

		//foreach ($resultados as $fila) {
		//	//print_r($fila);
		//	echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br />';
		//}

		// Prepared Statements
		$statement = $conexion->prepare('SELECT * FROM usuarios');
		$statement->execute();
 
		$resultados = $statement->fetchAll();
		foreach ($resultados as $usuario) {
			echo $usuario['nombre'] . '<br>';
		}

	} catch (PDOException $e) {
		//Mostrar Error
		echo 'Error' . $e->getMessage();
	}

 ?>