<?php 

$amigo = array('telefono' => 23123124, 'edad' => 20, 'pais' => 'mexico');

extract($amigo);

echo $telefono . '<br />';

$semana = array(
	'Lunes', 'Martes', 'Miercoles',
	'Jueves', 'Viernes', 'Sabado', 'Domingo'
	);


/*$ultimodia = array_pop($semana);

foreach ($semana as $dia) {
	echo $dia . '<br />';
}
echo $ultimodia;
*/

//echo join(' - ', $semana);

//echo count($semana);

/*sort($semana);
echo join(', ',$semana);*/

/*rsort($semana);
echo join(', ',$semana);*/

$semana_reverse = array_reverse($semana);
echo join(', ',$semana_reverse);
 ?>