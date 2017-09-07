<?php 
$meses = array(
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre', 
	'Noviembre', 
	'Diciembre'
	);

$numeros = array(1, 22, 24, 9, 17, 27);

//Ordenar de manera alfavetica
sort($meses);

//Ordenar de manera alfavetica inversa
rsort($meses);

//Ordenar numeros
sort($numeros)
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Meses del año</title>
 </head>
 <body>
 	<h1>Meses del año</h1>
 	<ul>
 		<?php 
 		foreach ($numeros as $numero) {
 			echo "<li>" . $numero . "</li>";
 		}
 		 ?>
 	</ul>
 </body>
 </html>