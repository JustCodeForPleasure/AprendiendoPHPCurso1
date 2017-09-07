<?php 
	$edad = 18;
	$nombre = 'Joan';

	if($edad >= 18 && $nombre == 'Joan'){
		echo '<h1> Bienvenido </h1>';
	}

	if($edad < 18 || $nombre != 'Joan'){
		echo '<h1> Eres menor de edad y/o no te llamas Joan </h1';
	}
 ?>