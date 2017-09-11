<?php 
	//Estas funciones fueron removidas de PHP7 es por ello que no funcionan, USAR PDO
	$conexion = mysql_connect('localhost', 'root', '') or die ('No hay conexión a la base de datos!');

	mysql_select_db('prueba_datos', $conexion);

	$resultados = mysql_query('SELECT * FROM usuarios');

	$fila = mysql_fetch_object($resultados);

	echo $fila;
 ?>