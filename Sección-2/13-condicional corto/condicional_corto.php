<?php 
$edad = 20;
$edad = (isset($edad)) ? $edad : "El usuario no estableció su edad" ;

echo 'Edad: ' . $edad;
 ?>