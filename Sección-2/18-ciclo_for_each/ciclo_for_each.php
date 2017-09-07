<?php 
	$meses = array(
		'Enero','Febrero','Marzo','Abril',
		'Mayo','Junio','Julio','Agosto',
		'Septiembre','Octubre','Noviembre','Diciembre'
		);

	$alejandro = array('telefono' => 3111022731, 'edad' => 23, 'pais' => 'mexico');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Documeto</title>
 </head>
 <body>
 	<h1>Meses</h1>
 	<ul>
 		<?php 
 			foreach ($meses as $mes) {
 				echo "<li>" . $mes . "</li>";
 			}
 		 ?>
 	</ul>
 	<ol>
 		<?php 
 			foreach ($alejandro as $dato => $valor) {
 				echo '<li>' . $dato . " " . $valor . '</li>';
 			}
 		 ?>
 	</ol>
 </body>
 </html>