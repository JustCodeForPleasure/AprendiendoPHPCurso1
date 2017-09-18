<?php 
try {
		$conexion = new PDO('mysql:host=localhost;dbname=rest1', 'root', '');
		echo "Conexion Exitosa <br />";
	} catch (PDOException $e) {
		echo "ERROR" . $e->getMessage();
		die();
	}

	$sql= "SELECT nombre, apellido FROM usuarios WHERE id_usuario = 6"; 
	$stmt = $conexion->query($sql); 
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
</head>
<body>
	<h1>No manches we esto funciona?</h1>
	<ul>
		<li><?php echo $row['nombre']; ?></li>
		<li><?php echo $row['apellido']; ?></li>
	</ul>
</body>
</html>