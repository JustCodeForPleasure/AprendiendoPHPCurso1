<?php session_start(); 
	
	if($_SESSION){
		$nombre = $_SESSION['nombre'];
		echo "<h1>Hola, $nombre</h1>";
	}else{
		echo "No has iniciado sesion";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina 2</title>
</head>
<body>
	<a href="cerrar.php">Cerrar secsón</a>
</body>
</html>